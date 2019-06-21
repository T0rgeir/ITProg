$(document).ready(function() {

	$('.item-sub').click(function() {
		let idSub = $(this).attr('id');
		location.href = "__account-sub.php?idSub=" + idSub;
	});

	$('.item-sub-a').click(function() {
		let idSubA = $(this).attr('id');
		location.href = "__account-sub.php?idSubA=" + idSubA;
	});

	$('#subbtn').click(function() {
		let idSubbtn = $(this).attr('alt');
		location.href = "__account-subdel.php?idSubbtn=" + idSubbtn;
	});

	$('#btnsubscribe').click(function() {
		let idSubscribebtn = $(this).attr('alt');
		location.href = "__account-subscribeadd.php?idSubscribebtn=" + idSubscribebtn;
	});

});