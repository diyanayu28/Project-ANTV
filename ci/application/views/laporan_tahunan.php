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
		div.img {
			margin: 5px;
			border: 1px solid #ccc;
			float: left;
			width: 180px;
		}
		
		div.img:hover {
			border: 1px solid #777;
			background:#eee;
		}
		
		div.img img {
			width: 100%;
			height: auto;
		}
		
		div.desc {
			padding: 15px;
			text-align: center;
		}
		</style>
        
</head>
	
<body>
<div id="wrapper">
    <div id="header">
      <?php include("head.php"); ?>
    </div>
    
    <div id="banner_web_in">
    	<img src="<?=base_url()?>images/banner_hubungan_investor.jpg" />
    </div>
    
<div id="content">
<div id="isi">
        
    <div style="padding-bottom:25px;">
    	<img src="<?=base_url()?>images/dot.jpg" width="17" height="14" align="left" style="padding-right:20px;padding-top:8px;"/>
        <h1 class="judul">Laporan Tahunan</h1>
    </div>
        
    <div id="posting2">
		<div class="img">
          <a href="Hubungan Investor/MDIA AR 2016_A4_Preview_full.pdf">
          	<img src="<?=base_url()?>images/MDIA-AR-2016_A4_Preview_full-1.jpg" width="180" height="255" />
          </a>
          <div class="desc">Laporan Tahunan 2016</div>
        </div>
		
        <div class="img">
          <a href="Hubungan Investor/Laporan Tahunan/Annual Report MDIA/160823_jam1609_MDIA_AR_Revisi.pdf">
          	<img src="<?=base_url()?>images/Annual-Report_MDIA_2015-1.jpg" width="180" height="255" />
          </a>
          <div class="desc">Laporan Tahunan 2015</div>
        </div>
        
        <div class="img">
          <a href="Hubungan Investor/Laporan Tahunan/Annual Report MDIA/Annual Report_MDIA_2014.pdf">
          	<img src="<?=base_url()?>images/Annual-Report_MDIA_2014-1.jpg" width="180" height="255" />
          </a>
          <div class="desc">Laporan Tahunan 2014</div>
        </div>
        
        <div class="img">
          <a href="Hubungan Investor/Laporan Tahunan/Annual Report MDIA/Annual Report_MDIA_2013.pdf">
            <img src="<?=base_url()?>images/Annual-Report_MDIA_2013-1.jpg" width="180" height="255" />
          </a>
          <div class="desc">Laporan Tahunan 2013</div>
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
</body>
</html>