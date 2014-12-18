<?php ob_start(); ?>
<?php
error_reporting(E_ALL ^ E_NOTICE);
ini_set('error_reporting', E_ALL ^ E_NOTICE);
?>

<?php

      function klasor_listele($dizin){
		   $dizinAc=opendir($dizin) or die("Dizin Bulunamadý");
		   while($dosya=readdir($dizinAc)){
		        if(is_dir($dizin."/".$dosya)&& $dosya!='.' && $dosya!='..'){
					echo 	"<option value='{$dosya}'>{$dosya}</option>";
				}
		   }
		   
		   }
	  
	  
      function p($par,$st=false){
	        if($st){
			   return htmlspecialchars(addslashes(trim($_POST[$par])));
			}else{
	           return addslashes(trim($_POST[$par]));
		 }
	  }

	  function g($par){
	      return strip_tags(trim(addslashes($_GET[$par])));
		  
	  } 
	  function kisalt($par,$uzunluk=50){
	  if(strlen($par)>$uzunluk){
	  $par=mb_substr($par,0,$uzunluk,"UTF-8")."...";
	  }
	  return $par;
	  }
	  function session_olustur($par){
	  foreach($par as $anahtar=>$deger){
	          $_SESSION[$anahtar]=$deger;
	  }
	  }
	  function sef_link($string)
{
        $find = array('Ç', 'Þ', 'Ð', 'Ü', 'Ý', 'Ö', 'ç', 'þ', 'ð', 'ü', 'ö', 'ý', '+', '#');
        $replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
        $string = strtolower(str_replace($find, $replace, $string));
        $string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
        $string = trim(preg_replace('/\s+/', ' ', $string));
        $string = str_replace(' ', '-', $string);
        return $string;
}

       function query($query){
	        return mysql_query($query);
	   }
	   function row($query){
	        return mysql_fetch_array($query);
	   }
	   function rows($query){
	        return mysql_num_rows($query);
	   }

		function go($par, $time = 0){
		if ($time == 0){
			header("Location: {$par}");
		}else {
			header("Refresh: {$time}; url={$par}");
		}
	}
	   
	   function session($par){
	        if($_SESSION[$par]){
			    return $_SESSION[$par];
			}else{
                return false;			
			}
			
		}
			  function cookie($par){
	        if($_COOKIE[$par]){
			    return $_COOKIE[$par];
			}else{
                return false;			
			}
	   
	   
	   }
	   function ss($par){
	   return stripslashes($par);
	   }

?>
