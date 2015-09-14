 jQuery(document).ready(function(){

        $("#top-left").live("click", function(){
            if ($("#contact").html().length < 5) {
                $("#contact").load("templates/contact.html");
            };
            $('#contact').css('left', '0');
        });

        $("#back-home").live("click", function(){
            $('#contact').css('left', '-100%');
        });


        $("#top-left, #top-right, #top-center, #lif, #lis, #lit, #back-home, #corp-contact").live("mouseover", function(){$(this).addClass('over');});      
        $("#top-left, #top-right, #top-center, #lif, #lis, #lit, #back-home, #corp-contact").live("mouseout", function(){$(this).removeClass('over');});

 	    $(".sbg").mouseover(function(){$(this).css('background', 'white');});

       	$(".sbg").mouseout(function(){$(this).css('background', 'rgba(255, 255, 255, 0.45)');}); 


    	$("#lif").click(function(){
            if ($("#Parcour").html().length < 5) {
                $("#Parcour").load("templates/parcours.html");
            };
    		document.getElementById("Parcour").style.height="1400px";
    		document.getElementById("top-center").style.opacity="1";
    		document.getElementById("top-left").style.opacity="0";
    		document.getElementById("top-right").style.opacity="0";
    		document.getElementById("Parcour").style.top="60px";
    		document.getElementById("top-bar").style.background="#935130";
    	});

    	$("#lis").click(function(){
            if ($("#Realisation").html().length < 5) {
                $("#Realisation").load("templates/réalisations.html");
            };
    		document.getElementById("Realisation").style.height="1500px";
    		document.getElementById("top-center").style.opacity="1";
    		document.getElementById("top-left").style.opacity="0";
    		document.getElementById("top-right").style.opacity="0";
    		document.getElementById("top-bar").style.background="#75A319";
    		document.getElementById("Realisation").style.top="60px";}); 

    	$("#lit").click(function(){
            if ($("#Outils").html().length < 5) {
                $("#Outils").load("templates/outils.html");
            };
    		document.getElementById("Outils").style.height="2100px";  
    		document.getElementById("top-bar").style.background="#CCB100";
    		document.getElementById("top-left").style.opacity="0";
    		document.getElementById("top-right").style.opacity="0";
    		document.getElementById("top-center").style.opacity="1";
    		document.getElementById("Outils").style.top="60px";});

    	$("#top-center").click(function(){
    		document.getElementById("top-center").style.opacity="0";
      		document.getElementById("top-bar").style.background="#2477AD";

    		document.getElementById("top-left").style.opacity="1";
    		document.getElementById("top-right").style.opacity="1";

    		document.getElementById("Outils").style.height="0";
    		document.getElementById("Outils").style.top="100%";

    		document.getElementById("Realisation").style.height="0";
    		document.getElementById("Realisation").style.top="100%";

    		document.getElementById("Parcour").style.height="0%";
    		document.getElementById("Parcour").style.top="100%";
    	});
    });
