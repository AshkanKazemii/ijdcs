(function(){"use strict";function e(){}function s(e,t){for(var n=e.length;n--;)if(e[n].listener===t)return n;return-1}function t(e){return function(){return this[e].apply(this,arguments)}}var n=e.prototype,i=this,r=i.EventEmitter;n.getListeners=function(e){var t,n,i=this._getEvents();if("object"==typeof e)for(n in t={},i)i.hasOwnProperty(n)&&e.test(n)&&(t[n]=i[n]);else t=i[e]||(i[e]=[]);return t},n.flattenListeners=function(e){for(var t=[],n=0;n<e.length;n+=1)t.push(e[n].listener);return t},n.getListenersAsObject=function(e){var t,n=this.getListeners(e);return n instanceof Array&&((t={})[e]=n),t||n},n.addListener=function(e,t){var n,i=this.getListenersAsObject(e),r="object"==typeof t;for(n in i)i.hasOwnProperty(n)&&-1===s(i[n],t)&&i[n].push(r?t:{listener:t,once:!1});return this},n.on=t("addListener"),n.addOnceListener=function(e,t){return this.addListener(e,{listener:t,once:!0})},n.once=t("addOnceListener"),n.defineEvent=function(e){return this.getListeners(e),this},n.defineEvents=function(e){for(var t=0;t<e.length;t+=1)this.defineEvent(e[t]);return this},n.removeListener=function(e,t){var n,i,r=this.getListenersAsObject(e);for(i in r)r.hasOwnProperty(i)&&(n=s(r[i],t),-1!==n&&r[i].splice(n,1));return this},n.off=t("removeListener"),n.addListeners=function(e,t){return this.manipulateListeners(!1,e,t)},n.removeListeners=function(e,t){return this.manipulateListeners(!0,e,t)},n.manipulateListeners=function(e,t,n){var i,r,s=e?this.removeListener:this.addListener,o=e?this.removeListeners:this.addListeners;if("object"!=typeof t||t instanceof RegExp)for(i=n.length;i--;)s.call(this,t,n[i]);else for(i in t)t.hasOwnProperty(i)&&(r=t[i])&&("function"==typeof r?s:o).call(this,i,r);return this},n.removeEvent=function(e){var t,n=typeof e,i=this._getEvents();if("string"==n)delete i[e];else if("object"==n)for(t in i)i.hasOwnProperty(t)&&e.test(t)&&delete i[t];else delete this._events;return this},n.removeAllListeners=t("removeEvent"),n.emitEvent=function(e,t){var n,i,r,s,o=this.getListenersAsObject(e);for(r in o)if(o.hasOwnProperty(r))for(i=o[r].length;i--;)n=o[r][i],!0===n.once&&this.removeListener(e,n.listener),s=n.listener.apply(this,t||[]),s===this._getOnceReturnValue()&&this.removeListener(e,n.listener);return this},n.trigger=t("emitEvent"),n.emit=function(e){var t=Array.prototype.slice.call(arguments,1);return this.emitEvent(e,t)},n.setOnceReturnValue=function(e){return this._onceReturnValue=e,this},n._getOnceReturnValue=function(){return!this.hasOwnProperty("_onceReturnValue")||this._onceReturnValue},n._getEvents=function(){return this._events||(this._events={})},e.noConflict=function(){return i.EventEmitter=r,e},"function"==typeof define&&define.amd?define("eventEmitter/EventEmitter",[],function(){return e}):"object"==typeof module&&module.exports?module.exports=e:this.EventEmitter=e}).call(this),function(n){function i(e){var t=n.event;return t.target=t.target||t.srcElement||e,t}var e=document.documentElement,t=function(){};e.addEventListener?t=function(e,t,n){e.addEventListener(t,n,!1)}:e.attachEvent&&(t=function(t,e,n){t[e+n]=n.handleEvent?function(){var e=i(t);n.handleEvent.call(n,e)}:function(){var e=i(t);n.call(t,e)},t.attachEvent("on"+e,t[e+n])});var r=function(){};e.removeEventListener?r=function(e,t,n){e.removeEventListener(t,n,!1)}:e.detachEvent&&(r=function(t,n,i){t.detachEvent("on"+n,t[n+i]);try{delete t[n+i]}catch(e){t[n+i]=void 0}}),r={bind:t,unbind:r},"function"==typeof define&&define.amd?define("eventie/eventie",r):n.eventie=r}(this),function(n,i){"use strict";"function"==typeof define&&define.amd?define(["eventEmitter/EventEmitter","eventie/eventie"],function(e,t){return i(n,e,t)}):"object"==typeof module&&module.exports?module.exports=i(n,require("wolfy87-eventemitter"),require("eventie")):n.imagesLoaded=i(n,n.EventEmitter,n.eventie)}(window,function(t,e,n){function r(e,t){for(var n in t)e[n]=t[n];return e}function s(e){var t,n=[];if(t=e,"[object Array]"==c.call(t))n=e;else if("number"==typeof e.length)for(var i=0;i<e.length;i++)n.push(e[i]);else n.push(e);return n}function o(e,t,n){if(!(this instanceof o))return new o(e,t,n);"string"==typeof e&&(e=document.querySelectorAll(e)),this.elements=s(e),this.options=r({},this.options),"function"==typeof t?n=t:r(this.options,t),n&&this.on("always",n),this.getImages(),a&&(this.jqDeferred=new a.Deferred);var i=this;setTimeout(function(){i.check()})}function i(e){this.img=e}function h(e,t){this.url=e,this.element=t,this.img=new Image}var a=t.jQuery,u=t.console,c=Object.prototype.toString;(o.prototype=new e).options={},o.prototype.getImages=function(){this.images=[];for(var e=0;e<this.elements.length;e++){var t=this.elements[e];this.addElementImages(t)}},o.prototype.addElementImages=function(e){"IMG"==e.nodeName&&this.addImage(e),!0===this.options.background&&this.addElementBackgroundImages(e);var t=e.nodeType;if(t&&f[t]){for(var n=e.querySelectorAll("img"),i=0;i<n.length;i++){var r=n[i];this.addImage(r)}if("string"==typeof this.options.background)for(var s=e.querySelectorAll(this.options.background),i=0;i<s.length;i++){var o=s[i];this.addElementBackgroundImages(o)}}};var f={1:!0,9:!0,11:!0};o.prototype.addElementBackgroundImages=function(e){for(var t=d(e),n=/url\(['"]*([^'"\)]+)['"]*\)/gi,i=n.exec(t.backgroundImage);null!==i;){var r=i&&i[1];r&&this.addBackground(r,e),i=n.exec(t.backgroundImage)}};var d=t.getComputedStyle||function(e){return e.currentStyle};return o.prototype.addImage=function(e){e=new i(e);this.images.push(e)},o.prototype.addBackground=function(e,t){t=new h(e,t);this.images.push(t)},o.prototype.check=function(){function e(e,t,n){setTimeout(function(){i.progress(e,t,n)})}var i=this;if(this.progressedCount=0,this.hasAnyBroken=!1,this.images.length)for(var t=0;t<this.images.length;t++){var n=this.images[t];n.once("progress",e),n.check()}else this.complete()},o.prototype.progress=function(e,t,n){this.progressedCount++,this.hasAnyBroken=this.hasAnyBroken||!e.isLoaded,this.emit("progress",this,e,t),this.jqDeferred&&this.jqDeferred.notify&&this.jqDeferred.notify(this,e),this.progressedCount==this.images.length&&this.complete(),this.options.debug&&u&&u.log("progress: "+n,e,t)},o.prototype.complete=function(){var e=this.hasAnyBroken?"fail":"done";this.isComplete=!0,this.emit(e,this),this.emit("always",this),this.jqDeferred&&(e=this.hasAnyBroken?"reject":"resolve",this.jqDeferred[e](this))},(i.prototype=new e).check=function(){return this.getIsImageComplete()?void this.confirm(0!==this.img.naturalWidth,"naturalWidth"):(this.proxyImage=new Image,n.bind(this.proxyImage,"load",this),n.bind(this.proxyImage,"error",this),n.bind(this.img,"load",this),n.bind(this.img,"error",this),void(this.proxyImage.src=this.img.src))},i.prototype.getIsImageComplete=function(){return this.img.complete&&void 0!==this.img.naturalWidth},i.prototype.confirm=function(e,t){this.isLoaded=e,this.emit("progress",this,this.img,t)},i.prototype.handleEvent=function(e){var t="on"+e.type;this[t]&&this[t](e)},i.prototype.onload=function(){this.confirm(!0,"onload"),this.unbindEvents()},i.prototype.onerror=function(){this.confirm(!1,"onerror"),this.unbindEvents()},i.prototype.unbindEvents=function(){n.unbind(this.proxyImage,"load",this),n.unbind(this.proxyImage,"error",this),n.unbind(this.img,"load",this),n.unbind(this.img,"error",this)},(h.prototype=new i).check=function(){n.bind(this.img,"load",this),n.bind(this.img,"error",this),this.img.src=this.url,this.getIsImageComplete()&&(this.confirm(0!==this.img.naturalWidth,"naturalWidth"),this.unbindEvents())},h.prototype.unbindEvents=function(){n.unbind(this.img,"load",this),n.unbind(this.img,"error",this)},h.prototype.confirm=function(e,t){this.isLoaded=e,this.emit("progress",this,this.element,t)},(o.makeJQueryPlugin=function(e){(e=e||t.jQuery)&&((a=e).fn.imagesLoaded=function(e,t){return new o(this,e,t).jqDeferred.promise(a(this))})})(),o});