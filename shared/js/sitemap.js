const sitemap={};sitemap.treant=function(e){function t(e){return{text:{name:e.name||"Unnamed"},link:{href:e["data-url"]},children:e.map(t)}}return t(e)},sitemap.fetch=async function(e="./"){async function t(e){try{const o=await fetch(e+"/sitemap"),i=await fetch(e+"/sitemap.attribute");if(!o.ok)throw"Not OK";const a=await o.text(),r=i.ok?await i.text():"Error",s=a.split(`
`);let n=[];for(const o of s)n.push(t(`${e}/${o}`));n=await Promise.all(n),n.attribute=r;for(let t=0;t<n.length;t++)n[t].name=s[t],n[t]["data-url"]=`${e}/${s[t]}`;return n}catch(t){console.log(t);const e=[];return e.attribute="Error",e}}const n=await t(e);return n.name=e,n}