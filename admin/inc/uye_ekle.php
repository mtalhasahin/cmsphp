
            <article class="module width_full">
			<header><h3>UYE EKLE</h3></header>
			<?php
			if($_POST){
			        $uye_kadi=p("uye_kadi");
					$uye_link=sef_link($uye_kadi);
					$uye_sifre=md5(p("uye_sifre"));
					$uye_eposta=p("uye_eposta");
					$uye_rutbe=p("uye_rutbe");
					$uye_onay=p("uye_onay");
			        if(!$uye_kadi || !$uye_sifre || !$uye_eposta)
					{
					echo '<h4 class="alert_error">Tüm alanları doldurmanız gerekmektedir...</h4>';
					}else
					{
					  $varmi=query("SELECT * FROM uyeler WHERE uye_link='$uye_link'");
					   if(mysql_affected_rows()){
					    echo '<h4 class="alert_error"><strong>'.ss($uye_kadi).'</strong> adlı kullanıcı zaten bulunmaktadır, başka bir ad deneyiniz..</h4>';
					   }else{
	                        $insert=query("INSERT INTO uyeler SET
							uye_kadi='$uye_kadi',
							uye_link='$uye_link',
							uye_sifre='$uye_sifre',
							uye_eposta='$uye_eposta',
							uye_rutbe='$uye_rutbe',
							uye_onay='$uye_onay'
							");				   
							 if($insert){
						    echo '<h4 class="alert_success">Üye Başarıyla Eklendi...Yonlendiriliyorsunuz</h4>';
						     go(URL."/admin/index.php?do=uyeler",1);
						
						      }else
							  {
						    echo '<h4 class="alert_error">Mysql Hatasi: '.mysql_Error().'</h4>';
						       }
					   
					   }
					}				
					
			
			}
			?>
				<form action="" method="post">
				<div class="module_content">
						<fieldset>
							<label>ÜYE KULLANICI ADI</label>
							<input type="text" name="uye_kadi">
						</fieldset>
							<fieldset>
							<label>ÜYE ŞİFRE</label>
							<input type="text" name="uye_sifre">
						</fieldset>
						<fieldset>
							<label>ÜYE E-POSTA</label>
							<input type="text" name="uye_eposta">
						</fieldset>
						<fieldset>
							<label>ÜYE RUTBE</label>
							<select name="uye_rutbe" >
								<option value="1">Yönetici</option>
								<option value="2" selected>Üye</option>
							
							</select>
						</fieldset>
						<fieldset>
							<label>UYE ONAY</label>
							<select name="uye_onay" >
								<option value="1" selected>Onaylı</option>
								<option value="2" >Onaylı Değil</option>
							
							</select>
						</fieldset>
					
						
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Üye Ekle" class="alt_btn">
				</div>
			</footer>
			</form>
		</article><!-- end of post new article -->
		
	
		</article><!-- end of styles article -->
		<div class="spacer"></div>