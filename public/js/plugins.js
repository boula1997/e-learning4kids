






// lama el screen t5ls loading el div bt3 el overlay ytshal b3d 1 sec 
// w kman el overflow f el style css el hidden ytshal 3ashane l scrolling ysht3'al
// loading screen

$(window).on('load',function()
             {
    
                
        
       
          //Loading Elements
                $(".loading-overlay .sk-folding-cube").fadeOut(5000,
            function()
                            {  
                                                 $(this).parent().fadeOut(2000,
            function() 
                        {
                                                      $("body").css("overflow","auto");
                                                       
                    $(this).remove();
                        });
                            });
        
});
                                               
                    