
  $(document).ready(function(){
     function desvanecer(){
       $("#nombre").fadeOut(4000); 
	   }
     setTimeout(desvanecer,1000);

     function aparecer(){
     	$("#autor").fadeIn(5000);
     }
     setTimeout(aparecer,5000);

     

      //Habilita os tooltips
      $('[data-toggle="tooltip"]').tooltip(); 


      //Botóns de máis/menos lectura.
      $(".more, button.readless").hide();
      
      $("button.readmore").click(function(){
          $(".more, button.readless").show("slow");
          $(this).hide();
      });

      $("button.readless").click(function(){
          $(".more, button.readless").hide("slow");
          $("button.readmore").show("slow");
      });

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 2000, 'easeInOutExpo');
        event.preventDefault();
    });
});
      
  });
 