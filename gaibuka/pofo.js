$(function() {

  $(".yure li").hover(function(){
  $(this).css({position: 'relative'})
  $(this).stop()
  .animate({left:"-20"},100)
  .animate({left:"20"},200)
  .animate({left:"-5"},100)
  .animate({left:"5"},100)
  .animate({left:"0"},50)
  },
  function(){
  $(this).stop(true, false)
  .animate({left:"0"})
  });

 $('#report').click(function() {
    if($(".reportlittle").hasClass('open')) {
      $(".reportlittle").removeClass('open');
      $(".reportlittle").slideUp();
    } else {
      $(".reportlittle").addClass('open');
      $(".reportlittle").slideDown();
    }
  });

  $('#js').click(function() {
     if($(".jslittle").hasClass('open')) {
       $(".jslittle").removeClass('open');
       $(".jslittle").slideUp();
     } else {
       $(".jslittle").addClass('open');
       $(".jslittle").slideDown();
     }
   });

   $('#gazou').click(function() {
      if($(".gazoulittle").hasClass('open')) {
        $(".gazoulittle").removeClass('open');
        $(".gazoulittle").slideUp();
      } else {
        $(".gazoulittle").addClass('open');
        $(".gazoulittle").slideDown();
      }
    });

    $('#ben').click(function() {
       if($(".benlittle").hasClass('open')) {
         $(".benlittle").removeClass('open');
         $(".benlittle").slideUp();
       } else {
         $(".benlittle").addClass('open');
         $(".benlittle").slideDown();
       }
     });

$('#benkyo').mouseover(function(){
  $(this).attr("src","pobenhover.png");
}).mouseout(function(){
  $(this).attr("src","poben.png");
})

$('#gurume').mouseover(function(){
  $(this).attr("src","pogurumehover.png");
}).mouseout(function(){
  $(this).attr("src","pogurume.png");
})

$('#pofo').mouseover(function(){
  $(this).attr("src","popofohover.png");
}).mouseout(function(){
  $(this).attr("src","popofo.png");
})

$('#kou').mouseover(function(){
  $(this).attr("src","pokouhover.png");
}).mouseout(function(){
  $(this).attr("src","pokou.png");
})

$( '#move-page-top' ).click(
	function()
	{
		$( 'html,body' ).animate( {scrollTop:0} , 'slow' ) ;
	}
) ;

});
