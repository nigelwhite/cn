in VS Code

- no need to cd into the theme folder
- ddev start
- ddev launch
- see that .vscode/settings.json has "proxyUri": the same as the one ddev just gave you. eg http://127.0.0.1:49154. This is not the one ddev opened at launch. Terminal gave that as an alternative. Or do ddev describe. This url can change between sessions
- F1
- Live Server: open with live server
- click Watch SASS item in bottom right tool tray

Setup to get live server and watch sass working - https://nwhite.uk/oyster/web/node/1453

No node modules required as we're using VS Code extensions
