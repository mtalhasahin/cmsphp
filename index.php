<?php
require_once "sistem/ayarlar.php";
require_once "sistem/sistem.php";
 
        
       if($ayar["site_durum"]==1){
	
	   // site açýk
         require(TEMA.'/default/index.php');
		
                                }
       else{
	    
	   // site kapalý
	       }
		   
		   
		   klasor_listele("admin");
 
?>