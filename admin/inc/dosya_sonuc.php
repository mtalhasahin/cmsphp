
            <article class="module width_full">
			<header><h3>DOSYA SONUÇ</h3></header>
			
				<form action="<?php echo URL;?>/admin/index.php?do=dosya_sonuc" method="post" enctype="multipart/form-data">
				<div class="module_content">
						<fieldset>
							<div style="padding-left:10px">
							<?php
							if(is_uploaded_file($_FILES["dosya"]["tmp_name"])){
							$dosya=pathinfo($_FILES["dosya"]["name"]);
							$uzanti=$dosya["extension"];
							$ad=sef_link($dosya["filename"])."_".uniqid(true);
							$yeniKonum=realpath("../")."/upload/dosya/".$ad.".".$uzanti;
							if(move_uploaded_file($_FILES["dosya"]["tmp_name"],$yeniKonum)){
							$link=$ad.".".$uzanti;
							$insert=query("INSERT INTO dosyalar SET
							dosya_link='$link',
							dosya_ekleyen='".session("uye_id")."'
							");
							if($insert){
							    if($uzanti=="png" || $uzanti=="jpg" || $uzanti=="gif"){
								echo '<img src="'.URL.'/upload/dosya/'.$link.'" alt="" style="max-width:600px; max-height:600px" />';
								}else{
								     echo '<font color="green">Dosyanız Başarıyla Yüklendi.</font>';
								}
								echo '<div style="padding-top:20px"><input type="text" value="'.URL.'/upload/dosya/'.$link.'" /></div>';
							}else{
							   echo "Veritabanı Hatası.";
							}
							}else{
							 echo 'Dosya taşınamadı!';
							}
							
							}else{
							go(URL."/admin/?do=dosya_yukle");
							}
							?>
							</div>
						</fieldset>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Dosyayı Yükle" class="alt_btn">
				</div>
			</footer>
			</form>
		</article><!-- end of post new article -->
		
	
		</article><!-- end of styles article -->
		<div class="spacer"></div>