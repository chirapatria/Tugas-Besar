<!DOCTYPE html>
<html lang="en">

		<title>Form Pembuatan Surat</title>
		
		<link rel="shortcut icon" href="../img/favicon.png"> 
		<link rel="stylesheet" href="css/form.css" />
		<link rel="stylesheet" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" href="css/bwtsrt.css" />
		<link rel="stylesheet" type="text/css" href="css/style-responsive.css" />				
		
</head>

<body>

<div class="container">


<!-- section start-page -->

  <section class="start-page parallax-background" id="home">
  
    <div class="opacity"></div>
      <div class="content">
        <div class="text">
          
        </div>
        <div class="arrow-down"></div>
      </div>
  
  </section>


  <p>
    
    <!-- section about us -->
    
  </p>
  <section class="about-us" id="about-us">
  
    <h1>&nbsp;</h1>
    <h1>FORM SURAT</h1>
    <hr/>
    <p class="title"></p>
  
            <div class="wrapper">
		<div class="header"> 
      
      
      <div class="h2"> 
        <h2></h2> 
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p><br/>
        </p>
      </div>


          <form action="frmconfig.php"  method="POST">

        <div class='tablerow'>
              <label for="nik"> NIK : </label>
                <input type="text" id="nik" name="nik" /> <br/>
        </div>

        <div class="tablerow">
              <label for="nama"> Nama : </label>
                <input type="text" id="nama" name="nama" /> <br/>
        </div>

        <div class="tablerow">
              <label for="tempat"> Tempat lahir: </label>
                <input type="text" id="tempat" name="tempat" /> <br/>
        </div>

        <div class="tablerow">
              <label for="tanggal"> Tanggal lahir: </label>
                <input type="date" id="ttl" name="ttl" /> <br/>
		</div>
        
        <div class='tablerow'>
              <label for="agama"> Agama : </label>
                <input type="text" id="agama" name="agama" /> <br/>
        </div>

        <div class='tablerow'>
              <label for="jk"> Jenis kelamin : </label>
                <input id="jk" name="jk" type="radio" value="Laki-laki"/> Laki-Laki <br/>
                <input id="jk" name="jk" type="radio" value="Perempuan"/> Perempuan <br/>
        </div>

        <div class='tablerow'>
              <label for="statusperkawinan"> Status perkawinan : </label>
                <input id="statusperkawinan" name="statusperkawinan" type="radio" value="Kawin"/> Kawin <br/>
                <input id="statusperkawinan" name="statusperkawinan" type="radio" value="Belum Kawin"/> Belum kawin <br/>
        </div>

        <div class='tablerow'>
              <label for="pekerjaan"> Pekerjaan : </label>
                <select id="pekerjaan" name="pekerjaan">
                  <option > Pegawai negeri sipil </option>
                  <option > Wiraswasta </option>
                  <option > Petani </option>
                  <option > Buruh </option>
                  <option > Ibu rumah tangga </option>
                  <option > Lainnya </option>
                </select> <br/>
      </div>

      <div class='tablerow'>
              <label for="alamat"> Alamat : </label>
                <textarea id="alamat" name="alamat"> </textarea> <br/>
      </div>

      <div class='tablerow'>
              <label for="perihal"> Perihal surat : </label>
                <textarea id="perihal" name="perihal"> </textarea> <br/>
      </div>

<div class='tablerow'>
              <label for="jenis_surat"> Jenis Surat : </label>
                <select id="jenis_surat" name="jenis_surat">
                  <option > Surat Keterangan Domisili </option>
                  <option > Surat Pindah-Datang Penduduk </option>
                  <option > Surat Pertanahan </option>
                  <option > Surat Keterangan Kelahiran </option>
                  <option > Surat Pertanahan</option>
                  <option > Surat Pengantar Nikah </option>
                  <option > Surat Keterangan Tidak Mampu </option>
                  <option > Surat Keterangan Kematian </option>
                  <option > Surat Izin Mendirikan Bangunan </option>
                  <option > Surat Izin Usaha</option>
                  <option > Surat Pengantar Pembuatan SKCK </option>
                  <option > Surat Izin Keramaian </option>
                </select> <br/>
      </div>

      <div class='tablerow'>
              <label for="email"> Alamat e-mail : </label>
                <input type="email" id="email" name="email"> <br/>

      </div>

              <input type="submit" value="Kirim" id="kirim" href="upload.php" />

        </form>
</div>

    

  </section>
  


  
  <div class="clear"></div>  

<section class="footer">
    
      <div class="margin">
      
        <div class="menu-footer"> 
        
        <a href="../home.html">Home</a>
        <a href="#">Privacy policy</a>
        <a href="#">RSS</a>
        <a href="#">Facebook</a>
        
        </div>
        
          <div class="copyright">© 2015. All Rights Reserved Judith Chira Patria</div>        

      </div>
    
    
    </section>    
    

</div>



	<!-- Scripts -->
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> <!-- jQuery -->
	<script src="js/jquery.parallax.js"></script> <!-- jQuery Parallax -->
	<script src="js/jquery.nicescroll.js"></script> <!-- jQuery NiceScroll -->
	<script src="js/jquery.sticky.js"></script> <!-- jQuery Stick Menu -->
	<script src="js/script.js"></script> <!-- All script -->

</body>

</html>
