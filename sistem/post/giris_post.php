
<?php
     
     if($_POST){
      $kadi=p("kadi",true);
	  $sifre=p("sifre",true);
        
		if(!$kadi || !$sifre){
		$hata="Tüm Alanları Doldurmanız Gerekiyor...";
		require_once TEMA."default/hata.php";
		
		}else{
		$sifre=md5($sifre);
		$query=query("SELECT * FROM uyeler WHERE uye_kadi='$kadi' && uye_sifre='$sifre'");
		if(mysql_affected_rows()){
		$row=row($query);
					$session=array(
					      "login"=>true,
					      "uye_id"=>$row["uye_id"],
						  "uye_rutbe"=>$row["uye_rutbe"],
						  "uye_kadi"=>$row["uye_kadi"]
					);
					session_olustur($session);
					go(URL);		
		}else{
		            $hata="Sisteme,kayıtlı böyle bir kullanıcı bulunmamaktadır...";
		            require_once TEMA."default/hata.php";
		}
		}
		
	}	


?>
