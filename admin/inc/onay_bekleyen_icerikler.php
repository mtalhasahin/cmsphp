
<article class="module width_3_quarter" style="padding-bottom:20px;width:95%;">
		<header>
		<div style="float:right; font-size:14px; font-weigth:bold; padding:6px 10px">
		<a href="<?php echo URL;?>/admin/index.php?do=icerik_ekle">İçerik Ekle</a>
		</div>
		<h3 class="tabs_involved">ONAY BEKLEYEN İÇERİKLER</h3>
		</header>

		<div class="tab_container">
		
		<?php
			
	
		$query=query("SELECT * FROM konular INNER JOIN  uyeler ON uyeler.uye_id=konular.konu_ekleyen INNER JOIN kategoriler ON kategoriler.kategori_id=konular.konu_kategori WHERE konu_onay=0 ORDER BY konu_id DESC");
		if(mysql_affected_rows()){
		
		?>
		
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					<th width="20px"></th> 
    				<th width="50%">Başlık</th> 
					<th width="10%">Ekleyen</th> 
					<th width="10%">Kategori</th> 
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
    				<td><?php  echo ss($row["konu_baslik"]); ?></td> 
					<td><a href="<?php echo URL;?>/admin/index.php?do=uye_duzenle&id=<?php echo $row["uye_id"]; ?>"><?php  echo ss($row["uye_kadi"]); ?></a></td> 
    				<td><a href="<?php echo URL;?>/admin/index.php?do=kategori_duzenle&id=<?php echo $row["kategori_id"]; ?>"><?php  echo $row["kategori_adi"]; ?></a></td> 
					<td><?php  echo $row["konu_tarih"]; ?></td> 
					<td>
    				<a href="<?php echo URL;?>/admin/index.php?do=icerik_duzenle&id=<?php echo $row["konu_id"];?>" title="Düzenle"> <img src="images/icn_edit.png" alt=""></a>
					<a onclick="return confirm('İçeriği Silmek İstediğinize Emin misiniz?');" href="<?php echo URL;?>/admin/index.php?do=icerik_sil&id=<?php echo $row["konu_id"];?>" style="margin-left:10px "title="Sil"> <img src="images/icn_trash.png" alt=""></a>
					</td>
				</tr> 
				
			 <?php }?>
			</tbody> 
			</table>
			
		
			<?php } else { ?>
			 <h4 class="alert_warning">Henüz onaylanmamış içerik bulunmamaktadır..</h4>
			<?php } ?>
		</div>
		</article>