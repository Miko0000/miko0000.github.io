/*
*/

window.qevent = function(event, query, f){
  const _this = this || window;
  let queries = _this.qeventListeners[event];
  
  if(queries){
    const listeners = queries.find(([ name ]) => name === query);
    if(listeners){
      listeners[1].push(f);
      
      return this;
    }
    
    queries.push([ query, [ f ] ]);
    
    return this;
  }
  
  queries = _this.qeventListeners[event] = [ [ query, [ f ] ] ];
  _this.addEventListener(event, function({ target }){
    for(const [ q, fs ] of queries)
      if(target.matches(q))
        for(const f of fs)
          f.apply(this, arguments);
  });
  
  return _this;
}

window.qeventListeners = {};