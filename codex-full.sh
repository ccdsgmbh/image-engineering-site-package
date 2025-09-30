# shell script that clones the repository https://github.com/stone1971grey/imageengeneeringv1-engl-v7-frank repository and runs codex cli and deletes the repositories after running codex cli
#!/bin/bash
REPO_URL="https://github.com/stone1971grey/imageengeneeringv1-engl-v7-frank"
REPO_DIR="src"
PROMPT="build a typo3 extension within this folder. Do not create an extension root folder. Use the current folder as root."
# Clone the repository
git clone $REPO_URL $REPO_DIR
# Check if the repository was cloned successfully
if [ $? -ne 0 ]; then
    echo "Failed to clone repository."
    exit 1
fi
# install the lovaable project in src
cd $REPO_DIR
if [ -f "package.json" ]; then
    echo "Installing npm packages..."
    npm i
    echo "Starting development server..."
    nohup npm run dev -- --logLevel silent > .vite.log 2>&1 &
    echo $! > .vite.pid
elif [ -f "composer.json" ]; then
    echo "Installing composer packages..."
    composer install
fi
cd ..
# Clone TYPO3 13 source
TYPO3_REPO_URL="https://github.com/typo3/typo3"
TYPO3_DIR="typo3_src"
git clone $TYPO3_REPO_URL $TYPO3_DIR
if [ $? -ne 0 ]; then
    echo "Failed to clone TYPO3 repository."
    rm -rf $REPO_DIR
    exit 1
fi
# Clone TYPO3 Documentation
TYPO3_DOCS_REPO_URL="https://github.com/TYPO3-Documentation/TYPO3CMS-Reference-CoreApi.git"
TYPO3_DOCS_DIR="typo3_docs"
git clone $TYPO3_DOCS_REPO_URL $TYPO3_DOCS_DIR
if [ $? -ne 0 ]; then
    echo "Failed to clone TYPO3 Documentation repository."
    rm -rf $REPO_DIR
    rm -rf $TYPO3_DIR
    exit 1
fi
# Run codex cli with the prompt
codex exec --full-auto "$PROMPT"
# Check if codex cli ran successfully
if [ $? -ne 0 ]; then
    echo "Failed to run codex."
    # Clean up by deleting the cloned repository
    rm -rf $REPO_DIR
    rm -rf $TYPO3_DIR
    rm -rf $TYPO3_DOCS_DIR
    exit 1
fi
# Stop the development server if it was started
if [ -f "$REPO_DIR/.vite.pid" ]; then
    VITE_PID=$(cat $REPO_DIR/.vite.pid)
    if ps -p $VITE_PID > /dev/null; then
        echo "Stopping development server..."
        kill $VITE_PID
    fi
    rm $REPO_DIR/.vite.pid
    rm $REPO_DIR/.vite.log
fi
# Clean up by deleting the cloned repository
rm -rf $REPO_DIR
rm -rf $TYPO3_DIR
rm -rf $TYPO3_DOCS_DIR
echo "Done."
exit 0