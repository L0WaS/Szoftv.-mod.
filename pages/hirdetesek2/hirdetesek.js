$(document).ready(function () {

	$.post("pages/hirdetesek2/lekerdez.php", function (data, status) {
		//alert("Data: " + data + "\nStatus: " + status);

		var tomb = JSON.parse(data);
		

		var szoveg = "";


		for (var i = 0; i < tomb.length; i++) {
			if (i % 3 == 0)
				szoveg += '<div class="row">';
			szoveg += '<div class="col-sm-4"><div class="modalis" id="' + tomb[i].aru_id + '"  data-toggle="modal" data-target="#myModal">';
			szoveg += '<img style="height:150px" alt="Nincs feltöltött kép" src="img/' + tomb[i].aru_kep + '" >';
			szoveg += '<br><div>' + tomb[i].aru_nev + '</div>';
			//szoveg+='<td><button type="button" id="'+tomb[i].film_id+'"class="btn btn-info btn-lg sajat" data-toggle="modal" data-target="#myModal">Open Modal</button></td>';
			szoveg += '</div></div>';
			if (i % 3 == 2)
				szoveg += '</div>';
		}

		szoveg += '<div id="modalishelye"></div>';


		$("#tablazat").html(szoveg);
		$("#modalishelye").load("pages/hirdetesek2/modalis.html");

		$(".modalis").click(function () {
			//alert(this.id);
			var adatok =
			{
				bevitel1: this.id
			}
			$.post("pages/hirdetesek2/lekerdez_decsakegy.php", adatok, function (eredmeny) {
				//alert(eredmeny);
				var tomb = JSON.parse(eredmeny);
				var modalisszoveg = "";

				modalisszoveg += '<center style="font-size:150%"><b>Cím:</b> ' + tomb[0].aru_nev;
				modalisszoveg += '<br><b>Leírás:</b> ' + tomb[0].leiras;
				modalisszoveg += '<br><b>Eladó neve:</b> ' + tomb[0].szemely_nev;
				modalisszoveg += '<br><b>Telefonszám:</b> ' + tomb[0].szemely_elerhetoseg + '</center>';
				modalisszoveg += '<br><center><img src="img/' + tomb[0].aru_kep + '" style="height:400px;padding-top: 0px; " alt="Nincs feltöltött kép"></center>';


				$("#modalistartalma").html(modalisszoveg);


			});


		});



	});





	$("p").click(function () {
		$(this).hide();
	});
});