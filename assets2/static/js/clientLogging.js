var S=Object.create;var b=Object.defineProperty;var I=Object.getOwnPropertyDescriptor;var U=Object.getOwnPropertyNames;var N=Object.getPrototypeOf,k=Object.prototype.hasOwnProperty;var u=(e,t)=>()=>(t||e((t={exports:{}}).exports,t),t.exports);var C=(e,t,r,n)=>{if(t&&typeof t=="object"||typeof t=="function")for(let o of U(t))!k.call(e,o)&&o!==r&&b(e,o,{get:()=>t[o],enumerable:!(n=I(t,o))||n.enumerable});return e};var x=(e,t,r)=>(r=e!=null?S(N(e)):{},C(t||!e||!e.__esModule?b(r,"default",{value:e,enumerable:!0}):r,e));var d=u(c=>{"use strict";Object.defineProperty(c,"__esModule",{value:!0});c.joinPath=c.splitPath=void 0;var p="/",M=e=>e?e.trim().split(p).filter(t=>!!t):[];c.splitPath=M;var G=(...e)=>{let t=`${p}${e.reduce((n,o)=>[...n,...(0,c.splitPath)(o)],[]).join(p)}`,r=e[e.length-1];return e&&r.endsWith(p)&&(t+=p),t};c.joinPath=G});var O=u((de,H)=>{H.exports={us:{loc:"us",lang:"en"},ca:{loc:"ca",lang:"en"},fr:{loc:"fr",lang:"fr"},"fr-ca":{loc:"ca",lang:"fr"},"fr-ch":{loc:"ch",lang:"fr"},uk:{loc:"gb",lang:"en"},de:{loc:"de",lang:"de"},"de-ch":{loc:"ch",lang:"de"},es:{loc:"es",lang:"es"},it:{loc:"it",lang:"it"},nl:{loc:"nl",lang:"nl"},"nl-be":{loc:"nl",lang:"be"},se:{loc:"se",lang:"sv"},eu:{loc:"eu",lang:"en"},mx:{loc:"mx",lang:"es"},br:{loc:"br",lang:"pt"},au:{loc:"au",lang:"en"},in:{loc:"in",lang:"en"},jp:{loc:"jp",lang:"ja"},kr:{loc:"kr",lang:"ko"},th:{loc:"th",lang:"th"},tw:{loc:"tw",lang:"zh"},hk:{loc:"hk",lang:"zh"},cn:{loc:"cn",lang:"zh"},my:{loc:"my",lang:"en"},ap:{loc:"ap",lang:"en"},latam:{loc:"latam",lang:"es"},no:{loc:"no",lang:"no"},dk:{loc:"dk",lang:"da"},pl:{loc:"pl",lang:"pl"},tr:{loc:"tr",lang:"tr"},fi:{loc:"fi",lang:"fi"},ch:{loc:"ch",lang:""}}});var L=u(i=>{"use strict";var F=i&&i.__importDefault||function(e){return e&&e.__esModule?e:{default:e}};Object.defineProperty(i,"__esModule",{value:!0});i.UrlLocale=void 0;var W=d(),w=F(O()),v="us",m=class{constructor(t){if(this.langLoc="",this.urlLoc="",this.basePath="",this.loc="",this.lang="",this.segs=[],this.setBasePath=()=>{this.loc!==v&&this.segs.splice(0,1),this.basePath=`/${this.segs.join("/")}`},!t)return;this.segs=(0,W.splitPath)(t),this.urlLoc=this.segs.length&&this.segs[0]in w.default?this.segs[0]:v;let r=Object.assign(w.default[this.urlLoc]);this.lang=r.lang,this.loc=r.loc,this.langLoc=`${this.lang}-${this.loc}`,this.setBasePath()}};i.UrlLocale=m});var P=u(s=>{"use strict";Object.defineProperty(s,"__esModule",{value:!0});s.joinPath=s.splitPath=s.UrlLocale=void 0;var q=L();Object.defineProperty(s,"UrlLocale",{enumerable:!0,get:function(){return q.UrlLocale}});var y=d();Object.defineProperty(s,"splitPath",{enumerable:!0,get:function(){return y.splitPath}});Object.defineProperty(s,"joinPath",{enumerable:!0,get:function(){return y.joinPath}})});var a=globalThis.sfdcBase||{};var h=e=>!e||e instanceof Object&&!Object.keys(e).length;var ce=!!(a.env&&a.env.toLowerCase()==="prod");var E=e=>{let t=localStorage.getItem(e);try{t=JSON.parse(t)}catch{}return t??""};var B="webactls";globalThis.digitalData=globalThis.digitalData||{page:{},user:[{}],localStorage:{...E(B)||{}},util:{}};globalThis.digitalData.timestamp=globalThis.digitalData.timestamp||new Date().getTime();var $=globalThis.digitalData;var j=x(P(),1);var g={WARN:"warn",INFO:"info",DEBUG:"debug",DEPRECATE:"deprecate"},J="client-libs-debug",_=async(e,...t)=>{let r=sessionStorage.getItem(J),n=r==="mute";if(!t.length||n)return;let o=console,f="trace",l;switch(e){case g.DEPRECATE:l=o[f],t=`${t} has been deprecated. Please update or remove reference`;break;case g.DEBUG:r&&!n&&(l=o[f]);break;case g.INFO:case g.WARN:l=o[e];break}typeof l=="function"&&l(t)};var z="https://a.sfdcstatic.com",V="/digital/@sfdc-www/clientlibs-web-components",Y="v1",K="gdpr.js",X="v1",Q="/digital/one-trust/ext";var D={QA:"latest",UAT:"stage",PROD:"stable",DEV:"latest",INT:"stage",HOTFIX:"stable"},T="Could not import module URL: ",Z={ver:Y,path:V},ee=(e,t=Z)=>{if(e)try{let r=a.env||"",n=r&&D[r]?D[r]:"stable",o=new URL(t.path,z);return o.pathname+=`/${[`${t.ver}-${n}`,e].join("/")}`,o.toString()}catch{}},te=(e,t)=>{let r=ee(e,t);return r?import(r).catch(n=>{_(g.WARN,`${T} ${r}`)}):Promise.reject(`${T} ${e}`)},Le=te(K,{ver:X,path:Q});var A=x(P(),1);var re=a.clientErrorEndpoint;window.clerrPool=window.clerrPool||{};var oe=a.clientErrorThreshold?a.clientErrorThreshold:10,ne=async e=>{if(!e)return;let t=window.clerrPool[e];t&&t.length>0&&navigator.sendBeacon(e,JSON.stringify(t)),window.clerrPool[e]=[]};var R=(e,t,r="info",n=re)=>{if(h(t))return;Object.entries(t).forEach(([f,l])=>{l instanceof Event&&delete t[f]});let o=window.clerrPool[n]||[];o.push({msg:e,logLevel:r,data:{...t,location:window.location.href,ua:navigator.userAgent}}),window.clerrPool[n]=o,o.length>=oe&&ne(n)};export{R as clerrLog,R as default};
//# sourceMappingURL=clientLogging.js.map