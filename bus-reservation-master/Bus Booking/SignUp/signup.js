$(document).ready(function(){
	$("#nav .material-icons").click(function(){
		$("#open").show(200);
		$("#overlay").show();
	});
	$(document).mouseup(function(e){
		var container=$('#open');
		if(!container.is(e.target) && container.has(e.target).length==0){
			$("#open").hide(150);
			$("#overlay").hide();
		}
	});
	$("input[name=rpass]").keyup(myfunction).focus(myfunction);
	function myfunction(){
		if($("input[name=password]").val()!=$("input[name=rpass]").val())
			$("#wrongPass").css('opacity','1');
		if($("input[name=password]").val()===$("input[name=rpass]").val())
			$("#wrongPass").css('opacity','0');
    }
	$('input[name=username]').keyup( function() {
		var username = $(this).val();
		if(username != '') {
			$.post('user_check.php', { username: username}, function(data) {
				if(data==='T')
				{
					$('#wrongUser').css('opacity','0');
					$('#rightUser').css('opacity','1');
				}
				else
				{
					$('#rightUser').css('opacity','0');
					$('#wrongUser').css('opacity','1');
				}
			});
		}
	});
});
