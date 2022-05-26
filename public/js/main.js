function stickyHeader(){
    $(".marketplace__filter").stick_in_parent({bottoming:false});

};

function stickySidebar(){
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop(); 
        console.log(scroll);   
        if (scroll >= 288) {
            $(".filter__sidebar").addClass("sticky");
            $(".marketplace .card__listing").addClass("sticky");
        }else{
            $(".filter__sidebar").removeClass("sticky");
            $(".marketplace .card__listing").removeClass("sticky");

        }
    })
    
}

$(document).ready(function(){
    stickyHeader();
    stickySidebar();
});