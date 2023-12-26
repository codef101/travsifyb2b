(()=>{"use strict";var e={187:e=>{var t,n="object"==typeof Reflect?Reflect:null,o=n&&"function"==typeof n.apply?n.apply:function(e,t,n){return Function.prototype.apply.call(e,t,n)};t=n&&"function"==typeof n.ownKeys?n.ownKeys:Object.getOwnPropertySymbols?function(e){return Object.getOwnPropertyNames(e).concat(Object.getOwnPropertySymbols(e))}:function(e){return Object.getOwnPropertyNames(e)};var i=Number.isNaN||function(e){return e!=e};function r(){r.init.call(this)}e.exports=r,e.exports.once=function(e,t){return new Promise((function(n,o){function i(){void 0!==r&&e.removeListener("error",r),n([].slice.call(arguments))}var r;"error"!==t&&(r=function(n){e.removeListener(t,i),o(n)},e.once("error",r)),e.once(t,i)}))},r.EventEmitter=r,r.prototype._events=void 0,r.prototype._eventsCount=0,r.prototype._maxListeners=void 0;var a=10;function s(e){if("function"!=typeof e)throw new TypeError('The "listener" argument must be of type Function. Received type '+typeof e)}function l(e){return void 0===e._maxListeners?r.defaultMaxListeners:e._maxListeners}function c(e,t,n,o){var i,r,a,c;if(s(n),void 0===(r=e._events)?(r=e._events=Object.create(null),e._eventsCount=0):(void 0!==r.newListener&&(e.emit("newListener",t,n.listener?n.listener:n),r=e._events),a=r[t]),void 0===a)a=r[t]=n,++e._eventsCount;else if("function"==typeof a?a=r[t]=o?[n,a]:[a,n]:o?a.unshift(n):a.push(n),(i=l(e))>0&&a.length>i&&!a.warned){a.warned=!0;var u=new Error("Possible EventEmitter memory leak detected. "+a.length+" "+String(t)+" listeners added. Use emitter.setMaxListeners() to increase limit");u.name="MaxListenersExceededWarning",u.emitter=e,u.type=t,u.count=a.length,c=u,console&&console.warn&&console.warn(c)}return e}function u(){if(!this.fired)return this.target.removeListener(this.type,this.wrapFn),this.fired=!0,0===arguments.length?this.listener.call(this.target):this.listener.apply(this.target,arguments)}function d(e,t,n){var o={fired:!1,wrapFn:void 0,target:e,type:t,listener:n},i=u.bind(o);return i.listener=n,o.wrapFn=i,i}function g(e,t,n){var o=e._events;if(void 0===o)return[];var i=o[t];return void 0===i?[]:"function"==typeof i?n?[i.listener||i]:[i]:n?function(e){for(var t=new Array(e.length),n=0;n<t.length;++n)t[n]=e[n].listener||e[n];return t}(i):p(i,i.length)}function m(e){var t=this._events;if(void 0!==t){var n=t[e];if("function"==typeof n)return 1;if(void 0!==n)return n.length}return 0}function p(e,t){for(var n=new Array(t),o=0;o<t;++o)n[o]=e[o];return n}Object.defineProperty(r,"defaultMaxListeners",{enumerable:!0,get:function(){return a},set:function(e){if("number"!=typeof e||e<0||i(e))throw new RangeError('The value of "defaultMaxListeners" is out of range. It must be a non-negative number. Received '+e+".");a=e}}),r.init=function(){void 0!==this._events&&this._events!==Object.getPrototypeOf(this)._events||(this._events=Object.create(null),this._eventsCount=0),this._maxListeners=this._maxListeners||void 0},r.prototype.setMaxListeners=function(e){if("number"!=typeof e||e<0||i(e))throw new RangeError('The value of "n" is out of range. It must be a non-negative number. Received '+e+".");return this._maxListeners=e,this},r.prototype.getMaxListeners=function(){return l(this)},r.prototype.emit=function(e){for(var t=[],n=1;n<arguments.length;n++)t.push(arguments[n]);var i="error"===e,r=this._events;if(void 0!==r)i=i&&void 0===r.error;else if(!i)return!1;if(i){var a;if(t.length>0&&(a=t[0]),a instanceof Error)throw a;var s=new Error("Unhandled error."+(a?" ("+a.message+")":""));throw s.context=a,s}var l=r[e];if(void 0===l)return!1;if("function"==typeof l)o(l,this,t);else{var c=l.length,u=p(l,c);for(n=0;n<c;++n)o(u[n],this,t)}return!0},r.prototype.addListener=function(e,t){return c(this,e,t,!1)},r.prototype.on=r.prototype.addListener,r.prototype.prependListener=function(e,t){return c(this,e,t,!0)},r.prototype.once=function(e,t){return s(t),this.on(e,d(this,e,t)),this},r.prototype.prependOnceListener=function(e,t){return s(t),this.prependListener(e,d(this,e,t)),this},r.prototype.removeListener=function(e,t){var n,o,i,r,a;if(s(t),void 0===(o=this._events))return this;if(void 0===(n=o[e]))return this;if(n===t||n.listener===t)0==--this._eventsCount?this._events=Object.create(null):(delete o[e],o.removeListener&&this.emit("removeListener",e,n.listener||t));else if("function"!=typeof n){for(i=-1,r=n.length-1;r>=0;r--)if(n[r]===t||n[r].listener===t){a=n[r].listener,i=r;break}if(i<0)return this;0===i?n.shift():function(e,t){for(;t+1<e.length;t++)e[t]=e[t+1];e.pop()}(n,i),1===n.length&&(o[e]=n[0]),void 0!==o.removeListener&&this.emit("removeListener",e,a||t)}return this},r.prototype.off=r.prototype.removeListener,r.prototype.removeAllListeners=function(e){var t,n,o;if(void 0===(n=this._events))return this;if(void 0===n.removeListener)return 0===arguments.length?(this._events=Object.create(null),this._eventsCount=0):void 0!==n[e]&&(0==--this._eventsCount?this._events=Object.create(null):delete n[e]),this;if(0===arguments.length){var i,r=Object.keys(n);for(o=0;o<r.length;++o)"removeListener"!==(i=r[o])&&this.removeAllListeners(i);return this.removeAllListeners("removeListener"),this._events=Object.create(null),this._eventsCount=0,this}if("function"==typeof(t=n[e]))this.removeListener(e,t);else if(void 0!==t)for(o=t.length-1;o>=0;o--)this.removeListener(e,t[o]);return this},r.prototype.listeners=function(e){return g(this,e,!0)},r.prototype.rawListeners=function(e){return g(this,e,!1)},r.listenerCount=function(e,t){return"function"==typeof e.listenerCount?e.listenerCount(t):m.call(e,t)},r.prototype.listenerCount=m,r.prototype.eventNames=function(){return this._eventsCount>0?t(this._events):[]}},725:function(e,t,n){var o=this&&this.__awaiter||function(e,t,n,o){return new(n||(n=Promise))((function(i,r){function a(e){try{l(o.next(e))}catch(e){r(e)}}function s(e){try{l(o.throw(e))}catch(e){r(e)}}function l(e){var t;e.done?i(e.value):(t=e.value,t instanceof n?t:new n((function(e){e(t)}))).then(a,s)}l((o=o.apply(e,t||[])).next())}))};Object.defineProperty(t,"__esModule",{value:!0}),t.Recommendations=t.ContentInfo=t.RecommendationInfo=t.ArticleTagsData=t.PersonalizationRecommendation=void 0;const i=n(896),r="Recommendations filtered by guardrails for requested content zone",a="User group undetermined for this request",s="No recommendations available for requested content zone";t.PersonalizationRecommendation=class{constructor(e,t,n,o){this.contentZone=e,this.contentType=t,this.recommendationInfo=n,this.recommendationData=o}},t.ArticleTagsData=class{},t.RecommendationInfo=class{constructor(e){this.campaignId=e.campaignId,this.campaignName=e.campaignName,this.experienceId=e.experienceId,this.recommendationEngine=e.recommendationEngine,this.userGroup=e.userGroup,this.userId=e.userId}};class l{constructor(e,t,n){this.title=e.name.value,this.text=e.description.value,this.image={original:e.imageUrl.value,medium:e.imageUrl.value+l.buildExtensionPath(e.imageUrl.value)},this.pageUrl=e.url.value,this.tags=t,this.tagData=n}static buildExtensionPath(e){const t=e.split(".").pop();return t.length<=4?".transform/card/image."+t:""}}t.ContentInfo=l;class c{constructor(){this.recommendations=[]}getRecommendation(e){return o(this,void 0,void 0,(function*(){const t=()=>new Promise(((n,o)=>{if(c.recommendationsParsed){(!this.recommendations||this.recommendations.length<1)&&o("No Recommendations received for this page");const t=this.getContentZoneSpecificRecommendation(e);null===t?(i.Clientlogger.logMessage(s+" "+e,"warn"),o(s+" "+e)):t.recommendationInfo&&t.recommendationInfo.userGroup?t.recommendationInfo.userGroup.toLowerCase()==="Control".toLowerCase()?o(t):!t.recommendationData||t.recommendationData.length<1?(i.Clientlogger.logMessage(r,"error",t.recommendationInfo),o(r+": "+e)):n(t):(i.Clientlogger.logMessage(a,"error",t),o(a+": "+e))}else setTimeout((()=>{n(t())}),300)}));return t()}))}getContentZoneSpecificRecommendation(e){for(const t of this.recommendations)if(t.contentZone===e)return t;return null}}t.Recommendations=c,c.recommendationsParsed=!1},66:(e,t,n)=>{Object.defineProperty(t,"__esModule",{value:!0}),t.palEmitter=t.PalEmitter=void 0;const o=n(187);class i{constructor(){this.emitter=new o.EventEmitter}on(e,t){const n=e.toString();this.emitter.on(n,t)}emit(e,t){const n=e.toString();this.emitter.emit(n,t)}}t.PalEmitter=i,t.palEmitter=new i},559:(e,t,n)=>{Object.defineProperty(t,"__esModule",{value:!0}),t.processPersonalizationStat=t.isPersonalizationEvent=t.trackEvents=void 0;const o=n(896),i=n(53),r=n(66),a=n(982),s=n(53);function l(e){var t,n;return void 0!==(null===(t=e.blade)||void 0===t?void 0:t.personalization)&&"rendered"===(null===(n=e.blade)||void 0===n?void 0:n.state)&&(void 0!==e.blade.personalization.campaign||(o.Clientlogger.logMessage("campaign is undefined","error",e),!1))}function c(e){const t=e.event,n=i.eventStatMap.get(t),r=e.blade.personalization.experience,a=e.blade.personalization.userGroup,s=void 0!==(l=e.blade.personalization).itemType&&null!==l.itemType?l.itemType:void 0!==l.contentzone&&null!==l.contentzone?"Article":null;var l;const c=function(e){let t=[];return t="custEv_contentImpression"===e.event?function(e){let t=[];const n=e.blade;if(void 0!==n.personalization.contentzone){const e=window.personalizedRecommendation.getContentZoneSpecificRecommendation(n.personalization.contentzone);null!=e&&(t=e.recommendationData.map((e=>e.pageUrl)))}else if(t=n.modules.map((e=>e.id)).filter((e=>void 0!==e)),n.modules.length!==t.length)return[];return t}(e):function(e){var t;const n=[],o=e.blade;return void 0!==o.module&&(void 0!==o.personalization.itemType&&void 0!==o.module.id?n.push(o.module.id):void 0!==(null===(t=o.module.link)||void 0===t?void 0:t.url)&&n.push(o.module.link.url)),n}(e),t}(e),d="control"===(null==a?void 0:a.toLowerCase());!(t&&r&&a&&s&&n)||0===c.length&&d&&"Impression"!==n||0===c.length&&!d?o.Clientlogger.logMessage("Insufficient properties to invoke sendStat event","error",e):u({experienceId:r,stat:n,control:d,catalog:{[s]:c}})}function u(e){switch(window.palState){case s.PAL_EVENTS.INITIALIZED:!function(e){const t=function(){u(e)};r.palEmitter.on("recommendationSuccess",t),r.palEmitter.on("recommendationFail",t),r.palEmitter.on("evgNotInitialized",t)}(e);break;case s.PAL_EVENTS.RECOMMENDATION_SUCCESS:case s.PAL_EVENTS.RECOMMENDATION_FAIL:const t=Object.keys(e.catalog)[0];a.registerStat(e.stat,e.experienceId,e.control,t,e.catalog[t]);break;case s.PAL_EVENTS.NO_BEACON:o.Clientlogger.logMessage("No Evergage Beacon to invoke sendStat event","error",e);break;case s.PAL_EVENTS.EVG_NOT_INITIALIZED:o.Clientlogger.logMessage("Evergage not initialized. Cannot invoke sendStat event","error",e);break;default:o.Clientlogger.logMessage("PAL status unknown to invoke sendStat event","error",e)}}t.trackEvents=function(e){const t=e.detail;void 0!==t&&("custEv_contentImpression"!==t.event&&"custEv_contentClick"!==t.event||l(t)&&c(t))},t.isPersonalizationEvent=l,t.processPersonalizationStat=c},492:(e,t,n)=>{const o=n(298),i=n(725),r=n(53),a=n(559),s=n(896),l=n(66);window.personalizedRecommendation=new i.Recommendations,window.palState=r.PAL_EVENTS.INITIALIZED,l.palEmitter.emit("initialized",r.PAL_EVENTS.INITIALIZED),document.addEventListener("www_track",a.trackEvents),document.addEventListener("sfdc-chatView",(function(){Evergage.sendEvent({action:"Chat View"})})),document.addEventListener("sfdc-chatInitialize",(function(){Evergage.sendEvent({action:"Chat Initialize"})}));let c=!1;const u=o.EvergageUtility.getScriptParams(),d=u.timeout,g=u.dataset,m=`//cdn.evgnet.com/beacon/salesforce/${g}/scripts/evergage.min.js`,p="Error occured whilst parsing personalization data",v="Evergage is not running on the page";function f(e){console.warn(v),i.Recommendations.recommendationsParsed=!0;const t={dataSetName:g,timeout:d};void 0!==e&&(t.errorEvent=e),s.Clientlogger.logMessage(v,"warn",t),window.palState=r.PAL_EVENTS.NO_BEACON,l.palEmitter.emit("noBeacon",r.PAL_EVENTS.NO_BEACON)}function h(){o.EvergageUtility.checkForEvergageCampaigns(d).then((()=>function(){const e=Evergage.getState().result;for(let t=0;t<Evergage.getState().campaignResponses.length;t++)try{const n=Evergage.getState().campaignResponses[t],r=n.payload.contentZone,a=o.EvergageUtility.getRecommendationType(n),s=o.EvergageUtility.buildRecommendationInfo(n,e);if(a){const e=o.EvergageUtility.buildRecommendationData(n.payload,a),t=new i.PersonalizationRecommendation(r,a,s,e);window.personalizedRecommendation.recommendations.push(t)}}catch(e){console.error(p+" "+e),s.Clientlogger.logMessage(p,"error",e)}i.Recommendations.recommendationsParsed=!0,window.palState=r.PAL_EVENTS.RECOMMENDATION_SUCCESS,l.palEmitter.emit("recommendationSuccess",r.PAL_EVENTS.RECOMMENDATION_SUCCESS)}())).catch((()=>{i.Recommendations.recommendationsParsed=!0,c?(window.palState=r.PAL_EVENTS.RECOMMENDATION_FAIL,l.palEmitter.emit("recommendationFail",r.PAL_EVENTS.RECOMMENDATION_FAIL)):(window.palState=r.PAL_EVENTS.EVG_NOT_INITIALIZED,l.palEmitter.emit("evgNotInitialized",r.PAL_EVENTS.EVG_NOT_INITIALIZED))}))}"undefined"!=typeof Evergage?h():""!==g?(document.addEventListener("evergage:onInit",(function(){c=!0})),o.EvergageUtility.loadScript(m,!0).then(h).catch((e=>{f(e)}))):f()},896:(e,t,n)=>{Object.defineProperty(t,"__esModule",{value:!0}),t.Clientlogger=void 0,function(e){let t=window.sfdcBase.env;switch(t=t?t.toLocaleUpperCase():"PROD",t){case"UAT":e.logging=Promise.resolve().then((()=>n(750))).catch((e=>console.info(e)));break;case"QA":e.logging=Promise.resolve().then((()=>n(524))).catch((e=>console.info(e)));break;default:e.logging=Promise.resolve().then((()=>n(653))).catch((e=>console.info(e)))}e.logMessage=function(t,n,o){void 0===o&&(o={"additional data ":!1}),e.logging.then((e=>{"object"==typeof e&&e.default&&e.default(t,o,n)}))}}(t.Clientlogger||(t.Clientlogger={}))},53:(e,t)=>{var n;Object.defineProperty(t,"__esModule",{value:!0}),t.eventStatMap=t.GlobalConstants=t.LegacyDimensions=t.PAL_EVENTS=void 0,(n=t.PAL_EVENTS||(t.PAL_EVENTS={})).RECOMMENDATION_SUCCESS="RECOMMENDATION_SUCCESS",n.RECOMMENDATION_FAIL="RECOMMENDATION_FAIL",n.INITIALIZED="INITIALIZED",n.NO_BEACON="NO_BEACON",n.EVG_NOT_INITIALIZED="EVG_NOT_INITIALIZED",t.LegacyDimensions={Locale:"Locale",Pagetype:"Pagetype",Presentable:"Presentable"};class o{}t.GlobalConstants=o,o.HOST_DOMAIN="salesforce.com",t.eventStatMap=new Map([["custEv_contentImpression","Impression"],["custEv_contentClick","Clickthrough"]])},982:(e,t)=>{Object.defineProperty(t,"__esModule",{value:!0}),t.registerStat=void 0,t.registerStat=function(e,t,n,o,i){const r={experienceId:t,stat:e,control:n,catalog:{[o]:i}};return Evergage.sendStat({campaignStats:[r]}),r}},298:(e,t,n)=>{Object.defineProperty(t,"__esModule",{value:!0}),t.EvergageUtility=void 0;const o=n(725),i=n(53),r=n(896);!function(e){function t(e,t){if(!function(e){return!(void 0===e||null===e.name||l(e.name.value)||null===e.description||l(e.description.value)||null===e.imageUrl||l(e.imageUrl.value)||null===e.url||l(e.url.value))}(e))throw new Error("Articles information is invalid");if(!c(e))throw new Error('Invalid URL found in article "'+e.name.value+'"');const n=function(e){if(!e||0===e.length)return;const t=new o.ArticleTagsData;return e.forEach((e=>{const n=e.tags.filter((t=>t.tagTerm&&(e.dimension in i.LegacyDimensions||u(t,e.dimension)))).map((e=>e.tagTerm));n.length>0&&(t[e.dimension]=n,"ContentTypes"===e.dimension&&(t.Contenttype=n))})),Object.keys(t).length?t:void 0}(t);return new o.ContentInfo(e,n,t)}function n(e){const t=e.articles?e.articles.length:0;let n,o;for(let i=0;i<t;i++){let a=i+1;if(a===t&&(a=0),n=e.articles[i].attributes,o=e.articles[a].attributes,n.url.value===o.url.value)return console.warn('url duplicate for "'+n.name.value+'" and "'+o.name.value+'"'),r.Clientlogger.logMessage("url duplicate found","warn",e.articles),!0;if(n.name.value===o.name.value)return console.warn('name duplicate for "'+n.name.value+'" and "'+o.name.value+'"'),r.Clientlogger.logMessage("name duplicate found","warn",e.articles),!0;if(n.imageUrl.value===o.imageUrl.value)return console.warn('imageUrl duplicate for "'+n.name.value+'" and "'+o.name.value+'"'),r.Clientlogger.logMessage("imageUrl duplicate found","warn",e.articles),!0;if(n.description.value===o.description.value)return console.warn('description duplicate for "'+n.description.value+'" and "'+o.description.value+'"'),r.Clientlogger.logMessage("description duplicate found","warn",e.articles),!0}return!1}function a(e){var t;let n=!0;if((null===(t=e.articleTagData)||void 0===t?void 0:t.length)===e.recommendationCount)for(let t=0;t<e.articleTagData.length;t++)e.articleTagData[t].tagData.length<2&&"Presentable"===e.articleTagData[t].tagData[0].dimension&&(n=!1);else n=!1;return!1===n&&(console.error("In articleTagData[].tagData: Taxonomy tags missing"),r.Clientlogger.logMessage("In articleTagData[].tagData: Taxonomy tags missing","error",e.articleTagData)),n}function s(e){return void 0!==typeof e&&e.length>0?e:""}function l(e){return!(void 0!==typeof e&&e.length>0)}function c(e){const t=d(e.imageUrl.value),n=d(e.url.value);return t.match(i.GlobalConstants.HOST_DOMAIN)&&n.match(i.GlobalConstants.HOST_DOMAIN)}function u(e,t){return!!(e.tagTerm.length&&e.tagId.length&&/[0-9a-fA-F]{8}\-[0-9a-fA-F]{4}\-[0-9a-fA-F]{4}\-[0-9a-fA-F]{4}\-[0-9a-fA-F]{12}/.test(e.tagId))||(console.warn('Tag Id "'+e.tagId+'" Tag Name "'+e.tagTerm+'" in dimension '+t+" is not a taxonomy ID"),r.Clientlogger.logMessage('Tag Id "'+e.tagId+'" Tag Name "'+e.tagTerm+'" in dimension '+t+" is not a taxonomy ID","warn"),!1)}function d(e){const t=function(e){const t=e.match(/:\/\/(www[0-9]?\.)?(.[^/:]+)/i);return null!=t&&t.length>2&&"string"==typeof t[2]&&t[2].length>0?t[2]:null}(e);let n=t;if(null!=t){const e=t.split(".").reverse();null!=e&&e.length>1&&(n=e[1]+"."+e[0],e.length>2&&(n=e[2]+"."+n))}return n}e.checkForEvergageCampaigns=function(e){let t=!1;return new Promise((function(n,o){document.addEventListener("evergage:onEventResponse",(function(e){var i,a,s,l,c;void 0!==(null===(s=null===(a=null===(i=e.detail)||void 0===i?void 0:i.actionEvent)||void 0===a?void 0:a.source)||void 0===s?void 0:s.pageType)&&((null===(c=null===(l=e.detail)||void 0===l?void 0:l.response)||void 0===c?void 0:c.campaignResponses)?(t=!0,e.detail.response.campaignResponses.length<1?(o(new Error("Visitor does not qualify for any personalization campaigns")),console.info("Visitor does not qualify for any personalization campaigns")):n()):(o(new Error("Invalid content")),console.warn("Invalid content"),r.Clientlogger.logMessage("Invalid content","warn")))})),setTimeout((function(){t||(o(new Error("PAL timed out before Evergage received campaign response")),console.warn("PAL timed out before Evergage received campaign response"),r.Clientlogger.logMessage("PAL timed out before Evergage received campaign response","warn"))}),e)}))},e.buildRecommendationInfo=function(e,t){var n;const i={campaignId:s(e.campaignId),campaignName:s(e.campaignName),experienceId:s(e.experienceId),experienceName:s(e.experienceName),recommendationEngine:"Interaction Studio",userGroup:s(e.userGroup),userId:(null===(n=t.currentPage.user.attributes)||void 0===n?void 0:n.GAID)?t.currentPage.user.attributes.GAID:""};return new o.RecommendationInfo(i)},e.buildRecommendationData=function(e,o){var i,s;let l=[];if("contentInfo"===o&&function(e){let t=!1;return e.recommendationCount?e.articles?(e.articles.length!==e.recommendationCount?r.Clientlogger.logMessage("mismatch between number of expected and received entries","error",{expectedEntries:e.articles.length,receivedEntries:e.recommendationCount,articles:e.articles}):t=!0,t):t:(r.Clientlogger.logMessage("RecommendationCount is not present in IS payload","error",{campaign:null==e?void 0:e.campaign}),t)}(e)&&!n(e)&&a(e))for(let n=0;n<e.articles.length;n++){const o=e.articles[n].attributes;let a;if((null===(i=e.articleTagData)||void 0===i?void 0:i.length)&&e.articleTagData[n].id===e.articles[n].id?a=e.articleTagData[n].tagData:(console.error("Taxonomy tag terms object (articleTagData) either does not exist or is not for this article"),r.Clientlogger.logMessage("Taxonomy tag terms object (articleTagData) either does not exist or is not for this article","error",{articleTagDataObjLength:null===(s=e.articleTagData)||void 0===s?void 0:s.length,articleTagDataId:e.articleTagData[n].id,articleId:e.articles[n].id})),null!=o)try{const e=t(o,a);l.push(e)}catch(t){if(console.warn("Invalid content "+t),r.Clientlogger.logMessage("Invalid content","warn",{campaign:e.campaign,articles:e.articles}),!c(o)){l=[];break}}}return l},e.getRecommendationType=function(e){return e.payload&&null!=e.payload.contentId?"contentId":e.templateNames&&e.templateNames.length>0&&e.templateNames[0].toLowerCase().includes("content metadata")?"contentInfo":""},e.hasDuplicateArticles=n,e.hasC360Tags=a,e.isAttrEmpty=l,e.isTaxonomyTag=u,e.loadScript=function(e,t=!1){return new Promise((function(n,o){const i=document.createElement("script");i.src=e,i.async=t,i.onload=n,i.onerror=o,document.head.appendChild(i)}))},e.getScriptParams=function(){const e=document.getElementsByTagName("script");let t=2e3,n="";for(let o=0;o<e.length;o++)if("pal-script"===e[o].id.toLowerCase()){null!==e[o].getAttribute("data-dataset")&&(n=e[o].getAttribute("data-dataset")),0!=+e[o].getAttribute("data-timeout")&&(t=+e[o].getAttribute("data-timeout"));break}return{dataset:n,timeout:t}}}(t.EvergageUtility||(t.EvergageUtility={}))},524:e=>{e.exports=import("https://a.sfdcstatic.com/digital/@sfdc-www/clientlibs-web-components/v1-latest/clientLogging.js")},653:e=>{e.exports=import("https://a.sfdcstatic.com/digital/@sfdc-www/clientlibs-web-components/v1-stable/clientLogging.js")},750:e=>{e.exports=import("https://a.sfdcstatic.com/digital/@sfdc-www/clientlibs-web-components/v1-stage/clientLogging.js")}},t={};!function n(o){if(t[o])return t[o].exports;var i=t[o]={exports:{}};return e[o].call(i.exports,i,i.exports,n),i.exports}(492)})();