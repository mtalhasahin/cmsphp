<?php
require_once "../sistem/ayarlar.php";
require_once "../sistem/fonksiyonlar.php";

?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>YTM BLOG - ICERIK YONETIM PANELİ</title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
	<script src="ckeditor/adapters/jquery.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
		
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	
	$(".tab_content").hide(); 
	$("ul.tabs li:first").addClass("active").show(); /
	$(".tab_content:first").show(); 

	
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active");
		$(this).addClass("active"); 
		$(".tab_content").hide();

		var activeTab = $(this).find("a").attr("href"); 
		$(activeTab).fadeIn();
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>
</head>
<body>

	<?php
	
	    if(session("login") && session("uye_rutbe")==1 ){
		   require_once "inc/default.php";
		}
		else{
		       if($_POST){
		       $kadi=p("kadi");
		       $sifre=md5(p("sifre"));
			      if(!$kadi || !$sifre){
				  echo "<font color='red'>Lütfen Bütün Alanları Doldurunuz</font>";
				  }else{
				  $query=query("SELECT * FROM uyeler WHERE uye_kadi='$kadi' && uye_sifre='$sifre' && uye_rutbe=1");
				    if(mysql_affected_rows()){
					$row=row($query);
					$session=array(
					      "login"=>true,
					      "uye_id"=>$row["uye_id"],
						  "uye_rutbe"=>$row["uye_rutbe"],
						  "uye_kadi"=>$row["uye_kadi"]
					);
					session_olustur($session);
					go(URL."/admin");
					}
					else{
					echo "<font color='red'>Böyle bir kullanıcı bulunmamaktadır</font>";
					}
				  }
			   
		}
	
	
	?>
<div id="giris_yap">
       <form action="" method="post">
	   <table cellpadding="0" cellspacing="0">
	   <tr>
	       <td>Kullanıcı Adı:</td>
	       <td><input type="text" name="kadi"></td>
	   </tr>
	   <tr>
	       <td>Şifre:</td> 
	       <td><input type="password" name="sifre"></td>
	   </tr>
	   <tr>
	        <td></td>
			<td><button type="submit">Giriş Yap</button></td>
	   </tr>
	   
	   </table>
      </form>
</div>
<?php
   }
?>

</body>

</html>