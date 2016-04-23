/**
* FileName: base.js
*
* Description: Serves as our base Javascript object that provides base functionality throughout our app.
*
*
**/


var MainApp = (function(){
  
  
  
  
  
  
   app = function(){
    
    
    
    
    
    
  };

  
  search = function(){
    
    
    
    
    
    
  };
  
  //We follow the format -
  //Each argument is an object.
  //{element, eventName:, function: }
  register_event = function(){
    
    var args = Array.prototype.slice.call(arguments);
    
    //Now we break this up into our events.
    for(var i=0;i<args.length; i++){
      args[i].element.on(args[i].eventName, args[i].function);
    
    }
    
    
    
  };
  
  register_ajax = function(){
    
    var args = Array.prototype.slice.call(arguments);
    
    
    
    
    
  };
  
  
  return {
    
    
    
    
  };
  
  

  
})();