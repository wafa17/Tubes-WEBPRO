<!DOCTYPE html>
<html>
  <head>
  
	<script src="js/analytics.js"></script>
 <style>
.journalbutton { 
    padding: 20px; 
    border-radius: 5px;
	border : 3px #C9302C solid;
	font-size:14px;
	font-weight:bold;
}
.box-title{
	padding:10px; 
	font-size:18px;
	font-weight:bold;
	font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
	margin-bottom:5px;
	background-color:#C9302C;
	color:#fff;
	border-radius:10px 10px 0 0;
	text-align:center;
}

.box-title-small{
	padding:3px; 
	font-size:18px;
	font-weight:bold;
	font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
	margin-bottom:5px;
	background-color:#C9302C;
	color:#fff;
	border-radius:10px 10px 0 0;
	text-align:center;
}

#myModal .modal-dialog
{
  width: 55%;
}
 </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Open Library - About Us</title>
    <link rel="shortcut icon" href="/favicon.ico" />
        <meta name="title" content="OpenLibrary - Telkom University" />
<meta name="description" content="perpustakaan digital universitas telkom. disini tersedia informasi seluruh koleksi pustaka yang dimiliki universitas telkom yang terbuka dan dapat dipinjam oleh publik" />
<meta name="keywords" content="perpustakaan telkom, perpustakaan universitas telkom, telkom university, universitas telkom, perpustakaan" />
<meta name="language" content="id" />
<meta name="robots" content="index, follow" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url('assets/css/tampilan.css')?>" rel="stylesheet" media="screen" type="text/css">
    <link href="<?php echo base_url('assets/css/plugin.css')?>" rel="stylesheet" media="screen" type="text/css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container container-imtelkom">
      <div class="navbar navbar-default navbar-imtelkom">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url('beranda/index');?>">OPEN LIBRARY</a>
        </div>
        
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li id="home_index">
  					<a href="<?php echo site_url('beranda/index')?>">Beranda</a>
              
            </li>
            <li id="home_catalog"><a href="/home/catalog.html">Katalog</a></li> 
			 <li id="home_eproceeding"><a target="_blank" href="http://libraryeproceeding.telkomuniversity.ac.id">E-Publications</a></li>
			 <li id="home_aboutus"><a href="<?php echo site_url('aboutus/index');?>">About Us</a></li>
           
			 <li id="home_gallery"><a href="/home/gallery.html">Gallery</a></li>
              </ul>  </li>
			
          </ul>

         
                <!-- LOGIN -->
          <form class="navbar-form navbar-form-imtelkom form-inline navbar-right" method="post" action="<?php echo site_url('beranda/login_proses'); ?>" >
		   <div class="form-group"  >
              <input type="text" name="username" placeholder="Username" class="form-control input-sm">
            </div>
            <div class="form-group">
              <input type="password" name="password" placeholder="Password" class="form-control input-sm">
            </div>
            <button type="submit" name="signin" class="btn btn-sm btn-imtelkom" >Login (SSO)</button>
            <button type="button" name="signin" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-register">Sign Up</button>
          </form>
        
        </div>
        </div>
      </div>

      
      <div class="page-header">
  <h1>About Us</h1>
</div>

<div class="row row-imtelkom">

  <ol class="breadcrumb breadcumb-imtelkom">
    <li><a href="/">Home</a></li>
    <li class="active">About Us</li>
  </ol>

  <div class="col-md-12">
    <h3>About Us</h3>
    <p>
          </p>
    <p><p><strong>Telkom University Open Library</strong></p>
<br>
<p>Telkom University Open Library adalah brand untuk Unit Sumber Daya Keilmuan &amp; Perpustakaan (SDK &amp; Perpustakaan) Telkom University yang berada di bawah Wakil Rektor III. Telkom University Open Library memiliki visi "Menjadi leader dari pusat ilmu dan pengetahuan berbasis teknologi informasi"</p>
<br>
<p>Untuk mencapai visi tersebut, maka SDK &amp; Perpustakaan Telkom University mengusung misi sebagai berikut:</p>
<p>1. Berperan aktif dalam melakukan akuisisi pengetahuan, mengelola pengetahuan, dan berbagi pengetahuan.</p>
<p>2. Berperan aktif dalam meningkatkan minat baca dan tulis di masyarakat</p>
<p>3. Bekerja sama dengan semua instansi dalam pengembangan ilmu dan pengetahuan.</p>
<br>
<p>Telkom University Open Library memiliki lebih dari 80.500 judul koleksi dengan jumlah eksemplar 123.937 eksemplar, dan telah mendapatkan akreditasi "A" dari Perpustakaan Nasional RI pada tahun 2015. Sejak 2014 SDK &amp; Perpustakaan Telkom University telah mengembangkan konsep "open library" yang terdiri dari 3 (tiga) pokok pemikiran, yaitu:</p>
<p>1. Open untuk menerima semua jenis knowledge</p>
<p>2. Open untuk berbagi knowledge dengan knowledge management lain</p>
<p>3. Open untuk siapa pun yang ingin belajar</p>
<br>
<p>Dalam pelaksanaan operasionalnya, konsep "Open Library" didukung oleh pengembangan teknologi informasi sistem perpustakaan, untuk senantiasa meningkatkan layanan, database, dan koleksi perpustakaan. Telkom University juga ingin perpustakaannya dapat bermanfaat sebesar mungkin dan sebanyak mungkin bagi sivitas dan warga Telkom University serta masyarakat luas. Oleh karena itu, Telkom University Open Library menggagas juga kegiatan-kegiatan untuk menggerakkan literasi seperti "Telkom University Literacy Event", "Library Open Discussion", penggalangan donasi buku, program perpustakaan binaan di beberapa daerah terpencil, serta mengedukasi anti-plagiarisme.</p>
<br>
<ol> </ol>
<p><strong>Stuktur Organisasi</strong></p>
<br>
<?php $this->load->helper('html');?>
<p><?php echo img('assets/images/struktur_organisasi.png')?></p>
<br>
<p>SDK &amp; Perpustakaan Telkom University dikelola oleh seorang Kepala Bagian/ Unit yang membawahi dua urusan pekerjaan yaitu Urusan Pengembangan Bahan Pustaka dan Database (bertugas untuk merencanakan, melaksanakan, mengendalikan, dan mengembangkan database dan bahan pustaka) dan Urusan Administrasi dan Layanan Pustaka (bertugas untuk merencanakan, melaksanakan, mengendalikan dan mengelola administrasi dan layanan di perpustakaan) dengan jumlah staf perpustakaan sebanyak 12 orang terdiri dari pustakawan dan staf non-pustakawan.<br /><br /><br /><br /><strong><a href="/uploads/sk_logo_dan_sistem_openlibrary.pdf">SK Logo dan Sistem Open Library</a></strong></p>
<br>
<p><strong><br /></strong></p></p>
  </div>

</div>
    </div>

    <div class="footer">
      <div class="container">
<div class="row">
		
		<div class="col-md-12">
		
			<div style="background-color:#FFF;min-height:50px;border-radius:10px;color:#666;margin-bottom:12px;">
				<div class="box-title-small">INFOGRAFIS</div>
				<br>
				<div style="min-height:0px;text-align:center">
					<button style="margin:5px 10px" class="btn btn-warning" type="button" data-toggle="modal" data-target="#karyailmiah">Akses Online Karya Ilmiah</button>
					<button style="margin:5px 10px" class="btn btn-warning" type="button" data-toggle="modal" data-target="#ebook">Akses Online E-book</button>
					<button style="margin:5px 10px" class="btn btn-warning" type="button" data-toggle="modal" data-target="#booking">Reservasi Online</button>
					<button style="margin:5px 10px" class="btn btn-warning" type="button" data-toggle="modal" data-target="#rent">Peminjaman Buku</button>
					<button style="margin:5px 10px" class="btn btn-warning" type="button" data-toggle="modal" data-target="#return">Pengembalian Buku</button>
					<button style="margin:5px 10px" class="btn btn-warning" type="button" data-toggle="modal" data-target="#extension">Perpanjangan Buku Online</button> 
					<button style="margin:5px 10px" class="btn btn-warning" type="button" data-toggle="modal" data-target="#skbp">Prosedur Surat Keterangan Bebas Perpustakaan (SKBP)</button>  
					<button style="margin:5px 10px" class="btn btn-warning" type="button" data-toggle="modal" data-target="#upload">Upload Skripsi</button>   
					<button style="margin:5px 10px" class="btn btn-warning" type="button" data-toggle="modal" data-target="#approval">Approval Tugas Akhir</button>   
				</div>
				<br>
			</div> 
		</div>
		</div>
      <div class="row">
        <div class="col-md-4">
	
			<div style="background-color:#FFF;min-height:306px;border-radius:10px;margin-bottom:13px;">
				<div class="box-title" style="border-radius:10px 10px 0 0;">SOCIAL MEDIA</div>
				<table width="100%" > 
				<tr>
					<td align="center" >  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>    <div class="fb-like-box" data-href="http://www.facebook.com/TelkomOpenLibrary" 
      data-width="250" data-height="The pixel height of the plugin" data-colorscheme="light" 
      data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
	 <br><!--
	 <div style="background-color:#e2dcc5;padding:10px;"><img src="/images/instagram.jpg" width="30" title="Instagram"> <a href="https://instagram.com/openlibrary.telu/" target="_blank" style="color:#9d6459;font-weight:bold;">openlibrary.telu </a></div>-->
	<style>.ig-b- { display: inline-block; }
.ig-b- img { visibility: hidden; }
.ig-b-:hover { background-position: 0 -60px; } .ig-b-:active { background-position: 0 -120px; }
.ig-b-v-24 { width: 137px; height: 24px; background: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24.png) no-repeat 0 0; }
@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
.ig-b-v-24 { background-image: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24@2x.png); background-size: 160px 178px; } }</style>
<a href="https://www.instagram.com/openlibrary.telu/?ref=badge" class="ig-b- ig-b-v-24"><img src="//badges.instagram.com/static/images/ig-badge-view-24.png" alt="Instagram" /></a></td> 
				</tr>  
				</table>  
			</div>	  
			<!-- Modal -->
			<div id="askalibrarian" class="modal fade" role="dialog">
			  <div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content"> 
				  <div class="modal-body">
					<div   style="text-align:right;">
					<button type="button" class="btn btn-default" data-dismiss="modal">close</button>
					</div><br>
					<img src="<?php echo base_url(); ?>assets/images/askalibrarian.jpg" width="100%">
				  </div> 
				</div>

			  </div>
			</div>	
			
        </div>
		<div class="col-md-4" >
			<div style="background-color:#FFF;min-height:146px;border-radius:10px;margin-bottom:13px;">
				<div class="box-title" style="border-radius:10px 10px 0 0;">ASK A LIBRARIAN</div>
				<table width="100%"  style="cursor:pointer;" data-toggle="modal" data-target="#askalibrarian"> 
				<tr>
					<td align="center"><img src="<?php echo base_url(); ?>assets/images/asklibrarian_cover.jpg" width="70%"></td> 
				</tr>  
				</table>  
			</div>	  
			<div style="background-color:#FFF;min-height:146px;border-radius:10px;margin-bottom:0px">
				<div class="box-title" style="border-radius:10px 10px 0 0;">FAQ</div>
				<table width="100%"  style="cursor:pointer;" data-toggle="modal" data-target="#faq"> 
				<tr>
					<td align="center"><img src="<?php echo base_url(); ?>assets/images/faq_cover.jpg?rand=333424" width="70%"></td> 
				</tr>  
				</table>  
			</div>
	
			<!-- Modal -->
			
			<div id="faq" class="modal fade" role="dialog">
			  <div class="modal-dialog" style="width:80% !important">
		
				<!-- Modal content-->
		
				<div class="modal-content">
				  
				  <div class="modal-body">
					<div   style="text-align:right;">
					<button type="button" class="btn btn-default" data-dismiss="modal">close</button>
					</div><br>
					<img src="<?php echo base_url(); ?>assets/images/faq_detail.jpg" width="100%">
				  </div>
				   
				</div>

			  </div>
			</div>
			<!-- end modal -->
        </div>
	
		<div class="col-md-4" > 
			<div style="background-color:#FFF;min-height:70px;border-radius:10px;color:#666;margin-bottom:12px;">
				<div class="box-title-small">DISCUSSION ROOM RESERVATION</div>
				<table width="100%" height="40px" style="cursor:pointer;" onclick="window.open('https://openlibrary.telkomuniversity.ac.id/room','_blank')"> 
				<tr>
					
					<td align="center"><img src="<?php echo base_url(); ?>assets/images/discussion_room.jpg" width="36%"></td>
				</tr> 
				</table>  
			</div> 
			 <div style="background-color:#FFF;min-height:70px;border-radius:10px;color:#666;margin-bottom:13px;	">
				<div class="box-title-small">CHECK PLAGIARISM</div>
				<table width="100%" height="49px" style="cursor:pointer;" onclick="window.open('/home/information/id/30.html','_blank')"> 
				<tr>
					<td align="center"><img src="<?php echo base_url(); ?>assets/images/ithenticate-logo.png" width="55%"></td>
				</tr> 
				</table>
			</div> 
			<div style="background-color:#FFF;min-height:100px;border-radius:10px;color:#666;">
				<div class="box-title-small">E - CATALOGUE</div>
				<table width="100%" height="49px" style="cursor:pointer;" onclick="window.open('/home/information/id/53.html','_blank')"> 
				<tr>
					<td align="center"><img src="<?php echo base_url(); ?>assets/images/ecatalog.jpg" width="80%"></td>
				</tr> 
				</table> 
			</div> 
        </div> 
      </div>
	  
      <div class="row"> 
		
       <div class="col-md-6">
		
			<div style="background-color:#FFF;min-height:50px;border-radius:10px;color:#666;margin-bottom:12px;">
				<div class="box-title-small">VIDEO TESTIMONI</div>
				<br>
				<div style="text-align:center"><iframe width="95%" height="400" src="https://www.youtube.com/embed/o1vudud2ysY"></iframe></div>
				<br>
			</div> 
		</div>
        <div class="col-md-6">
		
			<div style="background-color:#FFF;min-height:50px;border-radius:10px;color:#666;margin-bottom:12px;">
				<div class="box-title-small">VIDEO PROFILE</div>
				<br>
				<div style="text-align:center"><iframe width="95%" height="400" src="https://www.youtube.com/embed/xeJXgiyzYW0"></iframe></div>
				<br>
			</div> 
		</div>
		
		
		<!-- Modal -->
			
			<div id="karyailmiah" class="modal fade" role="dialog">
			  <div class="modal-dialog" style="width:80% !important">
		
				<!-- Modal content-->
		
				<div class="modal-content">
				  
				  <div class="modal-body">
					<div   style="text-align:right;">
					<button type="button" class="btn btn-default" data-dismiss="modal">close</button>
					</div><br>
					<img src="<?php echo base_url(); ?>assets/images/akses_karya_ilmiah.jpeg" width="100%">
				  </div>
				   
				</div>

			  </div>
			</div>
			
			<div id="ebook" class="modal fade" role="dialog">
			  <div class="modal-dialog" style="width:80% !important">
		
				<!-- Modal content-->
		
				<div class="modal-content">
				  
				  <div class="modal-body">
					<div   style="text-align:right;">
					<button type="button" class="btn btn-default" data-dismiss="modal">close</button>
					</div><br>
					<img src="<?php echo base_url(); ?>assets/images/akses_ebook.jpg" width="100%">
				  </div>
				   
				</div>

			  </div>
			</div>
			
			<div id="booking" class="modal fade" role="dialog">
			  <div class="modal-dialog" style="width:80% !important">
		
				<!-- Modal content-->
		
				<div class="modal-content">
				  
				  <div class="modal-body">
					<div   style="text-align:right;">
					<button type="button" class="btn btn-default" data-dismiss="modal">close</button>
					</div><br>
					<img src="<?php echo base_url(); ?>assets/images/reservasi_ruangan.jpg" width="100%">
				  </div>
				   
				</div>

			  </div>
			</div>
			
			<div id="rent" class="modal fade" role="dialog">
			  <div class="modal-dialog" style="width:80% !important">
		
				<!-- Modal content-->
		
				<div class="modal-content">
				  
				  <div class="modal-body">
					<div   style="text-align:right;">
					<button type="button" class="btn btn-default" data-dismiss="modal">close</button>
					</div><br>
					<img src="<?php echo base_url(); ?>assets/images/peminjaman.jpg" width="100%">
				  </div>
				   
				</div>

			  </div>
			</div>
			
			<div id="return" class="modal fade" role="dialog">
			  <div class="modal-dialog" style="width:80% !important">
		
				<!-- Modal content-->
		
				<div class="modal-content">
				  
				  <div class="modal-body">
					<div   style="text-align:right;">
					<button type="button" class="btn btn-default" data-dismiss="modal">close</button>
					</div><br>
					<img src="<?php echo base_url(); ?>assets/images/pengembalian.jpg" width="100%">
				  </div>
				   
				</div>

			  </div>
			</div>
			
			<div id="extension" class="modal fade" role="dialog">
			  <div class="modal-dialog" style="width:80% !important">
		
				<!-- Modal content-->
		
				<div class="modal-content">
				  
				  <div class="modal-body">
					<div   style="text-align:right;">
					<button type="button" class="btn btn-default" data-dismiss="modal">close</button>
					</div><br>
					<img src="<?php echo base_url(); ?>assets/images/perpanjangan_online.jpg" width="100%">
				  </div>
				   
				</div>

			  </div>
			</div>
			
			<div id="skbp" class="modal fade" role="dialog">
			  <div class="modal-dialog" style="width:80% !important">
		
				<!-- Modal content-->
		
				<div class="modal-content">
				  
				  <div class="modal-body">
					<div   style="text-align:right;">
					<button type="button" class="btn btn-default" data-dismiss="modal">close</button>
					</div><br>
					<img src="<?php echo base_url(); ?>assets/images/prosedur_skbp.jpg" width="100%">
				  </div>
				   
				</div>

			  </div>
			</div>
			
			<div id="upload" class="modal fade" role="dialog">
			  <div class="modal-dialog" style="width:80% !important">
		
				<!-- Modal content-->
		
				<div class="modal-content">
				  
				  <div class="modal-body">
					<div   style="text-align:right;">
					<button type="button" class="btn btn-default" data-dismiss="modal">close</button>
					</div><br>
					<img src="<?php echo base_url(); ?>assets/images/upload_skripsi.jpg" width="100%"><br><br>
					<img src="<?php echo base_url(); ?>assets/images/upload_skripsi_2.jpg" width="100%"><br><br>
					<img src="<?php echo base_url(); ?>assets/images/upload_skripsi_3.jpg" width="100%">
				  </div>
				   
				</div>

			  </div>
			</div>
			
			<div id="approval" class="modal fade" role="dialog">
			  <div class="modal-dialog" style="width:80% !important">
		
				<!-- Modal content-->
		
				<div class="modal-content">
				  
				  <div class="modal-body">
					<div   style="text-align:right;">
					<button type="button" class="btn btn-default" data-dismiss="modal">close</button>
					</div><br>
					<img src="<?php echo base_url(); ?>assets/images/aprroval_tugas_akhir.jpg" width="100%">
				  </div>
				   
				</div>

			  </div>
			</div>
			<!-- end modal -->
	</div>
	 
<div id="status">
</div>


      <div class="row footer-location-imtelkom">
        <hr />
<div class="col-md-12 col-sm-12 col-lg-12">
  <h4>Lokasi Perpustakaan</h4>
</div>

<div class="col-md-4 col-sm-6 col-lg-3">
  <p class="basic-contact">
    <span>Gedung Manterawu Lantai 5</span><br/>
    <small>
      Jl. Telekomunikasi - Ters. Buah Batu<br/>Bandung 40257 Indonesia<br/>
            <span class="glyphicon glyphicon-phone-alt"></span> +6222 756 5929<br/>
                  <span class="glyphicon glyphicon-print"></span> +6222 756 5929<br/>
                  <span class="glyphicon glyphicon-envelope"></span> library@telkomuniversity.ac.id<br/>
          </small>
  </p>
      <p class="operational-hours">Waktu operasional</p>
  
  <table>
            <tr>
          <td>Senin - Jumat<br/></td>
          <td>08:00 - 19:00</td>
        </tr>
              <tr>
          <td>Sabtu<br/></td>
          <td>08:00 - 13:00</td>
        </tr>
                      </table>
    </div>
<div class="col-md-4 col-sm-6 col-lg-3">
  <p class="basic-contact">
    <span>Kampus Geger Kalong</span><br/>
    <small>
      Jl. Geger Kalong No. 1 <br/>Bandung Indonesia<br/>
            <span class="glyphicon glyphicon-phone-alt"></span> -<br/>
                  <span class="glyphicon glyphicon-print"></span> +6222 756 5929<br/>
                  <span class="glyphicon glyphicon-envelope"></span> library@telkomuniversity.ac.id<br/>
          </small>
  </p>
      <p class="operational-hours">Waktu operasional</p>
  
  <table>
            <tr>
          <td>Senin - Jumat<br/></td>
          <td>08:00 - 20:00</td>
        </tr>
              <tr>
          <td>Sabtu<br/></td>
          <td>08:00 - 13.00</td>
        </tr>
                      </table>
    </div>


<div class="col-md-4 col-sm-6 col-lg-3">
  <p class="basic-contact">
    <p><a href="http://www.telkomuniversity.ac.id"><img src="https://openlibrary.telkomuniversity.ac.id/images/telkom-university.png" width="60%"></a></p>
	<h4>Telkom University Library</h4>
	<p>Copyright © 2011 - Telkom Open Library</p>
	<p><span></span> <a href="http://www.facebook.com/TelkomOpenLibrary">Telkom Open Library</a></p>
    <small> 
    </small>
  </p>  
</div>

      </div>

      <div class="row">
        <div class="col-md-12">
          <p><br /><img src="https://licensebuttons.net/l/by-nc/4.0/88x31.png"></p>
        </div>
      </div>

      </div> 
    </div>
    
	 <div id="modal-register" class="modal" tabindex="-1" role="dialog" aria-labelledby="modal-register" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="<?php echo site_url('beranda/register');?>" id="form-register"  >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="modal-register-title">Daftar Sebagai Anggota</h4>
        </div>
        <div class="modal-body">
         <p>Daftar Sebagai anggota untuk dapat mengakses koleksi flippingbook Tugas Akhir kami</p>
			  <div class="form-group" id="notif" style="display:none"><span style="color:green;">Your account has been made. <br />  Please verify it by clicking the activation link that has been send to your email.</span>
			  </div>  
			  <div class="form-group">
				<label for="inputTitle">Email (wajib menggunakan email institusi)</label>
				<input type="email" name="email" class="form-control" id="C_NIP" placeholder="Email"required> 
			  </div>  
			  <div class="form-group">
				<label for="inputTitle">Password</label>
				<input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
			  </div>
			  <div class="form-group">
				<label for="inputTitle">Nama Lengkap</label>
				<input type="text" name="nama_lengkap" class="form-control" id="nama" placeholder="Nama" required>
			  </div>  
			  <div class="form-group">
				<label for="inputTitle">Nama Institusi</label>
				<input type="text" name="nama_instutisi" class="form-control" id="Institusi" placeholder="Nama Institusi" required>
			  </div>
			  <div class="form-group">
				<label for="inputTitle">Handphone</label>
				<input type="text" name="no_hp" class="form-control" id="NO_HP" placeholder="Handphone" required>
			  </div>  
			  <div class="form-group">
				<h1>
			  </div>  
        </div>
        <div class="modal-footer">
			<button type="button" class="btn btn-default btn-embossed" id="close">Batal</button>
			<button type="submit" class="btn btn-primary btn-embossed "  >Daftar</button>
        </div>
      </form>
    </div>  
  </div>
</div>
    
  </body>
</html>
