<?phpecho !defined("ADMIN") ? die("Hacking?"): null;?>
<article class="module width_3_quarter" style="padding-bottom:20px;width:95%;">
		<header>
		<div style="float:right; font-size:14px; font-weigth:bold; padding:6px 10px">
		<a href="<?php echo URL;?>/admin/index.php?do=ilave_alan_ekle">İlave Alan Ekle</a>
		</div>
		<h3 class="tabs_involved">İLAVE ALAN LİSTESİ</h3></header>

		<div class="tab_container">
		
		<?php
		
		$query=query("SELECT * FROM ilave_alanlar ORDER BY alan_id DESC");
		if(mysql_affected_rows()){
		
		
		
		
		?>
		
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					<th></th> 
    				<th width="70%">Alan Adı</th> 
    				<th>Alan Tipi</th> 
    				<th>İşlemler</th> 
				</tr> 
			</thead> 
			<tbody> 
			<?php
			    while($row=row($query)){
			     if($row["alan_tip"]==1){
                      $tip="Input";				 
 				 }else{
				      $tip="Textarea";
				 }
			?>
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td><?php  echo ss($row["alan_adi"]); ?></td> 
    				<td><?php  echo $tip; ?></td> 
					<td>
    				<a href="<?php echo URL;?>/admin/index.php?do=alan_duzenle&id=<?php echo $row["alan_id"];?>" title="Düzenle"> <img src="images/icn_edit.png" alt=""></a>
					<a onclick="return confirm('Alanı Silmek İstediğinize Emin misiniz?');" href="<?php echo URL;?>/admin/index.php?do=alan_sil&id=<?php echo $row["alan_id"];?>" style="margin-left:10px "title="Sil"> <img src="images/icn_trash.png" alt=""></a>
					</td>
				</tr> 
				
			 <?php }?>
			</tbody> 
			</table>
			</div>
			<?php } else {?>
			 <h4 class="alert_warning">Siteye henüz hiç ilave alan eklenmemiş..</h4>;
			<?php } ?>
		</div>
		
		</article>