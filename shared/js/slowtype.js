(globalThis||window).jskit=(globalThis||window).jskit||{},jskit.slowType=function(e,t,n,s,o="textContent"){let i=0,a=Date.now(),r,c;const l=new Promise((e,t)=>(r=e,c=t));return requestAnimationFrame(function c(){if(i>t.length)return r();if(a>Date.now())return requestAnimationFrame(c);a=Date.now()+1e3/s,e[o]=e[o]+t.slice(i,i+=n),requestAnimationFrame(c)}),l}