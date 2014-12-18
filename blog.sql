-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 16 Haz 2014, 13:29:54
-- Sunucu sürümü: 5.5.27
-- PHP Sürümü: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `alan_degerler`
--

CREATE TABLE IF NOT EXISTS `alan_degerler` (
  `deger_id` int(11) NOT NULL AUTO_INCREMENT,
  `deger_alan_id` int(11) NOT NULL,
  `deger_konu_id` int(11) NOT NULL,
  `deger_icerik` text NOT NULL,
  PRIMARY KEY (`deger_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Tablo döküm verisi `alan_degerler`
--

INSERT INTO `alan_degerler` (`deger_id`, `deger_alan_id`, `deger_konu_id`, `deger_icerik`) VALUES
(3, 1, 48, 'http://www.ogretiyor.com/upload/resim/1537116b191b3f.png'),
(4, 3, 48, 'http://www.ogretiyor.com'),
(5, 1, 49, 'http://www.ogretiyor.com/upload/resim/1537116b191b3f.png'),
(6, 3, 49, 'http://www.ogretiyor.com/index.php'),
(7, 4, 49, 'deneme'),
(8, 1, 43, 'http://upload.wikimedia.org/wikipedia/tr/0/06/Mimari51.jpg'),
(9, 1, 40, 'http://www.phpr.org/wp-content/uploads/2010/06/kod.jpg'),
(10, 1, 44, 'http://www.yazgelistir.com/Makaleler/Resimler/1000000591_img2.gif'),
(11, 1, 42, 'http://www.yazilimdilleri.net/Content/Images/Makale/image/BatuhanCikrikci/jmxarch.jpg'),
(12, 1, 41, 'http://kodcu.com/wp/wp-content/uploads/2012/11/sa-3.png'),
(13, 1, 45, 'http://localhost:8080/upload/dosya/resim2_1537490192d887.png'),
(14, 1, 39, 'http://www.modeno.com.tr/services/01/1.jpg'),
(15, 1, 46, 'http://localhost:8080/upload/dosya/resim2_153749a32e8c09.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE IF NOT EXISTS `ayarlar` (
  `site_url` varchar(250) NOT NULL,
  `site_baslik` varchar(250) NOT NULL,
  `site_desc` varchar(300) NOT NULL,
  `site_keyw` varchar(250) NOT NULL,
  `site_tema` varchar(150) NOT NULL,
  `site_durum` int(11) NOT NULL,
  `tema_sayfalama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`site_url`, `site_baslik`, `site_desc`, `site_keyw`, `site_tema`, `site_durum`, `tema_sayfalama`) VALUES
('http://localhost:8080', 'Yazilim Tasarim ve Mimarisi YMT Ders Blogu', '&lt;p&gt;description we we&lt;/p&gt;', '&lt;p&gt;keywordss&lt;/p&gt;', 'default', 1, '5|1|2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dosyalar`
--

CREATE TABLE IF NOT EXISTS `dosyalar` (
  `dosya_id` int(11) NOT NULL AUTO_INCREMENT,
  `dosya_link` varchar(300) NOT NULL,
  `dosya_ekleyen` int(11) NOT NULL,
  `dosya_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`dosya_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `dosyalar`
--

INSERT INTO `dosyalar` (`dosya_id`, `dosya_link`, `dosya_ekleyen`, `dosya_tarih`) VALUES
(1, 'resim2_1537490192d887.png', 7, '2014-05-15 09:59:53'),
(2, 'resim2_153749a32e8c09.png', 1, '2014-05-15 10:42:58'),
(3, 'yeni-metin-belgesi-2_153749c3665784.txt', 1, '2014-05-15 10:51:34');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilave_alanlar`
--

CREATE TABLE IF NOT EXISTS `ilave_alanlar` (
  `alan_id` int(11) NOT NULL AUTO_INCREMENT,
  `alan_adi` varchar(200) NOT NULL,
  `alan_tip` int(11) NOT NULL,
  PRIMARY KEY (`alan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `ilave_alanlar`
--

INSERT INTO `ilave_alanlar` (`alan_id`, `alan_adi`, `alan_tip`) VALUES
(1, 'Resim', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE IF NOT EXISTS `kategoriler` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_adi` varchar(200) NOT NULL,
  `kategori_link` varchar(200) NOT NULL,
  `kategori_desc` varchar(250) NOT NULL,
  `kategori_keyw` varchar(250) NOT NULL,
  `kategori_anasayfa_konu` varchar(100) NOT NULL,
  `kategori_full_konu` varchar(100) NOT NULL,
  `kategori_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin5 AUTO_INCREMENT=16 ;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kategori_adi`, `kategori_link`, `kategori_desc`, `kategori_keyw`, `kategori_anasayfa_konu`, `kategori_full_konu`, `kategori_tarih`) VALUES
(7, 'Ders Duyurular', 'ders-duyurular', '', '', '', '', '2014-05-13 10:45:05'),
(8, 'YazÄ±lÄ±m Haberleri', 'yaz-l-m-haberleri', '', '', '', '', '2014-05-13 10:44:24'),
(11, 'PHP', 'php', 'PHP kategorisi', 'php,ogreniyorum', '', '', '2014-04-10 22:07:03'),
(13, 'DÃ¶kÃ¼man', 'd-k-man', 'dÃ¶kÃ¼man', 'dÃ¶kÃ¼man', '', '', '2014-05-13 10:40:34'),
(14, 'YazÄ±lÄ±m TasarÄ±m Mimarisi', 'yaz-l-m-tasar-m-mimarisi', '', '', '', '', '2014-05-13 10:45:28'),
(15, 'YTM', 'ytm', '<p>Yadasfdasf</p>', '<p>dadasdsad</p>', '', '', '2014-05-15 10:50:21');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `konular`
--

CREATE TABLE IF NOT EXISTS `konular` (
  `konu_id` int(11) NOT NULL AUTO_INCREMENT,
  `konu_baslik` varchar(300) NOT NULL,
  `konu_link` varchar(300) NOT NULL,
  `konu_aciklama` text NOT NULL,
  `konu_etiket` varchar(500) NOT NULL,
  `konu_ekleyen` int(11) NOT NULL,
  `konu_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `konu_kategori` int(11) NOT NULL,
  `konu_onay` int(11) NOT NULL,
  `konu_anasayfa` int(11) NOT NULL,
  `konu_hit` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`konu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin5 AUTO_INCREMENT=47 ;

--
-- Tablo döküm verisi `konular`
--

INSERT INTO `konular` (`konu_id`, `konu_baslik`, `konu_link`, `konu_aciklama`, `konu_etiket`, `konu_ekleyen`, `konu_tarih`, `konu_kategori`, `konu_onay`, `konu_anasayfa`, `konu_hit`) VALUES
(33, 'JAVA NEDÄ°R??', 'java-ned-r', 'java bilinmesi gereken dillerin arasÄ±ndadÄ±r..-------------------java bilinmesi gereken dillerin arasÄ±ndadÄ±r.. java bilinmesi gereken dillerin arasÄ±ndadÄ±r.. java bilinmesi gereken dillerin arasÄ±ndadÄ±r..java bilinmesi gereken dillerin arasÄ±ndadÄ±r..', 'java,java dersleri', 7, '2014-05-12 14:49:46', 0, 1, 1, 0),
(39, 'YazÄ±lÄ±m mimarisi tasarlama', 'yaz-l-m-mimarisi-tasarlama', 'YazÄ±lÄ±m mimarisi gri bir alandÄ±r. Ä°leride tekrar dÃ¶nmek istemeyeceÄiniz kararlar almanÄ±z gerekir. Frameworkler, programlama dilleri, uygulama sunucularÄ±, veritabanlarÄ± vb alanlarda karar vermeyi gerektiren Åeylerdir.-------------------YazÄ±lÄ±m mimarisi gri bir alandÄ±r. Ä°leride tekrar dÃ¶nmek istemeyeceÄiniz kararlar almanÄ±z gerekir. Frameworkler, programlama dilleri, uygulama sunucularÄ±, veritabanlarÄ± vb alanlarda karar vermeyi gerektiren Åeylerdir. YazÄ±lÄ±m mimarisi programcÄ±nÄ±n uygulamayÄ± geliÅtirdiÄi ortamda geliÅir. Source control, geliÅtirme araÃ§lrÄ±, IDE, soru cevap siteleri vb. YazÄ±lÄ±m uzmanÄ± projede baÅarÄ±lÄ± olmak iÃ§in doÄru mimari kararlar almak zorundadÄ±r\r\n\r\nYazÄ±lÄ±m mimarisinde kÃ¶tÃ¼ kararlarÄ±n sonu fiyaskodur\r\n\r\nYazÄ±lÄ±m mimarisinde kÃ¶tÃ¼ mimari kararlar geliÅtirdiÄiniz projenizin tamamen fiyasko ile sonuÃ§lanmasÄ±na neden olur. Pek Ã§ok zor kararlar da geriÅ dÃ¶nÃ¼ÅÃ¼ gerektirir.\r\n\r\nÄ°yi yazÄ±lÄ±m mimarisi sessizdir\r\n\r\nÄ°yi yazÄ±lÄ±m mimarisi normal Åartlarda aynen gizli kalÄ±r. Iyi mimariler, diÄer yandan pek Ã§ok proje iÃ§in, gerÃ§ekten avantaj kazandÄ±rmaz, sadece normal geliÅime imkan verir. AÅaÄÄ±daki prensip listesini takip ettiÄinizde size gÃ¼venli ve Ã¶lÃ§eklenebilir yazÄ±lÄ±m mimarileri geliÅtirmeye yardÄ±m eder.\r\n\r\nYazÄ±lÄ±m mimarisine gerekli olan minimum mimari ile baÅlayÄ±n\r\nGereksiz yeni teknoloji ya da frameworkler gibi gereksiz karmaÅÄ±klÄ±klardan sakÄ±nÄ±n.\r\n\r\nProjede kullanÄ±lacak herhangi bir mimari elementin iyi bir kullanÄ±m nedeni olmalÄ±dÄ±r. EÄer mimari elementin faydalarÄ± veya gerekliliÄi kanÄ±tlanmamÄ±Åsa, bu mimari element kaldÄ±rÄ±lmalÄ±dÄ±r.-------------------------------YazÄ±lÄ±m mimarisi gri bir alandÄ±r. Ä°leride tekrar dÃ¶nmek istemeyeceÄiniz kararlar almanÄ±z gerekir. Frameworkler, programlama dilleri, uygulama sunucularÄ±, veritabanlarÄ± vb alanlarda karar vermeyi gerektiren Åeylerdir.-------------------YazÄ±lÄ±m mimarisi gri bir alandÄ±r. Ä°leride tekrar dÃ¶nmek istemeyeceÄiniz kararlar almanÄ±z gerekir. Frameworkler, programlama dilleri, uygulama sunucularÄ±, veritabanlarÄ± vb alanlarda karar vermeyi gerektiren Åeylerdir. YazÄ±lÄ±m mimarisi programcÄ±nÄ±n uygulamayÄ± geliÅtirdiÄi ortamda geliÅir. Source control, geliÅtirme araÃ§lrÄ±, IDE, soru cevap siteleri vb. YazÄ±lÄ±m uzmanÄ± projede baÅarÄ±lÄ± olmak iÃ§in doÄru mimari kararlar almak zorundadÄ±r\r\n\r\nYazÄ±lÄ±m mimarisinde kÃ¶tÃ¼ kararlarÄ±n sonu fiyaskodur\r\n\r\nYazÄ±lÄ±m mimarisinde kÃ¶tÃ¼ mimari kararlar geliÅtirdiÄiniz projenizin tamamen fiyasko ile sonuÃ§lanmasÄ±na neden olur. Pek Ã§ok zor kararlar da geriÅ dÃ¶nÃ¼ÅÃ¼ gerektirir.\r\n\r\nÄ°yi yazÄ±lÄ±m mimarisi sessizdir\r\n\r\nÄ°yi yazÄ±lÄ±m mimarisi normal Åartlarda aynen gizli kalÄ±r. Iyi mimariler, diÄer yandan pek Ã§ok proje iÃ§in, gerÃ§ekten avantaj kazandÄ±rmaz, sadece normal geliÅime imkan verir. AÅaÄÄ±daki prensip listesini takip ettiÄinizde size gÃ¼venli ve Ã¶lÃ§eklenebilir yazÄ±lÄ±m mimarileri geliÅtirmeye yardÄ±m eder.\r\n\r\nYazÄ±lÄ±m mimarisine gerekli olan minimum mimari ile baÅlayÄ±n\r\nGereksiz yeni teknoloji ya da frameworkler gibi gereksiz karmaÅÄ±klÄ±klardan sakÄ±nÄ±n.\r\n\r\nProjede kullanÄ±lacak herhangi bir mimari elementin iyi bir kullanÄ±m nedeni olmalÄ±dÄ±r. EÄer mimari elementin faydalarÄ± veya gerekliliÄi kanÄ±tlanmamÄ±Åsa, bu mimari element kaldÄ±rÄ±lmalÄ±dÄ±r.', 'yazÄ±lÄ±m, tasarÄ±m, mimarisi', 1, '2014-05-12 22:58:30', 14, 1, 1, 0),
(40, 'YazÄ±lÄ±m MimarÄ± Kod yazmalÄ± mÄ±?', 'yaz-l-m-mimar-kod-yazmal-m', 'Orjinal adÄ±yla âShould architects write code?â olan meÅhur soruya kendi kiÅisel cevabÄ±mÄ± burada vereyim. Soru belki binlerce kez cevaplandÄ±, herkes kendince fikirlerini belirtti fakat yinede birkaÃ§ ayda bir bu sorununun yazÄ±lÄ±m dÃ¼nyasÄ±ndakilere hatÄ±rlatÄ±lmasÄ± gerektiÄini dÃ¼ÅÃ¼nÃ¼yorum.Peki neden?-------------------Orjinal adÄ±yla âShould architects write code?â olan meÅhur soruya kendi kiÅisel cevabÄ±mÄ± burada vereyim. Soru belki binlerce kez cevaplandÄ±, herkes kendince fikirlerini belirtti fakat yinede birkaÃ§ ayda bir bu sorununun yazÄ±lÄ±m dÃ¼nyasÄ±ndakilere hatÄ±rlatÄ±lmasÄ± gerektiÄini dÃ¼ÅÃ¼nÃ¼yorum.Peki neden?\r\n\r\nYazÄ±lÄ±m mimarÄ± Ã¼nvanÄ± adÄ± altÄ±nda,ya da projede yazÄ±lÄ±mÄ±n tasarÄ±mÄ±nda,mimarisinde rol alan insanlarÄ±n genelde ÅÃ¶yle bir eÄilimi olduÄunu sÄ±k sÄ±k gÃ¶rÃ¼yorum. YazÄ±lÄ±m mimarÄ± arkadaÅ gereksinimlere gÃ¶re Visio, Enterprise Architect,Rational Roseâ¦gibi araÃ§larda gÃ¼zel gÃ¼zel UML diyagramlarÄ±nÄ± Ã§izmiÅtir.SÄ±nÄ±flar arasÄ±ndaki iliÅkileri oluÅturmuÅ, hatta ileri giderek Use Case,Interaction,.. diyagramlarÄ± Ã§izmiÅtir.ArtÄ±k bu aÅamadan sonra zaten YazÄ±lÄ±m mimarÄ± arkadaÅÄ±n sÃ¼per tasarÄ±mÄ±nÄ± sadece kodlamak kalmÄ±ÅtÄ±r.âBen tasarÄ±mÄ± yaptÄ±m, yazÄ±lÄ±mcÄ±lar yazacak, geriye sadece yazmasÄ± kaldÄ±â.-------------------------------Orjinal adÄ±yla âShould architects write code?â olan meÅhur soruya kendi kiÅisel cevabÄ±mÄ± burada vereyim. Soru belki binlerce kez cevaplandÄ±, herkes kendince fikirlerini belirtti fakat yinede birkaÃ§ ayda bir bu sorununun yazÄ±lÄ±m dÃ¼nyasÄ±ndakilere hatÄ±rlatÄ±lmasÄ± gerektiÄini dÃ¼ÅÃ¼nÃ¼yorum.Peki neden?-------------------Orjinal adÄ±yla âShould architects write code?â olan meÅhur soruya kendi kiÅisel cevabÄ±mÄ± burada vereyim. Soru belki binlerce kez cevaplandÄ±, herkes kendince fikirlerini belirtti fakat yinede birkaÃ§ ayda bir bu sorununun yazÄ±lÄ±m dÃ¼nyasÄ±ndakilere hatÄ±rlatÄ±lmasÄ± gerektiÄini dÃ¼ÅÃ¼nÃ¼yorum.Peki neden?\r\n\r\nYazÄ±lÄ±m mimarÄ± Ã¼nvanÄ± adÄ± altÄ±nda,ya da projede yazÄ±lÄ±mÄ±n tasarÄ±mÄ±nda,mimarisinde rol alan insanlarÄ±n genelde ÅÃ¶yle bir eÄilimi olduÄunu sÄ±k sÄ±k gÃ¶rÃ¼yorum. YazÄ±lÄ±m mimarÄ± arkadaÅ gereksinimlere gÃ¶re Visio, Enterprise Architect,Rational Roseâ¦gibi araÃ§larda gÃ¼zel gÃ¼zel UML diyagramlarÄ±nÄ± Ã§izmiÅtir.SÄ±nÄ±flar arasÄ±ndaki iliÅkileri oluÅturmuÅ, hatta ileri giderek Use Case,Interaction,.. diyagramlarÄ± Ã§izmiÅtir.ArtÄ±k bu aÅamadan sonra zaten YazÄ±lÄ±m mimarÄ± arkadaÅÄ±n sÃ¼per tasarÄ±mÄ±nÄ± sadece kodlamak kalmÄ±ÅtÄ±r.âBen tasarÄ±mÄ± yaptÄ±m, yazÄ±lÄ±mcÄ±lar yazacak, geriye sadece yazmasÄ± kaldÄ±â.', 'yazÄ±lÄ±m,yazÄ±lÄ±m mimarisi,use case', 1, '2014-05-12 23:01:30', 14, 1, 1, 1),
(41, 'YazÄ±lÄ±m Sistem Mimarisi Modelleme', 'yaz-l-m-sistem-mimarisi-modelleme', 'YazÄ±lÄ±m sisteminizin veya uygulamanÄ±zÄ±n kullanÄ±cÄ±larÄ±nÄ±zÄ±n gereksinimlerini karÅÄ±ladÄ±ÄÄ±ndan emin olmak iÃ§in, genel yapÄ± aÃ§Ä±klamanÄ±zÄ±n ve sisteminizin veya uygulamanÄ±zÄ±n davranÄ±ÅÄ±nÄ±n bir parÃ§asÄ± olarak Visual Studio Ultimate''da modeller oluÅturabilirsiniz.-------------------YazÄ±lÄ±m sisteminizin veya uygulamanÄ±zÄ±n kullanÄ±cÄ±larÄ±nÄ±zÄ±n gereksinimlerini karÅÄ±ladÄ±ÄÄ±ndan emin olmak iÃ§in, genel yapÄ± aÃ§Ä±klamanÄ±zÄ±n ve sisteminizin veya uygulamanÄ±zÄ±n davranÄ±ÅÄ±nÄ±n bir parÃ§asÄ± olarak Visual Studio Ultimate''da modeller oluÅturabilirsiniz. Modelleri kullanarak, tasarÄ±m boyunca kullandÄ±ÄÄ±nÄ±z desenleri de aÃ§Ä±klayabilirsiniz. Bu modeller; varolan mimariyi anlamanÄ±za, deÄiÅiklikleri tartÄ±ÅmanÄ±za ve amaÃ§larÄ±nÄ±zla aÃ§Ä±kÃ§a iletiÅim kurmanÄ±za yardÄ±m eder.\r\nBir modelin amacÄ±; doÄal dil aÃ§Ä±klamalarÄ±nda olan belirsizlikleri azaltmak ve sizin ve Ã§alÄ±Åma arkadaÅlarÄ±nÄ±zÄ±n tasarÄ±mÄ± gÃ¶rselleÅtirmenize ve alternatif tasarÄ±mlarÄ± tartÄ±ÅmanÄ±za yardÄ±m etmek iÃ§indir. Bir model, diÄer belgeler veya tartÄ±Åmalarla birlikte kullanÄ±lmalÄ±dÄ±r. Kendi baÅÄ±na bir model, mimarinin tam bir belirtimini gÃ¶stermez.-------------------------------YazÄ±lÄ±m sisteminizin veya uygulamanÄ±zÄ±n kullanÄ±cÄ±larÄ±nÄ±zÄ±n gereksinimlerini karÅÄ±ladÄ±ÄÄ±ndan emin olmak iÃ§in, genel yapÄ± aÃ§Ä±klamanÄ±zÄ±n ve sisteminizin veya uygulamanÄ±zÄ±n davranÄ±ÅÄ±nÄ±n bir parÃ§asÄ± olarak Visual Studio Ultimate''da modeller oluÅturabilirsiniz.-------------------YazÄ±lÄ±m sisteminizin veya uygulamanÄ±zÄ±n kullanÄ±cÄ±larÄ±nÄ±zÄ±n gereksinimlerini karÅÄ±ladÄ±ÄÄ±ndan emin olmak iÃ§in, genel yapÄ± aÃ§Ä±klamanÄ±zÄ±n ve sisteminizin veya uygulamanÄ±zÄ±n davranÄ±ÅÄ±nÄ±n bir parÃ§asÄ± olarak Visual Studio Ultimate''da modeller oluÅturabilirsiniz. Modelleri kullanarak, tasarÄ±m boyunca kullandÄ±ÄÄ±nÄ±z desenleri de aÃ§Ä±klayabilirsiniz. Bu modeller; varolan mimariyi anlamanÄ±za, deÄiÅiklikleri tartÄ±ÅmanÄ±za ve amaÃ§larÄ±nÄ±zla aÃ§Ä±kÃ§a iletiÅim kurmanÄ±za yardÄ±m eder.\r\nBir modelin amacÄ±; doÄal dil aÃ§Ä±klamalarÄ±nda olan belirsizlikleri azaltmak ve sizin ve Ã§alÄ±Åma arkadaÅlarÄ±nÄ±zÄ±n tasarÄ±mÄ± gÃ¶rselleÅtirmenize ve alternatif tasarÄ±mlarÄ± tartÄ±ÅmanÄ±za yardÄ±m etmek iÃ§indir. Bir model, diÄer belgeler veya tartÄ±Åmalarla birlikte kullanÄ±lmalÄ±dÄ±r. Kendi baÅÄ±na bir model, mimarinin tam bir belirtimini gÃ¶stermez.', 'YazÄ±lÄ±m Sistem Mimarisi Modelleme,mimari,ytm', 1, '2014-05-12 23:05:12', 14, 1, 1, 0),
(42, 'Mimari Desenler', 'mimari-desenler', 'BugÃ¼n sizlerle YazÄ±lÄ±m MÃ¼hendisliÄiânin en Ã¶nemli yapÄ± taÅlarÄ±ndan olan YazÄ±lÄ±m Mimarisi TasarÄ±mÄ± baÅlÄ±klÄ± yazÄ± serimizin III. Konusu olan Architectural Patterns yani Mimari Desenler konusunu ele alacaÄÄ±m.-------------------BugÃ¼n sizlerle YazÄ±lÄ±m MÃ¼hendisliÄiânin en Ã¶nemli yapÄ± taÅlarÄ±ndan olan YazÄ±lÄ±m Mimarisi TasarÄ±mÄ± baÅlÄ±klÄ± yazÄ± serimizin III. Konusu olan Architectural Patterns yani Mimari Desenler konusunu ele alacaÄÄ±m. SÃ¶zlerimizi fazla uzatmadan konumuza giriÅ yapalÄ±m ve bilmemiz gereken kavramlarÄ± hep birlikte irdeleyerek sizlerle paylaÅÄ±mda bulunalÄ±m.\r\n\r\nArchitectural Patterns, kÄ±saca aÃ§Ä±klayacak olursak; YazÄ±lÄ±m MÃ¼hendisliÄi meydana gelmiÅ mimari sorunlara Ã§Ã¶zÃ¼mler getirerek Ã§Ã¶zÃ¼m Ã¶nerilerinde bulunan Mimari Desenlerâdir. Desen fikri; YazÄ±lÄ±m Sistemleri hakkÄ±nda bilgiyi yeniden kullanmayÄ±( reuse knowledge), paylaÅmayÄ± (sharing) ve sunumun (presenting)  bir yolu olarak geniÅ yelpazede kullanÄ±lmaktadÄ±r. Yani; Bir mimari desen, yazÄ±lÄ±m sistemler iÃ§in; alt sistemlerden(sub system), bu alt sistemlerin ilgili olduÄu sorumluluklarÄ± ve dÃ¢hili iliÅkilerinden meydana gelen temel ve yapÄ±sal bir organizasyon ÅemasÄ±nÄ± ifade eder.\r\nPeki, Bu mimari desenlere Ã¶rnek verecek olursak; hangi desenler bu kategoriye girmiÅ olur:\r\n-          Sunum-soyutlama-kontrol (presentation-abstrction-control) deseni\r\n-          ÃÃ§ katmanlÄ± (three tier) desenler\r\n-          Boru HattÄ± (pipeline)deseni\r\n-          ÃrtÃ¼k Ã§aÄÄ±rma (implicit invocation) deseni\r\n-          Blackboard sistemi (Blackboard System) desenleri\r\n-          Peer-to-peer desenleri\r\n-          Broker Desen\r\n-          ÃÄ±plak nesneler (naked objects) deseni-------------------------------BugÃ¼n sizlerle YazÄ±lÄ±m MÃ¼hendisliÄiânin en Ã¶nemli yapÄ± taÅlarÄ±ndan olan YazÄ±lÄ±m Mimarisi TasarÄ±mÄ± baÅlÄ±klÄ± yazÄ± serimizin III. Konusu olan Architectural Patterns yani Mimari Desenler konusunu ele alacaÄÄ±m.-------------------BugÃ¼n sizlerle YazÄ±lÄ±m MÃ¼hendisliÄiânin en Ã¶nemli yapÄ± taÅlarÄ±ndan olan YazÄ±lÄ±m Mimarisi TasarÄ±mÄ± baÅlÄ±klÄ± yazÄ± serimizin III. Konusu olan Architectural Patterns yani Mimari Desenler konusunu ele alacaÄÄ±m. SÃ¶zlerimizi fazla uzatmadan konumuza giriÅ yapalÄ±m ve bilmemiz gereken kavramlarÄ± hep birlikte irdeleyerek sizlerle paylaÅÄ±mda bulunalÄ±m.\r\n\r\nArchitectural Patterns, kÄ±saca aÃ§Ä±klayacak olursak; YazÄ±lÄ±m MÃ¼hendisliÄi meydana gelmiÅ mimari sorunlara Ã§Ã¶zÃ¼mler getirerek Ã§Ã¶zÃ¼m Ã¶nerilerinde bulunan Mimari Desenlerâdir. Desen fikri; YazÄ±lÄ±m Sistemleri hakkÄ±nda bilgiyi yeniden kullanmayÄ±( reuse knowledge), paylaÅmayÄ± (sharing) ve sunumun (presenting)  bir yolu olarak geniÅ yelpazede kullanÄ±lmaktadÄ±r. Yani; Bir mimari desen, yazÄ±lÄ±m sistemler iÃ§in; alt sistemlerden(sub system), bu alt sistemlerin ilgili olduÄu sorumluluklarÄ± ve dÃ¢hili iliÅkilerinden meydana gelen temel ve yapÄ±sal bir organizasyon ÅemasÄ±nÄ± ifade eder.\r\nPeki, Bu mimari desenlere Ã¶rnek verecek olursak; hangi desenler bu kategoriye girmiÅ olur:\r\n-          Sunum-soyutlama-kontrol (presentation-abstrction-control) deseni\r\n-          ÃÃ§ katmanlÄ± (three tier) desenler\r\n-          Boru HattÄ± (pipeline)deseni\r\n-          ÃrtÃ¼k Ã§aÄÄ±rma (implicit invocation) deseni\r\n-          Blackboard sistemi (Blackboard System) desenleri\r\n-          Peer-to-peer desenleri\r\n-          Broker Desen\r\n-          ÃÄ±plak nesneler (naked objects) deseni', 'mimari desenler,Ã¼Ã§ katmanlÄ± mimariler,iki katmanlÄ± mimariler', 1, '2014-05-12 23:10:24', 14, 1, 1, 1),
(43, 'YAZILIM MÃHENDÄ°SLÄ°ÄÄ° MÄ°MARÄ° TASARIM-I (ARCHITECTURAL DESIGN-I)', 'yazilim-m-hend-sl-m-mar-tasarim-i-architectural-design-i', 'Merhaba deÄerli YazÄ±lÄ±mcÄ± arkadaÅlar,\r\nBugÃ¼n yine sizlerle mesleÄimizin unutulmuÅ yanÄ±nÄ± gÃ¼n Ä±ÅÄ±ÄÄ±na Ã§Ä±karmak ve bu konuda TÃ¼rkÃ§e kaynak sÄ±kÄ±ntÄ±sÄ±nÄ± bir nebzede olsa azaltmak adÄ±na sizlerle YazÄ±lÄ±m MÃ¼hendisliÄiânin en Ã¶nemli belki de yapÄ± taÅlarÄ±ndan olan YazÄ±lÄ±m Mimarisi TasarÄ±mÄ± konusunu ele alacaÄÄ±m.-------------------Merhaba deÄerli YazÄ±lÄ±mcÄ± arkadaÅlar,\r\nBugÃ¼n yine sizlerle mesleÄimizin unutulmuÅ yanÄ±nÄ± gÃ¼n Ä±ÅÄ±ÄÄ±na Ã§Ä±karmak ve bu konuda TÃ¼rkÃ§e kaynak sÄ±kÄ±ntÄ±sÄ±nÄ± bir nebzede olsa azaltmak adÄ±na sizlerle YazÄ±lÄ±m MÃ¼hendisliÄiânin en Ã¶nemli belki de yapÄ± taÅlarÄ±ndan olan YazÄ±lÄ±m Mimarisi TasarÄ±mÄ± konusunu ele alacaÄÄ±m. MesleÄimizin unutulmuÅ yanÄ± diye giriÅ yaptÄ±m. Evet, aslÄ±nda birÃ§oÄumuz temel kavramlarÄ± bilmeden bir yazÄ±lÄ±m projesine ait uygulamalarÄ±mÄ±zÄ± direk kod tarafÄ±ndan baÅlayarak programlamaya baÅlÄ±yoruz. Oysa profesyonel anlamda bir yazÄ±lÄ±m geliÅtiricisinin olmazsa olmazlarÄ± arasÄ±ndan mutlaka YazÄ±lÄ±m Mimarisi TasarÄ±mÄ± olmalÄ±dÄ±r. Mimari tasarÄ±m ne kadar kaliteliyse, performansÄ± yÃ¼ksek, gÃ¼venli, kullanÄ±ÅlÄ± ve esnek ise o kadar kolay programlamaya aktarÄ±labilir ve bir o kadarda sistemlere uyarlanabilir. YazÄ±mÄ±zÄ± 4 bÃ¶lÃ¼m Åeklinde ele alacaÄÄ±m ve her bÃ¶lÃ¼mÃ¼ baÅlÄ± baÅÄ±na bir bÃ¶lÃ¼m niteliÄinde sizlerin paylaÅÄ±mÄ±na sunacaÄÄ±m. SÃ¶zlerimizi fazla uzatmadan konumuza giriÅ yapalÄ±m ve bilmemiz gereken kavramlarÄ± hep birlikte irdeleyerek sizlerle paylaÅÄ±mda bulunalÄ±m.\r\n \r\nYazÄ±lÄ±m Mimarisi ve YazÄ±lÄ±m Mimarisi TasarÄ±mÄ±ândaki amacÄ±mÄ±z;\r\n Sizler bu yazÄ±mÄ±zÄ± okuduktan sonra Åu bilgiler hakkÄ±nda bilgi sahibi olacaksÄ±nÄ±z:\r\n-          YazÄ±lÄ±mda Mimari TasarÄ±mÄ±n niÃ§in Ã¶nemli olduÄunu,\r\n-          Mimari TasarÄ±m sÃ¼reÃ§leri esnasÄ±nda Sistem Mimariânin nasÄ±l yapÄ±ldÄ±ÄÄ± hakkÄ±nda karar vermeyi,\r\n-          Sistem Mimarisinin kurulumunda denenmiÅ en iyi yollarÄ± ve Mimari Ãrneklerin fikirlerini takdim etmeyi,\r\n-          SÄ±k kullanÄ±lan Uygulama sistemlerinin farklÄ± tiplerini bileceksiniz.-------------------------------Merhaba deÄerli YazÄ±lÄ±mcÄ± arkadaÅlar,\r\nBugÃ¼n yine sizlerle mesleÄimizin unutulmuÅ yanÄ±nÄ± gÃ¼n Ä±ÅÄ±ÄÄ±na Ã§Ä±karmak ve bu konuda TÃ¼rkÃ§e kaynak sÄ±kÄ±ntÄ±sÄ±nÄ± bir nebzede olsa azaltmak adÄ±na sizlerle YazÄ±lÄ±m MÃ¼hendisliÄiânin en Ã¶nemli belki de yapÄ± taÅlarÄ±ndan olan YazÄ±lÄ±m Mimarisi TasarÄ±mÄ± konusunu ele alacaÄÄ±m.-------------------Merhaba deÄerli YazÄ±lÄ±mcÄ± arkadaÅlar,\r\nBugÃ¼n yine sizlerle mesleÄimizin unutulmuÅ yanÄ±nÄ± gÃ¼n Ä±ÅÄ±ÄÄ±na Ã§Ä±karmak ve bu konuda TÃ¼rkÃ§e kaynak sÄ±kÄ±ntÄ±sÄ±nÄ± bir nebzede olsa azaltmak adÄ±na sizlerle YazÄ±lÄ±m MÃ¼hendisliÄiânin en Ã¶nemli belki de yapÄ± taÅlarÄ±ndan olan YazÄ±lÄ±m Mimarisi TasarÄ±mÄ± konusunu ele alacaÄÄ±m. MesleÄimizin unutulmuÅ yanÄ± diye giriÅ yaptÄ±m. Evet, aslÄ±nda birÃ§oÄumuz temel kavramlarÄ± bilmeden bir yazÄ±lÄ±m projesine ait uygulamalarÄ±mÄ±zÄ± direk kod tarafÄ±ndan baÅlayarak programlamaya baÅlÄ±yoruz. Oysa profesyonel anlamda bir yazÄ±lÄ±m geliÅtiricisinin olmazsa olmazlarÄ± arasÄ±ndan mutlaka YazÄ±lÄ±m Mimarisi TasarÄ±mÄ± olmalÄ±dÄ±r. Mimari tasarÄ±m ne kadar kaliteliyse, performansÄ± yÃ¼ksek, gÃ¼venli, kullanÄ±ÅlÄ± ve esnek ise o kadar kolay programlamaya aktarÄ±labilir ve bir o kadarda sistemlere uyarlanabilir. YazÄ±mÄ±zÄ± 4 bÃ¶lÃ¼m Åeklinde ele alacaÄÄ±m ve her bÃ¶lÃ¼mÃ¼ baÅlÄ± baÅÄ±na bir bÃ¶lÃ¼m niteliÄinde sizlerin paylaÅÄ±mÄ±na sunacaÄÄ±m. SÃ¶zlerimizi fazla uzatmadan konumuza giriÅ yapalÄ±m ve bilmemiz gereken kavramlarÄ± hep birlikte irdeleyerek sizlerle paylaÅÄ±mda bulunalÄ±m.\r\n \r\nYazÄ±lÄ±m Mimarisi ve YazÄ±lÄ±m Mimarisi TasarÄ±mÄ±ândaki amacÄ±mÄ±z;\r\n Sizler bu yazÄ±mÄ±zÄ± okuduktan sonra Åu bilgiler hakkÄ±nda bilgi sahibi olacaksÄ±nÄ±z:\r\n-          YazÄ±lÄ±mda Mimari TasarÄ±mÄ±n niÃ§in Ã¶nemli olduÄunu,\r\n-          Mimari TasarÄ±m sÃ¼reÃ§leri esnasÄ±nda Sistem Mimariânin nasÄ±l yapÄ±ldÄ±ÄÄ± hakkÄ±nda karar vermeyi,\r\n-          Sistem Mimarisinin kurulumunda denenmiÅ en iyi yollarÄ± ve Mimari Ãrneklerin fikirlerini takdim etmeyi,\r\n-          SÄ±k kullanÄ±lan Uygulama sistemlerinin farklÄ± tiplerini bileceksiniz.', 'yazÄ±lÄ±m tasarÄ±m mimarisi,yazÄ±lÄ±m mÃ¼hendisliÄi', 1, '2014-05-12 23:15:45', 14, 1, 1, 1),
(44, 'KATMANLI YAZILIM MÄ°MARÄ°SÄ°', 'katmanli-yazilim-m-mar-s', 'YazÄ±lÄ±m projelerinin ilk aÅamada iÅ yÃ¼kÃ¼ olarak gÃ¶rÃ¼nse de, sÃ¼rdÃ¼rÃ¼lebilirlik aÃ§Ä±sÄ±ndan Ã§ok daha az maliyetli ve kullanÄ±m kolaylÄ±ÄÄ± saÄlayan bazÄ± temel yapÄ± taÅlarÄ± vardÄ±r. Bunlardan biri de kuÅkusuz katmanlÄ± mimari oluÅturulmasÄ±dÄ±r. Peki katmanlÄ± mimarinin bize kazanÄ±mlarÄ± nelerdir ve neye gÃ¶re nasÄ±l oluÅturulur temel olarak bir inceleyelim.-------------------YazÄ±lÄ±m projelerinin ilk aÅamada iÅ yÃ¼kÃ¼ olarak gÃ¶rÃ¼nse de, sÃ¼rdÃ¼rÃ¼lebilirlik aÃ§Ä±sÄ±ndan Ã§ok daha az maliyetli ve kullanÄ±m kolaylÄ±ÄÄ± saÄlayan bazÄ± temel yapÄ± taÅlarÄ± vardÄ±r. Bunlardan biri de kuÅkusuz katmanlÄ± mimari oluÅturulmasÄ±dÄ±r. Peki katmanlÄ± mimarinin bize kazanÄ±mlarÄ± nelerdir ve neye gÃ¶re nasÄ±l oluÅturulur temel olarak bir inceleyelim.\r\n\r\nKatmanlÄ± mimarinin en bÃ¼yÃ¼k yararÄ±, kodlarÄ±mÄ±zÄ± daha kÃ¼Ã§Ã¼k yapÄ±lara bÃ¶lerek kolay kontrol edilebilirlik ve gÃ¼ncellenebilirlik saÄlar. AyrÄ±ca verilerimizin gÃ¼venliÄini de en yÃ¼ksek seviyede korur. ÃrneÄin bir web projesi iÃ§in,tÃ¼m veritabanÄ± iÅlemlerimizi, butonlarÄ±n arkasÄ±na yazÄ±lan bir sorgu olarak yaparsak, tasarÄ±m deÄiÅikliÄinde tÃ¼m kodlarÄ± tekrardan yazmamÄ±z gerekir. Ya da Ã§Ä±kan her hangi bir sorun anÄ±nda, katmanlÄ± mimaride sadece sorunlu kÄ±smÄ± inceleyecekken, monolithic adÄ± verilen tek katmanlÄ± yazÄ±lÄ±mda tÃ¼m projeyi incelememiz gerekir.\r\n\r\nKatmanlÄ± mimari oluÅturulurken kesinlikle en iyi yapÄ± bu diyebileceÄimiz bir yapÄ± yoktur. KullanacaÄÄ±mÄ±z teknolojiler, kullanÄ±cÄ±ya sunacaÄÄ±mÄ±z olanaklar ve beklediÄimiz performans gibi bir Ã§ok etmen mimari yapÄ±sÄ± aÃ§Ä±sÄ±ndan Ã¶nemlidir. Katman sayÄ±sÄ± ve iÅleyiÅi bunlara baÄlÄ±dÄ±r. Genel olarak kullanÄ±lan 3 katmanlÄ± mimari, bu durumlar gÃ¶z Ã¶nÃ¼ne alÄ±ndÄ±ÄÄ±nda 7 katmana kadar bile Ã§Ä±kabilir. AyrÄ±ca istenildiÄi taktirde her hangi bir katman da kendi iÃ§erisinde katmanlara ayrÄ±labilir.-------------------------------YazÄ±lÄ±m projelerinin ilk aÅamada iÅ yÃ¼kÃ¼ olarak gÃ¶rÃ¼nse de, sÃ¼rdÃ¼rÃ¼lebilirlik aÃ§Ä±sÄ±ndan Ã§ok daha az maliyetli ve kullanÄ±m kolaylÄ±ÄÄ± saÄlayan bazÄ± temel yapÄ± taÅlarÄ± vardÄ±r. Bunlardan biri de kuÅkusuz katmanlÄ± mimari oluÅturulmasÄ±dÄ±r. Peki katmanlÄ± mimarinin bize kazanÄ±mlarÄ± nelerdir ve neye gÃ¶re nasÄ±l oluÅturulur temel olarak bir inceleyelim.-------------------YazÄ±lÄ±m projelerinin ilk aÅamada iÅ yÃ¼kÃ¼ olarak gÃ¶rÃ¼nse de, sÃ¼rdÃ¼rÃ¼lebilirlik aÃ§Ä±sÄ±ndan Ã§ok daha az maliyetli ve kullanÄ±m kolaylÄ±ÄÄ± saÄlayan bazÄ± temel yapÄ± taÅlarÄ± vardÄ±r. Bunlardan biri de kuÅkusuz katmanlÄ± mimari oluÅturulmasÄ±dÄ±r. Peki katmanlÄ± mimarinin bize kazanÄ±mlarÄ± nelerdir ve neye gÃ¶re nasÄ±l oluÅturulur temel olarak bir inceleyelim.\r\n\r\nKatmanlÄ± mimarinin en bÃ¼yÃ¼k yararÄ±, kodlarÄ±mÄ±zÄ± daha kÃ¼Ã§Ã¼k yapÄ±lara bÃ¶lerek kolay kontrol edilebilirlik ve gÃ¼ncellenebilirlik saÄlar. AyrÄ±ca verilerimizin gÃ¼venliÄini de en yÃ¼ksek seviyede korur. ÃrneÄin bir web projesi iÃ§in,tÃ¼m veritabanÄ± iÅlemlerimizi, butonlarÄ±n arkasÄ±na yazÄ±lan bir sorgu olarak yaparsak, tasarÄ±m deÄiÅikliÄinde tÃ¼m kodlarÄ± tekrardan yazmamÄ±z gerekir. Ya da Ã§Ä±kan her hangi bir sorun anÄ±nda, katmanlÄ± mimaride sadece sorunlu kÄ±smÄ± inceleyecekken, monolithic adÄ± verilen tek katmanlÄ± yazÄ±lÄ±mda tÃ¼m projeyi incelememiz gerekir.\r\n\r\nKatmanlÄ± mimari oluÅturulurken kesinlikle en iyi yapÄ± bu diyebileceÄimiz bir yapÄ± yoktur. KullanacaÄÄ±mÄ±z teknolojiler, kullanÄ±cÄ±ya sunacaÄÄ±mÄ±z olanaklar ve beklediÄimiz performans gibi bir Ã§ok etmen mimari yapÄ±sÄ± aÃ§Ä±sÄ±ndan Ã¶nemlidir. Katman sayÄ±sÄ± ve iÅleyiÅi bunlara baÄlÄ±dÄ±r. Genel olarak kullanÄ±lan 3 katmanlÄ± mimari, bu durumlar gÃ¶z Ã¶nÃ¼ne alÄ±ndÄ±ÄÄ±nda 7 katmana kadar bile Ã§Ä±kabilir. AyrÄ±ca istenildiÄi taktirde her hangi bir katman da kendi iÃ§erisinde katmanlara ayrÄ±labilir.', 'katmanlÄ± mimari', 1, '2014-05-12 23:20:37', 7, 1, 1, 1),
(45, 'Duyuru - YazÄ±lÄ±m TasarÄ±m Mimarisi Proje Teslim Tarihi', 'duyuru---yaz-l-m-tasar-m-mimarisi-proje-teslim-tarihi', '<p>Duyuru - YazÄ±lÄ±m TasarÄ±m Mimarisi Proje Teslim Tarihi-------------------Duyuru - YazÄ±lÄ±m TasarÄ±m Mimarisi Proje Teslim Tarihi ArkadaÅlar G&uuml;l Hoca YazÄ±lÄ±m TasarÄ±m Mimarisi YTM - 312 i&ccedil;in proje teslim tarihi olarak 15 MayÄ±s 2014 tarihini verdi. Projesi eksik olanlar bu tarihe kadar eksiklerini tamamlayarak teslim etmeleri gerekmektedir.</p>\r\n\r\n<p><a href="http://localhost:8080/upload/dosya/resim2_1537490192d887.png">http://localhost:8080/upload/dosya/resim2_1537490192d887.png</a></p>-------------------------------<p>Duyuru - YazÄ±lÄ±m TasarÄ±m Mimarisi Proje Teslim Tarihi-------------------Duyuru - YazÄ±lÄ±m TasarÄ±m Mimarisi Proje Teslim Tarihi ArkadaÅlar G&uuml;l Hoca YazÄ±lÄ±m TasarÄ±m Mimarisi YTM - 312 i&ccedil;in proje teslim tarihi olarak 15 MayÄ±s 2014&nbsp;</p>\r\n\r\n<p><a href="http://localhost:8080/upload/dosya/resim2_1537490192d887.png">http://localhost:8080/upload/dosya/resim2_1537490192d887.png</a></p>', 'duyuru', 7, '2014-05-13 10:50:08', 7, 1, 1, 1),
(46, 'deneme yazÄ±sÄ±', 'deneme-yaz-s', '<p>deneme</p>\r\n\r\n<p>-------------------</p>\r\n\r\n<p>deneme demememeda</p>-------------------------------<p>deneme</p>\r\n\r\n<p>-------------------</p>\r\n\r\n<p>deneme demememeda</p>', 'Deneme,deneme1,deneme2', 1, '2014-05-15 10:43:44', 7, 1, 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reklamlar`
--

CREATE TABLE IF NOT EXISTS `reklamlar` (
  `reklam_id` int(11) NOT NULL AUTO_INCREMENT,
  `reklam_adi` varchar(200) NOT NULL,
  `reklam_text` text NOT NULL,
  `reklam_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`reklam_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `reklamlar`
--

INSERT INTO `reklamlar` (`reklam_id`, `reklam_adi`, `reklam_text`, `reklam_tarih`) VALUES
(1, 'sponsor', '<a href="duyuru---yaz-l-m-tasar-m-mimarisi-proje-teslim-tarihi.html">\r\n<img src="http://localhost:8080/tema/default/images/vargonen.png" alt=""/>\r\n</a>', '2014-05-15 01:44:13'),
(2, 'Alo Alo', '<p>Ne haber&nbsp;</p>', '2014-05-15 10:07:27');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

CREATE TABLE IF NOT EXISTS `sayfalar` (
  `sayfa_id` int(11) NOT NULL AUTO_INCREMENT,
  `sayfa_baslik` varchar(250) NOT NULL,
  `sayfa_link` varchar(250) NOT NULL,
  `sayfa_icerik` text NOT NULL,
  `sayfa_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sayfa_hit` int(11) NOT NULL,
  PRIMARY KEY (`sayfa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `sayfalar`
--

INSERT INTO `sayfalar` (`sayfa_id`, `sayfa_baslik`, `sayfa_link`, `sayfa_icerik`, `sayfa_tarih`, `sayfa_hit`) VALUES
(1, 'Dokumanlar', 'dokumanlar', 'Burada YazÄ±lÄ±m TasarÄ±m ve Mimarisi dersinin ders notlarÄ± bulunmaktadÄ±rr..', '2014-05-14 19:04:16', 0),
(2, 'Dersler', 'dersler', 'Bu iÃ§erikte dersler hakkÄ±nda bilgiler bulunmaktadÄ±r...', '2014-05-14 23:38:18', 0),
(3, 'Duyurum', 'duyurum', '<p>YazÄ±lÄ±m TasarÄ±m ve Mimarisi dersi hakkÄ±nda ki b&uuml;t&uuml;n duyurulara buradan ulaÅabilirsiniz..</p>', '2014-05-14 23:53:16', 0),
(4, 'Ä°letiÅim', 'leti-im', 'Ä°letiÅim bilgileri daha sonra eklenecektir...', '2014-05-14 23:53:40', 0),
(5, 'Sdasd', 'sdasd', '<p>bu bir denemedir</p>', '2014-05-15 10:47:29', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE IF NOT EXISTS `uyeler` (
  `uye_id` int(11) NOT NULL AUTO_INCREMENT,
  `uye_kadi` varchar(200) NOT NULL,
  `uye_link` varchar(200) NOT NULL,
  `uye_sifre` varchar(200) NOT NULL,
  `uye_eposta` varchar(200) NOT NULL,
  `uye_cinsiyet` int(11) NOT NULL,
  `uye_hakkinda` text NOT NULL,
  `uye_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `uye_rutbe` int(11) NOT NULL,
  `uye_onay` int(11) NOT NULL,
  PRIMARY KEY (`uye_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uye_id`, `uye_kadi`, `uye_link`, `uye_sifre`, `uye_eposta`, `uye_cinsiyet`, `uye_hakkinda`, `uye_tarih`, `uye_rutbe`, `uye_onay`) VALUES
(1, 'talhasahin', 'talhasahin', 'e10adc3949ba59abbe56e057f20f883e', 'mtalhasahin@hotmail.com', 0, 'Cok eglenceli biriyimdir.Hayattan zevk almayÄ± biliyorum', '2014-03-20 15:46:47', 1, 1),
(5, 'mtnn', 'mtnn', 'e10adc3949ba59abbe56e057f20f883e', 'mtn@hotmail.com', 0, 'Cok eglenceli biriyimdir.Hayattan zevk almayÄ± biliyorum', '2014-03-29 13:24:45', 2, 1),
(6, 'hkyazilimm', 'hkyazilimm', 'e10adc3949ba59abbe56e057f20f883e', 'hk@hotmail.com', 0, 'Cok eglenceli biriyimdir.Hayattan zevk almayÄ± biliyorum', '2014-03-29 13:26:03', 2, 1),
(7, 'omeryazir', 'omeryazir', 'e10adc3949ba59abbe56e057f20f883e', 'omryazr_@hotmail.com', 0, 'Cok eglenceli biriyimdir.Hayattan zevk almayÄ± biliyorum', '2014-03-29 13:26:24', 1, 1),
(12, 'sabri', 'sabri', 'e10adc3949ba59abbe56e057f20f883e', 'sabri@hotmail.com', 0, 'Cok eglenceli biriyimdir.Hayattan zevk almayÄ± biliyorum', '2014-05-12 16:04:10', 2, 2),
(13, 'ytmadmin', 'ytmadmin', 'e10adc3949ba59abbe56e057f20f883e', 'ytm@hotmail.com', 0, 'Cok eglenceli biriyimdir.Hayattan zevk almayÄ± biliyorum', '2014-05-12 16:11:45', 2, 2),
(14, 'aaa', 'aaa', 'e10adc3949ba59abbe56e057f20f883e', 'aa@hotmail.com', 0, 'Cok eglenceli biriyimdir.Hayattan zevk almayÄ± biliyorum', '2014-05-12 16:13:14', 2, 2),
(15, 'omer', 'omer', 'e10adc3949ba59abbe56e057f20f883e', 'omer@hotmail.com', 1, 'Cok eglenceli biriyimdir.Hayattan zevk almayÄ± biliyorum', '2014-05-13 11:18:26', 2, 1),
(16, 'kelesoglu23', 'kelesoglu23', 'e10adc3949ba59abbe56e057f20f883e', 'kelesoglu@hotmail.com', 1, 'Ãok sakin ve anlayÄ±ÅlÄ± biriyim', '2014-05-15 05:23:54', 2, 1),
(17, 'doygun', 'doygun', 'e10adc3949ba59abbe56e057f20f883e', 'doygun@hotmail.com', 0, '', '2014-05-15 10:49:18', 2, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE IF NOT EXISTS `yorumlar` (
  `yorum_id` int(11) NOT NULL AUTO_INCREMENT,
  `yorum_konu_id` int(11) NOT NULL,
  `yorum_ekleyen` varchar(150) NOT NULL,
  `yorum_icerik` text NOT NULL,
  `yorum_eposta` varchar(200) NOT NULL,
  `uye_avatar` varchar(300) NOT NULL,
  `yorum_onay` int(11) NOT NULL,
  `yorum_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`yorum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
