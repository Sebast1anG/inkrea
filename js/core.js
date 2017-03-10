$(function(){
  
    $(".active_tab").css("display", "block");
    
    $(document).everyTime(3000, function(i) {
        
        $(".active_tab").fadeOut("normal", function(){

            if($(".active_tab").next("li").html() == null)
            {
                $(".active_tab").removeClass("active_tab");
                $("#tabs > li:first").addClass("active_tab");
                $(".active_tab").fadeIn("normal");  
            }
            else
            {
                $(".active_tab").removeClass("active_tab").next("li").addClass("active_tab");
                $(".active_tab").fadeIn("normal");          
            }
                
        });

    });
});