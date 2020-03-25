$(document).ready(function(){

	var r2s = document.getElementsByClassName("r2");
	var elementos = ["", "",];

	for (var i = 0; i < r2s.length; i++) {
		elementos[i] = r2s[i]

	}

	var primero = elementos[0];
	var segundo = elementos[1];

	var altura1 = $(primero).css("height");
	var altura2 = $(segundo).css("height");

	altura1 = altura1.replace("px", "");
	altura2 = altura2.replace("px", "");


	var mayor = Math.max(altura1, altura2);

	primero.style.minHeight = mayor + "px";
	segundo.style.minHeight = mayor + "px";

});

$(window).resize(function(){
	var r2s = document.getElementsByClassName("r2");
	var r2_span = document.getElementsByClassName("r2_span");
	var r2_p = document.getElementsByClassName("r2_p");

	var elementos_r2 = ["", ""];
	var elementos_span = ["", "",];
	var elementos_p = ["", "",];

	for (var i = 0; i < 2; i++) {
		elementos_r2[i] = r2s[i];
		elementos_span[i] = r2_span[i]
		elementos_p[i] = r2_p[i]

	}

	var primero = elementos_r2[0];
	var segundo = elementos_r2[1];

	var span1 = elementos_span[0];
	var p1 = elementos_p[0];

	var span2 = elementos_span[1];
	var p2 = elementos_p[1];

	var altura1 = $(span1).css("height");
	var altura2 = $(span2).css("height");

	var altura1_p = $(p1).css("height");
	var altura2_p = $(p2).css("height");

	altura1 = altura1.replace("px", "");
	altura2 = altura2.replace("px", "");

	altura1_p = altura1_p.replace("px", "");
	altura2_p = altura2_p.replace("px", "");


	var mayor_span = Math.max(altura1, altura2);
	var mayor_p = Math.max(altura1_p, altura2_p);

	var total = mayor_p + mayor_span + 20 + 16 + 6;

	primero.style.minHeight = total + "px";
	segundo.style.minHeight = total + "px";

	

});