<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <link rel="shortcut icon" href="img/favicon.png"> 
		
		<link rel="stylesheet" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/style-responsive.css" />		
    <link  href="css/admin.css" rel="stylesheet" type="text/css" />
    <link  href="css/form.css" rel="stylesheet" type="text/css" />
    <link  href="css/surat.css" rel="stylesheet" type="text/css" media="screen"/>
    <link  href="css/surat_cetak.css" rel="stylesheet" type="text/css" media="print"/>
    <link  href="css/jquery-ui-1.8.19.custom.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.19.custom.min.js"></script>
    <script type="text/javascript" src="js/buatan_sendiri.js"></script>
</head>
<script type="text/javascript">
$(function(){
	$("#left-column ul.nav a").click(function(){
		var url = $(this).attr("href");
		// load div center-column dengan url dari anchor tsb
		$("#center-column").html("<div class='loading'>Mohon ditunggu .........</div>")
		.load(url);
		return false;
		})
	})
</script>
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


  <!-- section about us -->
  
  <section class="about-us" id="about-us">
  
    <h1>PANEL ADMIN</h1>

    <div id="main">
        <div id="header">
            
        </div>  
       <div id="middle">
            <div id="left-column">
                
                <h3>Surat</h3>
                <ul class="nav">
                    <li><a href="tambah_surat_link.php">Buat Surat</a></li>
                </ul>
                
         </div>
            <div id="center-column">
                
            </div>
       <!---     
            <div id="right-column">
                <strong class="h">Quick Info</strong>
                <div class="box">This is your admin home page. It will give you access to all things within the back end system that you will need to facilitate a smooth operation.</div>
            </div>
        --->    
          <div class="clear"></div>  

<section class="footer">
    
      <div class="margin">
      
        <div class="menu-footer"> 
        
        <a href="#home">Home</a>
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

    </div>
</body>
</html>
