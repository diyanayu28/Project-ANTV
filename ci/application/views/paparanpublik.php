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
<script src="<?=base_url()?>inc/figurecaptions.js"></script>s

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
		table {
			border-collapse: collapse;
			width: 100%;
		}
		
		th, td {
			text-align: left;
			padding: 8px;
		}
		
		tr:nth-child(even){background-color: #f2f2f2}
		
		th {
			background-color: #cc0000;
			color: white;
		}
		</style>
        
</head>
	
<body>
<div id="wrapper">
    <div id="header">
      <?php include("head.php"); ?>
    </div>
    
    <div id="banner_web_in">
    	<img src="<?=base_url()?>images/banner_DIVIDEN_mdia2.jpg" />
    </div>
    
<div id="content">
<div id="isi">
        
    <div style="padding-bottom:25px;">
    	<img src="<?=base_url()?>images/dot.jpg" width="17" height="14" align="left" style="padding-right:20px;padding-top:8px;"/>
        <h1 class="judul">Paparan Publik</h1>
	</div>
    
    <table>
      <tr>
        <th width="30%";>Tanggal</th>
        <th width="50%";>Deskripsi</th>
        <th width="20%";>File</th>
      </tr>
      <tr>
        <td>Mei 2017</td>
        <td>Paparan Publik MDIA Mei 2017</td>
        <td><a href="Hubungan Investor/paparan publik/PUBLIC-EXPOSE-MDIA -Final-OK-CETAK.pdf"><img src="<?=base_url()?>images/pdficon.png" width="50px" height="50px" align="center"/></a>
		</td>
      </tr>
	  <tr height="200px";>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      
      
    </table>
        
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