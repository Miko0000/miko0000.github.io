let _scouts=[];window.addEventListener("DOMContentLoaded",function(){_scouts.push(...document.querySelectorAll(".scout"))}),window.addEventListener("scroll",_scouts.handler=function(){for(const t of _scouts){const e=t.getBoundingClientRect();e.top>0&&e.top<window.innerHeight&&e.left>0&&e.left<window.innerWidth&&t.dispatchEvent(new CustomEvent("scout",{detail:{bound:e}}))}}),window.addEventListener("scrollend",_scouts.handler)