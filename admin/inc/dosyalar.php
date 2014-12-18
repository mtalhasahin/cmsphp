<?phpecho !defined("ADMIN") ? die("Hacking?"): null;?>
<article class="module width_3_quarter" style="padding-bottom:20px;width:95%;">
		<header>
		<div style="float:right; font-size:14px; font-weigth:bold; padding:6px 10px">
		<a href="<?php echo URL;?>/admin/index.php?do=dosya_yukle">Dosya Yükle</a>
		</div>
		<h3 class="tabs_involved">DOSYALAR</h3></header>

		<div class="tab_container">
		
		<?php
		
		$query=query("SELECT * FROM dosyalar ORDER BY dosya_id DESC");
		if(mysql_affected_rows()){
		
		
		
		
		?>
		
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					<th></th> 
    				<th width="70%">Dosya Adı</th> 
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
    				<td><a href="<?php echo URL;?>/upload/dosya/<?php  echo ss($row["dosya_link"]); ?>" target="_blank"><?php  echo ss($row["dosya_link"]); ?>"</a></td> 
    				<td><?php  echo $row["dosya_tarih"]; ?></td> 
					<td>
    				
					<a onclick="return confirm('Dosyayı Silmek İstediğinize Emin misiniz?');" href="<?php echo URL;?>/admin/index.php?do=dosya_sil&id=<?php echo $row["dosya_id"];?>&link=<?php echo $row["dosya_link"];?>" style="margin-left:10px "title="Sil"> <img src="images/icn_trash.png" alt=""></a>
					</td>
				</tr> 
				
			 <?php }?>
			</tbody> 
			</table>
			</div>
			<?php } else {?>
			 <h4 class="alert_warning">Siteye henüz hiç dosya eklenmemiş..</h4>
			<?php } ?>
		</div>
		
		</article>