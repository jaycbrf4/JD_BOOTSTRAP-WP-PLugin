(function($){   //Declare jQuery NameSpace

  
  $(document).ready(function(){
     if (jQuery) {  
       // jQuery is loaded  
       alert("Yeah Baby We Got jQuery!");
     } else {
       // jQuery is not loaded
       alert("Doesn't Work");
     }
  });

})(jQuery);


