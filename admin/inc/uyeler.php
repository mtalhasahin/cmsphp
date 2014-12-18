
<article class="module width_3_quarter" style="padding-bottom:20px;width:95%;">
		<header>
		<div style="float:right; font-size:14px; font-weigth:bold; padding:6px 10px">
		<a href="<?php echo URL;?>/admin/index.php?do=uye_ekle">Üye Ekle</a>
		</div>
		<h3 class="tabs_involved">ÜYE LİSTESİ</h3>
		</header>

		<div class="tab_container">
		
		<?php
		
		
		$query=query("SELECT * FROM uyeler WHERE uye_onay=1 ORDER BY uye_id DESC");
		if(mysql_affected_rows()){
		
		?>
		
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					<th width="20px"></th> 
    				<th width="50%">Uye Adı</th> 
					<th width="20%">Uye E-posta</th> 
    				<th>Tarih</th> 
    				<th>İşlemler</th> 
				</tr> 
			</thead> 
			<tbody> 
			<?php
			    while($row=row($query)){
			
			?>
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td><?php  echo ss($row["uye_kadi"]); ?></td> 
					<td><?php  echo ss($row["uye_eposta"]); ?></td> 
    				<td><?php  echo $row["uye_tarih"]; ?></td> 
					<td>
    				<a href="<?php echo URL;?>/admin/index.php?do=uye_duzenle&id=<?php echo $row["uye_id"];?>" title="Düzenle"> <img src="images/icn_edit.png" alt=""></a>
					<a onclick="return confirm('Üyeyi Silmek İstediğinize Emin misiniz?');" href="<?php echo URL;?>/admin/index.php?do=uye_sil&id=<?php echo $row["uye_id"];?>" style="margin-left:10px "title="Sil"> <img src="images/icn_trash.png" alt=""></a>
					</td>
				</tr> 
				
			 <?php }?>
			</tbody> 
			</table>
			
			</div>
			<?php } else { ?>
			 <h4 class="alert_warning">Siteye henüz hiç üye eklenmemiş..</h4>;
			<?php } ?>
		</div>
		</article>