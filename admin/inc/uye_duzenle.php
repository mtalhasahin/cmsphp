<?php
$id=g("id");
$query=query("SELECT * FROM uyeler WHERE uye_id='$id'");
if(mysql_affected_rows()<1){
go(URL."/admin");
exit;
}
$row=row($query);
?>
            <article class="module width_full">
			<header><h3>UYE DUZENLE</h3></header>
			<?php
			if($_POST){
			        $uye_kadi=p("uye_kadi");
					$uye_link=sef_link($uye_kadi);
					if(p("uye_sifre")){
					   $uye_sifre=md5(p("uye_sifre"));
					}else{
					   $uye_sifre=$row["uye_sifre"];
					}
					$uye_eposta=p("uye_eposta");
					$uye_rutbe=p("uye_rutbe");
					$uye_onay=p("uye_onay");
			        if(!$uye_kadi || !$uye_sifre || !$uye_eposta)
					{
					echo '<h4 class="alert_error">Tüm alanları doldurmanız gerekmektedir...</h4>';
					}else
					{
					  $varmi=query("SELECT * FROM uyeler WHERE uye_link='$uye_link' && uye_id!='$id'");
					   if(mysql_affected_rows()){
					    echo '<h4 class="alert_error"><strong>'.ss($uye_kadi).'</strong> adlı kullanıcı zaten bulunmaktadır, başka bir ad deneyiniz..</h4>';
					   }else{
	                        $update=query("UPDATE uyeler SET
							uye_kadi='$uye_kadi',
							uye_link='$uye_link',
							uye_sifre='$uye_sifre',
							uye_eposta='$uye_eposta',
							uye_rutbe='$uye_rutbe',
							uye_onay='$uye_onay'
							WHERE uye_id='$id'
							");				   
							 if($update){
						    echo '<h4 class="alert_success">Üye Başarıyla GÜncellendi...Yonlendiriliyorsunuz</h4>';
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
							<input type="text" name="uye_kadi" value="<?php echo ss($row["uye_kadi"]);?>">
						</fieldset>
							<fieldset>
							<label>ÜYE ŞİFRE</label>
							<input type="text" name="uye_sifre">
						</fieldset>
						<fieldset>
							<label>ÜYE E-POSTA</label>
							<input type="text" name="uye_eposta" value="<?php echo ss($row["uye_eposta"]);?>">
						</fieldset>
						<fieldset>
							<label>ÜYE RUTBE</label>
							<select name="uye_rutbe" >
								<option value="1"<?php echo $row["uye_rutbe"]==1 ? 'selected' : null; ?>>Yönetici</option>
								<option value="2" <?php echo $row["uye_rutbe"]==2 ? 'selected' : null; ?>>Üye</option>
							
							</select>
						</fieldset>
						<fieldset>
							<label>UYE ONAY</label>
							<select name="uye_onay" >
								<option value="1" <?php echo $row["uye_onay"]==1 ? 'selected' : null; ?>>Onaylı</option>
								<option value="0" <?php echo $row["uye_onay"]==0 ? 'selected' : null; ?>>Onaylı Değil</option>
							
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
		
	
		</article>
		<div class="spacer"></div>