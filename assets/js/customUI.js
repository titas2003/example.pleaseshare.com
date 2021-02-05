var previousScroll = 0;
var x=0;
    $(window).scroll(function(){
       var currentScroll = $(this).scrollTop();
       if (currentScroll > previousScroll){
           x=x+1;
       } else {
          x=x-1;
       }
       previousScroll = currentScroll;
       if(x<0) {
           x=0;
       }
       var y=x*10;
       this.console.log(x);

            setInterval(function() {
                if(x>0) {
                // $("#aboutUsText").css("display","block");
                // $('#aboutUsText').attr('class', 'animate-right');
                // $("#aboutUsImg").css("display","block");
                // $('#aboutUsImg').attr('class', 'animate-right');
                $("#aboutCard").css("display","block");
                //$("#aboutClass").attr('class','card');
                $("#aboutCard").addClass('animate-right');
                if(x>5) {
                  $("#serviceCard").css("display","block");
                  $("#serviceCard").addClass('animate-left');
                }


                // $("#animateProgress").removeClass("progress-bar");
                }
                // if(x>10) {
                //     $("#contactUs").css("display","block");
                //     $("#contactUs").attr('class','animate-right');
                // }

            },150);

    });
