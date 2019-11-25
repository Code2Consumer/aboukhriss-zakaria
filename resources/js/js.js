 jQuery(document).ready(function(){
     var color =[
        "#2477AD",
        "#34d3a4",
        "#fed766",
        "#f25f5c",
        // "#848bd6"
     ]
    	$("#top-left").live("click", function(){
            if ($("#contact").html().length < 5) {
                loadTemplate($("#contact"));
            };
    		$('#contact').css('left', '0');
        });

    	$("#back-home").live("click", function(){
    		$('#contact').css('left', '-100%');
    	});


    	$("#top-left, #top-right, #top-center, #lif, #lis, #lit, #back-home, #corp-contact").live("mouseover", function(){$(this).addClass('over');});
    	$("#top-left, #top-right, #top-center, #lif, #lis, #lit, #back-home, #corp-contact").live("mouseout", function(){$(this).removeClass('over');});


 	    $(".sbg").live("mouseover", function(){$(this).css('background-color', 'white');});
       	$(".sbg").live("mouseout", function(){$(this).css('background-color', 'rgba(255, 255, 255, 0.45)');});
//target-id

         $(".button-page").click(function(){
             var domElement = $('#'+$(this).data('target-id'));
             if (domElement.html().length < 5) {
                 loadTemplate(domElement);
             };
             setAutoHeight(domElement);
             $("#top-bar").css("background", domElement.css('background-color'));
             $("#top-center").css("opacity","1");
             $("#top-left").css("opacity","0");
             $("#top-right").css("opacity","0");
             $(domElement).css("top","60px");
         });


    	$("#top-center").click(function(){
    	    $("#top-center").css("opacity","0");
    	    $("#top-bar").css("background", $('body').css('background-color'));

    	    $("#top-left").css("opacity","1");
    	    $("#top-right").css("opacity","1");

    	    $(".page-container").css("height","0");
    	    $(".page-container").css("top","100%");
    	});

    	function loadTemplate(DOMlement, templatePath){
    	    var url = DOMlement.data('url');
    	    $.ajax({
                url : url,
                type : 'GET',
                dataType : 'html',
                success : function(code_html, statut){
                    DOMlement.html(code_html);
                },
                error : function(resultat, statut, erreur){
                    alert(erreur);
                }

            });
        }

    	function setAutoHeight(DOMlement){
            var elementH = DOMlement.height();
            var bodyH = $('body').height();
            elementH = elementH > bodyH ? elementH : bodyH;
            console.log(elementH);
            DOMlement.height(elementH);
        }
    });
