app["clock"] = function appClockInit(){
  function zefix(n){
    return String(n).length > 1 ? n : `0${n}`;
  }
  
  function getDate(){
    const date = new Date();
    
    return zefix(date.getHours())
      + (Math.floor(Date.now()/1000) % 2 ? ':' : ' ')
      + zefix(date.getMinutes())
  }
  
  const element = document.querySelector(".app.clock");
  element.textContent = getDate();
  
  setInterval(function tick(){
    element.textContent = getDate();
  }, 1000);
}