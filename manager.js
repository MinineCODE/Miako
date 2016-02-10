function writeHeader(){
	$.ajax({
		url: "pofo_header.html",
		cache: false,
		async: false,
		success: function(html){
			document.write(html);
		}
	});
}
function writeSidemenu_study(){
	$.ajax({
		url:"pofo_sidemenu_study.html",
		cache:false,
		async:false,
		success:function(html){
			document.write(html);
		}
	});
}
function writeCircle(){
	$.ajax({
		url:"pofo_circle.html",
		cache:false.
		async:false,
		success:function(html){
			document.write(html);
		}
	});
}
function writeFooter(){
	$.ajax({
		url:"pofo_footer.html",
		cache:false,
		async:false,
		success.function(html){
			document.write(html);
		}
	});
}
function main_presentation(){
	var file="presentation"
	for(var i=1;i<11;i++){
		document.write('<img src="'+file+String(i)+'.png">');
		document.write("<p>aaa</p>");
	}
	document.close();
}
$(function(){
	$('.mainmenu img').hover(function(){
		$(this).attr('src',$(this).attr('src').replace('po.jpg','po-click.jpg'));
	},function(){
		if(!$(this).hasClass('currentPage')){
			$(this).attr('src',$(this).attr('src').replace('po-click.jpg','po.jpg'));

		}
	});
});