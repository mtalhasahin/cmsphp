

<?php
		$sayfa=g("s") ? g("s"): 1;
		$ksayisi=rows(query("SELECT uye_id FROM uyeler WHERE uye_onay=1"));
		$limit=1;
		$ssayisi=ceil($ksayisi/$limit);
		$baslangic=($sayfa*$limit)-$limit;
		$query=query("SELECT * FROM uyeler WHERE uye_onay=1 ORDER BY uye_id DESC LIMIT $baslangic,$limit");
		if(mysql_affected_rows()){
		
		?>





<?php if($ksayisi>$limit){	?>
				<form action="" method="get">
				<ul class="sayfala">
				      <li><select name="s">
				       <?php
				      for($i=1;$i<=$ssayisi;$i++){
				        echo  '<option value="'.$i.'">'.$i.'.Sayfa</option>';
				                                  }
				
				                     ?>
				          </select>
				      </li>
				<li><button type="submit">GÖSTER</button></li>
				</ul>
				</form>