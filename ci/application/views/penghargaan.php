<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PT. INTERMEDIA CAPITAL TBK.</title>
<link rel="shortcut icon" href="<?=base_url()?>favicon.ico" type="image/x-icon">

<link rel="stylesheet" href="<?php echo base_url('inc/mdia.css') ?>">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>inc/popupmenu.css" />

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
<link href="<?=base_url()?>masterslider/style/masterslider.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?=base_url()?>masterslider/skins/metro/style.css" />
<script src="<?=base_url()?>inc/jquery-1.11.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=base_url()?>http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script src="<?=base_url()?>masterslider/masterslider.js" type="text/javascript"></script>
<script type="<?=base_url()?>text/javascript" src="inc/popupmenu.js"></script>

<!--FIGURE -->
<link rel="stylesheet" href="<?=base_url()?>inc/figurecaptions.css" />
<script src="<?=base_url()?>https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?=base_url()?>http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="<?=base_url()?>inc/figurecaptions.js"></script>


<script>

$(function(){ // on DOM load
 $('#1').addCaption({
  fx: 'dualpanels',
  caption: 'PESBUKERS'
 })
 
 $('#2').addCaption({
  fx: 'dualpanels',
  caption: 'CARI JODOH LAGI'
 })
 
  $('#3').addCaption({
  fx: 'dualpanels',
  caption: 'JODOH WASIAT BAPAK'
 })
  $('#4').addCaption({
  fx: 'dualpanels',
  caption: 'NAKUSHA'
 })
   $('#5').addCaption({
  fx: 'dualpanels',
  caption: 'SELAMAT PAGI NUSANTARA'
 })
   $('#6').addCaption({
  fx: 'dualpanels',
  caption: 'SWARAGINI'
 })
})

</script>
        <style>
		button.accordion {
			background-color: #eee;
			color: #444;
			cursor: pointer;
			padding: 18px;
			width: 100%;
			border: none;
			text-align: left;
			outline: none;
			font-size: 15px;
			transition: 0.4s;
		}
		
		button.accordion.active, button.accordion:hover {
			background-color: #cc0000;
			color:#fff;
		}
		
		button.accordion:after {
			content: '\02795';
			font-size: 12px;
			color: #777;
			float: right;
			margin-left: 5px;
		}
		
		button.accordion.active:after {
			content: "\2796";
		}
		
		div.panel {
			padding: 0 18px;
			background-color: white;
			max-height: 0;
			overflow: hidden;
			transition: 0.6s ease-in-out;
			opacity: 0;
		}
		
		div.panel.show {
			opacity: 1;
			max-height: inherit;  
		}
		</style>
        
        <style>
			.post-container {
				margin: 20px 20px 0 0;  
				border: 0px solid #333;
				overflow: auto
			}
			.post-thumb {
				float: left
			}
			.post-thumb img {
				display: block
			}
			.post-content {
				margin-left: 250px
			}
			.post-title {
				font-weight: bold;
				font-size: 200%;
				padding: 9px;
				/*background: #ccc*/
			}


		</style>
</head>
	
<body>
<div id="wrapper">
    <div id="header">
      <?php include("head.php"); ?>
    </div>
    
    <div id="banner_web_in">
    	<img src="<?=base_url()?>images/penghargaan_sertifikasi.jpg" />
    </div>
    
<div id="content">
<div id="isi">
        
    <div style="padding-bottom:25px;">
    	<img src="<?=base_url()?>images/dot.jpg" width="17" height="14" align="left" style="padding-right:20px;padding-top:8px;"/>
        <h1 class="judul">Penghargaan dan Sertifikasi</h1>
	</div>
	
	<button class="accordion">Daftar Tahun 2017 </button>
    <div class="panel">
    	
        <button class="accordion">Penghargaan</button>
    <div class="panel">
		<div class="post-container">    
        <div class="post-thumb"><img src="<?=base_url()?>penghargaan/piala-kpid-sulsel-2017.jpg" width="114" height="170"/></div>
        <div class="post-content">
        	<h4>Makassar, 16 Desember 2017</h4>
            <p>ANTV Mendapatkan Penghargaan dari KPID Sulawesi Selatan untuk kategori SSJ Peduli Budaya Lokal.</p></div>        
        </div> <hr /><!-- foto1-->
		
		<div class="post-container">    
        <div class="post-thumb"><img src="<?=base_url()?>penghargaan/piala-kpid-bengkulu-2017.jpg" width="114" height="170"/></div>
        <div class="post-content">
        	<h4>Bengkulu, 15 Desember 2017</h4>
            <p>ANTV Mendapatkan Penghargaan dari KPID Bengkulu sebagai Media spirit konten lokal pada ajang KPID Bengkulu Award 2017.</p></div>        
        </div> <hr /><!-- foto1-->
		
		<div class="post-container">    
        <div class="post-thumb"><img src="<?=base_url()?>penghargaan/KPID-Lampung-Award-2017.JPG" width="114" height="170"/></div>
        <div class="post-content">
        	<h4>Jakarta, 28 November 2017</h4>
            <p>Program ANTV "Panorama" memenangkan KPID Lampung Award 2017 untuk kategori Feature Televisi Berjaringan.</p></div>        
        </div> <hr /><!-- foto1-->
		
		<div class="post-container">    
        <div class="post-thumb"><img src="<?=base_url()?>penghargaan/International-Celaket-Cross-Cultural-Festival-2017.jpg" width="114" height="170"/></div>
        <div class="post-content">
        	<h4>Malang, 24 November 2017</h4>
            <p>ANTV menerima  penghargaan dariatas pengabdiannya sebagai Televisi Peduli Budaya Lokal dalam 6th International Celaket Cross Cultural Festival.</p></div>        
        </div> <hr /><!-- foto1-->
		
		<div class="post-container">    
        <div class="post-thumb"><img src="<?=base_url()?>penghargaan/top-10-best-company-2017.jpg" width="114" height="170"/></div>
        <div class="post-content">
        	<h4>15 November 2017</h4>
            <p>ANTV menerima penghargaan Top 10 best Companies in Creating Leaders from Within 2017 yang di selenggarakan oleh SWA dan NBO Group.</p></div>        
        </div> <hr /><!-- foto1-->
		
		<div class="post-container">    
        <div class="post-thumb"><img src="<?=base_url()?>penghargaan/Anugerah-KPI-2017---ILM---KARENA-KITA-INDONESIA-Piala-1.jpg" width="114" height="170"/></div>
        <div class="post-content">
        	<h4>Jakarta, Oktober 28 2017</h4>
            <p>Program ANTV "Karena Kita Indonesia" memenangkan KPI Awards 2017 untuk kategori Iklan Layanan Masyarakat Produksi Televisi.</p>
			<p>ANTV menerima penghargaan KPI Awards 2017 untuk kategori Televisi Ramah Penyandang Disabilitas.</p></div>        
        </div> <hr /><!-- foto1-->
	
		<div class="post-container">    
        <div class="post-thumb"><img src="<?=base_url()?>penghargaan/Panasonic-2017-Menyingkap-Tabir.JPG" width="114" height="170"/></div>
        <div class="post-content">
        	<h4>Jakarta, 27 Oktober 2017</h4>
            <p>ANTV memenangkan penghargaan 20th Panasonic Gobel Awards di kategori Komedi/Sitkom untuk program "Pesbukers".</p></div>        
        </div> <hr /><!-- foto1-->
	
		<div class="post-container">    
        <div class="post-thumb"><img src="<?=base_url()?>penghargaan/Marketing-Award---The-Best-in-Marketing-Campaign.jpg" width="114" height="170"/></div>
        <div class="post-content">
        	<h4>Jakarta, 13 September 2017</h4>
            <p>ANTV dianugerahi penghargaan Marketing Award 2017 oleh Majalah Marketing untuk  kategori "The Best in Marketing Campaign" & kategori "The Best in Experiential Marketing".</p></div>        
        </div> <hr /><!-- foto1-->
		
		<div class="post-container">    
        <div class="post-thumb"><img src="<?=base_url()?>penghargaan/Swa-2017.jpg" width="114" height="170"/></div>
        <div class="post-content">
        	<h4>Jakarta, 18 April 2017</h4>
            <p>ANTV dianugerahi Majalah Swa sebagai "Indonesia Most Creative Company 2017".</p></div>        
        </div> <hr /><!-- foto1-->
	
		<div class="post-container">    
        <div class="post-thumb"><img src="<?=base_url()?>penghargaan/Anugerah-Penyiaran-KPID-Jambi-ANTV-2017.jpg" width="114" height="170"/></div>
        <div class="post-content">
        	<h4>Jambi, 19 Mei 2017</h4>
            <p>ANTV memenangkan penghargaan KPID Jambi 2017 dalam kategori “ Program Seni Budaya Televisi Terbaik” dengan tema “ Konten Lokal untuk Nasional” untuk program “Songket Jambi”.</p></div>        
        </div> <hr /><!-- foto1-->
		
		<div class="post-container">    
        <div class="post-thumb"><img src="<?=base_url()?>penghargaan/2017-1.jpg" width="114" height="170"/></div>
        <div class="post-content">
        	<h4>Jakarta, 24 Februari 2017</h4>
            <p>MDIA dianugerahi oleh Warta Ekonomi sebagai " Winner of Indonesia Most Innovative Business Award 2017" untuk kategori Periklanan, Percetakan & Media.</p></div>        
        </div> <hr /><!-- foto1-->
        
    </div> <!--div accordion-->
	<!--2016-->
        
        
        <button class="accordion">Sertifikasi</button>
    <div class="panel">
    	
        <div class="post-container">    
        <div class="post-thumb"><img src="<?=base_url()?>sertifikasi/ANTV-ISO-9001-2015-Certificate-2017-2020-page-001.jpg" width="114" height="170"/></div>
        <div class="post-content">
            
           	<p>ANTV memegang sertifikasi ISO 9001:2015 dalam lingkup Television Broadcast System yang diterbitkan oleh United Registrar of Systems Certification, berlaku sampai dengan 8 Maret 2020.</p></div>        
        </div> <!-- foto1-->
        <!-- </div> -->
    </div> <!--div accordion
	<!--2017-->
        
    </div> <!--div accordion-->
	<!--2017-->
    
        <button class="accordion">Daftar Tahun 2016 </button>
    <div class="panel">
    	
        <button class="accordion">Penghargaan</button>
    <div class="panel">
		<div class="post-container">    
        <div class="post-thumb"><img src="<?=base_url()?>penghargaan/Piala AGP Sumatra Selatan 2016.JPG" width="114" height="170"/></div>
        <div class="post-content">
        	<h4>Palembang, 7 Desember 2016</h4>
            <p>ANTV memenangkan penghargaan Anugerah Gemilang Penyiaran Sumatera Selatan tahun 2016 untuk “Program Feature Budaya, Pendidikan dan Kesehatan Televisi” terbaik.</p></div>        
        </div> <hr /><!-- foto1-->
		
		<div class="post-container">    
        <div class="post-thumb"><img src="<?=base_url()?>penghargaan/piala-KPID-Sumatra-Barat-2016.jpg" width="114" height="170"/></div>
        <div class="post-content">
        	<h4>Padang, 28 November 2016</h4>
            <p>ANTV memenangkan penghargaan KPID Sumatra Barat 2016 dalam kategori “Iklan Layanan Masyrakat Televisi Terbaik” untuk iklan “Terorisme”.</p></div>        
        </div> <hr /><!-- foto1-->
	
		<div class="post-container">    
        <div class="post-thumb"><img src="<?=base_url()?>penghargaan/piala-KPID-Riau-2016.jpg" width="114" height="170"/></div>
        <div class="post-content">
        	<h4>Riau, 2 Desember 2016</h4>
            <p>ANTV memenangkan penghargaan KPID Riau 2016 untuk “LPS Televisi Berjaringan Terbaik”.</p></div>        
        </div> <hr /><!-- foto1-->
		
		<div class="post-container">    
        <div class="post-thumb"><img src="<?=base_url()?>penghargaan/IICD-7nov2016.JPG" width="114" height="170"/></div>
        <div class="post-content">
            <h4>Jakarta, 7 November 2016</h4>
            <p>PT Intermedia Capital Tbk. dianugrahi penghargaan The 8th IICD Corporate Governance Conference  And Award untuk kategori the Most Improved oleh Indonesian Institute for Corporate Directorship.</p></div>        
        </div> <hr /><!-- foto3-->
	
		<div class="post-container">    
        <div class="post-thumb"><img src="<?=base_url()?>penghargaan/panasonic-perbukers-14okt16.jpg" width="114" height="170"/></div>
        <div class="post-content">
            <h4>Jakarta, 14 Oktober 2016</h4>
            <p>ANTV  dianugrahi  Panasonic Gobel Award ke -19 dalam Kategori Komedi Show  untuk program “Pesbukers”.</p></div>        
        </div> <hr /><!-- foto3-->
	
    	<div class="post-container">    
        <div class="post-thumb"><img src="<?=base_url()?>penghargaan/PENGHARGAAN-KPID-KALSEL-2016.jpg" width="114" height="170"/></div>
        <div class="post-content">
            <h4>BANJARMASIN, 2 September 2016</h4>
            <p>ANTV meraih penghargaan KPID Kalsel Award dalam kategori Televisi Berjaringan Features untuk program Panorama Kalimantan Selatan dalam episode “Kai Untung Relawan Pemadam Kebakaran”.</p></div>        
        </div> <hr /><!-- foto3-->
    	
        <div class="post-container">    
        <div class="post-thumb"><img src="<?=base_url()?>penghargaan/warta-ekonomi-2016.jpg" width="114" height="170"/></div>
        <div class="post-content">
        	<h4>JAKARTA, 22 Maret 2016</h4>
            <p>MDIA dianugerahi oleh Warta Ekonomi sebagai "Indonesia Fastest Growing Issuers 2016" untuk kategori Periklanan, Percetakan & Media. </p></div>        
        </div> <hr /><!-- foto1-->
        
        <div class="post-container">    
        <div class="post-thumb"><img src="<?=base_url()?>penghargaan/PENGHARGAAN-KPID-JATENG-2016.JPG" width="114" height="170"/></div>
        <div class="post-content">
        	<h4>SEMARANG, 27 Mei 2016</h4>
            <p>ANTV dianugerahi oleh KPID Jawa Tengah sebagai "Program Siaran Lokal Terbaik Televisi SSJ Dan Parade Penyiaran Favorit".</p></div>        
        </div><!-- foto2-->
        
    </div> <!--div accordion-->
	<!--2016-->
        
        
        <button class="accordion">Sertifikasi</button>
    <div class="panel">
    	
        <div class="post-container">    
        <div class="post-thumb"><img src="<?=base_url()?>sertifikasi/ANTV-ISO-9001-2008-Certificate-2014-2017.jpg" width="114" height="170"/></div>
        <div class="post-content">
            
           	<p>ANTV memegang sertifikasi ISO 9001:2008 dalam lingkup Television Broadcast System yang diterbitkan oleh United Registrar of Systems Certification, berlaku sampai dengan 8 Maret 2017.</p></div>        
        </div> <!-- foto1-->
        
    </div> <!--div accordion-->
	<!--2016-->
        
    </div> <!--div accordion-->
	<!--2016-->
    
        <button class="accordion">Daftar Tahun 2015 </button>
    <div class="panel">
    	
        <button class="accordion">Penghargaan</button>    <div class="panel">
    
    <div class="post-container">    
    <div class="post-thumb"><img src="<?=base_url()?>penghargaan/Warta Ekonomi-26feb2015.jpg" width="170" height="114" /></div>
    <div class="post-content">
        <p>JAKARTA, 26 FEBRUARI 2015 - MDIA dianugerahi oleh Warta Ekonomi sebagai "Indonesia Fastest Growing Issuers 2015" untuk kategori Periklanan, Percetakan & Media.</p></div>        
	</div><hr /> <!-- foto1-->
    
    <div class="post-container">    
    <div class="post-thumb"><img src="<?=base_url()?>assets/penghargaan/4-7 PGA 2015.jpeg" width="114" height="170"/></div>
    <div class="post-content">
        <p>JAKARTA, 28 MEI 2015 - Dalam ajang Panasonic Goble Award ke-18 ANTV berhasil meraih 5 buah penghargaan, sebagai berikut: Program SUPER DEAL meraih penghargaan dalam kategori Kuis dan Game Show Terfavorit The SUPER DEAL deal program won an award in the Quiz and Favorite Game Show category. Uya Kuya selaku host program SUPER DEAL meraih penghargaan sebagai Host Quiz terfavorit. Uya Kuya as a host of SUPER DEAL program was awarded favorite Quiz and Gameshow Host. Program PESBUKERS meraih penghargaan sebagai acara Program Komedi Terfavorit. PESBUKERS program was awarded Favorite Comedy Program. Program “The New Eat Bulaga! Indonesia” meraih penghargaan Musik dan Variety Show Terfavorit. "The New Eat Bulaga Indonesia" won Favorite Music and Variety Show. Program Kampiun ANTV meraih penghargaan Buletin dan Jurnal Olahraga Terfavorit. The ANTV's Kampiun program won Favorite Sport Bulletin and Journal.</p></div>        
	</div><hr /> <!-- foto2-->
	
	<div class="post-container">    
    <div class="post-thumb"><img src="<?=base_url()?>penghargaan/2. A KPID JATENG 2015.jpg" width="114" height="170" /><br>
							<img src="<?=base_url()?>penghargaan/2. B KPID JATENG 2015.jpg" width="170" height="114" />	</div>
    <div class="post-content">
        <p>SEMARANG, 31 JULI 2015 - Tim News ANTV meraih penghargaan di ajang KPID Jawa Tengah sebagai: Program Siaran Lokal terbaik Televisi Sistem Stasiun jaringan (SSJ) dengan tayangan Karimunjawa.</p></div>        
	</div><hr /> <!-- foto3-->
    
    <div class="post-container">    
    <div class="post-thumb"><img src="<?=base_url()?>penghargaan/3. CAHAYA HATI 2015.jpg" width="170" height="114" /></div>
    <div class="post-content">
        <p>JAKARTA, 31 JULI 2015 - Cahaya Hati Ramadhan mendapat Apresiasi Program Siaran Ramadhan oleh KPI dan MUI dalam cara Silaturrahim Syawal dan Penghargaan Program Terbaik Ramadhan 1436 H/2015 M di gedung Kemenkominfo Jakarta.</p></div>        
	</div><hr /> <!-- foto4-->
    
    <div class="post-container">    
    <div class="post-thumb"><img src="<?=base_url()?>penghargaan/1. KPID BANTEN 2015.jpg" width="114" height="170"/></div>
    <div class="post-content">
        <p>PALU, 27 NOVEMBER 2015 - ANTV mendapatkan penghargaan untuk Program Dokumenter Feature dengan Program Panorama berjudul "Belajar dari Komunitas Bambu" dalam ajang Anugerah KPID Banten 2015.</p></div>        
	</div><hr /> <!-- foto5-->
    
    <div class="post-container">    
    <div class="post-thumb"><img src="<?=base_url()?>penghargaan/8. KPID RIAU 2015.JPG" width="114" height="170" /></div>
    <div class="post-content">
        <p>PEKANBARU, 10 DESEMBER 2015 - ANTV meraih penghargaan kategori Karib Budaya Riau untuk program Liputan Rumah Lontiok dan Masjid Jamik dalam ajang KPID Riau Award 2015.</p></div>        
	</div><hr /> <!-- foto6-->
    
    <div class="post-container">    
    <div class="post-thumb"><img src="<?=base_url()?>penghargaan/9. A KPID SUMUT 2015.JPG" width="114" height="170" /><br />
    						<img src="<?=base_url()?>penghargaan/9. B KPID SUMUT 2015.JPG" width="170" height="114" /><br />
                            <img src="<?=base_url()?>penghargaan/9. C KPID SUMUT 2015.JPG" width="170" height="114" /></div>
    <div class="post-content">
        <p>MEDAN, 14 DESEMBER 2015 - ANTV telah mendapatkan penghargaan kategori Televisi Bernilai Sosial untuk program Panorama Perempuan-Perempuan Petarung di Tengah Laut dalam ajang KPID Award Sumatera Utara Tahun 2015.</p></div>        
	</div><hr /> <!-- foto7-->
    </div> <!--div accordion-->
	<!--2016-->
                
        <button class="accordion">Sertifikasi</button>
    <div class="panel">
    	
        <div class="post-container">    
        <div class="post-thumb"><img src="<?=base_url()?>sertifikasi/ANTV-ISO-9001-2008-Certificate-2014-2017.jpg" width="114" height="170"/></div>
        <div class="post-content">
           
           	<p>ANTV memegang sertifikasi ISO 9001:2008 dalam lingkup Television Broadcast System yang diterbitkan oleh United Registrar of Systems Certification, berlaku sampai dengan 8 Maret 2017.</p></div>        
        </div> <!-- foto1-->
        
    </div> <!--div accordion-->
	<!--2016-->
        
    </div> <!--div accordion-->
	<!--2016-->
	
        <button class="accordion">Daftar Tahun 2014 </button>
    <div class="panel">
    	
        <button class="accordion">Penghargaan</button>    <div class="panel">
    
    <div class="post-container">    
    <div class="post-thumb"><img src="<?=base_url()?>penghargaan/KONI AWARD.jpeg" width="114" height="170"/></div>
    <div class="post-content">
        <p>Jakarta, 10 Maret 2014 - Tim Sports ANTV meraih penghargaan diajang KONI Awards sebagai Institusi Media Elektronika Terbaik 2013.</p></div>        
	</div> <hr /><!-- foto1-->
    
    <div class="post-container">    
    <div class="post-thumb"><img src="<?=base_url()?>penghargaan/TRAVELEZZA.JPG" width="114" height="170"/></div>
    <div class="post-content">
        <p>Program Travellezza meraih penghargaan cinematography terbaik dan Program Kaki Lima meraih penghargaan informasi kuliner terbaik yang diberikan oleh Y. B. Menteri Pariwisata dan Kebudayaan Malaysia pada 11 Maret 2014 pada acara yang diselenggarakan oleh Tourism Malaysia.</p></div>        
	</div><hr /> <!-- foto2-->
    
    <div class="post-container">    
    <div class="post-thumb"><img src="<?=base_url()?>penghargaan/PGA.jpeg" width="114" height="170" /></div>
    <div class="post-content">
        <p>PESBUKERS meraih penghargaan sebagai acara Program Komedi Terfavorit di ajang Panasonic Gobel Awards ke 17 pada 5 April 2014 di Jakarta Convention Center.</p></div>        
	</div><hr /> <!-- foto3-->
    
    <div class="post-container">    
    <div class="post-thumb"><img src="<?=base_url()?>penghargaan/KPI AWARD.jpeg" width="114" height="170" /></div>
    <div class="post-content">
        <p>Jakarta, 18 November 2014 - Program Cakrawala Telisik episode Jalan Sengsara Di Beranda Negara meraih penghargaan Program Televisi Peduli Perbatasan Terbaik pada Anugrah KPI 2014.</p></div>        
	</div><hr /> <!-- foto4-->
    
    <div class="post-container">    
    <div class="post-thumb"><img src="<?=base_url()?>penghargaan/KPID KALSEL.jpeg" width="114" height="170"/></div>
    <div class="post-content">
        <p>Banjarmasin, 28 November 2014 - PT Cakrawala Andalas Televisi Banjarmasin dan Padang mendapatkan penghargaan sebagai Lembaga Penyiaran Televisi Berjaringan Terbaik Program News dalam ajang KPID KALSEL AWARD III 2014 dengan tema "Mewujudkan Siaran Sehat yang Inovatif, Edukatif, dan Inspiratif, serta Bermanfaat Bagi Kehidupan Masyarakat.</p></div>        
	</div><hr /> <!-- foto5-->
    
    <div class="post-container">    
    <div class="post-thumb"><img src="<?=base_url()?>penghargaan/KPID PALU.jpeg" width="114" height="170"/></div>
    <div class="post-content">
        <p>Palu, 29 November 2014 - Program To Palu'E episode Sejarah Sulawesi Tengah dalam Museum Sulawesi Tengah meraih penghargaan kategori feature televisi terbaik dalam ajang KPID Sulawesi Tengah 2014.</p></div>        
	</div><hr /> <!-- foto6-->
    </div> <!--div accordion-->
	<!--2016-->
                
        <button class="accordion">Sertifikasi</button>
    <div class="panel">
    	
        <div class="post-container">    
        <div class="post-thumb"><img src="<?=base_url()?>sertifikasi/ANTV-ISO-9001-2008-Certificate-2014-2017.jpg" width="114" height="170"/></div>
        <div class="post-content">
           
           	<p>Sertifikasi ISO 9001:2008  diterbitkan kembali tanggal 9 Mei 2014 oleh United Registrar of Systems Certification dan berlaku hingga 8 Maret 2017.</p></div>        
        </div> <!-- foto1-->
        
    </div> <!--div accordion-->
	<!--2014-->
        
    </div> <!--div accordion-->
	<!--2014-->
    
        <button class="accordion">Daftar Tahun 2013</button>
    <div class="panel">
    	
        <button class="accordion">Penghargaan</button>    <div class="panel">
    
    <div class="post-container">    
    <div class="post-thumb"><img src="<?=base_url()?>penghargaan/1. KPID BANTEN AWARD 2013.JPG" width="114" height="170"/></div>
    <div class="post-content">
        <p>Serang, 18 Desember 2013 - Tim News ANTV meraih penghargaan diajang KPID Banten Award 2013 sebagai kategori Program Dokumenter/Feature Televisi Terbaik untuk Program Topik Siang Eps. Tapak Bumi Village di Serang, Banten tayang 1 September 2013.</p></div>        
	</div> <hr /><!-- foto1-->
    
    <div class="post-container">    
    <div class="post-thumb"><img src="<?=base_url()?>penghargaan/2. KPID RIAU AWARD 2013.JPG" width="170" height="114" /></div>
    <div class="post-content">
        <p>Pekanbaru, 13 Desember 2013 - Tim News ANTV meraih penghargaan diajang KPID Riau Award 2013 untuk Program Topik Siang tayang 9 Agustus 2013 Eps. Istana Siak Riau.</p></div>        
	</div><hr /> <!-- foto2-->
    
    <div class="post-container">    
    <div class="post-thumb"><img src="<?=base_url()?>penghargaan/3. KPID LAMPUNG AWARD 2013.JPG" width="114" height="170"/></div>
    <div class="post-content">
        <p>Lampung, 1 Desember 2013 - Tim News ANTV meraih penghargaan diajang KPID lampung Award 2013 sebagai Lembaga Penyiaran Televisi Berjaringan Terbaik, Program Feature untuk program TOPIK SIANG LIBURAN 5 Juni 2013 Eps. PATROLI GAJAH.</p></div>        
	</div><hr /> <!-- foto3-->
    
    <div class="post-container">    
    <div class="post-thumb"><img src="<?=base_url()?>penghargaan/4. B KPID KALSEL AWARD 2013 (PROGRAM FEATURE).JPG" width="114" height="170"/></div>
    <div class="post-content">
        <p>Banjarmasin, 29 November 2013 - Tim News ANTV meraih penghargaan diajang KPID KALSEL AWARD II 2013 sebagai : </p>
			<ol>
            	<li>Lembaga Penyiaran Televisi Berjaringan Terbaik, Program News untuk program TOPIK SIANG 28 Oktober 2013 Eps. KULINER KETUPAT KANDANGAN.</li>

				<li>Lembaga Penyiaran Televisi Berjaringan Terbaik, Program Feature untuk program MATA LENSA 15 Januari 2013 Eps. HUNTING FOTO DI BANJARMASIN BERSAMA MARIO BLANCO.</li>
			</ol></div>        
	</div><hr /> <!-- foto4-->
    
    <div class="post-container">    
    <div class="post-thumb"><img src="<?=base_url()?>penghargaan/6. KONI BANDUNG 2013.JPG" width="170" height="114" /></div>
    <div class="post-content">
        <p>ANTV mendapatkan penghargaan sebagai Televisi Favorit masyarakat Kota Bandung yang banyak menayangkan siaran olahraga sepak bola oleh KONI Bandung dalam ajang KPID Jawa Barat Award 2013 pada Jum’at, 15 November 2013.</p></div>        
	</div><hr /> <!-- foto6-->
    
    <div class="post-container">    
    <div class="post-thumb"><img src="<?=base_url()?>penghargaan/7. PGA 2013.jpeg" width="114" height="170"/></div>
    <div class="post-content">
        <p>PESBUKERS meraih penghargaan sebagai Program acara komedi terfavorit di ajang Panasonic Gobel Award ke 16 pada tanggal 30 Maret 2013 di Jakarta Convention Center.</p></div>        
	</div><hr /> <!-- foto7-->
    </div> <!--div accordion-->
	<!--2016-->
                
        <button class="accordion">Sertifikasi</button>
    <div class="panel">
    	
        <div class="post-container">    
        <div class="post-thumb"><img src="<?=base_url()?>sertifikasi/ANTV-ISO-9001-2008-Certificate-2014-2017.jpg" width="114" height="170"/></div>
        <div class="post-content">
           
           	<p>ANTV memegang sertifikasi ISO 9001:2008 dalam lingkup Television Broadcast System yang diterbitkan oleh United Registrar of Systems Certification.</p></div>        
        </div> <!-- foto1-->
        
    </div> <!--div accordion-->
	<!--2013-->
        
    </div> <!--div accordion-->
	<!--2013-->

        <button class="accordion">Daftar Tahun 2012</button>
    <div class="panel">
    	
        <button class="accordion">Penghargaan</button>
    <div class="panel">
    	<div class="post-container">   
       
            <p>CSR ANTV meraih Charta Peduli Indonesia 2012 Award untuk Bidang Pendidikan dari Dompet Dhuafa pada tanggal 20 Desember 2012.</p>
            <p>ANTV mendapatkan penghargaan sebagai televisi yang mengapresiasi karya cipta lagu/music antara lain sebagai televisi paling konsisten membayar royalty dalam acara Pagelaran Karya Anak Bangsa yang diselenggarakan oleh Yayasan Karya Cipta Indonesia pada tanggal 23 November 2012 dibalai sarbini Jakarta</p>
            <p>Tim News ANTV berhasil meraih Penghargaan KPI Bali Awards 2012 untuk Program Topik Petang Eps. Tenun Bali sebagai Program Features Terbaik pada tanggal 21 September 2012</p>
            <p>ANTV meraih penghargaan Anugerah Penyiaran KPID Jawa Tengah Kategori Program Siaran Televisi Berjaringan Peduli Jawa Tengah TERBAIK pada 27 April 2012</p>
            <p>Tim News Antv Berhasil Memborong Juara 1, 2 Dan 3 Dari Kementerian Kelautan Dan Perikanan Republik Indonesia Dalam Ajang Mina Bahari Journalist Award 2011, Kategori Feature Televisi.</p>
				<ul>
                <li>Juara 1 : Kisruh Garam Impor Oleh Herdina Dan Gofur (Tim Telisik)</li>
                <li>Juara 2 : Kampung Lele Dan Olahan Lele Oleh Effendy Rois (Kontributor Solo)</li>
                <li>Juara 3 : Desa Rumput Laut Di Nusa Dua, Bali Oleh Alvani Sukri (Kontributor Bali)</li>
				</ul>

        </div> <hr /><!-- foto3-->
		       
    </div> <!--div accordion-->
	<!--2016-->
                
        <button class="accordion">Sertifikasi</button>
    <div class="panel">
    	
        <div class="post-container">    
        <div class="post-thumb"><img src="<?=base_url()?>sertifikasi/ANTV-ISO-9001-2008-Certificate-2014-2017.jpg" width="114" height="170"/></div>
        <div class="post-content">
            
           	<p>ANTV memegang sertifikasi ISO 9001:2008 dalam lingkup Television Broadcast System yang diterbitkan oleh United Registrar of Systems Certification.</p></div>        
        </div> <!-- foto1-->
        
    </div> <!--div accordion-->
	<!--2012-->
        
    </div> <!--div accordion-->
	<!--2012-->
    
        <button class="accordion">Daftar Tahun 2011</button>
    <div class="panel">
    	
        <button class="accordion">Penghargaan</button>
    <div class="panel">
    	<div class="post-container">   
       
            <p>Tim Current Affairs ANTV Kembali Berhasil Meraih Life Award 2011 Tingkat Asia Pasific Untuk Program  Telisik Episode Wajah Buram Anak Jalanan Pada 27 Juni 2011 Yang Diselenggarakan Oleh Yayasan Cinta Anak Bangsa (Ycab) Dan United Nations Office Of Drugs And Crime (Unodc).</p>
            <p>Meraih penghargaan Panasonic Gobel Award 14. Kategori Program Kuis Terfavorit "SUPER FAMILY". Jakarta, 25 Maret 2011.</p>

        </div> <hr /><!-- foto3-->
		       
    </div> <!--div accordion-->
	<!--2016-->
                
        <button class="accordion">Sertifikasi</button>
    <div class="panel">
    	
        <div class="post-container">    
        <div class="post-thumb"><img src="<?=base_url()?>sertifikasi/ANTV-ISO-9001-2008-Certificate-2014-2017.jpg" width="114" height="170"/></div>
        <div class="post-content">
           
           	<p>ANTV berhasil memperoleh ISO 9001:2008 yang diterbikan oleh United Registrar of Systems Certification untuk lingkup Television Broadcast System.</p></div>        
        </div> <!-- foto1-->
        
    </div> <!--div accordion-->
	<!--2011-->
        
    </div> <!--div accordion-->
	<!--2011-->
        
    <button class="accordion">Daftar Tahun 2010</button>
    <div class="panel">
    
        <div >
            <ul>
                <li>ANTV Peduli Meraih Dompet Dhuafa Award, untuk Kategori Pendidikan, Bidang Program Rekonstruksi Korban Gempa di Indonesia. Pada Jumat, 2 Juli 2010.</li>
                <li>Meraih penghargaan Anugerah Jurnalistik Pertamina 2009 untuk Program TELISIK. Dengan judul program "Licinnya Uang Olie Palsu" (Episode 4 Februari 2009), Kategori Media Elektronik - Feature Televisi Terbaik, pada tanggal 23 April 2009.</li>
                <li>Meraih penghargaan Panasonic Gobel Award 13. Kategori Program Olahraga Terfavorit Djarum ISL. Jakarta, 26 Maret 2010.</li> 
            </ul>
        </div>
    </div>
    
    <button class="accordion">Daftar Tahun 2009</button>
    <div class="panel">
   
    <div >
    	<ul>
			<li>Meraih penghargaan Highly Commended dari ATA (Asian Television Award) 2009. Kategori The Best Current Affairs untuk Program Telisik "Bisnis Narkoba di dalam Penjara". Singapura, 3 Desember 2009.</li>
			<li>Meraih penghargaan MURI (Museum Rekor Dunia Indonesia) Kategori Pemrakarsa dan Penyelenggara Talkshow Capres yang diselenggarakan di tengah pasar. Untuk Divisi Pemberitaan ANTV pada tanggal 12 Juni 2009</li>
			<li>Meraih penghargaan PANASONIC AWARD 2008 Kategori Program Olahraga Favorite LIGA DJARUM INDONESIA yang diselenggarakan oleh Panasonic, pada tanggal 27 Maret 2009.</li>
			<li>Meraih penghargaan Anugrah Jurnalistik Pertamina 2008 untuk Program TELISIK. Dengan judul program "Pengoplos dibalik Kisruh Minyak Tanah", Kategori Media Elektronik - Feature Televisi Terbaik, pada tanggal 27 Februari 2009.</li>    
		</ul>
    </div>
    </div>
    
     <button class="accordion">Daftar Tahun 2008</button>
    <div class="panel">
    <div >
    	<ul>
			<li>Meraih penghargaan Gold Award - Kategori Best News & Current Affairs PROMAX ASIA 2008, Topik versi Monjay tgl 18 November 2008 dan penghargaan Bronze Award kategori media cetak Citra Adi Pariwara 2008, The Simpson Hadir di Indonesia, tgl 14 November 2008.</li>
			<li>Meraih penghargaan yang diberikan oleh Pemerintah Daerah Bantul dalam rangka memperingati Hari Jadi Kabupaten Bantul ke-177, pada 20 Juli 2008, kepada media massa (ANTV Peduli) yang turut membantu pasca gempa 27 Mei 2006 di Jogyakarta dan Bantul dengan kategori penghargaan :
            	<ul>
				<li>Penghargaan Bhakti Grawitya bidang Pendidikan</li>
				<li>Penghargaan Bhakti Sasana Gama bidang Pembangunan Sarana Agama</li>
				<li>Penghargaan Bhakti Waratama bidang Pemberitaan</li>
				<li>Penghargaan Bhakti Grha Husada bidang kesehatan</li>
                </ul>
            </li>        
			<li>Meraih Muctar Lubis Award, pada tanggal 18 Juli 2008, penghargaan sebagai Juara Kategori In- Dept TV Reporting dengan karya Mengeruk Laba dari Bangkai Sapi. Diselenggarakan oleh Lembaga Studi Pers dan Pembangunan (LSPP).</li>
			<li>Meraih penghargaan Life Award 2008, 26 Juni 2008. Penghargaan diberikan kepada ANTV sebagai Kategori Investigasi lewat Program Telisik Bisnis Narkoba di dalam Penjara. Diselengarakan oleh UNODC, YCAB dan Media Group.</li>
			<li>Meraih penghargaan Vidya Satya Nugraha 2007, 19 Juni 2008, penghargaan diberikan kepada ANTV sebagai Lembaga Penyiaran Televisi Yang paling banyak mengirimkan materi-materi untuk di sensor tahun 2007.</li>
			<li>Meraih Anugrah Hukum Indonesia bagi Media Massa, 1 April 2008, penghargaan diberikan sebagai Kategori Televisi Kepada Program Mata Rantai, Narapidana di Luar Penjara Episode Kamis, 20 Maret 2008</li>
			<li>Meraih penghargaan KPI AWARD 2007, pada tanggal 18 Maret 2008, penghargaan diberikan kepada ANTV berdasarkan penilaian para juri untuk :
				<ol>
					<li>Program Telisik Liputan Bisnis Narkoba di Dalam Penjara, memenangkan kategori Program  Berita Investigasi.</li>
					<li>Program Topik Kita Waspada Aliran Sesat, memenangkan kategori Program Talk Show.</li>
					<li>Program I-Sinema Siapa Sayang Lila, memenangkan kategori sinetron lepas atau FTV.</li>
				</ol>
			</li>									
            <li>Meraih Juara Pertama Lomba Karya Jurnalis Olahraga Kategori Televisi diselenggarakan oleh Sirkuit Sentul dalam karya Grand Racing Sirkuit Sentul di Lensa Olahraga, 16-17 Februari 2008.</li>
			<li>Meraih Juara Pertama Lomba Karya Jurnalistik Televisi dalam rangka peringatan hari anti korupsi sedunia diselenggarakan oleh KOMTAK (Komunitas Tionghoa Anti Korupsi) bekerjasama dengan Radio Ramako dan Pertamina dalam karya Liputan Investigasi Praktek Korupsi Lembaga Permasyarakatan Paledang.</li>
		</ul>
    </div>
    </div>
    
</div><!--end isi -->        
</div><!-- end content-->        
        
<div id="footer">
   <div id="footer-dom">
       <p class="copy">COPYRIGHT &COPY; <?PHP ECHO DATE('Y'); ?> PT. CAKRAWALA ANDALAS TELEVISI</p>
   </div>
</div> <!--end footer-->
                
</div> 
<script>
	var acc = document.getElementsByClassName("accordion");
	var i;
	
	for (i = 0; i < acc.length; i++) {
		acc[i].onclick = function(){
			this.classList.toggle("active");
			this.nextElementSibling.classList.toggle("show");
	  }
	}
	</script>  
</body>
</html>
		