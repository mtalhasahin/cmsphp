
<?php
     
     if($_POST){
      $kadi=p("kadi",true);
	  $link=sef_link($kadi);
	  $sifre=p("sifre",true);
	  $eposta=p("eposta",true);
      $cinsiyet=p("cinsiyet",true);
      $hakkinda=p("hakkinda",true);	  
		if(!$kadi || !$sifre || !$eposta || !$cinsiyet || !$hakkinda){
		$hata="Tüm Alanları Doldurmanız Gerekiyor...";
		require_once TEMA."default/hata.php";
		
		}else{
		$sifre=md5($sifre);
		$query=query("SELECT uye_id FROM uyeler WHERE uye_link='$link'");
		if(mysql_affected_rows()){
			$hata="Sisteme,kayıtlı böyle bir kullanıcı bulunmaktadır...";
		            require_once TEMA."default/hata.php";
		}else{
		            $insert=query("INSERT INTO uyeler SET
					uye_kadi=   '$kadi',
					uye_sifre=  '$sifre',
					uye_eposta= '$eposta',
					uye_cinsiyet='$cinsiyet',
					uye_hakkinda='$hakkinda',
					uye_link='$link',
					uye_rutbe=2,
					uye_onay=1");
					
					if($insert){
					
					$uid=mysql_insert_id();
					$session=array(
					      "login"=>true,
					      "uye_id"=>$uid,
						  "uye_rutbe"=>2,
						  "uye_kadi"=>$kadi
					);
					session_olustur($session);
					$class="ok";
					$hata="Başarıyla kayıt oldunuz...Yönlendiriliyorsunuz...";
					require_once TEMA."default/hata.php";
					go(URL,1);
						}
					
					
		}
		}
		
	}	


?>
