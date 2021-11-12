
$("#btn-Close1").on('click', function(){

	$(".announcements-modal").hide(100);

});



$("#btn-close2").on('click', function(){

	$("#myModal").hide(100);

});


$(".unheart").hide();
$(".heart").on('click', function(){
	$(".unheart").show().css("color", "red");
	$(".heart").hide();
});

$(".unheart").on('click', function(){
	$(".unheart").hide()
	$(".heart").show();
});



$(".timer1").hide();
$(".taskname").hide();

$(".btn-start").on('click', function(){

	$(".timer1").show();
	$(".taskname").show();

})

$(".sTimer").on('click', function(){

	$(".timer-pane").hide(100);
	$(".task-overview").hide(100);

});


$(".leave_form").hide();
$(".leaves_footer").hide();

$("#leave_close_modal").on('click', function(){

	$('.leave_announcement').hide(100);
	$(".leave_form").show(100);
	$(".leaves_footer").show(100);

});


$("#leave_close_modal").on('click', function(){

	$('.leave_announcement').hide(100);
	$(".leave_form").show(100);
	$(".leaves_footer").show(100);

});


$('.btn-clockout').hide();
$('.clocked-intime').hide();


$(".btn-success-clockin").on('click', function(){

	$(".btn-clockin").hide(100);
	$('.clocked-intime').show(100);
	$(".btn-clockout").show(100).css("background-color", "#d44137");

})



$(".btn-success-clockout").on('click', function(){

	$(".btn-clockout").hide(100);
	$('.clocked-intime').hide(100);
	$(".btn-clockin").show(100);
})





