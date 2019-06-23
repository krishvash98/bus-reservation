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
	$('.sub').click(function() {
		$("form").each(function(){
			if($(this).attr('id')!='signInForm')
			{
				var postdata = $(this).serializeArray(); 
				var formurl = $(this).attr("action"); 
				$.ajax( 
				{ 
					url : formurl, 
					type: "POST", 
					data : postdata, 
					success:function(data, textStatus, jqXHR) 
					{
						 
					}, 
					error: function(jqXHR, textStatus, errorThrown) 
					{ 
						$('#busName h1').append(" :: Data couldn't be updated"); 
					} 
				}); 
			}
		});
		var url = "../../Payment/bill.php";    
		$(location).attr('href',url);
	});
});
