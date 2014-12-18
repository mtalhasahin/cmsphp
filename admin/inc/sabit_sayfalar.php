<?phpecho !defined("ADMIN") ? die("Hacking?"): null;?>
<article class="module width_3_quarter" style="padding-bottom:20px;width:95%;">
		<header>
		<div style="float:right; font-size:14px; font-weigth:bold; padding:6px 10px">
		<a href="<?php echo URL;?>/admin/index.php?do=sayfa_ekle">Sayfa Ekle</a>
		</div>
		<h3 class="tabs_involved">SABİT SAYFALAR</h3></header>

		<div class="tab_container">
		
		<?php
		
		$query=query("SELECT * FROM sayfalar ORDER BY sayfa_id DESC");
		if(mysql_affected_rows()){
		
		
		
		
		?>
		
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					<th></th> 
    				<th width="70%">Sayfa Başlığı</th> 
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
    				<td><?php  echo ss($row["sayfa_baslik"]); ?></td> 
    				<td><?php  echo $row["sayfa_tarih"]; ?></td> 
					<td>
    				<a href="<?php echo URL;?>/admin/index.php?do=sayfa_duzenle&id=<?php echo $row["sayfa_id"];?>" title="Düzenle"> <img src="images/icn_edit.png" alt=""></a>
					<a onclick="return confirm('Sayfayı Silmek İstediğinize Emin misiniz?');" href="<?php echo URL;?>/admin/index.php?do=sayfa_sil&id=<?php echo $row["sayfa_id"];?>" style="margin-left:10px "title="Sil"> <img src="images/icn_trash.png" alt=""></a>
					</td>
				</tr> 
				
			 <?php }?>
			</tbody> 
			</table>
			</div>
			<?php } else {?>
			 <h4 class="alert_warning">Siteye henüz hiç sayfa eklenmemiş..</h4>;
			<?php } ?>
		</div>
		
		</article>