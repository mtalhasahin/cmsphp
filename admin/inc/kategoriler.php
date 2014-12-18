<?phpecho !defined("ADMIN") ? die("Hacking?"): null;?>
<article class="module width_3_quarter" style="padding-bottom:20px;width:95%;">
		<header>
		<div style="float:right; font-size:14px; font-weigth:bold; padding:6px 10px">
		<a href="<?php echo URL;?>/admin/index.php?do=kategori_ekle">Kategori Ekle</a>
		</div>
		<h3 class="tabs_involved">KATEGORİ LİSTESİ</h3></header>

		<div class="tab_container">
		
		<?php
		
		$query=query("SELECT * FROM kategoriler ORDER BY kategori_id DESC");
		if(mysql_affected_rows()){
		
		
		
		
		?>
		
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					<th></th> 
    				<th width="70%">Kategori Adı</th> 
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
    				<td><?php  echo ss($row["kategori_adi"]); ?></td> 
    				<td><?php  echo $row["kategori_tarih"]; ?></td> 
					<td>
    				<a href="<?php echo URL;?>/admin/index.php?do=kategori_duzenle&id=<?php echo $row["kategori_id"];?>" title="Düzenle"> <img src="images/icn_edit.png" alt=""></a>
					<a onclick="return confirm('Kategoriyi Silmek İstediğinize Emin misiniz?');" href="<?php echo URL;?>/admin/index.php?do=kategori_sil&id=<?php echo $row["kategori_id"];?>" style="margin-left:10px "title="Sil"> <img src="images/icn_trash.png" alt=""></a>
					</td>
				</tr> 
				
			 <?php }?>
			</tbody> 
			</table>
			</div>
			<?php } else {?>
			 <h4 class="alert_warning">Siteye henüz hiç kategori eklenmemiş..</h4>;
			<?php } ?>
		</div>
		
		</article>