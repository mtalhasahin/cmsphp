
            <article class="module width_full">
			<header><h3>İÇERİK EKLE</h3></header>
			<?php
			if($_POST){
			        $konu_baslik=p("konu_baslik");
					$konu_link=sef_link($konu_baslik);
					$konu_kategori=p("konu_kategori");
					$konu_anasayfa_aciklama=p("konu_anasayfa_aciklama");
					$konu_full_aciklama=p("konu_full_aciklama");
					$konu_aciklama=$konu_anasayfa_aciklama."-------------------".$konu_full_aciklama;
		            $konu_etiket=p("konu_etiket");	
					$konu_onay=p("konu_onay");
					$konu_anasayfa=p("konu_anasayfa");
					$konu_ekleyen=session("uye_id");
					
					if(!$konu_baslik || !$konu_full_aciklama || !$konu_anasayfa_aciklama){
					
					echo '<h4 class="alert_error">Gerekli alanları doldurmanız gerekmektedir...</h4>';
					}else{
					
					$varmi=query("SELECT * FROM konular WHERE konu_link='$konu_link'");
					if(mysql_affected_rows()){
					echo '<h4 class="alert_error"><strong>'.ss($konu_baslik).'</strong> adlı konu başlığı bulunmaktadır,başka bir ad deneyiniz...</h4>';
					}else{
					
					$insert=query("INSERT INTO konular SET
					konu_baslik='$konu_baslik',
					konu_link='$konu_link',
					konu_kategori='$konu_kategori',
					konu_aciklama='$konu_aciklama',
					konu_etiket='$konu_etiket',
					konu_onay='$konu_onay',
					konu_anasayfa='$konu_anasayfa',
					konu_ekleyen='$konu_ekleyen'
					");
					
					     if($insert){
						 $id=mysql_insert_id();
						    $alanQuery=query("SELECT * FROM ilave_alanlar");
							if(mysql_affected_rows()){
							   while($alanRow=row($alanQuery)){
							   if(p("alan_".$alanRow["alan_id"])){
							      $deger=p("alan_".$alanRow["alan_id"]);
								  $insert=query("INSERT INTO alan_degerler SET
								  deger_alan_id='".$alanRow["alan_id"]."',
								  deger_icerik='$deger',
								  deger_konu_id='$id'");
							   }
							   }
							}
						 
						     echo '<h4 class="alert_success">Konu Başarıyla Eklendi...Yonlendiriliyorsunuz</h4>';
						     go(URL."/admin/index.php?do=icerikler",1);
						 
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
							<label>KONU BAŞLIĞI</label>
							<input type="text" name="konu_baslik">
						</fieldset>
						<fieldset>
							<label>KONU KATEGORİSİ</label>
							<select name="konu_kategori">
							<?php
							$katquery=query("SELECT * FROM kategoriler ORDER BY kategori_id ASC");
							          while($katRow=row($katquery)){
										echo '<option value="'.$katRow["kategori_id"].'">'.ss($katRow["kategori_adi"]).'</option>';
									  }
							
							
							?>
							
							</select>
						</fieldset>
							<fieldset>
							<label>KONU ANASAYFA AÇIKLAMASI</label>
							<div style="clear:both"></div>
							<div style="padding:10px">
							<textarea class="ckeditor" rows="3" name="konu_anasayfa_aciklama"></textarea>
	                        </div> 					
						</fieldset>
						<fieldset>
							<label>KONU FULL AÇIKLAMASI</label>
							<div style="clear:both"></div>
							<div style="padding:10px">
							<textarea class="ckeditor" rows="10" name="konu_full_aciklama"></textarea>
                            </div>						
						</fieldset>
						<fieldset>
							<label>KONU ETİKETLERİ</label>
							<input type="text" name="konu_etiket">
						</fieldset>
						
						<?php
						
						$alanQuery=query("SELECT * FROM ilave_alanlar");
						if(mysql_affected_rows()){
						echo '<h2>İlave Alanlar</h2>';
						       while($alanRow=mysql_fetch_array($alanQuery)){
							   if($alanRow["alan_tip"]==1){
							   $form='<input type="text" name="alan_'.$alanRow["alan_id"].'">';
							   }else{
							   $form='<textarea rows="3" name="alan_'.$alanRow["alan_id"].'"></textarea>';
							   }
							   echo '<fieldset>
							         <label>İlave Alan - ('.ss($alanRow["alan_adi"]).')</label>
							        '.$form.'
						             </fieldset>';
							   }
						}
						?>
					<fieldset>
							<label>KONU ONAYI</label>
							<select name="konu_onay">
							<option value="1" selected>Onaylı</option>
							<option value="0">Onaylı Değil</option>
							</select>
						</fieldset>
						<fieldset>
							<label>KONU ANASAYFA GÖRÜNÜMÜ</label>
							<select name="konu_anasayfa">
							<option value="1" selected>Evet</option>
							<option value="0">Hayır</option>
							</select>
						</fieldset>
						
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Konu Ekle" class="alt_btn">
				</div>
			</footer>
			</form>
		</article><!-- end of post new article -->
		
	
		</article><!-- end of styles article -->
		<div class="spacer"></div>