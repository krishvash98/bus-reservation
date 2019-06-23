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
		}});
});
