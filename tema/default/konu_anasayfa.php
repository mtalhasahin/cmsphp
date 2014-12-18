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
				
					<div class="konuResim">
						<a href="<?php echo $link;?>">
							<img src="<?php  ilave_alan($konuid,1);?>" alt="resim" />
						</a>
					</div>
					
					<div class="konuAc">
					<?php echo $konu; ?>
					</div>
					
					<div class="clear"></div>
					
					<div class="konuAlt">
						<a href="<?php echo $link;?>">
							<img src= "<?php echo TEMA_URL;?>/images/devamButon.png" alt="" />
						</a>
						<a href="#">
							<img src="<?php echo TEMA_URL;?>/images/paylasButon.png" alt="" />
						</a>
					</div>
				
				</div>
			</div>
			<!--#Konu -->