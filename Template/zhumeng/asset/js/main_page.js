$(function()
{
	$('.c_ctn').bind('mouseover',function()
	{
		$(this).addClass("bg3");
	});
	$('.c_ctn').bind('mouseleave',function()
	{
		$(this).removeClass("bg3");
	});
	/*$('#more_info').click(function()
	{
		$("html,body").animate({scrollTop: $(".t_sel").offset().top-90}, 1000);
	});*/
	$('.nav_menu span a').bind("mouseover",function()
	{
		$(this).parent().parent().addClass('bd_btom');
		$(this).parent().next('div').show();
	});
	$('.nav_menu li').bind("mouseleave",function()
	{
		$(this).removeClass('bd_btom');
		$(this).children('div').hide();
	});
	$('#sel_a').click(function()
	{
		$("html,body").animate({scrollTop: $("#title_nav").offset().top-90}, 1000);
	});
	/*$('.c_ctn').click(function()
	{
		location.href="http://211.68.112.117/zmjh/index.php/Home/Index/category/cate/tongzhigonggao/p/1.html";
	});*/
});