$(document).ready(function(){
	$('body').find('img[src$="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]').remove();
	frissit();
	function frissit()
	{

		$.post("pages/profil/lekerdez.php", function(eredmeny, status){
         // alert("Data: " + eredmeny + "\nStatus: " + status);
		var tomb=JSON.parse(eredmeny);
		var szoveg="";
		szoveg+=' <div class="row">';
			szoveg+=' <div class="col-sm-6" >';
			
				szoveg+=' <center><div style="width:60%">';
					
					
						szoveg+='<div style="margin-bottom: 5px;"><b>Hirdetésben megjelenő név módosítása</b></div>';
						szoveg+='<input style="max-width: 200px;" type="text"  id="szemely_nev_valtoztatas" value="'+tomb[0].szemely_nev+'">';
						szoveg+=' <br><button class="btn btn-default btn-sm" btnid="0002" style="margin-top: 10px; type="button">Név módosítása</button>';
						szoveg+='<div style="margin-bottom: 5px;margin-top: 30px;"><b>Elérhetőség módosítása</b></div>';
						szoveg+='<input style="max-width: 200px;" type="text"  id="szemely_elerhetoseg_valtoztatas" value="'+tomb[0].szemely_elerhetoseg+'">';
						szoveg+=' <br><button class="btn btn-default btn-sm" btnid="0003" style="margin-top: 10px; type="button">Elérhetőség módosítása</button>';
				szoveg+=' </div></center>';
				
			szoveg+='</div>';
			szoveg+=' <div class="col-sm-6">';
				
					szoveg+=' <center><div style="width:60%">';
					
						szoveg+='<div>Add meg a régi jelszót:</div>';
						szoveg+='<input style="max-width: 200px;" type="password" id="felh_regijelszo">';
						szoveg+='<div>Add meg az új jelszót:</div>';
						szoveg+='<input style="max-width: 200px;" type="password" id="felh_ujjelszo" >';
						szoveg+='<div>Ismételd meg az új jelszót:</div>';
						szoveg+='<input style="max-width: 200px;" type="password" id="felh_ujjelszo2">';
						szoveg+=' <br><button class="btn btn-default btn-sm" btnid="0001" type="button">Jelszó módosítása</button>';
					szoveg+=' </div></center>';
					
			szoveg+='</div>';	
			
			
		szoveg+='</div>';
			// alert(eredmeny);
			// szoveg+='<input type="password" id="felh_ujjelszo" minlength="8">';
			// MINLENGHT
		
		$("#jatekhelye").html(szoveg);
		
	
	$("button").click(function()
	{
		var adatok=
		{
			szemely_lakcim_valtoztatas:$("#szemely_lakcim_valtoztatas").val(),
			felh_regijelszo:$("#felh_regijelszo").val(),
			felh_ujjelszo:$("#felh_ujjelszo").val()
		}
		
		
		if($(this).attr("btnid") == '0001')  //Jelszó
		{
			// alert("1");
			if($("#felh_ujjelszo").val()==$("#felh_ujjelszo2").val()){
			
				adatok=
				{
					felh_regijelszo:$("#felh_regijelszo").val(),
					felh_ujjelszo:$("#felh_ujjelszo").val()
				}
				// alert(adatok.bevitel1);
				//console.log(adatok.bevitel1);
				var hibakszama=0;
				
					
				if (hibakszama==0)
				{
					$.post("pages/profil/jelszofelvitel.php",adatok,function(eredmeny){
						//alert(eredmeny);
						if (eredmeny==0)
							alert("Hiba a felvitelben!!!");
						else if (eredmeny==1){
							alert("Sikerült");
							}
						else {
							alert(eredmeny);
							alert ("hibás jelszót írtál be");}
					});
				}	
					
			}
			else
				alert("Nem egyezik a 2 jelszó");
			frissit();
		}
		
		if($(this).attr("btnid") == '0002')//NÉV
		{
			
			
				adatok=
						{
							szemely_nev_valtoztatas:$("#szemely_nev_valtoztatas").val()	
						}
				
				
				$.post("pages/profil/nev.php",adatok,function(eredmeny){
						alert(eredmeny);
						
					});
				
				
					location.reload();
			
		}
		
		if($(this).attr("btnid") == '0003')//elérhetőség
		{
			
			
				adatok=
				{
					szemely_elerhetoseg_valtoztatas:$("#szemely_elerhetoseg_valtoztatas").val()	
				}
				
				
				$.post("pages/profil/elerhetoseg.php",adatok,function(eredmeny){
						alert(eredmeny);
						
					});
				
				
					location.reload();
			
		}
		
	});
	
    });
	}
		
    
});