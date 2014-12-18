
<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="<?php URL;?>/admin">YTM BLOG</a></h1>
			<h2 class="section_title">İçerik Yönetim Paneli</h2><div class="btn_view_site"><a target="_blank" href="<?php echo URL;?>">Siteyi Goster</a></div>
		</hgroup>
	</header> 
	
	<section id="secondary_bar">
		<div class="user">
			<p><?php  echo session("uye_kadi"); ?> (<a href="#">3 Mesaj</a>)</p>
			
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.html">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current">Gösterge Paneli</a></article>
		</div>
	</section>
	
	<aside id="sidebar" class="column">
		<form class="quick_search">
			<input type="text" value="Arama Yap" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		<hr/>
		<h3>ICERIK</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="index.php?do=icerik_ekle">Yeni İçerik Ekle</a></li>
			<li class="icn_edit_article"><a href="index.php?do=icerikler">İçerikleri Düzenle</a></li>
			<li class="icn_edit_article"><a href="index.php?do=onay_bekleyen_icerikler">Onay Bekleyen İçerikler</a></li>
			
		</ul>
		<h3>ILAVE ALANLAR</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="index.php?do=ilave_alanlar">İlave Alanlar</a></li>
			<li class="icn_edit_article"><a href="index.php?do=ilave_alan_ekle">İlave Alan Ekle</a></li>
			
		</ul>
		<h3>SABİT SAYFALAR</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="index.php?do=sabit_sayfalar">Sabit Sayfalar</a></li>
			<li class="icn_edit_article"><a href="index.php?do=sayfa_ekle">Sayfa Ekle</a></li>
			
		</ul>
		<h3>KULLANICILAR</h3>
		<ul class="toggle">
			<li class="icn_add_user"><a href="index.php?do=uye_ekle">Yeni Üye Ekle</a></li>
			<li class="icn_view_users"><a href="index.php?do=uyeler">Üyeleri Düzenle</a></li>
			<li class="icn_edit_article"><a href="index.php?do=onay_bekleyen_uyeler">Onay Bekleyen Uyeler</a></li>
		</ul>
		<h3>KATEGORILER</h3>
		<ul class="toggle">
			<li class="icn_folder"><a href="index.php?do=kategori_ekle">Yeni Kategori Ekle</a></li>
			<li class="icn_photo"><a href="index.php?do=kategoriler">Kategorileri Düzenle</a></li>
			
		</ul>
		<h3>REKLAM YONETİMİ</h3>
		<ul class="toggle">
			<li class="icn_folder"><a href="index.php?do=fotograf_ekle">Reklam Ekle</a></li>
			<li class="icn_photo"><a href="index.php?do=fotograflar">Reklamları Düzenle</a></li>
			
		</ul>
		<h3>DOSYA YONETİMİ</h3>
		<ul class="toggle">
			<li class="icn_folder"><a href="index.php?do=dosya_yukle">Dosya Yükle</a></li>
			<li class="icn_photo"><a href="index.php?do=dosyalar">Dosyalar</a></li>
			
		</ul>
		<h3>Admin</h3>
		<ul class="toggle">
			<li class="icn_settings"><a href="index.php?do=ayarlar">Genel Ayarlar</a></li>
			<li class="icn_jump_back"><a href="index.php?do=cikis_yap">Çıkış Yap</a></li>
		</ul>
		
		<footer>
			<hr />
			<p><strong>Copyright &copy; 2014 YTM Blog</strong></p>
		</footer>
	</aside>
	
	<section id="main" class="column">
		
		<?php
		
		$do=g("do");
		if(file_exists("inc/{$do}.php")){
		    require("inc/{$do}.php");
		}else{
		
		    require("inc/anasayfa.php");
		}
		
		
		?>
		
		
		
	</section>