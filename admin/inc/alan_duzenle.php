<?php
      $id=g("id");
	  $query=query("SELECT * FROM ilave_alanlar WHERE alan_id='$id'");
	  if(mysql_affected_rows()<1){
	  go(URL."/admin");
	  exit;
	  }
   $row=row($query);
?>
            <article class="module width_full">
			<header><h3>İLAVE ALAN DÜZENLE</h3></header>
			<?php
			if($_POST){
			      
			        $alan_adi=p("alan_adi");
					$alan_tip=p("alan_tip");
					
					if(!$alan_adi){
					echo '<h4 class="alert_error">Gerekli alanları doldurmanız gerekmektedir...</h4>';
					}else{
					      $query=query("SELECT alan_id FROM ilave_alanlar WHERE alan_adi='$alan_adi' && alan_id!='$id'");
						  if(mysql_affected_rows()){
						  echo '<h4 class="alert_error">Böyle bir alan adi sitede var gözüküyor...</h4>';
						  }else{
						  $update=query("UPDATE  ilave_alanlar SET
						  alan_adi='$alan_adi',
						  alan_tip='$alan_tip'
						  WHERE alan_id='$id'");
						  
						   if($update){
						     echo '<h4 class="alert_success">Alan Başarıyla güncellendi...Yonlendiriliyorsunuz</h4>';
						     go(URL."/admin/index.php?do=ilave_alanlar",1);
						 
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
							<label>ALAN BAŞLIĞI</label>
							<input type="text" name="alan_adi" value="<?php echo ss($row["alan_adi"]);?>">
						</fieldset>
						<fieldset>
							<label>ALAN TİPİ</label>
							<select name="alan_tip">
							<option value="1" <?php echo $row["alan_tip"]==1 ? 'selected' : null; ?>>Input</option>
							<option value="2" <?php echo $row["alan_tip"]==2 ? 'selected' : null; ?>>Textarea</option>
							</select>
						</fieldset>
						
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Düzenlemeyi Bitir" class="alt_btn">
				</div>
			</footer>
			</form>
		</article><!-- end of post new article -->
		
	
		</article><!-- end of styles article -->
		<div class="spacer"></div>