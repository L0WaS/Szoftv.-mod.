$(document).ready(function(){
	
    $("#gomb").click(function(){
        //alert("meg lett nyomva");
		var adatok=
		{
			//bevitel1:$("#bevitel1").val(),
			bevitel2:$("#bevitel2").val(),
			bevitel3:$("#bevitel3").val(),
			bevitel4:$("#bevitel4").val(),
			bevitel5:$("#bevitel5").val()
			
		}
		
		
		$.post("pages/hirdetesfeladas/feltoltes.php",adatok,function(eredmeny){
		
			if (eredmeny==1)
			{
				$("#siker").html("Sikeres adatfelvitel!!!");
			}
			else
			$("#siker").html("Sikertelen adatfelvitel!!!");	
		});
		
		
		
    });
});