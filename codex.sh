# shell script that clones the repository https://github.com/stone1971grey/imageengeneeringv1-engl-v7-frank repository and runs codex cli with the prompt "build a typo3 extension" and deletes the repository after running codex cli
#!/bin/bash
REPO_URL="https://github.com/stone1971grey/imageengeneeringv1-engl-v7-frank"
REPO_DIR="src"
PROMPT="build a typo3 extension within this folder based on the files in the folder src and do not use any other files outside this folder. Do not create a extension root folder. Use the current folder as root."
# Clone the repository
git clone $REPO_URL $REPO_DIR
# Check if the repository was cloned successfully
if [ $? -ne 0 ]; then
    echo "Failed to clone repository."
    exit 1
fi
# Run codex cli with the prompt
codex exec --full-auto "$PROMPT"
# Check if codex cli ran successfully
if [ $? -ne 0 ]; then
    echo "Failed to run codex."
    # Clean up by deleting the cloned repository
    rm -rf $REPO_DIR
    exit 1
fi
# Clean up by deleting the cloned repository
rm -rf $REPO_DIR
echo "Done."
exit 0