function main(){
  const noSStyles = document.querySelectorAll("head style.noscript");
  
  for(const style of noSStyles){
    style.remove();
  }
  
  for(const [ name, f ] of Object.entries(app)){
    f();
  }
}

window.addEventListener("load", main);