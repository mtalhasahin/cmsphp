
<?php
     
     if($_POST){
      
	  $sifre=p("sifre",true);
      $hakkinda=p("hakkinda",true);	  
		if(!$hakkinda){
		$hata="Tüm Alanları Doldurmanız Gerekiyor...";
		require_once TEMA."default/hata.php";
		
		}else{
		   if($sifre){
		$sifre=md5($sifre);
		}else{
		$sifre=$row["uye_sifre"];
		}
	
		  $update=query("UPDATE uyeler SET 
		   uye_sifre='$sifre',
		   uye_hakkinda='$hakkinda'
		    WHERE uye_id='$uid'");
           if($update){
		   $hata="Profil Bilgileri Başarıyla Güncellendi";
		   $class="ok";
		   require_once TEMA."default/hata.php";
		   go(URL."/profil-duzenle",1);
		   }else{
		   $hata="Bir sorun oluştu ve profil güncellenemedi";
		   
		   require_once TEMA."default/hata.php";
		   }
					
					
		}
		}
		
		


?>
