$(document).ready(function(){
    
	$.post("pages/hirdetesek/lekerdez.php", function(data, status){
		
        //alert("Data: " + data + "\nStatus: " + status);
		
		var tomb=JSON.parse(data);
		//alert("A legelső adat: "+tomb[0].aru_nev);
		
		var szoveg="";
		szoveg+='<table class="table table-hover">';
		szoveg+='<thead>';
		szoveg+='<tr>';
        
		szoveg+='<th>Hirdetés képe</th>';
        szoveg+='<th>Hirdetés címe</th>';
        szoveg+='<th>Leírás</th>';
		szoveg+='<th>Hirdető neve</th>';
		szoveg+='<th>Elérhetőség</th>';
		szoveg+='</tr>';
		szoveg+='</thead>';
		szoveg+='<tbody>';
		for (var i=0;i<tomb.length;i++)
		{
			var adatok=
			{
				bevitel1:tomb[i].szemely_id
			}
			
			szoveg+='<tr>';
			szoveg+='<td><img style="height:150px" alt="Nincs feltöltött kép" src="img/'+tomb[i].aru_kep+'" ></td>';
			szoveg+='<td>'+tomb[i].aru_nev+'</td>';
			szoveg+='<td>'+tomb[i].leiras+'</td>';
			szoveg+='<td>'+tomb[i].szemely_nev+'</td>';
			szoveg+='<td>'+tomb[i].szemely_elerhetoseg+'</td>';
			szoveg+='</tr>';
		}
 		szoveg+='</tbody>';
		szoveg+='</table>';
		
				
		$("#tablazat").html(szoveg);
		
    });
	
	
	
	
	
	$("p").click(function(){
        $(this).hide();
    });
});