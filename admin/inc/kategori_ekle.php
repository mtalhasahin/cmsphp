
            <article class="module width_full">
			<header><h3>KATEGORİ EKLE</h3></header>
			<?php
			if($_POST){
			         $kategori_adi=p("kategori_adi");
					 $kategori_link=sef_link($kategori_adi);
					 $kategori_desc=p("kategori_desc");
					 $kategori_keyw=p("kategori_keyw");
					 $kategori_anasayfa_konu=p("kategori_anasayfa_konu");
					 $kategori_full_konu=p("kategori_full_konu");
					 
					 if(!$kategori_adi){
					 echo '<h4 class="alert_error">Bir kategori adı girmelisiniz..</h4>';
					 }else{
					 
					 $varmi=query("SELECT * FROM kategoriler WHERE kategori_link='$kategori_link'");
					 if(mysql_affected_rows()){
					 echo '<h4 class="alert_error"><strong>'.ss($kategori_adi).'</strong>adında kategori adı zaten mevcut,başka bir ad deneyin..</h4>';
					 }else{
					 $insert=query("INSERT INTO kategoriler SET
					 kategori_adi='$kategori_adi',
					 kategori_link='$kategori_link',
					 kategori_desc='$kategori_desc',
					 kategori_keyw='$kategori_keyw',
					 kategori_anasayfa_konu='$kategori_anasayfa_konu',
					 kategori_full_konu='$kategori_full_konu'
					 ");
					    if($insert){
						 echo '<h4 class="alert_success">Kategori Başarıyla Eklendi...Yonlendiriliyorsunuz</h4>';
						 go(URL."/admin/index.php?do=kategoriler",1);
						
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
							<label>KATEGORİ ADI</label>
							<input type="text" name="kategori_adi">
						</fieldset>
							<fieldset>
							<label>KATEGORİ AÇIKLAMASI</label>
							<div style="clear:both"></div>
					        <div style="padding:10px">
							<textarea class="ckeditor"rows="3" name="kategori_desc"></textarea>
						    </div>
						</fieldset>
						<fieldset>
							<label>KATEGORİ KEYWORDS</label>
							<div style="clear:both"></div>
					        <div style="padding:10px">
							<textarea class="ckeditor" rows="3" name="kategori_keyw"></textarea>
						    </div>
						</fieldset>
						<fieldset>
							<label>KATEGORİ ANASAYFA KONU(.php)</label>
							<input type="text" name="kategori_anasayfa_konu">
						</fieldset>
					<fieldset>
							<label>KATEGORİ FULL KONU(.php)</label>
							<input type="text" name="kategori_full_konu">
						</fieldset>
						
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Kategori Ekle" class="alt_btn">
				</div>
			</footer>
			</form>
		</article><!-- end of post new article -->
		
	
		</article><!-- end of styles article -->
		<div class="spacer"></div>