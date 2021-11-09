$(document).ready(function(){

    $("#gomb").click(function(){
        //alert("meg lett nyomva");
		var adatok=
		{
			//bevitel1:$("#bevitel1").val(),
			//bevitel4:$("#bevitel4").val(),
			//bevitel5:$("#bevitel5").val(),
			bevitel2:$("#bevitel2").val(),
			bevitel3:$("#bevitel3").val()
			
			
			
		}
		
		
		var file_data=$("#bevitel6").prop("files")[0];
		if (adatok.bevitel6!="")
		{
		adatok.bevitel6=file_data["name"];
		}
		//fajl kezeles vege
		
		// if (hibakszama==0)
		// {
		$.post("pages/hirdetesfeladas/feltoltes.php",adatok,function(eredmeny){
			//alert(eredmeny);			
			if (eredmeny==1)
			{
			//fajl feltoltes kezdete, kell hozza az upload file			
			//fájl felvitele a web szerver kepek almappájába , csak azután történjen meg, miután sikeresen felvittük a fájl nevét adatb-be!!!
			//le kellene vizsgálni, hogy csak pl. "jpg", "jpeg", "gif", "png" kiterjesztések lehessenek és pl. csak max méret alattiak pl 3MB
					// alert("Fájl mérete: "+file_data['size']); 
				var form_data = new FormData();                  
				form_data.append('file', file_data);
				$.ajax({
							url: 'pages/hirdetesfeladas/upload.php', 
							dataType: 'text', 
							cache: false,
							contentType: false,
							processData: false,
							data: form_data,                         
							type: 'post',
							success: function(php_script_response)
							{
								// alert(php_script_response); // display response from the PHP script, if any
							}
				});

			//fájl feltoltese vege	
				
			$("#siker").html("Sikeres adatfelvitel!!!");
			}
			else
			$("#siker").html("Sikertelen adatfelvitel!!!");	
		});
			
			
			
	});
		
});