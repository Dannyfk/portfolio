// When the user clicks on the button, scroll to the top of the document
function toTheTop() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera 
    document.documentElement.scrollTop = 0; // For IE and Firefox
}

var scrollLimit = 1080;
$(window).on('scroll',function(){
    // we round here to reduce a little workload
    stop = Math.round($(window).scrollTop());
    // we add the class for styling of the nav if the user scrolls past the scrollLimit
    if (stop > scrollLimit) {
        document.getElementById("nav").style.position = "fixed";
        $('#portfolioSection').css("margin-top", "70px");
    } else {
        document.getElementById("nav").style.position = "";
        $('#portfolioSection').css("margin-top", "0px");
   }
});