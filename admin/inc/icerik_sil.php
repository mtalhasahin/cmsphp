

		
		<article style="padding-bottom:20px;" class="module width_full">
			<header><h3>İÇERİK SİL</h3></header>
			<?php
			
			         $id=g("id");
					 $delete=query("DELETE FROM konular WHERE konu_id='$id'");
					    if($delete){
						 echo '<h4 class="alert_success">İçerik Başarıyla Silindi...Yonlendiriliyorsunuz</h4>';
						 go(URL."/admin/index.php?do=icerikler",1);
						
						}else{
						 echo '<h4 class="alert_error">Mysql Hatasi: '.mysql_Error().'</h4>';
						}
					 
			

			?>
				
		</article>
		
	
		</article>
		<div class="spacer"></div>