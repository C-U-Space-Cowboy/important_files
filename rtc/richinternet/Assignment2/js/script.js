$(function () {
	$("#contract").click(contract);
	$("#expand").click(expand);
	$("#color").click(color);
});

changed = false;
function color() {
	if (!changed) {
		$("#title").css("color", "green");
		$("#message").css("color", "blue");
		$("#message").css("font-style", "italic");
		changed = true;
	} else {
		$("#title").css("color", "black");
		$("#message").css("color", "black");
		$("#message").css("font-style", "normal");
		changed = false;
	}
}

function contract() {
	$("#message").fadeOut();
	$("#tea").fadeOut();
}

function expand() {
	$("#message").fadeIn();
	$("#tea").fadeIn();
}


$(function () {
	$("form").submit(verify);
});

function verify() {
	firstnameOkay = $("#firstname").val().length > 6;
	lastnameOkay = $("#lastname").val().length > 6;
	ageOkay = /^\d+$/.test($("#age").val());

	if (!firstnameOkay)
		$("#firstnameError").css("visibility", "visible");
	else
		$("#firstnameError").css("visibility", "hidden");

	if (!lastnameOkay)
		$("#lastnameError").css("visibility", "visible");
	else
		$("#lastnameError").css("visibility", "hidden");

	if (!ageOkay)
		$("#ageError").css("visibility", "visible");
	else
		$("#ageError").css("visibility", "hidden");

	if (firstnameOkay && lastnameOkay && ageOkay)
		window.location.replace("success.html");
}
