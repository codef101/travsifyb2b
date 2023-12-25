// version: 202306.1.0
"use strict";(()=>{var l="gdpr:groups-update";var m="OneTrustGroupsUpdated";var s="OnetrustActiveGroups",p="sfdcConsent",a="OptanonConsent";var i="OneTrust";var P=globalThis.document||{},y=t=>{let e={};try{let o=JSON.parse(t);return o||e}catch{return e}},O=(t="",e)=>{let o=P.cookie,r=`${t}=`;if(o.indexOf(r)<0)return"";let n=o.split("; ").find(h=>h.includes(r))||"";if(n=n.substring(r.length,n.length),!n||n===r)return"";typeof e=="function"&&(n=e(n)),n=decodeURIComponent(n);let d=y(n);return Object.keys(d).length?d:n};var b=()=>globalThis[s]||"1",u=t=>{let e=(t||b()).split(",").reduce((o,r)=>r?[...o,parseInt(r)]:o,[]);return e.includes(1)||e.push(1),e},f=async()=>{let t=globalThis[s];if(!t||!globalThis.document||!globalThis.location)return;let e=new Date;e.setTime(e.setFullYear(e.getFullYear()+1));let o=globalThis.location.host,r=[`${p}=${u(t).join(",")}`,"path=/",`domain=${o.endsWith("salesforce.com")?".salesforce.com":o}`,`expires=${e.toUTCString()}`];globalThis.document.cookie=r.join("; ")},c=t=>globalThis.addEventListener(m,t);var v=new Promise(t=>{let e=globalThis[s];if(e)return t(e);let o=O(p);o&&t(u(o)),c(()=>{globalThis[s]&&t(u(globalThis[s]))})});var T=()=>!!globalThis[i]&&globalThis[i].GetDomainData,w=new Promise(t=>{T()&&t(!0);let e=0,o=setInterval(()=>{if(e++,e>=500){clearInterval(o),t(!1);return}T()&&(clearInterval(o),t(!0))},10)});var g="otloc",C="geolocationResponse",_=()=>{try{let t=sessionStorage.getItem(g);if(!t)return;let e=JSON.parse(atob(t));if(!e.country){sessionStorage.removeItem(g);return}window[i]=window[i]||{},window[i][C]={countryCode:e.country,stateCode:e.state}}catch{}};document.cookie.split("; ").filter(t=>t.startsWith(a)).length>1&&(document.cookie=`${a}=; expires=Thu, 01 Jan 1970 00:00:00 GMT`,document.cookie=`${a}=; expires=Thu, 01 Jan 1970 00:00:00 GMT; domain=.${document.location.hostname}`);_();Object.defineProperty(window,"onGdprReady",{value:new Promise(t=>{c(e=>{window[s]&&(window.performance!==void 0&&performance.mark(l),t(window[s]))})})});c(f);})();var OneTrustStub=function(e){var l=new function(){this.optanonCookieName="OptanonConsent",this.optanonHtmlGroupData=[],this.optanonHostData=[],this.genVendorsData=[],this.vendorsServiceData=[],this.IABCookieValue="",this.oneTrustIABCookieName="eupubconsent",this.oneTrustIsIABCrossConsentEnableParam="isIABGlobal",this.isStubReady=!0,this.geolocationCookiesParam="geolocation",this.EUCOUNTRIES=["BE","BG","CZ","DK","DE","EE","IE","GR","ES","FR","IT","CY","LV","LT","LU","HU","MT","NL","AT","PL","PT","RO","SI","SK","FI","SE","GB","HR","LI","NO","IS"],this.stubFileName="otSDKStub",this.DATAFILEATTRIBUTE="data-domain-script",this.bannerScriptName="otBannerSdk.js",this.mobileOnlineURL=[],this.isMigratedURL=!1,this.migratedCCTID="[[OldCCTID]]",this.migratedDomainId="[[NewDomainId]]",this.userLocation={country:"",state:""}};(u=m=m||{})[u.Days=1]="Days",u[u.Weeks=7]="Weeks",u[u.Months=30]="Months",u[u.Years=365]="Years",(u=t=t||{}).Name="OTGPPConsent",u[u.ChunkSize=4e3]="ChunkSize",u.ChunkCountParam="GPPCookiesCount",(u={CPRA:8,8:"CPRA",CCPA:8})[8]="CCPA",u[u.CDPA=9]="CDPA",u[u.USNATIONAL=7]="USNATIONAL",u[u.COLORADO=10]="COLORADO",u[u.UCPA=11]="UCPA",u[u.CTDPA=12]="CTDPA";var r,t,a="geo",o="otpreview",s=(t.Name,"PRODUCTION"),n=((u={})[m.Days]="PCenterVendorListLifespanDay",u[m.Weeks]="LfSpnWk",u[m.Months]="PCenterVendorListLifespanMonth",u[m.Years]="LfSpnYr",i.prototype.camelize=function(e){return e.split("-").map(function(e,t){return 0===t?e:e[0].toUpperCase()+e.slice(1)}).join("")},i.prototype.strToObj=function(e){for(var t={},i=e.split(";").map(function(e){return e.trim()}),n=0,a=void 0;n<i.length;++n)if(/:/.test(i[n])){if(!(a=i[n].split(/:(.+)/))[1])return null;t[this.camelize(a[0])]=a[1].trim()}return t},i);function i(){var e=this;this.implementThePolyfill=function(){var a=e,o=Element.prototype.setAttribute;return Element.prototype.setAttribute=function(e,t){if("style"!==e.toLowerCase()&&o.apply(this,[e,t]),"style"!==e.toLowerCase()||t||this.removeAttribute("style"),"style"===e.toLowerCase()&&t){this.removeAttribute("style");var i,n=a.strToObj(t);for(i in n)this.style[i]=n[i]}},!0}}function p(e,t,i){void 0===i&&(i=!1);function n(e){return e?(";"!==(e=e.trim()).charAt(e.length-1)&&(e+=";"),e.trim()):null}var o=n(e.getAttribute("style")),s=n(t),t="",t=i&&o?function(){for(var e=o.split(";").concat(s.split(";")).filter(function(e){return 0!==e.length}),t="",i="",n=e.length-1;0<=n;n--){var a=e[n].substring(0,e[n].indexOf(":")+1).trim();t.indexOf(a)<0&&(t+=a,i+=e[n]+";")}return i}():s;e.setAttribute("style",t)}(t=r=r||{}).ping="ping",t.addEventListener="addEventListener",t.removeEventListener="removeEventListener",t.hasSection="hasSection",t.getSection="getSection",t.getField="getField",t.getGPPData="getGPPData";var c=new function(){var s=this;this.LOCATOR_NAME="__gppLocator",this.win=window,this.customInit="CUSTOMINIT",this.init=function(){s.win.__gpp&&"function"==typeof s.win.__gpp||(s.win.__gpp=s.executeGppApi,window.addEventListener("message",s.messageHandler,!1),s.addFrame(s.LOCATOR_NAME))},this.removeGppApi=function(){delete s.win.__gpp;var e=document.querySelectorAll("iframe[name="+s.LOCATOR_NAME+"]")[0];e&&e.parentElement.removeChild(e)},this.executeGppApi=function(){for(var e=[],t=0;t<arguments.length;t++)e[t]=arguments[t];var i=null==(i=s.win)?void 0:i.__gpp;if(i.queue=i.queue||[],i.events=i.events||[],!e.length||1===e.length&&"queue"===e[0])return i.queue;if(1===e.length&&"events"===e[0])return i.events;var n=e[0],a=1<e.length?e[1]:null,o=2<e.length?e[2]:null;switch(n){case r.ping:return s.getPingRequest(a);case r.addEventListener:return s.addEventListener(a,o);case r.removeEventListener:return s.removeEventListener(o);default:return void s.addToQueue(n,a,o)}},this.getPingRequest=function(e){var t={gppVersion:1,cmpStatus:"stub",cmpDisplayStatus:"hidden",apiSupport:["uspcav1","uspvav1"],currentAPI:"",cmpId:Number.parseInt("28")};return e&&e(t,!0),t},this.addFrame=function(e){var t,i=s.win.document,n=Boolean(s.win.frames[e]);return n||(i.body?((t=i.createElement("iframe")).style.cssText="display:none",t.name=e,t.setAttribute("title","GPP Locator"),i.body.appendChild(t)):setTimeout(function(){s.addFrame(e)},5)),!n},this.addEventListener=function(e,t){var i,n=s.win.__gpp;return n.events=n.events||[],null!=(i=n)&&i.lastId||(n.lastId=0),n.lastId++,n.events.push({id:n.lastId,callback:e,parameter:t}),{eventName:"listenerRegistered",listenerId:n.lastId,data:!0,pingData:s.getPingRequest()}},this.removeEventListener=function(t){var i=!1,e=s.win.__gpp;return e.events=e.events||[],e.events=e.events.filter(function(e){return e.id.toString()!==t.toString()||!(i=!0)}),{eventName:"listenerRemoved",listenerId:t,data:i,pingData:s.getPingRequest()}},this.addToQueue=function(e,t,i){var n=s.win.__gpp;n.queue=n.queue||[],n.queue.push([e,t,i])},this.messageHandler=function(i){var t,n,a="string"==typeof i.data;try{t=a?JSON.parse(i.data):i.data}catch(e){t=null}t&&t.__gppCall&&(n=t.__gppCall,(0,s.win.__gpp)(n.command,function(e,t){e={__gppReturn:{returnValue:e,success:t,callId:n.callId}};i&&i.source&&i.source.postMessage&&i.source.postMessage(a?JSON.stringify(e):e,i.origin||"*")},n.parameter))},this.customInit||this.init()},u=(d.prototype.initConsentSDK=function(){this.initCustomEventPolyfill(),this.ensureHtmlGroupDataInitialised(),this.setStubScriptElement(),this.setOTDataLayer(),this.getParam(),this.fetchBannerSDKDependency(),this.captureNonce()},d.prototype.captureNonce=function(){this.nonce=l.stubScriptElement.nonce||l.stubScriptElement.getAttribute("nonce")||null},d.prototype.fetchBannerSDKDependency=function(){this.setDomainDataFileURL(),this.crossOrigin=l.stubScriptElement.getAttribute("crossorigin")||null,this.previewMode="true"===l.stubScriptElement.getAttribute("data-preview-mode"),this.otFetch(l.bannerDataParentURL,this.getLocation.bind(this))},d.prototype.setDomainIfBulkDomainEnabled=function(e){var t=e&&e.TenantFeatures,i=window.location.hostname,n=e.Domain,a=e.BulkDomainCheckUrl;t&&t.CookieV2BulkDomainManagement&&i!==n&&e.ScriptType===s&&((t=window.sessionStorage)&&t.getItem("bulkDomainMgmtEnabled")?this.handleBulkDomainMgmt({isValid:"true"===window.sessionStorage.getItem("bulkDomainMgmtEnabled")},e):(n={location:l.storageBaseURL.replace(/^https?:\/\//,""),domainId:this.domainId,url:i},this.otFetch(a,this.handleBulkDomainMgmt,!1,n,e)))},d.prototype.getLocation=function(e){if(this.setDomainIfBulkDomainEnabled(e),this.updateVersion(e),(e.TenantFeatures&&e.TenantFeatures.CookieV2CSP||e.CookieV2CSPEnabled)&&this.nonce&&(this.setAttributePolyfillIsActive=!0,(new n).implementThePolyfill()),!e.RuleSet[0].Type)return this.iabTypeAdded=!1,window.__cmp=this.executeCmpApi,window.__tcfapi=this.executeTcfApi,this.intializeIabStub(),this.addBannerSDKScript(e);var t,i=window;i.OneTrust&&i.OneTrust.geolocationResponse?(i=i.OneTrust.geolocationResponse,this.setGeoLocation(i.countryCode,i.stateCode),this.addBannerSDKScript(e)):(i=this.readCookieParam(l.optanonCookieName,l.geolocationCookiesParam))||e.SkipGeolocation?(t=i.split(";")[0],i=i.split(";")[1],this.setGeoLocation(t,i),this.addBannerSDKScript(e)):this.getGeoLocation(e)},d.prototype.handleBulkDomainMgmt=function(e,t){window.sessionStorage&&window.sessionStorage.setItem("bulkDomainMgmtEnabled",JSON.stringify(e.isValid)),e.isValid&&(t.Domain=window.location.hostname)},d.prototype.getGeolocationURL=function(e){e.TenantFeatures;var t=""+l.stubScriptElement.getAttribute("src").split(l.stubFileName)[0]+e.Version;return new RegExp("^file://","i").test(t)&&e.MobileSDK?(t="/"+e.GeolocationUrl.replace(/^(http|https):\/\//,"").split("/").slice(1).join("/")+".js",l.storageBaseURL+t):e.GeolocationUrl},d.prototype.geoLocationJsonCallback=function(e,t){t&&this.setGeoLocation(t.country,t.state),this.addBannerSDKScript(e)},d.prototype.getGeoLocation=function(e){var t=this.getGeolocationURL(e);this.otFetch(t,this.geoLocationJsonCallback.bind(this,e),!0)},d.prototype.setOTDataLayer=function(){var e="data-dLayer-ignore",t=l.stubScriptElement.hasAttribute(e),e=l.stubScriptElement.getAttribute(e);this.otDataLayer={ignore:t&&"true"===e||t&&""===e,name:l.stubScriptElement.getAttribute("data-dLayer-name")||"dataLayer"}},d.prototype.setGeoLocation=function(e,t){l.userLocation={country:e,state:t=void 0===t?"":t}},d.prototype.otFetch=function(e,i,t,n,a){void 0===t&&(t=!1),void 0===n&&(n=null);var o=window.sessionStorage&&window.sessionStorage.getItem("otPreviewData");if(new RegExp("^file://","i").test(e))this.otFetchOfflineFile(e,i);else if(0<=e.indexOf("/consent/")&&this.previewMode&&o){o=JSON.parse(o).domainJson;i(o)}else{l.mobileOnlineURL.push(e);var s=new XMLHttpRequest;if(s.onload=function(e){var t;this&&this.responseText?t=this.responseText:e&&e.target&&(t=e.target.responseText),a?i(JSON.parse(t),a):i(JSON.parse(t))},s.onerror=function(){i()},s.open("GET",e),s.withCredentials=!1,t&&s.setRequestHeader("accept","application/json"),n)for(var r in n)s.setRequestHeader(r,n[r]);s.send()}},d.prototype.otFetchOfflineFile=function(e,t){var i=(e=e.replace(".json",".js")).split("/"),n=i[i.length-1].split(".js")[0];this.jsonp(e,function(){t(window[n])})},d.prototype.jsonp=function(e,t){var i=document.createElement("script");i.setAttribute("src",e),this.nonce&&i.setAttribute("nonce",this.nonce),i.async=!0,i.type="text/javascript",this.crossOrigin&&i.setAttribute("crossorigin",this.crossOrigin),document.getElementsByTagName("head")[0].appendChild(i),new RegExp("^file://","i").test(e)||l.mobileOnlineURL.push(e),t&&(i.onload=i.onerror=function(){t()})},d.prototype.getRegionSet=function(e){var t,i,n,a=l.userLocation,o=e.RuleSet.filter(function(e){return!0===e.Default});if(!a.country&&!a.state)return o&&0<o.length?o[0]:null;for(var s=a.state.toLowerCase(),r=a.country.toLowerCase(),p=0;p<e.RuleSet.length;p++)if(!0===e.RuleSet[p].Global)n=e.RuleSet[p];else{var u=e.RuleSet[p].States;if(u[r]&&0<=u[r].indexOf(s)){i=e.RuleSet[p];break}0<=e.RuleSet[p].Countries.indexOf(r)&&(t=e.RuleSet[p])}return i||t||n},d.prototype.ensureHtmlGroupDataInitialised=function(){this.initializeIABData(),this.initializeGroupData(),this.initializeHostData(),this.initializeGenVenData()},d.prototype.initializeGroupData=function(){var e=this.readCookieParam(l.optanonCookieName,"groups");e&&(l.optanonHtmlGroupData=this.deserialiseStringToArray(e))},d.prototype.initializeHostData=function(){var e=this.readCookieParam(l.optanonCookieName,"hosts");e&&(l.optanonHostData=this.deserialiseStringToArray(e))},d.prototype.initializeGenVenData=function(){var e=this.readCookieParam(l.optanonCookieName,"genVendors");e&&(l.genVendorsData=this.deserialiseStringToArray(e))},d.prototype.initializeIABData=function(){this.validateIABGDPRApplied(),this.validateIABGlobalScope()},d.prototype.validateIABGlobalScope=function(){var e=this.readCookieParam(l.optanonCookieName,l.oneTrustIsIABCrossConsentEnableParam);e?"true"===e?(l.hasIABGlobalScope=!0,l.isStubReady=!1):(l.hasIABGlobalScope=!1,l.IABCookieValue=this.getCookie(l.oneTrustIABCookieName)):l.isStubReady=!1},d.prototype.validateIABGDPRApplied=function(){var e=this.readCookieParam(l.optanonCookieName,l.geolocationCookiesParam).split(";")[0];e?this.isBoolean(e)?l.oneTrustIABgdprAppliesGlobally="true"===e:l.oneTrustIABgdprAppliesGlobally=0<=l.EUCOUNTRIES.indexOf(e):l.isStubReady=!1},d.prototype.isBoolean=function(e){return"true"===e||"false"===e},d.prototype.readCookieParam=function(e,t){var i,n,a,o,e=this.getCookie(e);if(e){for(n={},a=e.split("&"),i=0;i<a.length;i+=1)o=a[i].split("="),n[decodeURIComponent(o[0])]=decodeURIComponent(o[1]).replace(/\+/g," ");return t&&n[t]?n[t]:t&&!n[t]?"":n}return""},d.prototype.getCookie=function(e){if(this.isAmp){var t=JSON.parse(window.localStorage.getItem(this.domainId))||{};if(t)return t[e]||null}for(var i,n=e+"=",a=document.cookie.split(";"),o=0;o<a.length;o+=1){for(i=a[o];" "==i.charAt(0);)i=i.substring(1,i.length);if(0==i.indexOf(n))return i.substring(n.length,i.length)}return null},d.prototype.updateGtmMacros=function(){for(var e=[],t=l.optanonHtmlGroupData.length,i=0;i<t;i++)this.endsWith(l.optanonHtmlGroupData[i],":1")&&e.push(l.optanonHtmlGroupData[i].replace(":1",""));for(t=l.optanonHostData.length,i=0;i<t;i++)this.endsWith(l.optanonHostData[i],":1")&&e.push(l.optanonHostData[i].replace(":1",""));for(t=l.genVendorsData.length,i=0;i<t;i++)this.endsWith(l.genVendorsData[i],":1")&&e.push(l.genVendorsData[i].replace(":1",""));for(t=l.vendorsServiceData.length,i=0;i<t;i++)this.endsWith(l.vendorsServiceData[i],":1")&&e.push(l.vendorsServiceData[i].replace(":1",""));var n,a=","+this.serialiseArrayToString(e)+",",o=(window.OnetrustActiveGroups=a,window.OptanonActiveGroups=a,window),s=(this.otDataLayer.ignore||void 0===o[this.otDataLayer.name]?this.otDataLayer.ignore||(o[this.otDataLayer.name]=[{event:"OneTrustLoaded",OnetrustActiveGroups:a},{event:"OptanonLoaded",OptanonActiveGroups:a}]):o[this.otDataLayer.name].constructor===Array&&(o[this.otDataLayer.name].push({OnetrustActiveGroups:a}),o[this.otDataLayer.name].push({OptanonActiveGroups:a})),new CustomEvent("consent.onetrust",{detail:e}));!this.otDataLayer.ignore&&e.length&&(o[this.otDataLayer.name].constructor===Array&&o[this.otDataLayer.name].push({event:"OneTrustGroupsUpdated",OnetrustActiveGroups:a}),n=new CustomEvent("OneTrustGroupsUpdated",{detail:e})),setTimeout(function(){e.length&&window.dispatchEvent(s),n&&window.dispatchEvent(n)})},d.prototype.deserialiseStringToArray=function(e){return e?e.split(","):[]},d.prototype.endsWith=function(e,t){return-1!==e.indexOf(t,e.length-t.length)},d.prototype.serialiseArrayToString=function(e){return e.toString()},d.prototype.setStubScriptElement=function(){l.stubScriptElement=document.querySelector("script[src*='"+l.stubFileName+"']");var e=l.stubScriptElement&&0<=l.stubScriptElement.getAttribute("src").indexOf("did=");l.stubScriptElement&&l.stubScriptElement.hasAttribute(l.DATAFILEATTRIBUTE)?this.domainId=l.stubScriptElement.getAttribute(l.DATAFILEATTRIBUTE).trim():e?this.domainId=l.stubScriptElement.getAttribute("src").split("did=")[1]:l.stubScriptElement||(l.stubScriptElement=document.querySelector("script[src*='"+l.migratedCCTID+"']"),l.stubScriptElement&&(l.isMigratedURL=!0,this.domainId=l.migratedDomainId.trim()))},d.prototype.setDomainDataFileURL=function(){var e=l.stubScriptElement.getAttribute("src"),t=-1<e.indexOf("/consent");e&&(l.isMigratedURL?l.storageBaseURL=e.split("/consent/"+l.migratedCCTID)[0]:l.storageBaseURL=(t?e.split("/consent"):e.split("/scripttemplates/"+l.stubFileName))[0]),this.storageBaseURL=l.storageBaseURL,this.isPreview&&-1===this.domainId.indexOf("test")?this.domainId=this.domainId+"-test":this.isPreview=!1,l.bannerBaseDataURL=l.storageBaseURL&&l.storageBaseURL+"/consent/"+this.domainId,l.bannerDataParentURL=l.bannerBaseDataURL+"/"+this.domainId+".json"},d.prototype.initCustomEventPolyfill=function(){if("function"==typeof window.CustomEvent)return!1;function e(e,t){t=t||{bubbles:!1,cancelable:!1,detail:void 0};var i=document.createEvent("CustomEvent");return i.initCustomEvent(e,t.bubbles,t.cancelable,t.detail),i}e.prototype=window.Event.prototype,window.CustomEvent=e},d.prototype.removeTcf=function(){delete window.__tcfapi;var e=document.querySelectorAll("iframe[name='__tcfapiLocator']")[0];e&&e.parentElement.removeChild(e)},d.prototype.getParamForIE=function(){return{get:function(e){e=new RegExp("[?&]"+e+"=([^&#]*)").exec(window.location.search);return null===e?null:decodeURI(e[1])||""}}},d.prototype.getParam=function(){window.document.documentMode||!window.URLSearchParams?this.urlParams=this.getParamForIE():this.urlParams=new URLSearchParams(window.location.search);var e="true"===this.urlParams.get("otreset"),t="true"===this.urlParams.get("otpreview"),i=(this.geoFromUrl=(this.urlParams.get("otgeo")||"").toLowerCase(),this.readCookieParam(o,"expiry")),n=this.readCookieParam(o,a);this.isReset=e||i&&new Date(i)<new Date,this.isPreview=!this.isReset&&(t||i&&new Date(i)>new Date),this.setGeoParam(this.geoFromUrl||n)},d.prototype.setGeoParam=function(e){var t;e&&((t=window).OneTrust||(t.OneTrust={}),e=e.split(","),t.OneTrust.geolocationResponse={countryCode:e[0],stateCode:e[1]})},d.prototype.updateVersion=function(e){"debug"!==this.buildType&&"cybuild"!==this.buildType||(e.Version="202308.1.0")},d);function d(){var u=this;this.iabType=null,this.iabTypeAdded=!0,this.crossOrigin=null,this.isAmp=!1,this.domainId="",this.isReset=!1,this.isPreview=!1,this.geoFromUrl="",this.nonce="",this.setAttributePolyfillIsActive=!1,this.storageBaseURL="",this.charset=null,this.buildType="undefined",this.addBannerSDKScript=function(e){var t=u.getRegionSet(e),i=(t.GCEnable||(u.updateGtmMacros(),u.gtmUpdated=!0),u.iabTypeAdded&&("IAB"!==t.Type&&"IAB2"!==t.Type&&"IAB2V2"!==t.Type||(u.iabType=t.Type,u.intializeIabStub()),"IAB2"!==t.Type)&&"IAB2V2"!==t.Type&&u.removeTcf(),t.IsGPPEnabled?c.init():c.removeGppApi(),l.stubScriptElement.cloneNode(!0)),n="",n=e.UseSDKRefactor?(l.isMigratedURL&&(i.src=l.storageBaseURL+"/scripttemplates/new/scripttemplates/"+l.stubFileName+".js"),l.storageBaseURL+"/scripttemplates/new/scripttemplates/"+e.Version+"/"+l.bannerScriptName):"5.11.0"===e.Version?(l.isMigratedURL&&(i.src=l.storageBaseURL+"/scripttemplates/old/scripttemplates/"+l.stubFileName+".js"),l.storageBaseURL+"/scripttemplates/old/scripttemplates/5.11.0/"+l.bannerScriptName):(l.isMigratedURL&&(i.src=l.storageBaseURL+"/scripttemplates/"+l.stubFileName+".js"),l.storageBaseURL+"/scripttemplates/"+e.Version+"/"+l.bannerScriptName);["charset","data-language","data-document-language","data-domain-script","crossorigin","data-ignore-ga"].forEach(function(e){l.stubScriptElement.getAttribute(e)&&i.setAttribute(e,l.stubScriptElement.getAttribute(e))}),u.charset=l.stubScriptElement.getAttribute("charset"),u.isAmp=!!l.stubScriptElement.getAttribute("amp"),window.otStubData={bannerBaseDataURL:l.bannerBaseDataURL,crossOrigin:u.crossOrigin,domainData:e,domainId:u.domainId,geoFromUrl:u.geoFromUrl,isAmp:u.isAmp,isPreview:u.isPreview,isReset:u.isReset,mobileOnlineURL:l.mobileOnlineURL,nonce:u.nonce,otDataLayer:u.otDataLayer,regionRule:t,setAttributePolyfillIsActive:u.setAttributePolyfillIsActive,storageBaseURL:u.storageBaseURL,stubElement:i,urlParams:u.urlParams,userLocation:l.userLocation,gtmUpdated:u.gtmUpdated,previewMode:u.previewMode,charset:u.charset},u.jsonp(n,null)},this.intializeIabStub=function(){var e=window;u.iabTypeAdded?("IAB"===u.iabType?void 0===e.__cmp&&(window.__cmp=u.executeCmpApi):void 0===e.__tcfapi&&(window.__tcfapi=u.executeTcfApi),u.addIabFrame()):u.addBackwardIabFrame(),e.receiveOTMessage=u.receiveIabMessage,(e.attachEvent||window.addEventListener)("message",e.receiveOTMessage,!1)},this.addIabFrame=function(){var e=window,t="IAB"===u.iabType?"__cmpLocator":"__tcfapiLocator";!e.frames[t]&&(e.document.body?u.addLocator(t,"CMP"):setTimeout(u.addIabFrame,5))},this.addBackwardIabFrame=function(){var e=window,t="__cmpLocator",t=(!!e.frames[t]||(e.document.body?u.addLocator(t,"CMP"):setTimeout(u.addIabFrame,5)),"__tcfapiLocator");!e.frames[t]&&(e.document.body?u.addLocator(t,"TCF"):setTimeout(u.addIabFrame,5))},this.addLocator=function(e,t){var i=window,n=i.document.createElement("iframe");p(n,"display: none;",!0),n.name=e,n.setAttribute("title",t+" Locator"),i.document.body.appendChild(n)},this.receiveIabMessage=function(i){var n,a,o,s,e,t,r="string"==typeof i.data,p={};try{p=r?JSON.parse(i.data):i.data}catch(e){}p.__cmpCall&&"IAB"===u.iabType?(n=p.__cmpCall.callId,a=p.__cmpCall.command,e=p.__cmpCall.parameter,u.executeCmpApi(a,e,function(e,t){e={__cmpReturn:{returnValue:e,success:t,callId:n,command:a}};i.source.postMessage(r?JSON.stringify(e):e,i.origin)})):p.__cmpCall&&"IAB2"===u.iabType&&console.log("Expecting IAB TCF v2.0 vendor iFrame call; Received IAB TCF v1.1"),p.__tcfapiCall&&"IAB2"===u.iabType?(o=p.__tcfapiCall.callId,s=p.__tcfapiCall.command,e=p.__tcfapiCall.parameter,t=p.__tcfapiCall.version,u.executeTcfApi(s,e,function(e,t){e={__tcfapiReturn:{returnValue:e,success:t,callId:o,command:s}};i&&i.source&&i.source.postMessage&&i.source.postMessage(r?JSON.stringify(e):e,"*")},t)):p.__tcfapiCall&&"IAB"===u.iabType&&console.log("Expecting IAB TCF v1.1 vendor iFrame call; Received IAB TCF v2.0")},this.executeCmpApi=function(){for(var e=[],t=0;t<arguments.length;t++)e[t]=arguments[t];u.iabType="IAB";var i=e[0],n=e[1],a=e[2];if("function"==typeof a&&i)if(l.isStubReady&&l.IABCookieValue)switch(i){case"ping":u.getPingRequest(a,!0);break;case"getConsentData":u.getConsentDataRequest(a);break;default:u.addToQueue(i,n,a)}else u.addToQueue(i,n,a)},this.executeTcfApi=function(){for(var e=[],t=0;t<arguments.length;t++)e[t]=arguments[t];if(u.iabType="IAB2",!e.length)return window.__tcfapi.a||[];var i=e[0],n=e[1],a=e[2],o=e[3];"function"==typeof a&&i&&("ping"===i?u.getPingRequest(a):u.addToQueue(i,n,a,o))},this.addToQueue=function(e,t,i,n){var a=window,o="IAB"===u.iabType?"__cmp":"__tcfapi";a[o].a=a[o].a||[],a[o].a.push([e,t,i,n])},this.getPingRequest=function(e,t){var i,n;void 0===t&&(t=!1),e&&(n=!(i={}),"IAB"===u.iabType?(i={gdprAppliesGlobally:l.oneTrustIABgdprAppliesGlobally,cmpLoaded:t},n=!0):"IAB2"!==u.iabType&&"IAB2V2"!==u.iabType||(i={gdprApplies:l.oneTrustIABgdprAppliesGlobally,cmpLoaded:!1,cmpStatus:"stub",displayStatus:"stub",apiVersion:"2.0",cmpVersion:void 0,cmpId:void 0,gvlVersion:void 0,tcfPolicyVersion:void 0},n=!0),e(i,n))},this.getConsentDataRequest=function(e){e&&l.IABCookieValue&&e({gdprApplies:l.oneTrustIABgdprAppliesGlobally,hasGlobalScope:l.hasIABGlobalScope,consentData:l.IABCookieValue},!0)},this.initConsentSDK()}var m=new u;return e.OtSDKStub=u,e.otSdkStub=m,e}({});(()=>{var s="OneTrust";var _=()=>!!globalThis[s]&&globalThis[s].GetDomainData,g=new Promise(e=>{_()&&e(!0);let t=0,o=setInterval(()=>{if(t++,t>=500){clearInterval(o),e(!1);return}_()&&(clearInterval(o),e(!0))},10)});var C=async()=>g.then(()=>globalThis[s]||{});var y="otloc",S="geolocationResponse";var b=()=>C().then(e=>{try{if(window[s][S]||sessionStorage[y])return;let t=e.getGeolocationData();t.country&&sessionStorage.setItem(y,btoa(JSON.stringify(t)))}catch{}}).catch();var R="gdpr:groups-update",x=async()=>{if(!window.performance)return;let{duration:e,startTime:t}=performance.getEntriesByType("resource").find(o=>o.initiatorType==="script"&&o.name.includes("otSDKStub.js"));performance.measure("OneTrust CDN Resp",{duration:e,start:t}),window.onGdprReady.then(()=>{let o=performance.getEntriesByName(R).find(n=>n.entryType==="mark");performance.measure("OneTrust Groups Ready",{start:t,end:o.startTime})}).catch(()=>{})};var I="OneTrustGroupsUpdated";var i="OnetrustActiveGroups",P="sfdcConsent";var f="onetrust-consent-sdk",a="OneTrust";var v=()=>!!globalThis[a]&&globalThis[a].GetDomainData,u=new Promise(e=>{v()&&e(!0);let t=0,o=setInterval(()=>{if(t++,t>=500){clearInterval(o),e(!1);return}v()&&(clearInterval(o),e(!0))},10)});var m=async()=>u.then(()=>globalThis[a]||{});var A=globalThis.document||{},D=e=>{let t={};try{let o=JSON.parse(e);return o||t}catch{return t}},O=(e="",t)=>{let o=A.cookie,n=`${e}=`;if(o.indexOf(n)<0)return"";let r=o.split("; ").find(p=>p.includes(n))||"";if(r=r.substring(n.length,r.length),!r||r===n)return"";typeof t=="function"&&(r=t(r)),r=decodeURIComponent(r);let l=D(r);return Object.keys(l).length?l:r};var N=()=>globalThis[i]||"1",T=e=>{let t=(e||N()).split(",").reduce((o,n)=>n?[...o,parseInt(n)]:o,[]);return t.includes(1)||t.push(1),t};var w=e=>globalThis.addEventListener(I,e);var U=new Promise(e=>{let t=globalThis[i];if(t)return e(t);let o=O(P);o&&e(T(o)),w(()=>{globalThis[i]&&e(T(globalThis[i]))})});var h=async()=>new Promise(e=>{let t=globalThis.document.querySelector(`#${f}`);if(t)return e(t);new MutationObserver((n,c)=>{let r=n.filter(l=>[...l.addedNodes].find(p=>p.id===f));r.length&&(c.disconnect(),e(r[0].target))}).observe(globalThis.document.body,{childList:!0,subtree:!0})});var ut=globalThis.document||{};var F=["webactls","cvtdt","c22","c30","c40","v0","v4","v20","v22","v28","v32"],M=["webact","lastvaliddriver"],d={1:["JSESSIONID","eupubconsent","_sdsat_xxxxxxxxxxx","OptanonAlertBoxClosed","web_core_geoCountry","web_core_regionSelectOverride","SSID","X-Salesforce-CHAT","videoId","guided-tour-selection","s_vi","privacy_bar","AKA_A2","sfdcConsent","locale",...M],3:["appxud","s_pers","Lp","roi","AEM Client Context","s_sess","db","l_cloud","chat","kxsfdc","ptb","ptc","version","is","iv","check","BrowserId","closedInitialChat",...F]};var gt=new Promise(e=>m().then(t=>t.GetDomainData().Groups).then(t=>{e(t.reduce((o,n)=>(n.Cookies.length&&(o[n.OptanonGroupId]=n.Cookies.reduce((c,r)=>[...c,r.Name],[])),d[n.OptanonGroupId]&&(o[n.OptanonGroupId]=[...o[n.OptanonGroupId],...d[n.OptanonGroupId]]),o),{}))}).catch(t=>{console.warn("Could not retrieve One Trust configs"),e(d)}));var It=globalThis.document||{},Pt=globalThis.location||{};var Gt=globalThis.document||{},wt=globalThis.location||{};var E=()=>h().then(e=>{let t=e.querySelector("#ot-lst-title button.ot-link-btn.back-btn-handler"),o=e.querySelector("#ot-lst-title h3");t&&o&&t.appendChild(o)}),k=()=>h().then(e=>{try{let t=e.querySelectorAll(".category-menu-switch-handler"),o=e.querySelector("#ot-tab-desc");t[0].addEventListener("keydown",n=>{n.shiftKey===!1&&n.keyCode===9&&$(o)})}catch{}}),$=e=>{setTimeout(()=>{e.focus()},100)};(async()=>(x(),b(),globalThis.document.readyState==="loading"?globalThis.document.addEventListener("DOMContentLoaded",()=>{}):(E(),k())))();})();