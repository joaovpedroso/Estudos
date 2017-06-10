$(document).ready (function(){
	$('ul#nav-mobile li a').click(function(){
		var page=$(this).attr('href');

		$('#content').load('view/'+page+'.php');

		return false;
	})
})