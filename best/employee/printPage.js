function printMyPage() {
	document.getElementById("dont-print").style.display = "none";
	document.getElementById("dont-print1").style.display = "none";
	document.getElementById("print-page").style.display = "inline";
	window.print();
	window.close();
	// document.getElementById("dont-print").style.display = "inline";
	// document.getElementById("print-page").style.display = "inline";
}