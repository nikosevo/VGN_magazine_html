var mouseWheelEvt = function (event) {
    if (document.getElementById('scroll_container').doScroll)
        document.getElementById('scroll_container').doScroll(event.wheelDelta > 0 ? "left" : "right");
    else if ((event.wheelDelta || event.detail) > 0)
        document.getElementById('scroll_container').scrollLeft -= 150;
    else
        document.getElementById('scroll_container').scrollLeft += 150;

    return false;
}
document.getElementById('scroll_container').addEventListener("mousewheel", mouseWheelEvt);



var mouseOverAuthors = false;
function mouseStatus(boolean){
  mouseOverAuthors = boolean;
  if(mouseOverAuthors){
      disableScroll();
  }else{
      enableScroll();
  }
}


function disableScroll() {
    // Get the current page scroll position
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
  
        // if any scroll is attempted, set this to the previous value
        window.onscroll = function() {
            window.scrollTo(scrollLeft, scrollTop);
        };
}
  
function enableScroll() {
    window.onscroll = function() {};
}
