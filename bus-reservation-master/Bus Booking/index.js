$(document).ready(function(){
	$('#round').click(function(){
		$("#ret1").show(250);
		$("#ret2").show(250);
		$("#round").addClass("activeTab");
		$("#one").removeClass("activeTab");
	});
	$('#one').click(function(){
		$("#ret1").hide(250);
		$("#ret2").hide(250);
		$("#one").addClass("activeTab");
		$("#round").removeClass("activeTab");
	});
	$("#log .material-icons").click(function(){
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
