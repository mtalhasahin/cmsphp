
<?php

	$id = g("id");
	$query = query("SELECT * FROM konular WHERE konu_id = '$id'");
	if (mysql_affected_rows() < 1){
		go(URL."/admin");
		exit;
	}
	
	$row = row($query);
	
	$konu = explode("-------------------------------", $row["konu_aciklama"]);

?>
<article class="module width_full">
	<header><h3>İçerik Düzenle</h3></header>
		<?php
		
			if ($_POST){
				
				$konu_baslik = p("konu_baslik");
				$konu_link = sef_link($konu_baslik);
				$konu_kategori = p("konu_kategori");
				$konu_anasayfa_aciklama = p("konu_anasayfa_aciklama");
				$konu_full_aciklama = p("konu_full_aciklama");
				$konu_aciklama = $konu_anasayfa_aciklama."-------------------------------".$konu_full_aciklama;
				$konu_etiket = p("konu_etiket");
				$konu_onay = p("konu_onay");
				$konu_anasayfa = p("konu_anasayfa");
				$konu_ekleyen = session("uye_id");
				
				if (!$konu_baslik || !$konu_full_aciklama || !$konu_anasayfa_aciklama){
					echo '<h4 class="alert_error">Gerekli alanları doldurmanız gerekiyor..</h4>';
				}else {
				
					$varmi = query("SELECT * FROM konular WHERE konu_link = '$konu_link' && konu_id != '$id'");
					if (mysql_affected_rows()){
						echo '<h4 class="alert_error"><strong>'.ss($konu_baslik).'</strong> adlı konu zaten sitede bulunuyor, başka bir tane deneyin.</h4>';
					}else {
					
						$update = query("UPDATE konular SET
						konu_baslik = '$konu_baslik',
						konu_link = '$konu_link',
						konu_kategori = '$konu_kategori',
						konu_aciklama = '$konu_aciklama',
						konu_etiket = '$konu_etiket',
						konu_onay = '$konu_onay',
						konu_ekleyen = '$konu_ekleyen',
						konu_anasayfa = '$konu_anasayfa'
						WHERE konu_id = '$id'");
						
						if ($update){
						    $alanQuery=query("SELECT * FROM ilave_alanlar");
							if(mysql_affected_rows()){
							   while($alanRow=row($alanQuery)){
							   if(p("alan_".$alanRow["alan_id"])){
							   
							     
							      $deger=p("alan_".$alanRow["alan_id"]);
								   $alanDeger=query("SELECT * FROM alan_degerler WHERE deger_konu_id='$id' && deger_alan_id='".$alanRow["alan_id"]."'"); 
								   if(mysql_affected_rows()){
								   $update=query("UPDATE alan_degerler SET
								   deger_icerik='$deger'
								   WHERE deger_alan_id='".$alanRow["alan_id"]."'&& deger_konu_id='$id'");
								   }else{
								  $insert=query("INSERT INTO alan_degerler SET
								  deger_alan_id='".$alanRow["alan_id"]."',
								  deger_icerik='$deger',
								  deger_konu_id='$id'");
								  }
							   }
							   }
							}
							echo '<h4 class="alert_success">Konu başarıyla güncellendi.. Yönlendiriliyorsunuz..</h4>';
							go(URL."/admin/index.php?do=icerikler", 1);
						}else {
							echo '<h4 class="alert_error">Mysql Hatası: '.mysql_Error().'</h4>';
						}
					
					}
				
				}
				
			}
		
		?>
		<form action="" method="post">
			<div class="module_content">
					<fieldset>
						<label>KONU BAŞLIĞI</label>
						<input type="text" name="konu_baslik" value="<?php echo ss($row["konu_baslik"]); ?>" />
					</fieldset>
					<fieldset>
						<label>KONU KATEGORİSİ</label>
						<select name="konu_kategori">
							<?php
								$katQuery = query("SELECT * FROM kategoriler ORDER BY kategori_adi ASC");
								while ($katRow = row($katQuery)){
									echo '<option ';
									echo $katRow["kategori_id"] == $row["konu_kategori"] ? 'selected ' : null;
									echo 'value="'.$katRow["kategori_id"].'">'.ss($katRow["kategori_adi"]).'</option>';
								}
							?>
						</select>
					</fieldset>
					<fieldset>
						<label>KONU ANASAYFA AÇIKLAMASI</label>
						<div style="clear:both"></div>
					    <div style="padding:10px">
						<textarea class="ckeditor" rows="3" name="konu_anasayfa_aciklama"><?php echo ss($konu[0]); ?></textarea>
					</div>
					</fieldset>
					<fieldset>
						<label>KONU FULL AÇIKLAMASI</label>
						<div style="clear:both"></div>
					    <div style="padding:10px">
						<textarea class="ckeditor" rows="10" name="konu_full_aciklama"><?php echo ss($konu[1]); ?></textarea>
						</div>
					</fieldset>
					<fieldset>
						<label>KONU ETİKETLERİ</label>
						<input type="text" name="konu_etiket" value="<?php echo ss($row["konu_etiket"]); ?>" />
					</fieldset>
					<?php
						
						$alanQuery=query("SELECT * FROM ilave_alanlar");
						if(mysql_affected_rows()){
						echo '<h2>İlave Alanlar</h2>';
						       while($alanRow=mysql_fetch_array($alanQuery)){
							   $alanid=$alanRow["alan_id"];
							   $varmi=query("select * from alan_degerler where deger_konu_id='$id' && deger_alan_id='$alanid'");
							   if(mysql_affected_rows()){
							   $deger=row($varmi);
							   $value=ss($deger["deger_icerik"]);
							   }else{
							    $value="";
							   }
							   if($alanRow["alan_tip"]==1){
							   
							   $form='<input type="text" name="alan_'.$alanRow["alan_id"].'" value="'.$value.'">';
							   }else{
							   $form='<textarea rows="3" name="alan_'.$alanRow["alan_id"].'">'.$value.'</textarea>';
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
							<option value="1" <?php echo $row["konu_onay"] == 1 ? 'selected' : null; ?>>Onaylı</option>
							<option value="0" <?php echo $row["konu_onay"] == 0 ? 'selected' : null; ?>>Onaylı Değil</option>
						</select>
					</fieldset>
					<fieldset>
						<label>KONU ANASAYFA GÖRÜNÜMÜ</label>
						<select name="konu_anasayfa">
							<option value="1" <?php echo $row["konu_anasayfa"] == 1 ? 'selected' : null; ?>>Evet, Gözüksün</option>
							<option value="0" <?php echo $row["konu_anasayfa"] == 0 ? 'selected' : null; ?>>Hayır, Gözükmesin</option>
						</select>
					</fieldset>
			</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Düzenlemeyi Bitir" class="alt_btn">
				</div>
			</footer>
		</form>
</article>

<div class="spacer"></div>