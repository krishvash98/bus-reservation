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
	$("input[type='checkbox']").click(function(){
		if(!this.checked)
		{
			var text = $("#busName p").html();
			text = text.replace(this.value,"");
			$("#busName p").html(text);
		}
		else
		{
			$("#busName p").append(this.value);
			$("#busName p").append(" ");
		}
	});
	$("input[type='checkbox']").each(function(){
		var ind = this.value;
		var chec=$(this);
		if(ind != '') {
			$.post('php/seat_check.php',{ind:ind}, function(data) {
				if(data=='M')
				{
					chec.css('background-color','#7986CB');
					chec.css('cursor','default');
					chec.attr('disabled', true);
					chec.addClass('occupied');
				}
				else if(data=='F')
				{
					chec.css('background-color','#F06292');
					chec.css('cursor','default');
					chec.attr('disabled',true);
					chec.addClass('occupied');

				}
			});
		}
		else {
			$('#username_status').text('');
		}
	});
	$("input[type='checkbox']").mouseover(function(){
		$("#hovered p").append(" ");
		$("#hovered p").append(this.value);
	});
	$("input[type='checkbox']").mouseleave(function(){
		var text = $("#hovered p").html()
		text = text.replace(this.value,"");
		$("#hovered p").html(text);
	});
});
