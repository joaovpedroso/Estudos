$(document).ready(function(){
	var page='home';
	$('#content').load(page+'.php');

	return false;
});
$(document).ready(function(){

	$('ul#nav-mobile li a').click(function(){
		var page=$(this).attr('href');

		$('#content').load(page+'.php');

		return false;
	})


	/*
	$('a#horarios a').click(function(){
		$('#content').href('horarios.php');

		return false;
	})

	*/
})