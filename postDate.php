<?php
  $servername = "localhost";
  $username   = "root";
  $password   = "";
  $dbname	  = "form";
  
	$baglanti = new mysqli($servername,$username,$password,$dbname);
	
		if	($baglanti->connect_error){
		  die ("Bağlanti Oluşmadı".$baglanti->connect_error);
		  
		} 
			
			
			
			
			$ad			= $_POST["inputFirstName"];
			$soyad		= $_POST["inputLastName"];
			$mail		= $_POST["inputEmail"];
			$numara		= $_POST["inputPhone"];
			$tarih		= $_POST["inputDate"];
			$tür		= $_POST["inputSelect"];
			$adres		= $_POST["inputAdres"];
			$mesaj		= $_POST["inputMessage"];
			$ekle 			="insert into date(ad,soyad,mail,numara,tarih,tür,adres,mesaj) values('$ad','$soyad','$mail','$numara','$tarih','$tür','$adres','$mesaj')";
				if ($baglanti->query($ekle)) {
					echo "Başarılıyla Yollandı";
				}
				else {
				echo "Hata !";
				}
?>	           
	