<?php
require_once "sistem/ayarlar.php";
require_once "sistem/sistem.php";
 
        
       if($ayar["site_durum"]==1){
	
	   // site a��k
         require(TEMA.'/default/index.php');
		
                                }
       else{
	    
	   // site kapal�
	       }
		   
		   
		   klasor_listele("admin");
 
?>