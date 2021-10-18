$(document).ready(function(){

$('body').find('img[src$="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]').remove();


$("#logingomb").keypress(function (e) {
  if (e.which == 13) {
          $("#logingomb").click();
  }
        });	
$("[name='pass']").keypress(function (e) {
  if (e.which == 13) {
          $("#logingomb").click();
		  
  }
        });	

$("#registergomb").keypress(function (e) {
  if (e.which == 13) {
          $("#registergomb").click();
  }
        });

$("#reg_jelszo_megegyszer").keypress(function (e) {
  if (e.which == 13) {
          $("#registergomb").click();
  }
        });	
		
	 $("#registergomb").click(function(){
		 //alert("ok");
		 
		 var patt = /\d/;
		 //alert(patt.test($("#reg_felh").val())); 


		 var hibaszoveg="";
		 if ($("#reg_felh").val()=="")
			 hibaszoveg="A felhasználónév mező üres.";
		 else if ($("#reg_felh").val().length<5)
			 hibaszoveg="A felhasználónév minimum 5 karakter.";
		 else if ($("#reg_jelszo").val()=="")
			 hibaszoveg="A jelszó mező üres.";
		 else if ($("#reg_jelszo").val().length<5)
			 hibaszoveg="A jelszó minimum 5 karakter.";
		 else if (!patt.test($("#reg_jelszo").val()))
			 hibaszoveg="A jelszóban kötelező számot megadni.";
		 else if ($("#reg_jelszo").val()!=$("#reg_jelszo_megegyszer").val())
			 hibaszoveg="A két jelszónak meg kell egyeznie.";
		 
		 
		 
		 
		 $("#hibaszoveg").html(hibaszoveg);
		 if (hibaszoveg=="")
		 {
		 var adatok=
		 {
			 reg_felh:$("#reg_felh").val(),
			 reg_jelszo:$("#reg_jelszo").val()
		 }
		 $.post("alap/felhasznalo_felvitel.php",adatok,function(eredmeny){
			//alert(eredmeny); 
			if (eredmeny==1)
			{
				alert("A regisztráció sikerült, kérem jelentkezzen be.");
				$("#register-modal").modal("hide");
				$("#login-modal").modal();
			}
			else if (eredmeny==2)
			{
				alert("A felhasználónév már létezik.");
			}
			else alert("A felvitelben hiba történt.");
			
		 });
		 }
		 
	 });
	
	 $("#reg").click(function(){
		 
		 $("#login-modal").modal("hide");
		 $("#register-modal").modal();
		 return false;
	 });
	
	
	  $("#logoutgomb").click(function(){
        //alert("megnyomva");
		$.post("alap/kilepes.php",function(eredmeny){
			if (eredmeny==1)
				location.reload();
		});
		
	  });
		
    $("#logingomb").click(function(){
        //alert("megnyomva");
		var adatok=
		{
			felhasznalonev:$("[name='user']").val(),
			jelszo:$("[name='pass']").val()
		}
		//alert(adatok.felhasznalonev+" "+adatok.jelszo);
		$.post("alap/belepes.php",adatok,function(eredmeny){
			//alert(eredmeny);
			if (eredmeny==0)
				alert("Hiba");
			else
			{
				$("#login-modal").hide();
				location.reload(true);
			}
			
		});
		
    });
});