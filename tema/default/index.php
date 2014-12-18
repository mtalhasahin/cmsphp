<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<?php tdk();?>
	<style type="text/css">@import url("<?php echo TEMA_URL;?>/css/reset.css");</style>
	<script type="text/javascript" src="<?php echo TEMA_URL;?>/js/cufon-yui.js"></script>
	<script type="text/javascript" src="<?php echo TEMA_URL;?>/js/Museo_Sans_500_400.font.js"></script>
	<script type="text/javascript" src="<?php echo TEMA_URL;?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo TEMA_URL;?>/js/site.js"></script>
	<script type="text/javascript" src="<?php echo URL;?>/sistem.js"></script>
</head>
<body>
<!-- Genel -->
<div id="genel">

	<!-- Header -->
	<div id="header">
	
		<!-- Logo -->
		<div class="logo">
			<a href="<?php echo URL;?>/index.php">
				<img src="<?php echo TEMA_URL;?>/images/logo2.png" alt="logo" />
			</a>
		</div>
		<!--#Logo -->
		
		<!-- Menü -->
		<div id="hMenu">
			<ul>
				<li class="m1 <?php echo !g("do") ? 'aktif' : null;?>"><a href="<?php echo URL;?>/index.php">Anasayfa</a></li>
				<li class="m2 <?php echo g("do")=="sayfa" ? g("link")=="dersler" ? 'aktif' : null: null;  ?>"><a href="<?php echo URL;?>/sayfa/dersler">Dersler</a></li>
				<li class="m3 <?php echo g("do")=="sayfa" ? g("link")=="dokumanlar" ? 'aktif' : null: null;  ?>"><a href="<?php URL;?>/sayfa/dokumanlar">Dokumanlar</a></li>
				<li class="m4 <?php echo g("do")=="sayfa" ? g("link")=="duyuru" ? 'aktif' : null: null;  ?>"><a href="<?php URL;?>/sayfa/duyuru">Duyuru</a></li>
				<li class="m5 <?php echo g("do")=="iletisim" ?  'aktif' :  null;  ?>"><a href="<?php echo URL;?>/iletisim">İletişim</a></li>
				<li class="m5"><a href="kayit">Kayıt Ol</a></li>
			</ul>
		</div>
		<!--#Menü -->
	
	</div>
	<!--#Header -->
	
	<!-- Menü -->
	<div id="menu">
		<ul>
			<li class="anasayfa"><a href="<?php echo URL;?>/index.php">Anasayfa</a></li>
			<?php tema_kategoriler();?>
		</ul>
	</div>
	<!--#Menü -->
	
	<!-- İçerik -->
	<div class="icerikUst"></div>
	<div id="icerik">
	
		<!-- Sağ -->
		<div id="sag">
			
			<!-- Abone Ol -->
			<div class="sagBaslik">
				<h2>Yayınlardan Haberdar Ol</h2>
			</div>
			<div class="cizgi"></div>
			<div class="sagBlok">
				<div class="aboneOl">
					<ul>
						<li class="s1"><a href="#">Delicious</a></li>
						<li class="s2"><a href="#">Mail</a></li>
						<li class="s3"><a href="#">Deviantr</a></li>
						<li class="s4"><a href="#">Facebook</a></li>
						<li class="s5"><a href="#">Feedburner</a></li>
						<li class="s6"><a href="#">Friendfeed</a></li>
						<li class="s7"><a href="#">Likedin</a></li>
						<li class="s8"><a href="#">Rss</a></li>
						<li class="s9"><a href="#">Twitter</a></li>
						<li class="s10"><a href="#">Wordpress</a></li>
					</ul>
					<div class="clear"></div>
					<div class="aboneYazi">
						YTM Blogu’na abone olarak son yazılardan ve güncellemelerden haberdar olabilir, çesitli etkinliklerden yararlanma fırsatını yakalayabilirsiniz.
					</div>
					<div class="aboneInput">
						<form action="<?php echo URL;?>" method="get">
						<input type="hidden" name="do" value="ara" />
						<span>
							<input type="text" name="kelime" placeholder="Aradığınızı Bulmak için buraya yazınız..." />
						</span>
						</form>
					</div>
				</div>
			</div>
			<!--#Abone Ol -->
			
			<!-- Sponsor Bağlantılar -->
			<div class="sagBaslik scizgi">
				<h2>Duyuru Panosu</h2>
			</div>
			<div class="cizgi"></div>
			<div class="sagBlok">
				<div class="sponsor">
					<p> <a href=""></a></p>
					<div class="sponsorReklam">
						<span>
							<?php tema_reklam("sponsor");?>
						</span>
					</div>
					<p class="sponsor-p">Bu websitesi <a href="">Yazılım Tasarım Mimarisi Öğrencileri İçin </a> yapılmıştır.</p>
					
					<!-- Banner -->
					<div class="banner">
						<a href="#">
							<img src="<?php echo TEMA_URL;?>/images/banner.png" alt="banner" />
						</a>
					</div>
					<!--#Banner -->
					
				</div>
			</div>
			<!--#Sponsor Bağlantılar -->
			
			<!-- Öne Çıkanlar -->
			<div class="sagBaslik scizgi">
				<h2>Öne Çıkanlar</h2>
			</div>
			<div class="cizgi"></div>
			<div class="sagBlok">
				<div class="oneCikanlar">
					<ul>
						<li>
							<a href="katmanli-yazilim-m-mar-s.html">
								<img src="http://www.yazgelistir.com/Makaleler/Resimler/1000000591_img2.gif" alt="" width="96" height="58"/>
								<strong>KATMANLI YAZILIM MİMARİSİ</strong>
								<span class="ocYorum">2</span>
								<span class="ocOkunma">345</span>
							</a>
						</li>
						
						<li>
							<a href="mimari-desenler.html">
								<img src="http://www.yazilimdilleri.net/Content/Images/Makale/image/BatuhanCikrikci/jmxarch.jpg" alt="" width="96" height="58"/>
								<strong>Mimari Desenler</strong>
								<span class="ocYorum">2</span>
								<span class="ocOkunma">345</span>
							</a>
						</li>
					</ul>
				</div>
				
				<!-- Banner2 -->
				<div class="banner2">
					<a href="#">
						<img src="<?php echo TEMA_URL;?>/images/banner2.png" alt="banner" />
					</a>
				</div>
				<!--#Banner2 -->
				
			</div>
			<!--#Öne Çıkanlar -->
			
			<!-- Her Gün -->
			<div class="sagBaslik scizgi">
				<h2>Her Gün</h2>
			</div>
			<div class="cizgi"></div>
			<div class="sagBlok son">
				<div class="herGun">
					<ul>
						
						
					</ul>
				</div>
			</div>
			<!--#Her Gün -->
			
		</div>
		<!--#Sağ -->
	
		<!-- Sol -->
		<div id="sol">
		
			<?php  tema_icerik();?>
		
		</div>
		<!--#Sol -->
	
	<div class="clear"></div>
	</div>
	<div class="icerikAlt"></div>
	<!--#İçerik -->
	
	<!-- Footer -->
	<div id="footer">
	
		<div class="fSag">
			<p>Tasarım: <a href="">Fırat Yazılım</a></p>
			<p style="padding-top: 3px">CSS: <a href="">Fırat Yazılım</a></p>
		</div>
	
		<div class="fSol">
			<ul>
				<li><a href="#">Anasayfa</a>|</li>
				<li><a href="#">Ben Kimim?</a>|</li>
				<li><a href="#">Galeri</a>|</li>
				<li><a href="#">Dosyalar</a>|</li>
				<li><a href="#">Arşiv</a>|</li>
				<li><a href="#">İstatistikler</a>|</li>
				<li><a href="#">İletişim</a>|</li>
			</ul>
			<p>Tüm Hakları Saklıdır. &copy; 2012</p>
		</div>
	
	</div>
	<!--#Footer -->

</div>
<!--#Genel -->
</body>
</html>