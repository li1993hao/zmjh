$(function()
{
	$('#d_a a').bind('mouseover',function()
	{
		var i=parseInt($(this).attr('id'))+5;
		$('#d_a li').removeClass('active');
		$('#d_table div').hide();
		$(this).parent().addClass('active');
		$('#'+i).fadeIn(400);
	});
	$('#h_title a[type=button]').bind('mouseenter',function()
	{
		$(this).click();
	});
	$('#h_title a[type=button]').parent().bind('mouseleave',function()
	{
		$(this).click();
	});
	$('.dropdown-menu').bind('mouseleave',function()
	{
		$(this).prev().click();
	});
});