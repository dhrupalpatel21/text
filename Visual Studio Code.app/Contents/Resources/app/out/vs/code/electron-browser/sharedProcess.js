/*---------------------------------------------------------------------------------------------
 *  Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/
"use strict";function assign(e,n){return Object.keys(n).reduce(function(e,r){return e[r]=n[r],e},e)}function parseURLQueryArgs(){return(window.location.search||"").split(/[?&]/).filter(function(e){return!!e}).map(function(e){return e.split("=")}).filter(function(e){return 2===e.length}).reduce(function(e,n){return e[n[0]]=decodeURIComponent(n[1]),e},{})}function createScript(e,n){const r=document.createElement("script");r.src=e,r.addEventListener("load",n);const t=document.getElementsByTagName("head")[0];t.insertBefore(r,t.lastChild)}function uriFromPath(e){var n=path.resolve(e).replace(/\\/g,"/");return n.length>0&&"/"!==n.charAt(0)&&(n="/"+n),encodeURI("file://"+n)}function main(){const e=parseURLQueryArgs(),n=JSON.parse(e.config||"{}")||{};assign(process.env,n.userEnv);var r={availableLanguages:{}};const t=process.env.VSCODE_NLS_CONFIG;if(t){process.env.VSCODE_NLS_CONFIG=t;try{r=JSON.parse(t)}catch(e){}}var o=r.availableLanguages["*"]||"en";"zh-tw"===o?o="zh-Hant":"zh-cn"===o&&(o="zh-Hans"),window.document.documentElement.setAttribute("lang",o);const c=uriFromPath(n.appRoot)+"/out";createScript(c+"/vs/loader.js",function(){define("fs",["original-fs"],function(e){return e}),window.MonacoEnvironment={},require.config({baseUrl:c,"vs/nls":r,nodeCachedDataDir:n.nodeCachedDataDir,nodeModules:[]}),r.pseudo&&require(["vs/nls"],function(e){e.setPseudoTranslation(r.pseudo)}),require(["vs/code/electron-browser/sharedProcessMain"],function(){})})}const path=require("path"),electron=require("electron"),remote=electron.remote,ipc=electron.ipcRenderer;main();
//# sourceMappingURL=https://ticino.blob.core.windows.net/sourcemaps/379d2efb5539b09112c793d3d9a413017d736f89/core/vs/code/electron-browser/sharedProcess.js.map
