$(document).ready(function(){
$("#hover").hover(
	function()
	{
		$("#span").fadeIn().css("display", "");
	},
	function()
	{
		$("#span").fadeOut().css("display","none");
	}
	)
});



