!function(){"use strict";var e,n={726:function(){var e=window.wp.blocks,n=window.wp.element,o=window.wp.i18n,t=window.wp.blockEditor,r=JSON.parse('{"apiVersion":2,"name":"theme/second-block","version":"0.1.0","title":"Second Block","category":"design","icon":"smiley","description":"The second block!","supports":{"html":false},"textdomain":"theme-gutenberg-blocks","editorScript":"file:../../build/second-block.js","editorStyle":"file:../../build/second-block.css","style":"file:../../build/style-second-block.css"}');const{name:i,...c}=r;(0,e.registerBlockType)(i,{...c,edit:function(){return(0,n.createElement)("p",(0,t.useBlockProps)(),(0,o.__)("First Block – hello from the editor!","theme-gutenberg-blocks"))},save:function(){return(0,n.createElement)("p",t.useBlockProps.save(),(0,o.__)("First Block – hello from the saved content!","theme-gutenberg-blocks"))}})}},o={};function t(e){var r=o[e];if(void 0!==r)return r.exports;var i=o[e]={exports:{}};return n[e](i,i.exports,t),i.exports}t.m=n,e=[],t.O=function(n,o,r,i){if(!o){var c=1/0;for(f=0;f<e.length;f++){o=e[f][0],r=e[f][1],i=e[f][2];for(var s=!0,l=0;l<o.length;l++)(!1&i||c>=i)&&Object.keys(t.O).every((function(e){return t.O[e](o[l])}))?o.splice(l--,1):(s=!1,i<c&&(c=i));if(s){e.splice(f--,1);var u=r();void 0!==u&&(n=u)}}return n}i=i||0;for(var f=e.length;f>0&&e[f-1][2]>i;f--)e[f]=e[f-1];e[f]=[o,r,i]},t.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},function(){var e={432:0,179:0};t.O.j=function(n){return 0===e[n]};var n=function(n,o){var r,i,c=o[0],s=o[1],l=o[2],u=0;if(c.some((function(n){return 0!==e[n]}))){for(r in s)t.o(s,r)&&(t.m[r]=s[r]);if(l)var f=l(t)}for(n&&n(o);u<c.length;u++)i=c[u],t.o(e,i)&&e[i]&&e[i][0](),e[i]=0;return t.O(f)},o=self.webpackChunktheme_gutenberg_blocks=self.webpackChunktheme_gutenberg_blocks||[];o.forEach(n.bind(null,0)),o.push=n.bind(null,o.push.bind(o))}();var r=t.O(void 0,[179],(function(){return t(726)}));r=t.O(r)}();