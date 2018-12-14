$(document).ready(function() {
  $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
  });
});


//Enlarge image on hover
function bigImg(x) {
    //console.log(x.firstChild.nextSibling);
    x.firstChild.nextSibling.style.height = "178px";
    x.firstChild.nextSibling.style.width = "206px";
    x.firstChild.nextSibling.nextSibling.nextSibling.style.display = "inline";
    $(x).css('box-shadow', '0 0 10px #000000');
	$(x).css('background-color','#ffffff');	
}

function normalImg(x) {
    x.firstChild.nextSibling.style.height = "135px";
    x.firstChild.nextSibling.style.width = "110px";
    //console.log(x.firstChild.nextSibling.nextSibling.nextSibling);
    x.firstChild.nextSibling.nextSibling.nextSibling.style.display = "none";
     $(x).css('box-shadow', 'none');
}