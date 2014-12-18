<?php

      require_once "sistem/fonksiyonlar.php";
	  
	   ##Tema TITLE-DESC-KEYW Fonksiyonu##
	  function tdk(){
	  $do=g("do");
	  switch($do){
	  
	  case "konu":
	  if($link=g("link")){
	        $query=query("SELECT * FROM konular WHERE konu_link='$link'");
		    if(mysql_affected_rows()){
			$row=row($query);
			$konu=explode("-------------------", $row["konu_aciklama"]);
	        $title=ss($row["konu_baslik"]);
			$desc=strip_tags(kisalt(ss($konu[1]),220));
			$keyw=implode(", ", explode(" ",ss($row["konu_baslik"])));
			
			}
			
      }
	  break;
	  
	  case "kategori":
	   if($link=g("link")){
	      $query=query("SELECT * FROM kategoriler WHERE kategori_link='$link'");
		  if(mysql_affected_rows()){
		  $row=row($query);
		   $title=ss($row["kategori_adi"]);
		   $desc=ss($row["kategori_desc"]);
		   $keyw=ss($row["kategori_keyw"]);
		  }
		   }
	  
	  break;
	  
	  case "uye":
	  
	  break;
	  case "giris":
	     if(!session("login")){
		 $title="Üye Girişi -".ss(SITE_TITLE);
		 } 	
	  break;
	  
	  case "cikis":
	  if(!session("login")){
	      $title="Üye Çıkışı -".ss(SITE_TITLE);
	  }
	  break;
	  
	  case "etiket":
	  if($etiket=g("link")){
	      $title= ss($etiket)."ile ilgili konular -".SITE_TITLE;
		  $desc=ss($etiket)."ile ilgili Konular";
		  $keyw=implode(", ",explode(" ", $kelime));
		   }
	  
	  break;
	  
	  case "kayit":
	  if(!session("login")){
	      $title="Kayıt Ol - ".ss(SITE_TITLE);
	  }
	  break;
	  
	  case "sayfa":
	      if($link=g("link")){
		  $query=query("SELECT * FROM sayfalar WHERE sayfa_link='$link'");
		  if(mysql_affected_rows()){
		  $row=row($query);
		  $title=ss($row["sayfa_baslik"]);
		  $desc=strip_tags(kisalt(ss($row["sayfa_icerik"]),220));
		  $keyw=implode(", ", explode(" ", $title));
		  
		  }else{
		    $title="Sayfa Bulunamadı - ".ss(SITE_TITLE);
			  
		  }
		  }
	  break;
	    
		  
		  break;
	     case "arama":
		 if($kelime=g("kelime")){
		    $title=ss($kelime)."İle İlgili Arama Sonuçları";
			$desc=ss($kelime)."İle İlgili Arama Sonuçları";
			$keyw=implode(", ", explode(" ",ss($kelime)));
		 }
		 break;
		 
		 case "profil-duzenle":
		 $title="Profil Duzenle -".SITE_TITLE;
		 break;
	  default:
	  $title=ss(SITE_TITLE);
	  $desc=ss(SITE_DESC);
	  $keyw=ss(SITE_KEYW);
	  break;
	  
	  }
	     echo '<title>'.$title.'</title>
		<meta name="description" content="'.$desc.'" />
		<meta name="keywords" content="'.$keyw.'" /> ';
	  }
	  
	  
	  ##Tema İçerik Fonksiyonu##
	  function tema_icerik(){
	  $do=g("do");
	  switch($do){
	  
	  case "konu":
	  if($link=g("link")){
	        $query=query("SELECT * FROM konular WHERE konu_link='$link'");
		    if(mysql_affected_rows()){
			$row=row($query);
			$konuid=$row["konu_id"];
			 $konu=explode("-------------------",$row["konu_aciklama"]);
			 $konu=$konu[1];
			 $baslik=ss($row["konu_baslik"]);
			 $link=URL."/".$row["konu_link"].".html"; 
			 $katlink=URL."/kategori/".$row["kategori_link"];
			 $kategori=ss($row["kategori_adi"]);
			 $okunma=number_format($row["konu_hit"]);
			 $tarihExplode=explode(" ",$row["konu_tarih"]);
			 $etiketler=$row["konu_etiket"];
			 $tarih=$tarihExplode[0];
			 $zaman=$tarihExplode[1];
			 if(!cookie("konu_".$konuid)){
			 $hitUpdate=query("UPDATE konular SET konu_hit=konu_hit+1 WHERE konu_id='$konuid'");
			 setcookie("konu_".$konuid,"_",time()+988989);
			 }
			 
			 require TEMA."default/konu_full.php";
			}else{
			go(URL);
			}
			
      }else{
			go(URL);		 
	       }
	  break;
	  
	  case "kategori":
	   if($link=g("link")){
	      $query=query("SELECT * FROM kategoriler WHERE kategori_link='$link'");
		  if(mysql_affected_rows()){
		  $row=row($query);
		  $katid=$row["kategori_id"];
		  $katlink=$row["kategori_link"];
		  require_once TEMA."default/kategori.php";
		  }else{
		     go(URL);
		  }
		   }else{
		     go(URL);
		   }
	  
	  break;
	  
	  case "uye":
	  
	  break;
	  case "giris":
	     if(session("login")){
		 go(URL);
		 } else{
		 require_once TEMA."default/giris.php";
		 }
	  break;
	  
	  case "cikis":
	  if(session("login")){
	      session_destroy();
		  go(URL);
	  }else{
	      go(URL);
	  }
	  break;
	  
	  case "etiket":
	  if($etiket=g("link")){
	       require_once TEMA."default/etiket.php";
		    $query=query("SELECT * FROM konular WHERE konu_onay=1 && konu_etiket like '%$link%'");
		 if(mysql_affected_rows()){
		 
		 }
		   }else{
		     go(URL);
		   }
	  
	  break;
	  
	  case "kayit":
	  if(session("login")){
	      go(URL);
	  }else{
	  require_once TEMA."default/kayit.php";
	  }
	  break;
	  
	  case "sayfa":
	      if($link=g("link")){
		  $query=query("SELECT * FROM sayfalar WHERE sayfa_link='$link'");
		  if(mysql_affected_rows()){
		  $row=row($query);
		  $baslik=ss($row["sayfa_baslik"]);
		  $icerik=nl2br(ss($row["sayfa_icerik"]));
		  require_once TEMA."default/sayfa.php";
		  }else{
		     $hata="Aradığınız sayfaya ulaşılamıyor...";
			  require_once TEMA."default/hata.php";
		  }
		  }else{
		     go(URL);
		  }
	  break;
	      case "ara":
		  if($kelime=g("kelime")){
		    go(URL."/arama/".$kelime);
		 }else{
		   go(URL);
		 }
		  
		  break;
	     case "arama":
		 if($kelime=g("kelime")){
		    require_once TEMA."default/arama.php";
		 }else{
		   go(URL);
		 }
		 break;
		 
		 case "profil-duzenle":
		   if(session("login")){
		   $uid=session("uye_id");
		   $query=query("SELECT * FROM uyeler WHERE uye_id='$uid'");
		   if(mysql_affected_rows()){
		   $row=row($query);
		   require_once TEMA."default/profil-duzenle.php";
		   }else{
		       session_destroy();
			   go(URL);
		   }
		   }else{
		     go(URL);
		   }
		 break;
	  
	  default:
	  if(!g("do")){
	  require_once TEMA."default/default.php";
	  }else{
	    $hata="Böyle bir sayfa bulunmuyor";
		require_once TEMA."default/hata.php";
	  }
	  break;
	  
	  }
	  }
	  ##Tema Kategoriler Fonksiyonu##
	  function tema_kategoriler(){
	  
	  $query=query("SELECT * FROM kategoriler ORDER BY kategori_adi ASC");
	  while($row=row($query)){
	  echo  '<li><a href="'.URL.'/kategori/'.$row["kategori_link"].'">'.ss($row["kategori_adi"]).'</a></li>';
	  }
	  
	  
	  }
	  
	  ##Tema Anasayfa Konu Fonksiyonu##
	  
	  function tema_anasayfa_konu(){
	      $sayfa=g("s") ? g("s"): 1;
		  $ksayisi=rows(query("SELECT konu_id FROM konular WHERE konu_onay=1 && konu_anasayfa=1"));
		  
		   if(mysql_affected_rows()){
		   $limit=ANASAYFA_LIMIT;
		   $ssayisi=ceil($ksayisi/$limit);
		   $baslangic=($sayfa*$limit)-$limit;
		   $query=query("SELECT * FROM konular INNER JOIN uyeler ON uyeler.uye_id=konular.konu_ekleyen INNER JOIN kategoriler ON kategoriler.kategori_id=konular.konu_kategori WHERE konu_onay=1 && konu_anasayfa=1 ORDER BY konu_id DESC LIMIT $baslangic,$limit");
		   while($row=row($query)){
		   $konuid=$row["konu_id"];
		     $konu=explode("-------------------",$row["konu_aciklama"]);
			 $konu=$konu[0];
			 $baslik=ss($row["konu_baslik"]);
			 $link=URL."/".$row["konu_link"].".html"; 
			 $katlink=URL."/kategori/".$row["kategori_link"];
			 $kategori=ss($row["kategori_adi"]);
			 $okunma=number_format($row["konu_hit"]);
			 $tarihExplode=explode(" ",$row["konu_tarih"]);
			 $tarih=$tarihExplode[0];
			 $zaman=$tarihExplode[1];
			 
			 require TEMA."default/konu_anasayfa.php";
		   }
		   }else{
		   $hata="Henüz hiç içerik eklenmemiş.";
		   require_once  TEMA."default/hata.php";
		   }
	  
	  }
	   ##Tema Arama Konu Fonksiyonu##
	  
	  function tema_arama_konu($kelime){
	      $sayfa=g("s") ? g("s"): 1;
		  $ksayisi=rows(query("SELECT konu_id FROM konular WHERE  konu_baslik like '%$kelime%' && konu_onay=1"));
		  
		   if(mysql_affected_rows()){
		   $limit=ARAMA_LIMIT;
		   $ssayisi=ceil($ksayisi/$limit);
		   $baslangic=($sayfa*$limit)-$limit;
		   $query=query("SELECT * FROM konular INNER JOIN uyeler ON uyeler.uye_id=konular.konu_ekleyen INNER JOIN kategoriler ON kategoriler.kategori_id=konular.konu_kategori WHERE konu_onay=1 && konu_baslik like '%$kelime%' ORDER BY konu_id DESC LIMIT $baslangic,$limit");
		   while($row=row($query)){
		   $konuid=$row["konu_id"];
		     $konu=explode("-------------------",$row["konu_aciklama"]);
			 $konu=$konu[0];
			 $baslik=ss($row["konu_baslik"]);
			 $link=URL."/".$row["konu_link"].".html"; 
			 $katlink=URL."/kategori/".$row["kategori_link"];
			 $kategori=ss($row["kategori_adi"]);
			 $okunma=number_format($row["konu_hit"]);
			 $tarihExplode=explode(" ",$row["konu_tarih"]);
			 $tarih=$tarihExplode[0];
			 $zaman=$tarihExplode[1];
			 
			 require TEMA."default/konu_anasayfa.php";
		   }
		   }else{
		   $hata="<strong>".ss($kelime)."</strong> kelimesine ait arama sonucu bulunamadı...";
		   require_once  TEMA."default/hata.php";
		   }
	  
	  }
	  
	   ##Tema Etiket Konu Fonksiyonu##
	  
	  function tema_etiket_konu($kelime){
	      $sayfa=g("s") ? g("s"): 1;
		  $ksayisi=rows(query("SELECT konu_id FROM konular WHERE  konu_etiket like '%$kelime%' && konu_onay=1"));
		  
		   if(mysql_affected_rows()){
		   $limit=ARAMA_LIMIT;
		   $ssayisi=ceil($ksayisi/$limit);
		   $baslangic=($sayfa*$limit)-$limit;
		   $query=query("SELECT * FROM konular INNER JOIN uyeler ON uyeler.uye_id=konular.konu_ekleyen INNER JOIN kategoriler ON kategoriler.kategori_id=konular.konu_kategori WHERE konu_onay=1 && konu_etiket like '%$kelime%' ORDER BY konu_id DESC LIMIT $baslangic,$limit");
		   while($row=row($query)){
		   $konuid=$row["konu_id"];
		     $konu=explode("-------------------",$row["konu_aciklama"]);
			 $konu=$konu[0];
			 $baslik=ss($row["konu_baslik"]);
			 $link=URL."/".$row["konu_link"].".html"; 
			 $katlink=URL."/kategori/".$row["kategori_link"];
			 $kategori=ss($row["kategori_adi"]);
			 $okunma=number_format($row["konu_hit"]);
			 $tarihExplode=explode(" ",$row["konu_tarih"]);
			 $tarih=$tarihExplode[0];
			 $zaman=$tarihExplode[1];
			 
			 require TEMA."default/konu_anasayfa.php";
		   }
		   }else{
		   $hata="<strong>".ss($kelime)."</strong> kelimesine ait arama sonucu bulunamadı...";
		   require_once  TEMA."default/hata.php";
		   }
	  
	  }
	  
	   ##Tema kategori Konu Fonksiyonu##
	  
	  function tema_kategori_konu($katid){
	      $sayfa=g("s") ? g("s"): 1;
		  $ksayisi=rows(query("SELECT konu_id FROM konular WHERE konu_onay=1 && konu_kategori='$katid'"));
		  
		   if(mysql_affected_rows()){
		   $limit=KATEGORI_LIMIT;
		   $ssayisi=ceil($ksayisi/$limit);
		   $baslangic=($sayfa*$limit)-$limit;
		   $query=query("SELECT * FROM konular INNER JOIN uyeler ON uyeler.uye_id=konular.konu_ekleyen INNER JOIN kategoriler ON kategoriler.kategori_id=konular.konu_kategori WHERE konu_onay=1 && konu_anasayfa=1 ORDER BY konu_id DESC LIMIT $baslangic,$limit");
		   while($row=row($query)){
		   $konuid=$row["konu_id"];
		     $konu=explode("-------------------",$row["konu_aciklama"]);
			 $konu=$konu[0];
			 $baslik=ss($row["konu_baslik"]);
			 $link=URL."/".$row["konu_link"].".html"; 
			 $katlink=URL."/kategori/".$row["kategori_link"];
			 $kategori=ss($row["kategori_adi"]);
			 $okunma=number_format($row["konu_hit"]);
			 $tarihExplode=explode(" ",$row["konu_tarih"]);
			 $tarih=$tarihExplode[0];
			 $zaman=$tarihExplode[1];
			 
			 require TEMA."default/konu_anasayfa.php";
		   }
		   }else{
		   $hata="Henüz bu kategoriye içerik eklenmemiş.";
		   require_once  TEMA."default/hata.php";
		   }
	  
	  }
	  
	  
	  
	  ##Tema Anasayfa Sayfalama
	  
	   function tema_sayfalama($tip="anasayfa",$id=null){
	    $sayfa=g("s") ? g("s"): 1;
		if($tip=="anasayfa"){
		
		$ksayisi=rows(query("SELECT konu_id FROM konular WHERE konu_onay=1 && konu_anasayfa=1"));
		}elseif($tip=="kategori"){
		$ksayisi=rows(query("SELECT konu_id FROM konular WHERE konu_onay=1 && konu_kategori='$id'"));
		}elseif($tip=="arama"){
		$ksayisi=rows(query("SELECT konu_id FROM konular WHERE konu_onay=1 && konu_baslik like '%$id%'"));
		}
		if($tip=="anasayfa"){
		$limit=ANASAYFA_LIMIT;
		}elseif($tip=="kategori"){
		$limit=KATEGORI_LIMIT; 
		}elseif($tip=="arama"){
		$limit=ARAMA_LIMIT;
		}
	    $ssayisi=ceil($ksayisi/$limit);
				   if($ksayisi>$limit){
				   ##Onceki Sayfalama
				   $oncekiSayfa=$sayfa >1 ? $sayfa-1 : 1;
				   if($tip=="anasayfa"){
				   $onceki=URL.'/sayfa/'.$oncekiSayfa;
				   }elseif($tip=="kategori"){
				    $onceki=URL.'/kategori/'.g("link").'/sayfa/'.$oncekiSayfa;
				   }elseif($tip=="arama"){
				   $onceki=URL.'/arama/'.g("kelime").'/sayfa/'.$oncekiSayfa;
				   }
				    ##Sonraki Sayfalama
				   $sonrakiSayfa=$sayfa < $ssayisi ? $sayfa+1 : $ssayisi;
				    if($tip=="anasayfa"){
				   $sonraki=URL.'/sayfa/'.$sonrakiSayfa;
				   }elseif($tip=="kategori"){
				    $sonraki=URL.'/kategori/'.g("link").'/sayfa/'.$sonrakiSayfa;
				   }elseif($tip=="arama"){
				   $sonraki=URL.'/arama/'.g("kelime").'/sayfa/'.$sonrakiSayfa;
				   }
				   require_once TEMA."default/sayfala.php";
		  }
	   
	   }
	   
	   ##Konu Etiketler Fonksiyonu ##
	   
	   function konu_etiketler($etiketler){
	   $bol=explode(",",$etiketler);
	   $etikets=array();
	   foreach($bol as $etiket){
	      $etiket='<a href="'.URL.'/etiket/'.ss(trim($etiket)).'">'.ss(trim($etiket)).'</a>';
	      array_push($etikets,$etiket);
	   }
	   echo implode(",",$etikets);
	   
	   }
	   
	   
	   ## İlave Alan Fonksiyonu ##
	   function ilave_alan($konuid,$alanid){
	   $query=query("SELECT * FROM alan_degerler WHERE deger_konu_id='$konuid' && deger_alan_id='$alanid'");
	   if(mysql_affected_rows()){
	   $row=row($query);
	   echo $row["deger_icerik"];
	   }
	   else{
	   return false;
	   }
	   }
	   
	   
	   
	   ## TEMA SLİDER FONKSİYONU##
	   function tema_slider($limit=5){
	   
	   $query=query("SELECT * FROM konular INNER JOIN alan_degerler ON alan_degerler.deger_konu_id=konular.konu_id && deger_alan_id=1 WHERE konu_onay=1 ORDER BY rand() LIMIT $limit");
	   if(mysql_affected_rows()){
	         while($row=row($query)){
			 $link=URL."/".$row["konu_link"].".html";
			 $resim=$row["deger_icerik"];
			 $baslik=ss($row["konu_baslik"]);
			  require TEMA."default/slider.php";
			 }
	   }else{
	    return false;
	   }
	   }
	   
	   
	   
	   ##Tema Çok Okunanlar ##
	   
	   function tema_cok_okunanlar($limit=5){
	   $query=query("SELECT * FROM konular INNER JOIN alan_degerler ON alan_degerler.deger_konu_id=konular.konu_id  WHERE konu_onay=1  && deger_alan_id=1 ORDER BY konu_hit DESC LIMIT $limit");
	   if(mysql_affected_rows()){
	     while($row=row($guery)){
		  $konuid=$row["konu_id"];
		  $link=URL."/".$row["konu_link"].".html";
		  $resim=$row["deger_icerik"];
		  $baslik=ss($row["konu_baslik"]);
		  $hit=number_format($row["konu_hit"]);
		  require TEMA."default/cok_okunanlar.php";
		 }
	   
	   }else{
	     return false;
	   }
	   
	   }
	   
	   ##Tema Reklam Fonksiyonu##
	   
	   function tema_reklam($reklamAdi){
	   $query=query("SELECT * FROM reklamlar WHERE reklam_adi='$reklamAdi'");
	   if(mysql_affected_rows()){
	   $row=row($query);
	   echo $row["reklam_text"];
	   }else {
	   echo "Reklam bulunamadı";
	   }
	   }
	   
	  
?>