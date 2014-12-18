<html>
<head>
 <meta http-equiv="content-type" content="text/html; charset=utf-8;" />

</head>
<body>


<div id ="giris">
          <h2 style="font-size:18 px; padding-bottom: 10px; margin-bottom: 10px; padding-top: 6px; border-bottom:1px dashed #ddd; color:#00AAAA;">KAYIT OL</h2>
		  <?php require_once  PATH."/sistem/post/kayit_post.php";?> 
		  <form action="" method="post">
		  <ul>
		  <li style="padding: 3px 0; font-size:12px">Kullanıcı Adı: </li>
          <li><input type="text" name="kadi" style="width: 220 px; padding: 5px; border: 1px solid #ddd; border-radius: 3px;"></li>  		  
		  <li style="padding: 3px 0; font-size:12px;">Şifre: </li>
		  <li><input type="password" name="sifre" style="width: 220 px; padding: 5px; border: 1px solid #ddd; border-radius: 3px;"></li>
		  <li style="padding: 3px 0; font-size:12px;">E-posta:</li>
		  <li><input type="text" name="eposta"></li>
		  <li style="padding: 3px 0; font-size:12px;">Cinsiyet: </li>
		  <li><select name="cinsiyet" style="width: 1000 px; padding: 5px; border: 1px solid #ddd; border-radius: 3px;" ><option value="1">Erkek</option><option value="2">Kadın</option></select></li>
		  <li style="padding: 3px 0; font-size:12px;">Hakkında:</li>
		  <li ><textarea name="hakkinda" cols="30" rows="10" style="width:500 px; heigth:100px; font-size:12px/21px Arial; overflow:auto; padding: 5px; border: 1px solid #ddd; border-radius: 3px; resize:none;"></textarea></li>
		  <li><button type="submit" style="background:#333; color: #fff; padding: 3px 7px; cursor:pointer; border-radius:3px;">Kayıt Ol</button></li>
		  </ul>
		  </form>
</div>

</body>
</html>