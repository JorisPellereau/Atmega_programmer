
$console = $(".outputShell");
$selectedFile = null;
var actionButtons = ["readButton", "removeButton"];

function getSelectedAtm() {
	var selectAtm = document.getElementById("id_selectAtm");
	var atm = selectAtm.options[selectAtm.selectedIndex].value;
	return atm;
}

function writeInConsole($str) {
	$console.append("<p>" + $str + "</p>");
	var console = document.getElementById("console");
	console.scrollTop = console.scrollHeight;
}

function writeCommandeInConsole($cmd) {
	writeInConsole("[" + getSelectedAtm() + "]> " + $cmd);
}

function sendAction(url, arg) {
	$.post(url, arg, function (data) {
		writeInConsole(data);
	});
}