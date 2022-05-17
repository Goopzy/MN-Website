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
			$mesaj		= $_POST["inputMessage"];
			$ekle 			="insert into contact(ad,soyad,mail,mesaj) values('$ad','$soyad','$mail','$mesaj')";
				if ($baglanti->query($ekle)) {
					echo "Başarılıyla Yollandı";
				}
				else {
				echo "Hata !";
				}
?>	           
	
	