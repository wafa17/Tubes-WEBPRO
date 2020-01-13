<!DOCTYPE html>
<html>
  <head>
  
	<!-- <script src="/js/analytics.js"></script> -->
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
    <title>Open Library - Universitas Telkom</title>
    <link rel="shortcut icon" href="<?php echo base_url('assets/image/favicon.ico')?>" />
        <meta name="title" content="OpenLibrary - Telkom University" />
<meta name="description" content="perpustakaan digital universitas telkom. disini tersedia informasi seluruh koleksi pustaka yang dimiliki universitas telkom yang terbuka dan dapat dipinjam oleh publik" />
<meta name="keywords" content="perpustakaan telkom, perpustakaan universitas telkom, telkom university, universitas telkom, perpustakaan" />
<meta name="language" content="id" />
<meta name="robots" content="index, follow" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- ini sesuaiin sama foldernya disimpan dimana -->
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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Beranda <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo site_url('beranda/loadberanda2')?>">Beranda</a></li>
                <li><a href="<?php echo site_url('beranda/loadfullsite')?>">Full site</a></li>
              </ul>  
                            
            </li>
            <li id="home_catalog"><a href="/home/catalog.html">Katalog</a></li> 
			 <li id="home_eproceeding"><a target="_blank" href="http://libraryeproceeding.telkomuniversity.ac.id">E-Publications</a></li>
			 <li id="home_aboutus"><a href="<?php echo site_url('beranda/loadaboutus');?>">About Us</a></li>
           
			 <li id="home_gallery"><a href="/home/gallery.html">Gallery</a></li>
              </ul>  </li>
			
          </ul>

                  <div class="navbar-right">
            <p class="navbar-text hidden-xs hidden-sm" ><?php echo $this->mlogin->getusername();?></p>
            <a class="navbar-btn btn btn-danger" href="<?php echo site_url('beranda/logout')?>">Keluar</a>
          </div>
         </div><!--/.nav-collapse -->
        </div>
      </div>

<div id="modal-front" class="modal" tabindex="-1" role="dialog" aria-labelledby="modal-filter" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="home/catalog">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="modal-filter-title">Pencarian Detil Katalog</h4>
        </div>
        <div class="modal-body">
         <!-- <p>Gunakan * untuk melakukan pencarian diperluas. Misalkan ingin mencari katalog dengan judul yang diawali dengan kata <i>analisis</i>, gunakan keyword <i>analisis*</i> pada Judul.</p>--> 
          <div class="form-group">
            <label for="inputTitle">Jenis</label>
            <select name="search[type]" class="form-control" id="search-type" placeholder="Pilih jenis katalog">
              <option value="">Pilih jenis katalog</option>
                            <option value="9" >Artikel - Restricted Use</option>
                            <option value="29" >Bahan Ajar</option>
                            <option value="59" >Buku - Circulation (BI Corner)</option>
                            <option value="1" >Buku - Circulation (Dapat Dipinjam)</option>
                            <option value="21" >Buku - Elektronik (E-Book)</option>
                            <option value="2" >Buku - Reference (Hanya Baca di Tempat)</option>
                            <option value="3" >Buku - Restricted Use (Khusus Untuk Dosen)</option>
                            <option value="41" >Buku History Of Indonesia - Reference</option>
                            <option value="33" >Buku Rekreatif - Circulation</option>
                            <option value="40" >Buku Softskill - Circulation</option>
                            <option value="10" >Case Studies</option>
                            <option value="37" >Case Study Mahasiswa</option>
                            <option value="13" >CD - Reference</option>
                            <option value="22" >Disertasi - Reference</option>
                            <option value="15" >DVD - Reference </option>
                            <option value="52" >E- Article Staf</option>
                            <option value="24" >E-Article</option>
                            <option value="47" >e-Article Paper Review</option>
                            <option value="51" >e-Laporan Seminar/Pelatihan/Workshop TPA</option>
                            <option value="44" >Jurnal Internasional - Reference</option>
                            <option value="42" >Jurnal Nasional - Reference</option>
                            <option value="43" >Jurnal Terakreditasi DIKTI - Reference</option>
                            <option value="4" >Karya Ilmiah - Skripsi (S1) - Reference</option>
                            <option value="6" >Karya Ilmiah - TA (D3) - Reference</option>
                            <option value="5" >Karya Ilmiah - Thesis (S2) - Reference</option>
                            <option value="17" >Kaset - Reference</option>
                            <option value="7" >Laporan Magang - Reference</option>
                            <option value="12" >Majalah - Reference</option>
                            <option value="45" >Majalah Ilmiah - Reference</option>
                            <option value="46" >Majalah Populer - Reference</option>
                            <option value="50" >Modul Praktikum</option>
                            <option value="49" >Modul Praktikum ( Electronic )</option>
                            <option value="28" >Proceeding</option>
                            <option value="25" >Proceeding ( Electronic )</option>
                            <option value="23" >Research Report - Reference</option>
                            <option value="53" >Sharing Knowledge Material</option>
                            <option value="11" >Teaching Note - Restricted Use</option>
                            <option value="56" >VCD-Reference</option>
                          </select>
          </div>
          <div class="form-group">
            <label for="inputTitle">No. Katalog</label>
            <input type="text" name="search[number]" value="" class="form-control" id="search-number" placeholder="No katalog">
          </div>  

          <div class="form-group">
            <label for="inputTitle">Judul</label>
            <input type="text" name="search[title]" value="" class="form-control" id="search-title" placeholder="Judul katalog">
          </div>  

          <div class="form-group">
            <label for="inputTitle">Pengarang</label>
            <input type="text" name="search[author]" value="" class="form-control" id="search-author" placeholder="Nama pengarang katalog">
          </div>  

          <div class="form-group">
            <label for="inputTitle">Penerbit</label>
            <input type="text" name="search[publisher]"  value="" class="form-control" id="search-publisher" placeholder="Penerbit katalog">
          </div>  
        
          <div class="form-group">
            <label for="inputTitle">Penyunting/Pembimbing</label>
            <input type="text" name="search[editor]"  value="" class="form-control" id="search-editor" placeholder="Nama penyunting katalog / nama pembimbing">
          </div>  

          <div class="form-group">
            <label for="inputTitle">Subjek</label>
            <input type="text" name="search[subject]"  value="" class="form-control" id="search-subject" placeholder="Subjek katalog">
          </div>

          <div class="form-group">
            <label for="inputTitle">Kode Klasifikasi</label>
            <input type="text" name="search[classification]"  value="" class="form-control" id="search-classification" placeholder="Kode klasifikasi katalaog">
          </div>  

          <div class="form-group"> 
            <label for="inputTitle">Lokasi</label>
            <select name="search[location]" class="form-control" id="search-location" placeholder="Pilih lokasi">
              <option value="">Pilih lokasi</option>
                            <option value="6" >Gedung FIK Lantai 4</option>
                            <option value="5" >Gedung FIT Lantai 1</option>
                            <option value="7" >Gedung FIT Lantai 1 (Dalam)</option>
                            <option value="1" >Gedung FKB Lantai 4</option>
                            <option value="4" >Gedung FKB Lantai 4 (Dalam)</option>
                            <option value="8" >Gedung LC Lantai 3</option>
                            <option value="9" >Gedung Manterawu Lantai 5</option>
                            <option value="2" >Kampus Geger Kalong</option>
                            <option value="3" >Kampus Setiabudi</option>
                          </select>
          </div>  
        
          
		  <div class="form-group">
            <label for="inputTitle">Program Studi</label>
            <select name="search[course]" class="form-control" id="search-course" placeholder="Pilih Program Studi"  onchange="getval(this)">
				<option value="">Pilih Program Studi</option>
                            <option value="57402" >D3 Komputerisasi Akuntansi</option>
                            <option value="57401" >D3 Manajemen Informatika</option>
                            <option value="61404" >D3 Manajemen Pemasaran</option>
                            <option value="93402" >D3 Perhotelan</option>
                            <option value="55401" >D3 Teknik Informatika</option>
                            <option value="56402" >D3 Teknik Komputer</option>
                            <option value="20402" >D3 Teknik Telekomunikasi</option>
                            <option value="57403" >D4 Sistem Multimedia</option>
                            <option value="62201" >S1 Akuntansi</option>
                            <option value="90221" >S1 Desain Interior</option>
                            <option value="90241" >S1 Desain Komunikasi Visual</option>
                            <option value="90231" >S1 Desain Produk</option>
                            <option value="61200" >S1 ICT International</option>
                            <option value="63211" >S1 Ilmu Administrasi Bisnis</option>
                            <option value="59202" >S1 Ilmu Komputasi</option>
                            <option value="70201" >S1 Ilmu Komunikasi</option>
                            <option value="90211" >S1 Kriya Tekstil dan Mode</option>
                            <option value="61201" >S1 Manajemen (Manajemen Bisnis Telekomunikasi &amp; Informatika)</option>
                            <option value="90201" >S1 Seni Rupa Murni</option>
                            <option value="57201" >S1 Sistem Informasi</option>
                            <option value="56201" >S1 Sistem Komputer</option>
                            <option value="20201" >S1 Teknik Elektro</option>
                            <option value="30201" >S1 Teknik Fisika</option>
                            <option value="26201" >S1 Teknik Industri</option>
                            <option value="55201" >S1 Teknik Informatika</option>
                            <option value="20202" >S1 Teknik Telekomunikasi</option>
                            <option value="20101" >S2 Magister Elektro Komunikasi</option>
                            <option value="61101" >S2 Magister Manajemen</option>
                            <option value="55101" >S2 Magister Teknik Informatika</option>
                          </select>
          </div> 
        
		   <div class="form-group">
            <label for="inputTitle">Mata Kuliah (Silahkan Pilih Program Studi terlebih dahulu)</label>
            <select name="search[mk]" class="form-control" id="search-mk" placeholder="Pilih Mata Kuliah">
				<option value="">Pilih Mata Kuliah</option>
                          </select>
          </div> 
        
          <div class="form-group">
            <label for="inputTitle">Tanggal Masuk</label> <br/>
            dari: <br/>
            <select name="search[entrance][from][day]" class="form-control" style="width: 32.5%;display: inline-block;" id="search-entrance-from-day">
              <option value=""></option>
                            <option value="01" >01</option>
                            <option value="02" >02</option>
                            <option value="03" >03</option>
                            <option value="04" >04</option>
                            <option value="05" >05</option>
                            <option value="06" >06</option>
                            <option value="07" >07</option>
                            <option value="08" >08</option>
                            <option value="09" >09</option>
                            <option value="10" >10</option>
                            <option value="11" >11</option>
                            <option value="12" >12</option>
                            <option value="13" >13</option>
                            <option value="14" >14</option>
                            <option value="15" >15</option>
                            <option value="16" >16</option>
                            <option value="17" >17</option>
                            <option value="18" >18</option>
                            <option value="19" >19</option>
                            <option value="20" >20</option>
                            <option value="21" >21</option>
                            <option value="22" >22</option>
                            <option value="23" >23</option>
                            <option value="24" >24</option>
                            <option value="25" >25</option>
                            <option value="26" >26</option>
                            <option value="27" >27</option>
                            <option value="28" >28</option>
                            <option value="29" >29</option>
                            <option value="30" >30</option>
                            <option value="31" >31</option>
                          </select> 
            <select name="search[entrance][from][month]" class="form-control" style="width: 32.5%;display: inline-block;" id="search-entrance-from-month">
              <option value=""></option>
                            <option value="01" >01</option>
                            <option value="02" >02</option>
                            <option value="03" >03</option>
                            <option value="04" >04</option>
                            <option value="05" >05</option>
                            <option value="06" >06</option>
                            <option value="07" >07</option>
                            <option value="08" >08</option>
                            <option value="09" >09</option>
                            <option value="10" >10</option>
                            <option value="11" >11</option>
                            <option value="12" >12</option>
                          </select> 
            <select name="search[entrance][from][year]" class="form-control" style="width: 32.5%;display: inline-block;" id="search-entrance-from-year">
              <option value=""></option>
                            <option value="1969" >1969</option>
                            <option value="1970" >1970</option>
                            <option value="1971" >1971</option>
                            <option value="1972" >1972</option>
                            <option value="1973" >1973</option>
                            <option value="1974" >1974</option>
                            <option value="1975" >1975</option>
                            <option value="1976" >1976</option>
                            <option value="1977" >1977</option>
                            <option value="1978" >1978</option>
                            <option value="1979" >1979</option>
                            <option value="1980" >1980</option>
                            <option value="1981" >1981</option>
                            <option value="1982" >1982</option>
                            <option value="1983" >1983</option>
                            <option value="1984" >1984</option>
                            <option value="1985" >1985</option>
                            <option value="1986" >1986</option>
                            <option value="1987" >1987</option>
                            <option value="1988" >1988</option>
                            <option value="1989" >1989</option>
                            <option value="1990" >1990</option>
                            <option value="1991" >1991</option>
                            <option value="1992" >1992</option>
                            <option value="1993" >1993</option>
                            <option value="1994" >1994</option>
                            <option value="1995" >1995</option>
                            <option value="1996" >1996</option>
                            <option value="1997" >1997</option>
                            <option value="1998" >1998</option>
                            <option value="1999" >1999</option>
                            <option value="2000" >2000</option>
                            <option value="2001" >2001</option>
                            <option value="2002" >2002</option>
                            <option value="2003" >2003</option>
                            <option value="2004" >2004</option>
                            <option value="2005" >2005</option>
                            <option value="2006" >2006</option>
                            <option value="2007" >2007</option>
                            <option value="2008" >2008</option>
                            <option value="2009" >2009</option>
                            <option value="2010" >2010</option>
                            <option value="2011" >2011</option>
                            <option value="2012" >2012</option>
                            <option value="2013" >2013</option>
                            <option value="2014" >2014</option>
                            <option value="2015" >2015</option>
                            <option value="2016" >2016</option>
                            <option value="2017" >2017</option>
                            <option value="2018" >2018</option>
                            <option value="2019" >2019</option>
                          </select> <br/>
            sampai: <br/>
            <select name="search[entrance][to][day]" class="form-control" style="width: 32.5%;display: inline-block;" id="search-entrance-to-day">
              <option value=""></option>
                            <option value="01" >01</option>
                            <option value="02" >02</option>
                            <option value="03" >03</option>
                            <option value="04" >04</option>
                            <option value="05" >05</option>
                            <option value="06" >06</option>
                            <option value="07" >07</option>
                            <option value="08" >08</option>
                            <option value="09" >09</option>
                            <option value="10" >10</option>
                            <option value="11" >11</option>
                            <option value="12" >12</option>
                            <option value="13" >13</option>
                            <option value="14" >14</option>
                            <option value="15" >15</option>
                            <option value="16" >16</option>
                            <option value="17" >17</option>
                            <option value="18" >18</option>
                            <option value="19" >19</option>
                            <option value="20" >20</option>
                            <option value="21" >21</option>
                            <option value="22" >22</option>
                            <option value="23" >23</option>
                            <option value="24" >24</option>
                            <option value="25" >25</option>
                            <option value="26" >26</option>
                            <option value="27" >27</option>
                            <option value="28" >28</option>
                            <option value="29" >29</option>
                            <option value="30" >30</option>
                            <option value="31" >31</option>
                          </select> 
            <select name="search[entrance][to][month]" class="form-control" style="width: 32.5%;display: inline-block;" id="search-entrance-to-month">
              <option value=""></option>
                            <option value="01" >01</option>
                            <option value="02" >02</option>
                            <option value="03" >03</option>
                            <option value="04" >04</option>
                            <option value="05" >05</option>
                            <option value="06" >06</option>
                            <option value="07" >07</option>
                            <option value="08" >08</option>
                            <option value="09" >09</option>
                            <option value="10" >10</option>
                            <option value="11" >11</option>
                            <option value="12" >12</option>
                          </select> 
            <select name="search[entrance][to][year]" class="form-control" style="width: 32.5%;display: inline-block;" id="search-entrance-to-year">
              <option value=""></option>
                            <option value="1969"  >1969</option>
                            <option value="1970"  >1970</option>
                            <option value="1971"  >1971</option>
                            <option value="1972"  >1972</option>
                            <option value="1973"  >1973</option>
                            <option value="1974"  >1974</option>
                            <option value="1975"  >1975</option>
                            <option value="1976"  >1976</option>
                            <option value="1977"  >1977</option>
                            <option value="1978"  >1978</option>
                            <option value="1979"  >1979</option>
                            <option value="1980"  >1980</option>
                            <option value="1981"  >1981</option>
                            <option value="1982"  >1982</option>
                            <option value="1983"  >1983</option>
                            <option value="1984"  >1984</option>
                            <option value="1985"  >1985</option>
                            <option value="1986"  >1986</option>
                            <option value="1987"  >1987</option>
                            <option value="1988"  >1988</option>
                            <option value="1989"  >1989</option>
                            <option value="1990"  >1990</option>
                            <option value="1991"  >1991</option>
                            <option value="1992"  >1992</option>
                            <option value="1993"  >1993</option>
                            <option value="1994"  >1994</option>
                            <option value="1995"  >1995</option>
                            <option value="1996"  >1996</option>
                            <option value="1997"  >1997</option>
                            <option value="1998"  >1998</option>
                            <option value="1999"  >1999</option>
                            <option value="2000"  >2000</option>
                            <option value="2001"  >2001</option>
                            <option value="2002"  >2002</option>
                            <option value="2003"  >2003</option>
                            <option value="2004"  >2004</option>
                            <option value="2005"  >2005</option>
                            <option value="2006"  >2006</option>
                            <option value="2007"  >2007</option>
                            <option value="2008"  >2008</option>
                            <option value="2009"  >2009</option>
                            <option value="2010"  >2010</option>
                            <option value="2011"  >2011</option>
                            <option value="2012"  >2012</option>
                            <option value="2013"  >2013</option>
                            <option value="2014"  >2014</option>
                            <option value="2015"  >2015</option>
                            <option value="2016"  >2016</option>
                            <option value="2017"  >2017</option>
                            <option value="2018"  >2018</option>
                            <option value="2019"  >2019</option>
                          </select>
          </div>  
        </div>
        <div class="modal-footer">
          <a class="btn btn-danger" href="/home/catalog.html?clear">Bersihkan</a>
          <input type="submit" name="submit" class="btn btn-success" value="Cari"/>
        </div>
      </form>
    </div>  
  </div>
</div> 
<div class="row">
  <div class="page-header page-header-imtelkom">
      <div class="clearfix"></div>
    <h3 class="col-md-6 col-sm-8"  style="margin: 0px;height:40px;padding-top:10px;margin-bottom:25px;"><strong>Katalog Terbaru</strong>
      <small><strong>132.258</strong> koleksi dari <strong>85.639</strong> judul telah tersedia!</small>
    </h3>
    <div class="col-md-6 col-sm-4">
     
    
	  <form method="post" action="home/catalog">
          <div class="input-group" style="margin: 0px;">
                        <input  style="height:40px;" type="text" name="search[keyword]" placeholder="Search" class="form-control" value="" />
            <div class="input-group-btn">
              <input  style="height:40px;" type="submit" name="submit" class="btn btn-success" value="Search"/>

              <button  style="height:40px;" type="button" class="btn btn-primary dropdown-toggle" id="toggle-popover" data-toggle="modal" data-target="#modal-front">
              Advanced Search				<span class="caret"></span>
                <span class="sr-only">Detailed Search</span>
              </button>
            </div>
          </div>
        </form>
    </div>  
    <div class="clearfix"></div>
  </div>
</div>

<div class="row">
  <div id="carousel-latest-catalog" class="carousel slide" rel="carousel">
    <div class="carousel-inner">                      <div class="item active">
              <div class="col-md-2 col-sm-4 col-xs-6">
          <a class="thumbnail-imtelkom" href="/home/catalog/id/149322/slug/seri-pecah-model-terampil-merancang-pola-busana-wanita-dengan-sistem-metrik.html">
            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="glyphicon glyphicon-calendar"></span>
                08/04 
              </span>
                            <img width="100%" title="Seri Pecah Model: Terampil Merancang Pola Busana Wanita Dengan Sistem Metrik" src="https://openlibrary.telkomuniversity.ac.id/uploads/book/cover/default.jpg">
              <div class="caption">
                Seri Pecah Model: Terampil Merancang..              </div>
            </div>
          </a>
        </div>
                              <div class="col-md-2 col-sm-4 col-xs-6">
          <a class="thumbnail-imtelkom" href="/home/catalog/id/149349/slug/tata-atur-pengantar-merancang-arsitektur.html">
            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="glyphicon glyphicon-calendar"></span>
                08/04 
              </span>
                            <img width="100%" title="Tata Atur: Pengantar Merancang Arsitektur" src="https://openlibrary.telkomuniversity.ac.id/uploads/book/cover/19.01.327.jpg">
              <div class="caption">
                Tata Atur: Pengantar Merancang Arsitektur              </div>
            </div>
          </a>
        </div>
                              <div class="col-md-2 col-sm-4 col-xs-6">
          <a class="thumbnail-imtelkom" href="/home/catalog/id/149258/slug/filsafat-ilmu.html">
            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="glyphicon glyphicon-calendar"></span>
                04/04 
              </span>
                            <img width="100%" title="Filsafat Ilmu" src="https://openlibrary.telkomuniversity.ac.id/uploads/book/cover/19.01.325.jpg">
              <div class="caption">
                Filsafat Ilmu              </div>
            </div>
          </a>
        </div>
                              <div class="col-md-2 col-sm-4 col-xs-6">
          <a class="thumbnail-imtelkom" href="/home/catalog/id/149255/slug/mahir-statistik-parametrik-konsep-dasar-dan-aplikasi-dengan-spss.html">
            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="glyphicon glyphicon-calendar"></span>
                04/04 
              </span>
                            <img width="100%" title="Mahir Statistik Parametrik: Konsep Dasar dan Aplikasi Dengan SPSS" src="https://openlibrary.telkomuniversity.ac.id/uploads/book/cover/19.01.324.jpg">
              <div class="caption">
                Mahir Statistik Parametrik: Konsep Dasar..              </div>
            </div>
          </a>
        </div>
                              <div class="col-md-2 col-sm-4 col-xs-6">
          <a class="thumbnail-imtelkom" href="/home/catalog/id/149252/slug/athirah.html">
            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="glyphicon glyphicon-calendar"></span>
                02/04 
              </span>
                            <img width="100%" title="Athirah" src="https://openlibrary.telkomuniversity.ac.id/uploads/book/cover/19.01.322.jpg">
              <div class="caption">
                Athirah              </div>
            </div>
          </a>
        </div>
                              <div class="col-md-2 col-sm-4 col-xs-6">
          <a class="thumbnail-imtelkom" href="/home/catalog/id/149253/slug/linier-algebra-and-its-applications-3-e.html">
            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="glyphicon glyphicon-calendar"></span>
                02/04 
              </span>
                            <img width="100%" title="Linier Algebra and its Applications, -3/E" src="https://openlibrary.telkomuniversity.ac.id/uploads/book/cover/19.01.323.jpg">
              <div class="caption">
                Linier Algebra and its Applications,..              </div>
            </div>
          </a>
        </div>
            </div>
                            <div class="item">
              <div class="col-md-2 col-sm-4 col-xs-6">
          <a class="thumbnail-imtelkom" href="/home/catalog/id/149251/slug/the-international-encyclopedia-of-surrealism-vol-1-movements.html">
            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="glyphicon glyphicon-calendar"></span>
                02/04 
              </span>
                            <img width="100%" title="The International Encyclopedia of Surrealism, Vol 1, Movements" src="https://openlibrary.telkomuniversity.ac.id/uploads/book/cover/default.jpg">
              <div class="caption">
                The International Encyclopedia of Surrealism,..              </div>
            </div>
          </a>
        </div>
                              <div class="col-md-2 col-sm-4 col-xs-6">
          <a class="thumbnail-imtelkom" href="/home/catalog/id/149249/slug/the-international-encyclopedia-of-surrealism-vol-2-surrealists-a-l.html">
            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="glyphicon glyphicon-calendar"></span>
                02/04 
              </span>
                            <img width="100%" title="The International Encyclopedia of Surrealism, Vol 2, Surrealists A-L" src="https://openlibrary.telkomuniversity.ac.id/uploads/book/cover/default.jpg">
              <div class="caption">
                The International Encyclopedia of Surrealism,..              </div>
            </div>
          </a>
        </div>
                              <div class="col-md-2 col-sm-4 col-xs-6">
          <a class="thumbnail-imtelkom" href="/home/catalog/id/149250/slug/the-international-encyclopedia-of-surrealism-vol-3-surrealists-m-z.html">
            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="glyphicon glyphicon-calendar"></span>
                02/04 
              </span>
                            <img width="100%" title="The International Encyclopedia of Surrealism, Vol 3, Surrealists M-Z" src="https://openlibrary.telkomuniversity.ac.id/uploads/book/cover/default.jpg">
              <div class="caption">
                The International Encyclopedia of Surrealism,..              </div>
            </div>
          </a>
        </div>
                              <div class="col-md-2 col-sm-4 col-xs-6">
          <a class="thumbnail-imtelkom" href="/home/catalog/id/149187/slug/the-mystery-of-the-blue-train.html">
            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="glyphicon glyphicon-calendar"></span>
                29/03 
              </span>
                            <img width="100%" title="The Mystery of The Blue Train" src="https://openlibrary.telkomuniversity.ac.id/uploads/book/cover/default.jpg">
              <div class="caption">
                The Mystery of The Blue..              </div>
            </div>
          </a>
        </div>
                              <div class="col-md-2 col-sm-4 col-xs-6">
          <a class="thumbnail-imtelkom" href="/home/catalog/id/149088/slug/bum-desa-badan-usaha-milik-desa.html">
            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="glyphicon glyphicon-calendar"></span>
                27/03 
              </span>
                            <img width="100%" title="Bum Desa : Badan Usaha Milik Desa" src="https://openlibrary.telkomuniversity.ac.id/uploads/book/cover/19.01.316.jpg">
              <div class="caption">
                Bum Desa : Badan Usaha..              </div>
            </div>
          </a>
        </div>
                              <div class="col-md-2 col-sm-4 col-xs-6">
          <a class="thumbnail-imtelkom" href="/home/catalog/id/149087/slug/contemporary-business-pengantar-bisnis-kontemporer-edisi-13-buku-2.html">
            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="glyphicon glyphicon-calendar"></span>
                27/03 
              </span>
                            <img width="100%" title="Contemporary Business Pengantar bisnis kontemporer : Edisi 13. Buku 2" src="https://openlibrary.telkomuniversity.ac.id/uploads/book/cover/19.01.315.jpg">
              <div class="caption">
                Contemporary Business Pengantar bisnis kontemporer..              </div>
            </div>
          </a>
        </div>
            </div>
                            <div class="item">
              <div class="col-md-2 col-sm-4 col-xs-6">
          <a class="thumbnail-imtelkom" href="/home/catalog/id/149089/slug/notes-on-the-tides-of-technology-in-turbulent-times-menemukan-siasat-bersilancar-mengikuti-arus-perubahan-zaman.html">
            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="glyphicon glyphicon-calendar"></span>
                27/03 
              </span>
                            <img width="100%" title="Notes On The Tides of Technology in Turbulent Times : Menemukan Siasat, Bersilancar Mengikuti Arus Perubahan Zaman" src="https://openlibrary.telkomuniversity.ac.id/uploads/book/cover/19.01.317.jpg">
              <div class="caption">
                Notes On The Tides of..              </div>
            </div>
          </a>
        </div>
                              <div class="col-md-2 col-sm-4 col-xs-6">
          <a class="thumbnail-imtelkom" href="/home/catalog/id/149071/slug/teori-dan-algoritma-graph-dengan-bahasa-java.html">
            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="glyphicon glyphicon-calendar"></span>
                27/03 
              </span>
                            <img width="100%" title="Teori dan Algoritma Graph dengan Bahasa Java" src="https://openlibrary.telkomuniversity.ac.id/uploads/book/cover/19.01.312.jpg">
              <div class="caption">
                Teori dan Algoritma Graph dengan..              </div>
            </div>
          </a>
        </div>
                              <div class="col-md-2 col-sm-4 col-xs-6">
          <a class="thumbnail-imtelkom" href="/home/catalog/id/149074/slug/transparansi-penyidik-polri-dalam-sistem-peradilan-pidana-di-indonesia.html">
            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="glyphicon glyphicon-calendar"></span>
                27/03 
              </span>
                            <img width="100%" title="Transparansi Penyidik POLRI dalam Sistem Peradilan Pidana di Indonesia" src="https://openlibrary.telkomuniversity.ac.id/uploads/book/cover/19.01.313.jpg">
              <div class="caption">
                Transparansi Penyidik POLRI dalam Sistem..              </div>
            </div>
          </a>
        </div>
                              <div class="col-md-2 col-sm-4 col-xs-6">
          <a class="thumbnail-imtelkom" href="/home/catalog/id/149015/slug/bootsrap-4-designing-awsome-responsive-website.html">
            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="glyphicon glyphicon-calendar"></span>
                26/03 
              </span>
                            <img width="100%" title="Bootsrap 4 : Designing Awsome Responsive Website" src="https://openlibrary.telkomuniversity.ac.id/uploads/book/cover/19.01.309.jpg">
              <div class="caption">
                Bootsrap 4 : Designing Awsome..              </div>
            </div>
          </a>
        </div>
                              <div class="col-md-2 col-sm-4 col-xs-6">
          <a class="thumbnail-imtelkom" href="/home/catalog/id/149001/slug/membangun-aplikasi-mobile-dengan-pwa-prograssive-web-app.html">
            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="glyphicon glyphicon-calendar"></span>
                26/03 
              </span>
                            <img width="100%" title="Membangun Aplikasi Mobile dengan PWA : Prograssive Web App" src="https://openlibrary.telkomuniversity.ac.id/uploads/book/cover/default.jpg">
              <div class="caption">
                Membangun Aplikasi Mobile dengan PWA..              </div>
            </div>
          </a>
        </div>
                              <div class="col-md-2 col-sm-4 col-xs-6">
          <a class="thumbnail-imtelkom" href="/home/catalog/id/149053/slug/mikrotik-kung-fu-kitab-1.html">
            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="glyphicon glyphicon-calendar"></span>
                26/03 
              </span>
                            <img width="100%" title="MikroTik Kung Fu : Kitab 1" src="https://openlibrary.telkomuniversity.ac.id/uploads/book/cover/19.01.311.jpg">
              <div class="caption">
                MikroTik Kung Fu : Kitab..              </div>
            </div>
          </a>
        </div>
            </div>
                  </div>

    <ol class="carousel-indicators carousel-indicators-imtelkom">
          <li data-target="#carousel-latest-catalog" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-latest-catalog" data-slide-to="1"></li>
          <li data-target="#carousel-latest-catalog" data-slide-to="2"></li>
        </ol>
  </div>
</div>
<div class="row row-imtelkom">

  <div class="col-md-3 col-sm-6">
    <h3><a href="https://openlibrary.telkomuniversity.ac.id/home/information/">News</a></h3>
   <ul class="list-unstyled">
    <li>
    <p>
      <span class="label label-primary">28/03/2019</span> 
      <a href="/home/information/id/144.html">
        <small>Library Newsletter | Tel-U Open Library, March 2019</small>
      </a>
    </p>
  </li>
    <li>
    <p>
      <span class="label label-primary">19/03/2019</span> 
      <a href="/home/information/id/143.html">
        <small>Reference Management Tools</small>
      </a>
    </p>
  </li>
    <li>
    <p>
      <span class="label label-primary">04/03/2019</span> 
      <a href="/home/information/id/142.html">
        <small>Library Newsletter | Tel-U Open Library, February 2019</small>
      </a>
    </p>
  </li>
    <li>
    <p>
      <span class="label label-primary">31/01/2019</span> 
      <a href="/home/information/id/141.html">
        <small>Library Newsletter  | Tel-U Open Library, January 2019</small>
      </a>
    </p>
  </li>
    <li>
    <p>
      <span class="label label-primary">28/01/2019</span> 
      <a href="/home/information/id/140.html">
        <small>E-Book IEEE (Publikasi MIT Press)</small>
      </a>
    </p>
  </li>
  </ul>  </div>
 
  <div class="col-md-3 col-sm-6">
    <h3>Informasi Penting</h3>
    <ul class="list-unstyled">
	  		 	 <li>
			<p>
		 	 <a href="/home/information/id/20.html">
				<small>Peraturan Tel-U Open Library</small>
		 	 </a>
			</p>
	  	</li>
	  		 	 <li>
			<p>
		 	 <a href="/home/information/id/21.html">
				<small>Open Library Member Survival Guide</small>
		 	 </a>
			</p>
	  	</li>
	  		 	 <li>
			<p>
		 	 <a href="/home/information/id/23.html">
				<small>Akses eJournal dan eBook</small>
		 	 </a>
			</p>
	  	</li>
	  		 	 <li>
			<p>
		 	 <a href="/home/information/id/30.html">
				<small>Tool iThenticate untuk Pengecekan Referensi pada Karya Tulis Ilmiah</small>
		 	 </a>
			</p>
	  	</li>
	  		 	 <li>
			<p>
		 	 <a href="/home/information/id/62.html">
				<small>Formulir Pengajuan Bahan Pustaka</small>
		 	 </a>
			</p>
	  	</li>
	  		 	 <li>
			<p>
		 	 <a href="/home/information/id/89.html">
				<small>Ketentuan Bebas Pinjam Perpustakaan</small>
		 	 </a>
			</p>
	  	</li>
	  		 	 <li>
			<p>
		 	 <a href="/home/information/id/138.html">
				<small>SK Logo dan Sistem Open Library</small>
		 	 </a>
			</p>
	  	</li>
	  			</ul>
  </div>
  <div class="col-md-4 col-sm-6">
    <h3>E-Journal & Magazine</h3>
			<div> 
				<table width="100%"  style="cursor:pointer;"  data-toggle="modal" data-target="#ejurnal"> 
				<tr>
					<td  width="33%" align="left" style="padding-right:10px;"><img src="<?php echo base_url();?>assets/images/ieee.png" width="97%" title="IEEE"></td>
					<td  width="33%" align="left" style="padding-right:13px;"><img src="<?php echo base_url();?>assets/images/springer.png" width="97%" title="Springer"> 
					<td  width="13%" align="left" style="padding-right:13px;"><img src="<?php echo base_url();?>assets/images/acm_.png" width="100%" title="ACM"></td> 
					<td  width="20%" align="left"><a href='https://www.nature.com/scientificamerican/index.html' target="_blank"><img src="<?php echo base_url();?>assets/images/scientific_american.png"  width="100%"  title="Scientific American"></a></td>
				</tr>    
				<tr>
					<td width="33%" align="left" ><img src="<?php echo base_url();?>assets/images/sciencedirect.png"  width="90%"  title="Science Direct"></td>
					<td width="33%" align="left"><img src="<?php echo base_url();?>assets/images/worldscientific.jpg"  width="90%" title="World Scientific"></td>
					<td width="33%" align="left" colspan="2"><img src="<?php echo base_url();?>assets/images/emerald.gif" width="90%"  title="Emerald Insight"></td>
				</tr> 
				<tr>
					<td width="33%" align="left"><img src="<?php echo base_url();?>assets/images/sage.png"  width="90%" title="SAGE"> 
					<td width="33%" align="left"><img src="<?php echo base_url();?>assets/images/indersience.jpg" width="90%"  title="Inderscience"></td>
					<td width="33%" align="left" colspan="2"><img src="<?php echo base_url();?>assets/images/taylorfrancis.png" width="90%" title="Taylor and Francis"></td> 
				</tr> 			
				<tr style="padding:3px;border-top:1px solid #ccc;" ><td colspan="3" style="color:#337ab7;padding:3px;" >Dikti</td></tr>  
				<tr>
					<td width="33%" align="left"><img src="<?php echo base_url();?>assets/images/proquest.jpg" width="90%" title="Proquest"></td> 
					<td width="33%" align="left"><img src="<?php echo base_url();?>assets/images/gale.jpg" width="90%" title="Gale Cengage"></td>
					<td width="33%" align="left" colspan="2"><img src="assets/images/ebsco.jpg"  width="40%"  title="EBSCO"></td>
				</tr>   
				<tr style="padding:3px;border-top:1px solid #ccc;"><td colspan="3" style="color:#337ab7;padding:3px;" >Perpusnas</td></tr>     
				<tr>
					<td align="left" colspan="4"><img src="<?php echo base_url();?>assets/images/pnri.jpg" width="40%" title="E - Resources Perpusnas"> <img src="<?php echo base_url();?>assets/images/onesearch.jpg" width="40%" title="One Search">
				</tr>  	
				
				</table>  
				<table width="100%"> 
				<tr style="padding:3px;border-top:1px solid #ccc;"><td colspan="3" style="color:#337ab7;padding:3px;" >Telkom University</td></tr>     
				<tr>
					<td align="left" colspan="4" style="cursor:pointer"><img onclick="window.open('http://journals.telkomuniversity.ac.id', '_blank')" src="<?php echo base_url();?>assets/images/journal_telkom_university.png" width="40%" title="Journals Telkom University"> <span  onclick="window.open('https://openlibrary.telkomuniversity.ac.id/olafa/index.php/sumberjurnal', '_blank')"><img src="https://openlibrary.telkomuniversity.ac.id/images/owl/48.png" title="E-Journal Nasional"> E-Journal Nasional </span>
				</tr>  		 
				<tr> <td style="padding:4px;"></td></tr>
				</table>  
			</div>
  </div>   

  <div class="col-md-2 col-sm-6" style="">
  	<table style="margin-top:5px;">
  		<tr><td>
  			<img style="margin-top:10px;margin-left:auto"   class="img-responsive"  src="<?php echo base_url();?>assets/images/akreditasi.png" width="90%"><br>
 			 <img style="margin-top:10px;margin-left:auto"   class="img-responsive"  src="<?php echo base_url();?>assets/images/iso.png" width="80%">
 		 </td></tr>
 	 </table>
  </div> 
</div>

<div id="ejurnal" class="modal fade " role="dialog">
		  <div class="modal-dialog " style="width:95% !important">

			<!-- Modal content-->
			<div class="modal-content"> 
			  <div class="modal-body">
				<div   style="text-align:right;">
				<button type="button" class="btn btn-default" data-dismiss="modal">close</button>
				</div><br>
				<table width="100%" style="background-color:#ccc;">
					<tr>
						<td width="80%" style="vertical-align:top;"><img src="/uploads/infografik_ejurnal.jpg" width="100%"></td>
						<td width="20%" style="padding:10px;vertical-align:top;">
							<span style="font-size:14px;font-weight:bold;color:#C9302C">Telkom University : <br> </span>
							<table width="100%">
							<tr><td width="10%" style="vertical-align:top;">1.</td><td><a href="https://journals.telkomuniversity.ac.id" target="_blank" onclick="journal_visitor('e-Resources Perpusnas')">Journals Telkom University</a><br></td></tr>
							</table>  
							<br> 
							<span style="font-size:14px;font-weight:bold;color:#C9302C">E - Jurnal : <br> </span>
							<table width="100%">
							<tr><td width="10%" style="vertical-align:top;">1.</td><td><a href="https://ieeexplore.ieee.org" target="_blank" onclick="journal_visitor('IEEE')">IEEE</a><br>* Jurnal dan magazine, tidak termasuk Proceeding</td></tr>
							<tr><td width="10%" style="vertical-align:top;">2.</td><td><a href="https://link.springer.com" target="_blank" onclick="journal_visitor('Springer')">Springer</a></td></tr>
							<tr><td width="10%" style="vertical-align:top;">3.</td><td><a href="https://dl.acm.org" target="_blank" onclick="journal_visitor('ACM')">ACM</a></td></tr>
							<tr><td width="10%" style="vertical-align:top;">4.</td><td><a href="https://www.emeraldinsight.com" target="_blank" onclick="journal_visitor('Emerald')">Emerald</a></td></tr>
							<tr><td width="10%" style="vertical-align:top;">5.</td><td><a href="https://www.sciencedirect.com" target="_blank" onclick="journal_visitor('Science Direct')">Science Direct</a></td></tr> 
							<tr><td width="10%" style="vertical-align:top;">6.</td><td><a href="https://www.worldscientific.com/worldscinet/jde" target="_blank" onclick="journal_visitor('World Scientific - Journal of Developmental Entrepreneurship')">World Scientific - Journal of Developmental Entrepreneurship</a></td></tr> 
							<tr><td width="10%" style="vertical-align:top;">7.</td><td><a href="https://journals.sagepub.com/home/gmc" target="_blank" onclick="journal_visitor('SAGE - Global Media and Communication')">SAGE - Global Media and Communication</a></td></tr>
							<tr><td width="10%" style="vertical-align:top;">8.</td><td><a href="https://journals.sagepub.com/home/tvn" target="_blank" onclick="journal_visitor('SAGE - Television and New Media')">SAGE - Television and New Media</a></td></tr> 
							<tr><td width="10%" style="vertical-align:top;">9.</td><td><a href="https://www.inderscienceonline.com/loi/jdr" target="_blank" onclick="journal_visitor('Inderscience - Journal Design Research')">Inderscience - Journal Design Research</a></td></tr> 
							<tr><td width="10%" style="vertical-align:top;">10.</td><td><a href="https://www.tandfonline.com/" target="_blank" onclick="journal_visitor('Taylor and Francis - Journal of Arts & Humanities')">Taylor and Francis - Journal of Arts & Humanities</a></td></tr>
							</table>  
							<br> 
							<span style="font-size:14px;font-weight:bold;color:#C9302C">Jurnal Hibah Dikti : <br>(Username password request ke library@telkomuniversity.ac.id) <br> </span>
							<table width="100%">
							<tr><td width="10%" style="vertical-align:top;">1.</td><td><a href="https://search.proquest.com" target="_blank" onclick="journal_visitor('ProQuest')">ProQuest</a><br>Meliputi bidang ilmu : <br>- Kesehatan<br>- Humaniora<br>- Seni</td></tr>
							<tr><td width="10%"  style="vertical-align:top;">2.</td><td><a href="https://infotrac.galegroup.com" target="_blank" onclick="journal_visitor('Cengage Gale')">Cengage Gale</a><br>Meliputi bidang ilmu : <br>- Ekonomi<br>- Sosial<br>- Pendidikan<br>- Humaniora<br>- Seni</td></tr>
							<tr><td width="10%"  style="vertical-align:top;">3.</td><td><a href="https://search.ebscohost.com" target="_blank" onclick="journal_visitor('EBSCO')">EBSCO</a><br>Meliputi bidang ilmu : <br>- MIPA / Science<br>- Pertanian<br>- Ilmu Teknik</td></tr>
							</table>  
							<br> 
							<span style="font-size:14px;font-weight:bold;color:#C9302C">E - Resources Perpusnas : <br> </span>
							<table width="100%">
							<tr><td width="10%" style="vertical-align:top;">1.</td><td><a href="http://e-resources.perpusnas.go.id/" target="_blank" onclick="journal_visitor('e-Resources Perpusnas')">e-Resources Perpusnas</a><br></td></tr>
							<tr><td width="10%" style="vertical-align:top;">2.</td><td><a href="http://onesearch.id" target="_blank" onclick="journal_visitor('Indonesia One Search')">Indonesia One Search</a><br></td></tr>
							</table> 
						</td>
					</tr>
				</table>
				  
				
			  </div>
			 
			</div>

		  </div>
</div>  
<div id="poster" class="modal fade " role="dialog">
	<div class="modal-dialog" style="width:55% !important">

		<div class="modal-content" > 
			<div class="modal-body" style="background-color:#C9302C;background-repeat: no-repeat;height:50%;color:#fff;margin:15px;">
				<div   style="text-align:right;">
				<button type="button" class="btn btn-default" data-dismiss="modal">close</button>
				</div>   
				<span style="font-size:18px;">HEI <b>#TelUTizen</b>,<p>Mulai tanggal 20 Maret 2019, Scopus dpt diakses dilingkungan kampus tanpa menggunakan username password, melalui <a href="https://www.scopus.com">www.scopus.com</a><br>Silahkan memanfaatkan periode trial Scopus ini sampai dengan tanggal 19 April 2019<br>Demikian disampaikan, semoga bermanfaat.<br> 
<br>Salam Literasi</p> 
		</div> 
	</div>
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
					<img src="<?php echo base_url();?>assets/images/askalibrarian.jpg" width="100%">
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
					<td align="center"><img src="<?php echo base_url();?>assets/images/asklibrarian_cover.jpg" width="70%"></td> 
				</tr>  
				</table>  
			</div>	  
			<div style="background-color:#FFF;min-height:146px;border-radius:10px;margin-bottom:0px">
				<div class="box-title" style="border-radius:10px 10px 0 0;">FAQ</div>
				<table width="100%"  style="cursor:pointer;" data-toggle="modal" data-target="#faq"> 
				<tr>
					<td align="center"><img src="<?php echo base_url();?>assets/images/faq_cover.jpg?rand=333424" width="70%"></td> 
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
					<img src="<?php echo base_url();?>assets/images/faq_detail.jpg" width="100%">
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
					
					<td align="center"><img src="<?php echo base_url();?>assets/images/discussion_room.jpg" width="36%"></td>
				</tr> 
				</table>  
			</div> 
			 <div style="background-color:#FFF;min-height:70px;border-radius:10px;color:#666;margin-bottom:13px;	">
				<div class="box-title-small">CHECK PLAGIARISM</div>
				<table width="100%" height="49px" style="cursor:pointer;" onclick="window.open('/home/information/id/30.html','_blank')"> 
				<tr>
					<td align="center"><img src="<?php echo base_url();?>assets/images/ithenticate-logo.png" width="55%"></td>
				</tr> 
				</table>
			</div> 
			<div style="background-color:#FFF;min-height:100px;border-radius:10px;color:#666;">
				<div class="box-title-small">E - CATALOGUE</div>
				<table width="100%" height="49px" style="cursor:pointer;" onclick="window.open('/home/information/id/53.html','_blank')"> 
				<tr>
					<td align="center"><img src="<?php echo base_url();?>assets/images/ecatalog.jpg" width="80%"></td>
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
					<img src="<?php echo base_url();?>assets/images/akses_karya_ilmiah.jpeg" width="100%">
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
					<img src="<?php echo base_url();?>assets/images/akses_ebook.jpg" width="100%">
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
					<img src="<?php echo base_url();?>assets/images/reservasi_ruangan.jpg" width="100%">
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
					<img src="<?php echo base_url();?>assets/images/peminjaman.jpg" width="100%">
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
					<img src="<?php echo base_url();?>assets/images/pengembalian.jpg" width="100%">
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
					<img src="<?php echo base_url();?>assets/images/perpanjangan_online.jpg" width="100%">
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
					<img src="<?php echo base_url();?>assets/images/prosedur_skbp.jpg" width="100%">
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
					<img src="<?php echo base_url();?>assets/images/upload_skripsi.jpg" width="100%"><br><br>
					<img src="<?php echo base_url();?>assets/images/upload_skripsi_2.jpg" width="100%"><br><br>
					<img src="<?php echo base_url();?>assets/images/upload_skripsi_3.jpg" width="100%">
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
					<img src="<?php echo base_url();?>assets/images/aprroval_tugas_akhir.jpg" width="100%">
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
   

    
  </body>
</html>
