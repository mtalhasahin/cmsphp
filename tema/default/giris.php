<html>
<head>
 <meta http-equiv="content-type" content="text/html; charset=utf-8;" />

</head>
<body>


<div id ="giris">
          <h2 style="font-size:18 px; padding-bottom: 10px; margin-bottom: 10px; padding-top: 6px; border-bottom:1px dashed #ddd; color:#00AAAA;">Giriş Yap</h2>
		  <?php require_once  PATH."/sistem/post/giris_post.php";?> 
		  <form action="" method="post">
		  <ul>
		  <li style="padding: 3px 0; font-size:12px">Kullanıcı Adı: </li>
          <li><input type="text" name="kadi" style="width: 220 px; padding: 5px; border: 1px solid #ddd; border-radius: 3px;"></li>  		  
		  <li style="padding: 3px 0; font-size:12px;">Şifre: </li>
		  <li><input type="password" name="sifre" style="width: 220 px; padding: 5px; border: 1px solid #ddd; border-radius: 3px;"></li>
		  <li><button type="submit" style="background:#333; color: #fff; padding: 3px 7px; cursor:pointer; border-radius:3px;">Giriş Yap</button></li>
		  </ul>
		  </form>
</div>

</body>
</html>