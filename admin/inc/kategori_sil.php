

		
		<article style="padding-bottom:20px;" class="module width_full">
			<header><h3>KATEGORİ SİL</h3></header>
			<?php
			
			         $id=g("id");
					 $delete=query("DELETE FROM kategoriler WHERE kategori_id='$id'");
					    if($delete){
						 echo '<h4 class="alert_success">Kategori Başarıyla Silindi...Yonlendiriliyorsunuz</h4>';
						 go(URL."/admin/index.php?do=kategoriler",1);
						
						}else{
						 echo '<h4 class="alert_error">Mysql Hatasi: '.mysql_Error().'</h4>';
						}
					 
			

			?>
				
		</article><!-- end of post new article -->
		
	
		</article><!-- end of styles article -->
		<div class="spacer"></div>