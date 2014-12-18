<html>
<head>
 <meta http-equiv="content-type" content="text/html; charset=utf-8;" />

</head>
<body>


<div id ="giris">
          <h2 style="font-size:18 px; padding-bottom: 10px; margin-bottom: 10px; padding-top: 6px; border-bottom:1px dashed #ddd; color:#00AAAA;">PROFİL DUZENLE</h2>
		  <?php require_once  PATH."/sistem/post/profil_post.php";?> 
		  <form action="" method="post">
		  <ul>
		  	  
		  <li style="padding: 3px 0; font-size:12px;">Şifre:<span style="font-size:11px;color:#656565">(Şifrenizi değiştirmek isterseniz bu alanı doldurunuz) </span> </li>
		  <li><input type="password" name="sifre" style="width: 220 px; padding: 5px; border: 1px solid #ddd; border-radius: 3px;"></li>
		  <li style="padding: 3px 0; font-size:12px;">Hakkında:</li>
		  <li ><textarea name="hakkinda" cols="30" rows="10" style="width:500 px; heigth:100px; font-size:12px/21px Arial; overflow:auto; padding: 5px; border: 1px solid #ddd; border-radius: 3px; resize:none;"><?php echo ss($row["uye_hakkinda"]);?></textarea></li>
		  <li><button type="submit" style="background:#333; color: #fff; padding: 3px 7px; cursor:pointer; border-radius:3px;">Profilimi Güncelle</button></li>
		  </ul>
		  </form>
</div>

</body>
</html>