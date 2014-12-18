$(function(){

	$.Blog = {
	
		yorumEkle: function(konuid){
			if (!konuid){
				alert("Geçersiz Konu ID");
			}else {
			
				var adsoyad = $("input[name=adsoyad]").val();
					adsoyad = $.trim(adsoyad);
				var eposta = $("input[name=eposta]").val();
					eposta = $.trim(eposta);
				var yorum = $("textarea[name=yorum]").val();
					yorum = $.trim(yorum);
					
				if (!adsoyad || !eposta || !yorum){
					alert("Tüm Alanları Doldurmanız Gerekiyor.");
				}else {
					
					$.ajax({
						type: "post",
						url: "sistem/ajax.php",
						data: {"konuid":konuid,"adsoyad":adsoyad,"eposta":eposta,"yorum":yorum,"tip":"yorumEkle"},
						dataType: "json",
						success: function(cevap){
							if (cevap.hata){
								alert(cevap.hata);
							}else {
								$("#yorumlar").append(cevap.text);
							}
						}
					});
				
				}
			
			}
		}
	
	}

});