<?php

      $id = g("id");
	$query = query("SELECT * FROM reklamlar WHERE reklam_id = '$id'");
	if (mysql_affected_rows() < 1){
		go(URL."/admin/index.php?do=fotograflar");
		exit;
	}
	
	$row = row($query);


?>
            <article class="module width_full">
			<header><h3>REKLAM DÜZENLE</h3></header>
			<?php
			if($_POST){
			       
					 $reklam_baslik=p("reklam_baslik");
					 $reklam_text=p("reklam_text");
					 
					 if(!$reklam_baslik || !$reklam_text){
					 echo '<h4 class="alert_error">Gerekli Alanları Doldurunuz..</h4>';
					 }else{
					 $query=query("SELECT reklam_id FROM reklamlar WHERE reklam_adi='$reklam_adi' && reklam_id!='$id'");
					 if(mysql_affected_rows()){
					  echo '<h4 class="alert_error">Böyle bir fotoğraf adı bulunuyor,başka bir ad deneyiniz ..</h4>';
					 }else{
					 
					   $insert=query("UPDATE reklamlar SET
					   reklam_adi='$reklam_baslik',
					   reklam_text='$reklam_text'
					   WHERE reklam_id='$id'");
					      if($insert){
						  echo '<h4 class="alert_success">Fotoğraf Başarıyla GÜncellendi...Yonlendiriliyorsunuz</h4>';
						    go(URL."/admin/index.php?do=fotograflar",1);
						
						 }else{
						    echo '<h4 class="alert_error">Mysql Hatasi: '.mysql_Error().'</h4>';
						
						}
					 }
					 
						
						}
					 }
			
	
			?>
				<form action="" method="post">
				<div class="module_content">
						<fieldset>
							<label>REKLAM BAŞLIĞI</label>
							<input type="text" name="reklam_baslik" value="<?php echo ss($row["reklam_adi"]);?>">
						</fieldset>
							<fieldset>
							<label>REKLAM İÇERİĞİ</label>
							<div style="clear:both"></div>
					        <div style="padding:10px">
							<textarea class="ckeditor" rows="6" name="reklam_text"><?php echo ss($row["reklam_text"]);?></textarea>
						     </div>
						</fieldset>
						
						
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Reklamı Güncelle" class="alt_btn">
				</div>
			</footer>
			</form>
		</article><!-- end of post new article -->
		
	
		</article><!-- end of styles article -->
		<div class="spacer"></div>