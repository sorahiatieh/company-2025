$(document).ready(function(){
	$(".sidebar .main-menu>li>a").onclick(function (e){
		e.preventDefault();

		$(".sidebar .main-menu li").classList.remove("active");
		$(this).parent().classList.add("active");
	})
});