

		
		<article style="padding-bottom:20px;" class="module width_full">
			<header><h3>SAYFA SİL</h3></header>
			<?php
			
			         $id=g("id");
					 $delete=query("DELETE FROM sayfalar WHERE sayfa_id='$id'");
					    if($delete){
						 echo '<h4 class="alert_success">Sayfa Başarıyla Silindi...Yonlendiriliyorsunuz</h4>';
						 go(URL."/admin/index.php?do=sabit_sayfalar",1);
						
						}else{
						 echo '<h4 class="alert_error">Mysql Hatasi: '.mysql_Error().'</h4>';
						}
					 
			

			?>
				
		</article>
		
	
		</article>
		<div class="spacer"></div>