async function composerCommand(e,t){const[s,...o]=e.trim().split(/ +/),n=composerCommands[s];if(n)return await n.apply(this,[t,...o])}async function composer(e,t){t=t||Object.assign([document.createElement("span")],{f:[],reset(){this.unshift(document.createElement("span"))}});let n=0,o="",s=0;for(;n<e.length;){for(;n<e.length&&e[n]!="{";){const s=t[0].cloneNode(1);s.textContent=e[n++],t.unshift(s)}if(n>=e.length)break;for(n++,s++;n<e.length&&s>0;){if(e[n]=="{"&&(s++,n++),e[n]=="}"&&(s--,n++),s<=0)break;o+=e[n++]}await composerCommand(o,t),o=""}return t.reverse()}function composerHighlight(e){let t=0;const n=[document.createElement("span")];for(;t<e.length;){if(e[t]=="{"){const o=document.createElement("span");o.innerText="{",o.classList.add("composer","composer-tag"),n.unshift(o);const s=document.createElement("span");for(s.innerText="",s.classList.add("composer","composer-command"),n.unshift(s),t++;e[t]&&e[t]==" ";)o.innerText+=e[t++];for(;e[t]&&e[t]!=" ";)s.innerText+=e[t++];for(;e[t]&&e[t]==" ";)s.innerText+=e[t++];const i=document.createElement("span");i.innerText="",i.classList.add("composer","composer-param"),n.unshift(i)}if(e[t]=="}"){const e=document.createElement("span");e.innerText="}",e.classList.add("composer","composer-tag"),n.unshift(e),n.unshift(document.createElement("span")),t++}if(t>=e.length)break;if(e[t]===`
`){n.unshift(document.createElement("br"));let e=n[1].cloneNode();e.innerText="",n.unshift(e)}else n[0].innerText+=e[t];t++}return console.log(e),n.reverse()}