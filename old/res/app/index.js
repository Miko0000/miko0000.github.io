const app = {};

window.addEventListener("load", function init(){
  for(const [ key, f ] of Object.entries(app)){
    f();
  }
  
  for(const el of document.querySelectorAll("head style.noscript"))
    el.remove();
});