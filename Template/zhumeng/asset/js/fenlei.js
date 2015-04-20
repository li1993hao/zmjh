
$(function()
{
	
	var t_str='';
	var s_str='';
	
	for(var i=0;i<job_cate.length;i++)
		{
			$('#tb').append('<tr class="'+job_cate[i].id+'"></tr>');
			$('.'+job_cate[i].id+'').append('<th>'+job_cate[i].name+'</th>');
			if(job_cate[i].children)
			{
				for(var j=0;j<job_cate[i].children.length;j++)
				{
					s_str+='<li class="'+job_cate[i].children[j].id+'"><p><span>'+job_cate[i].children[j].name+'</span></p></li>';
				}
				$('.'+job_cate[i].id+'').append(function()
					{
						return '<td><ul>'+s_str+'</ul></td>'
					});
					s_str='';
			}
		}
		
         for(var i=0;i<job_cate.length;i++)
		 {
			 if(job_cate[i].children)
			 {
				 for(var j=0;j<job_cate[i].children.length;j++)
				 {
					 if(job_cate[i].children[j].children)
					 {
						 for(var k=0;k<job_cate[i].children[j].children.length;k++)
						 {
							 t_str+='<a>'+job_cate[i].children[j].children[k].name+'</a>';
						 }
						 $('.'+job_cate[i].children[j].id+'').append(function()
							{
							   return '<div style="display:none;">'+t_str+'</div>';
							});
							t_str="";
					 }
				 }
			 }
		 }
	/*$('#d_a a').bind('mouseover',function()
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
	});*/
	/*$('#scroll').click(function()
	{
		$('body').animate({scrollTop:$('#phb').offset().top},1000);
	});*/
	$('#bt_zwlb').bind("mouseover",function()
	{
		$('.zhiwei').show();
	});
	$('#bt_zwlb').bind("mouseleave",function()
	{
		$('.zhiwei').hide();
	});
	$('#bt_hylb').bind("mouseover",function()
	{
		$('.hangye').show();
	});
	$('#bt_hylb').bind("mouseleave",function()
	{
		$('.hangye').hide();
	});
	 $('#tb p').bind('mouseover',function()
	 {
		 $(this).addClass('select');
		 /*$(this).children('span').addClass('select_sp');*/
		 $(this).next().show();
	});
	$('#tb li').bind('mouseleave',function()
	 {
		 $(this).children('p').removeClass('select');
		 /*$(this).children('span').removeClass('select_sp');*/
		 $(this).children('div').hide();
	});
	$('#tb li a').click(function()
	{
		$('#bt_zwlb').children('label').text($(this).text());
	});
	$('.hangye div a').click(function()
	{
		$('#bt_hylb').children('label').text($(this).text());
	});
});