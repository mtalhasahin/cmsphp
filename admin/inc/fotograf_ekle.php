
            <article class="module width_full">
			<header><h3>REKLAM EKLE</h3></header>
			<?php
			if($_POST){
			       
					 $reklam_baslik=p("reklam_baslik");
					 $reklam_text=p("reklam_text");
					 
					 if(!$reklam_baslik || !$reklam_text){
					 echo '<h4 class="alert_error">Gerekli Alanları Doldurunuz..</h4>';
					 }else{
					 $query=query("SELECT reklam_id FROM reklamlar WHERE reklam_adi='$reklam_adi'");
					 if(mysql_affected_rows()){
					  echo '<h4 class="alert_error">Böyle bir fotoğraf adı bulunuyor,başka bir ad deneyiniz ..</h4>';
					 }else{
					 
					   $insert=query("INSERT INTO reklamlar SET
					   reklam_adi='$reklam_baslik',
					   reklam_text='$reklam_text'");
					      if($insert){
						  echo '<h4 class="alert_success">Reklam Başarıyla Eklendi...Yonlendiriliyorsunuz</h4>';
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
							<input type="text" name="reklam_baslik">
						</fieldset>
							<fieldset>
							<label>REKLAM İÇERİĞİ</label>
							<div style="clear:both"></div>
							<div style="padding:10px">
							<textarea class="ckeditor" rows="6" name="reklam_text"></textarea>
							</div>
						</fieldset>
						
						
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Reklam Ekle" class="alt_btn">
				</div>
			</footer>
			</form>
		</article><!-- end of post new article -->
		
	
		</article><!-- end of styles article -->
		<div class="spacer"></div>