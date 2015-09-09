(function (window, document) {

    var layout   = document.getElementById('layout'),
        menu     = document.getElementById('menu'),
        menuLink = document.getElementById('menuLink');

    function toggleClass(element, className) {
        var classes = element.className.split(/\s+/),
            length = classes.length,
            i = 0;

        for(; i < length; i++) {
          if (classes[i] === className) {
            classes.splice(i, 1);
            break;
          }
        }
        // The className is not found
        if (length === classes.length) {
            classes.push(className);
        }

        element.className = classes.join(' ');
    }

    menuLink.onclick = function (e) {
        var active = 'active';

        e.preventDefault();
        toggleClass(layout, active);
        toggleClass(menu, active);
        toggleClass(menuLink, active);

    };
	layoutSpecs();

}(this, this.document));

window.onresize = function(){
	layoutSpecs();
}
function layoutSpecs(){

    var layoutHeight = $(window).innerHeight() - $(".header").outerHeight();
    layoutHeight = layoutHeight > 500?500:layoutHeight;
    $("#layout").outerHeight(layoutHeight);
    $(".content").outerHeight(layoutHeight - 50);
    var pos = $(".content").offset();
    if(pos.left - 150 >= 120){
	   $("#pillarPng").css("display","block");
	   $("#pillarPng").css("left",150+(pos.left-150-100)/2);

	   $("#topPillar").css("display","block");
	   $("#topPillar").css("left",150+(pos.left-150-100)/2-17);

	   $("#bottomPillar").css("display","block");
	   $("#bottomPillar").css("left",150+(pos.left-150-100)/2-19);

	   $("#menuShadow").css("display","block");
	   $("#menuShadow").css("width",150+(pos.left-150-100)/2+25);
   }else{
	   $("#pillarPng").css("display","none");
	   $("#topPillar").css("display","none");
	   $("#bottomPillar").css("display","none");
	   $("#menuShadow").css("display","none");
   }
   
}
