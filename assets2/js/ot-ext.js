"use strict";(()=>{var c=globalThis.sfdcBase||{};var a={WARN:"warn",INFO:"info",DEBUG:"debug",DEPRECATE:"deprecate"},O="client-libs-debug",p=async(s,...e)=>{let t=sessionStorage.getItem(O),r=t==="mute";if(!e.length||r)return;let n=console,i="trace",o;switch(s){case a.DEPRECATE:o=n[i],e=`${e} has been deprecated. Please update or remove reference`;break;case a.DEBUG:t&&!r&&(o=n[i]);break;case a.INFO:case a.WARN:o=n[s];break}typeof o=="function"&&o(e)};var E="https://a.sfdcstatic.com",D="/digital/@sfdc-www/clientlibs-web-components",y="v1",C="gdpr.js",L="v1",_="/digital/one-trust/ext";var f="page-utils.js",g={QA:"latest",UAT:"stage",PROD:"stable",DEV:"latest",INT:"stage",HOTFIX:"stable"},l="Could not import module URL: ",P={ver:y,path:D},w=(s,e=P)=>{if(s)try{let t=c.env||"",r=t&&g[t]?g[t]:"stable",n=new URL(e.path,E);return n.pathname+=`/${[`${e.ver}-${r}`,s].join("/")}`,n.toString()}catch{}},d=(s,e)=>{let t=w(s,e);return t?import(t).catch(r=>{p(a.WARN,`${l} ${t}`)}):Promise.reject(`${l} ${s}`)},N=d(C,{ver:L,path:_});var T=s=>new Promise(e=>{let t=document.querySelector(`#${s}`);t&&e(t),new MutationObserver((n,i)=>{let o=n.filter(u=>[...u.addedNodes].find(m=>m.id===s));o.length&&(i.disconnect(),e(o[0].target))}).observe(document.body,{childList:!0,subtree:!0})}),U=async()=>{((c.page||{}).pagename||await d(f).then(e=>e.getPageName())).indexOf(":company:privacy")>-1&&!document.cookie.includes("OptanonAlertBoxClosed")&&T("onetrust-consent-sdk").then(e=>e.style.display="none")};(async()=>U())();})();
//# sourceMappingURL=ot-ext.js.map
