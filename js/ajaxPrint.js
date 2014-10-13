$(document).ready(function(){
	$('a.college-name-link').on('click', function(e){
		e.preventDefault();
		var url = e.toElement.href;
		var title = e.toElement.innerText;
		$.ajax({
			url : url,
			success : function(response){
				window.resp = response;
				$('.result').html('<center><h2>' + title + '</h2></center>');
				$('.result').append($(response).find('table'));
			}
		});
	});
});