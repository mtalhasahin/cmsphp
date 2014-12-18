<!-- Konu -->
			<div class="konu">
				<div class="solBaslik">
					<h2>
						<a href="<?php echo $link;?>"><?php echo $baslik;?></a>
					</h2>
				</div>
				<div class="konuUst">
					<span class="kaKategori"><a href="<?php echo ss($katlink);?>"><?php echo $kategori;?></a></span>
					<span class="kaYorum">2 Yorum</span>
					<span class="kaOkunma"><?php echo $okunma;?></span>
					<span class="kaTarih"><?php  echo $tarih;?></span>
				</div>
				<div class="konuIc">
				
					
					
					<div class="konuAc">
					<?php echo $konu; ?>
					</div>
					
					<div class="clear"></div>
					<?php if($etiketler)?>
					<div class="konuEtiketler">
					<?php konu_etiketler($etiketler);?>
					</div>
					<?php}?>
					<div class="konuAlt">
						
						<a href="#">
							<img src="<?php echo TEMA_URL;?>/images/paylasButon.png" alt="" />
						</a>
					</div>
				
				</div>
			</div>
			<!--#Konu -->
			
			<!-- Yorumlar -->
<div id="yorumlar" style='background: url("../images/solCizgi2.png") repeat-x bottom left!important; padding-bottom: 10px; margin-bottom: 20px;'>

	<h3 class="yorum-h3" style="font-size: 18px; margin-bottom: 10px;">Yorumlar (3)</h3>

	<div id="yorum_id" class="yorum" style="border: 2px solid #e1e1e1; padding: 10px; border-radius: 3px; overflow: auto; margin-bottom: 10px;">
		<div class="yorumSag" style="float: right; width: 510px;">
			<div class="yorumUst"><strong>@Talha Şahin</strong> demiş ki;</div>
			<div class="yorumText" style="font-size: 12px; color: #656565; padding-top: 7px;">Bu bir deneme yorumdur :)</div>
		</div>
		<div class="avatar" style="float: left; margin-right: 10px;" >
			<img src="" style="width: 50px; height: 50px;" alt=""/>
		</div>
	</div>
	
	<div id="yorum_id" class="yorum" style="border: 2px solid #e1e1e1; padding: 10px; border-radius: 3px; overflow: auto; margin-bottom: 10px;">
		<div class="yorumSag" style="float: right; width: 510px;">
			<div class="yorumUst"><strong>@Ömer Yazır</strong> demiş ki;</div>
			<div class="yorumText" style="font-size: 12px; color: #656565; padding-top: 7px;">Bu bir deneme yorumdur :)</div>
		</div>
		<div class="avatar" style="float: left; margin-right: 10px;" >
			<img src="" style="width: 50px; height: 50px;" alt=""/>
		</div>
	</div>
	
	<div id="yorum_id" class="yorum" style="border: 2px solid #e1e1e1; padding: 10px; border-radius: 3px; overflow: auto; margin-bottom: 10px;">
		<div class="yorumSag" style="float: right; width: 510px;" >
			<div class="yorumUst"><strong>@Talha Şahin</strong> demiş ki;</div>
			<div class="yorumText" style="font-size: 12px; color: #656565; padding-top: 7px;">Bu bir deneme yorumdur :)</div>
		</div>
		<div class="avatar" style="float: left; margin-right: 10px;" >
			<img src="" style="width: 50px; height: 50px;" alt=""/>
		</div>
	</div>

</div>
<!--#Yorumlar -->

<!-- Yorum Yap -->
<div id="yorumYap">
	<h3 class="yorum-h3">Yorum Yap</h3>
	<div class="yorumForm" style="background: #f8f8f8; padding: 10px; border-radius: 3px;">
		<ul>
		    <?php if(session("login")){?>
			<input type="hidden" name="adsoyad" value="1">
			<input type="hidden" name="eposta" value="1">
			<?php } else { ?>
			<li style="padding: 3px 0; font-size: 13px;">Ad-Soyad:</li>
			<li style="padding: 3px 0; font-size: 13px;"><input type="text" name="adsoyad" style="border: 1px solid #ddd; padding: 4px; width: 220px; border-radius: 3px;" /></li>
			<li style="padding: 3px 0; font-size: 13px;">E-Posta:</li>
			<li style="padding: 3px 0; font-size: 13px;"><input type="eposta" name="eposta" style="border: 1px solid #ddd; padding: 4px; width: 220px; border-radius: 3px;" /></li>
			<?php } ?>
			<li style="padding: 3px 0; font-size: 13px;">Yorumunuz:</li>
			<li style="padding: 3px 0; font-size: 13px;"><textarea name="yorum" cols="30" rows="10" style="border: 1px solid #ddd; padding: 4px; width: 220px; border-radius: 3px; width: 500px; height: 100px; resize: none; font: 12px/21px Arial;"></textarea></li>
			<li style="padding: 3px 0; font-size: 13px;"><button  onclick="$.Blog.yorumEkle('<?php echo $konuid;?>')" id="yorumGonder" style="background: #333; padding: 3px 6px; color: #fff; cursor: pointer; border-radius: 3px;">Yorum Gönder</button></li>
		</ul>
	</div>
</div>
<!--#Yorum Yap -->
			
			
			
			
			
			
			
			
			
			
			
			
			
			