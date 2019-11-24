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


 	    $(".sbg").live("mouseover", function(){$(this).css('background', 'white');});

       	$(".sbg").live("mouseout", function(){$(this).css('background', 'rgba(255, 255, 255, 0.45)');});


    	$("#lif").click(function(){
            if ($("#Parcour").html().length < 5) {
                $("#Parcour").load("templates/parcours.html");
            };

            $("#Parcour").css("height","1400px");


            $("#top-center").css("opacity","1");


            $("#top-left").css("opacity","0");


            $("#top-right").css("opacity","0");


            $("#Parcour").css("top","60px");


            $("#top-bar").css("background","#935130");

        });

        $("#lis").click(function() {
            if ($("#Realisation").html().length < 5) {
                $("#Realisation").load("templates/réalisations.html");
            };
            setAutoHeight($("#Outils"));
            // $("#Realisation").css("height", "2175px");
            $("#top-center").css("opacity", "1");
            $("#top-left").css("opacity", "0");
            $("#top-right").css("opacity", "0");
            $("#top-bar").css("background", "#75A319");
            $("#Realisation").css("top", "60px");
        });

       $("#lit").click(function(){
            if ($("#Outils").html().length < 5) {
                $("#Outils").load("templates/outils.html");
            };

           setAutoHeight($("#Outils"));
            // $("#Outils").css("height","2355px");
            $("#top-bar").css("background","#CCB100");
            $("#top-left").css("opacity","0");
            $("#top-right").css("opacity","0");
            $("#top-center").css("opacity","1");

            $("#Outils").css("top","60px");
       });

    	$("#top-center").click(function(){
    	    $("#top-center").css("opacity","0");
    	    $("#top-bar").css("background","#2477AD");

    	    $("#top-left").css("opacity","1");
    	    $("#top-right").css("opacity","1");

    	    $("#Outils").css("height","0");
    	    $("#Outils").css("top","100%");

    	    $("#Realisation").css("height","0");
    	    $("#Realisation").css("top","100%");

    	    $("#Parcour").css("height","0%");
    	    $("#Parcour").css("top","100%");

    	});

    	function setAutoHeight(DOMElement){
            var elementH = DOMElement.height();
            var bodyH = $('body').height();
            elementH = elementH > body ? elementH : bodyH;
            DOMElement.height(elementH);
        }
    });
