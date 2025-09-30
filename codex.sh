# shell script that clones the repository https://github.com/stone1971grey/imageengeneeringv1-engl-v7-frank repository and runs codex cli and deletes the repositories after running codex cli
#!/bin/bash

PROMPT="build a typo3 extension within this folder. Do not create an extension root folder. Use the current folder as root."

# Run codex cli with the prompt
codex exec --full-auto "$PROMPT"

echo "Done."
exit 0