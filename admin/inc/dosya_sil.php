

		
		<article style="padding-bottom:20px;" class="module width_full">
			<header><h3>DOSYA SİL</h3></header>
			<?php
			
			         $id=g("id");
					 $link=g("link");
					 $delete=query("DELETE FROM dosyalar WHERE dosya_id='$id'");
					    if($delete){
						 echo '<h4 class="alert_success">Dosya Başarıyla Silindi...Yonlendiriliyorsunuz</h4>';
						 $sil=realpath("../")."/upload/dosya/".$link;
						 unlink($sil);
						 go(URL."/admin/index.php?do=dosyalar",1);
						
						}else{
						 echo '<h4 class="alert_error">Mysql Hatasi: '.mysql_Error().'</h4>';
						}
					 
			

			?>
				
		</article>
		
	
		</article>
		<div class="spacer"></div>