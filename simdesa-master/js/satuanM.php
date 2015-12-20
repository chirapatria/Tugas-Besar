<html>
<head>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<script src="js/jquery-1.9.1.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.js"></script>
<script>
	$(function() {
		var nama = $( "#nama" ),
		  satuan_id = $( "#satuan_id" ),
		  konversi = $( "#konversi" ),
		  ke = $( "#ke" ),
		  allFields = $( [] ).add( nama ).add( satuan_id ).add(konversi).add(ke),
		  tips = $( ".validateTips" );
	 
		function updateTips( t ) {
		  tips
			.text( t )
			.addClass( "ui-state-highlight" );
		  setTimeout(function() {
			tips.removeClass( "ui-state-highlight", 1500 );
		  }, 500 );
		}
	 
		function checkLength( o, n, min, max ) {
		  if ( o.val().length > max || o.val().length < min ) {
			o.addClass( "ui-state-error" );
			updateTips( "Karakter untuk " + n + " Harus antara " +
			  min + " sampai " + max + " karakter." );
			return false;
		  } else {
			return true;
		  }
		}
	 
		function checkRegexp( o, regexp, n ) {
		  if ( !( regexp.test( o.val() ) ) ) {
			o.addClass( "ui-state-error" );
			updateTips( n );
			return false;
		  } else {
			return true;
		  }
		}
		
		$( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 450,
      width: 300,
      modal: true,
      buttons: {
        "Tambah Data": function() {
          var bValid = true;
          allFields.removeClass( "ui-state-error" );
 
          bValid = bValid && checkLength( nama, "Nama Satuan", 2, 30 );
          bValid = bValid && checkLength( satuan_id, "Satuan ID", 2, 5 );
		  bValid = bValid && checkLength( konversi, "Konversi", 1, 5 );
		  bValid = bValid && checkLength( ke, "Satuan Terkecil", 1, 30 );
 
          if ( bValid ) {
            //input data
			$.ajax({
					url:"addMaster.php",
					data:"op=satuanM&satuan_id="+satuan_id.val()+"&nama="+nama.val()+"&konversi="+konversi.val()+"&ke="+ke.val(),
					cache:false,
					success:function(msg){
						if(msg=='sukses'){
							alert('Transaksi Berhasil');
							window.location='indexx.php?page=satuanM';
						}else{
							alert('Satuan '+nama.val()+' dan Konversi ke '+ke.val()+' - Sudah Ada!!!~');
							$( this ).dialog( "close" );
						}
					}
				})
          }
        },
        Cancel: function() {
          $( this ).dialog( "close" );
        }
      },
      close: function() {
        allFields.val( "" ).removeClass( "ui-state-error" );
      }
    });
	
		$( "#add" )
		  .button()
		  .click(function() {
			$( "#dialog-form" ).dialog( "open" );
      });
	});
</script>
</head>
<body class="fixed-top">
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span12"></div>
                        <legend>Parameter :: Satuan</legend>
						<form name="form1" method="POST" action="?page=satuanM&act=cari">
						<table class="table table-striped table-hover">
							<tr>
								<td>Pencarian Berdasarkan</td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>Satuan</td>
								<td width="10">:</td>
								<td><input type="text" id="satuan" name="satuan">&nbsp;&nbsp;<input type="submit" name="submit" value="Cari" /></td>
								<td></td>
							</tr>
						</table>
						</form>
					<?php
					include"db/koneksi2.php";
						 $tgl=date('Y-m-d');
						 $no = 1;
				$p=isset($_GET['act'])?$_GET['act']:null;
                switch($p){
                    default:
				$batas   = 15; 
					$halaman = $_GET['halaman']; 
					if(empty($halaman)){ 
						$posisi=0; 
						$halaman=1; 
					} 
					else{ 
						$posisi = ($halaman-1) * $batas; 
					} 
				$sql="SELECT*FROM satuan_m LIMIT $posisi, $batas";
				$hasil=mysql_query($sql); 
				$no=$posisi+1;
				
				echo '<div class="btn-group">
										<button id="add" class="btn green"><i class="icon-plus"></i>
										</button>
						</div>';
				echo'<table class="table table-striped table-hover table-bordered" width="50">
				<thead>
						
						<tr bgcolor="00BFFF">
							<td>No</td>
							<td>Satuan</td>
							<td>Konversi</td>
							<td>Ke</td>
							<td><div align="center">Action</div></td>
						</tr>
					</thead>';
				while ($data=mysql_fetch_array($hasil)){
					echo"<tr>
							<td>$no</td>
							<td>$data[nama]</td>
							<td>$data[konversi]</td>
							<td>$data[ke]</td>
							<td><div align='center'><a href='?page=editMaster&act=satuanM&id=$data[satuan_id]'>EDIT</a> &nbsp; | &nbsp;
													<a href='deleteMaster.php?op=satuanM&id=$data[satuan_id]&ke=$data[ke]'>HAPUS</a></div></td>
						</tr>";
						$no++;
					}
				echo "</table>";
				
				$file="?page=warnaM"; 
				
				$tampil2="select * from satuan_m"; 
				$hasil2=mysql_query($tampil2); 
				$jmldata=mysql_num_rows($hasil2); 
				$jmlhalaman=ceil($jmldata/$batas); 
				
				for($i=1;$i<=$jmlhalaman;$i++) 
				if ($i != $halaman) 
				{ 
					echo "<a href=$_SERVER[PHP_SELF]?page=satuanM&halaman=$i>$i</A> | "; 
				} 
				else 
				{ 
					echo " <b>$i</b> | "; 
				} 
				echo "Total : <b>$jmldata</b> Data";
				break;
				
				case "cari":
					$satuan = $_POST['satuan'];
					if ($_POST['submit']){
						$data2=mysql_query("SELECT*FROM satuan_m WHERE nama LIKE '%$satuan%'");
						echo'<table class="table table-striped table-hover table-bordered">
						<thead>
								
						<tr bgcolor="00BFFF">
							<td>No</td>
							<td>Satuan</td>
							<td>Konversi</td>
							<td>Ke</td>
							<td><div align="center">Action</div></td>
						</tr>
						</thead>';
						while ($b=mysql_fetch_array($data2)){
							echo"<tr>
									<td>$no</td>
									<td>$b[nama]</td>
									<td>$b[konversi]</td>
									<td>$b[ke]</td>
									<td><div align='center'><a href='?page=editMaster&act=satuanM&id=$data[satuan_id]'>EDIT</a> &nbsp; | &nbsp;
													<a href='deleteMaster.php?op=satuanM&id=$data[satuan_id]&ke=$data[ke]'>HAPUS</a></div></td>
								</tr>";
								$no++;
							}
						echo "</table>";
					
					}else{
						unset($_POST['submit']);
					}
				break;
            }
			?>
					</div>
				</div>
                </div>
<div id="dialog-form" title="Tambah Data Satuan">
  <p class="validateTips">Semua Form Wajid di Isi.</p>
  <form>
  <fieldset>
	<label for="id">Satuan ID</label>
    <input type="text" name="satuan_id" id="satuan_id" class="text ui-widget-content ui-corner-all" disabled/>
    <label for="nama">Nama Satuan</label>
    <input type="text" name="nama" id="nama" class="text ui-widget-content ui-corner-all" />
	<label for="nama">Konversi</label>
    <input type="text" name="konversi" id="konversi" class="text ui-widget-content ui-corner-all" />
    <label for="nama">Satuan Terkecil</label>
	<select id="ke">
    	<option value="">--Pilih Satuan--</option>
    <?php
    	$kecil=mysql_query("SELECT*FROM satuan_m");
		while($data=mysql_fetch_array($kecil)){
			echo"<option value='$data[satuan_id]'>$data[nama]</option>";
		}
    ?>
    </select>
  </fieldset>
  </form>
</div>					
</body>
<script src="assets/js/jquery-1.8.3.min.js"></script>	
	<script src="assets/breakpoints/breakpoints.js"></script>	
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>		
	<script src="assets/js/jquery.blockui.js"></script>
	<script src="assets/js/jquery.cookie.js"></script>
	<script>
	$("#nama").change(function(){
		var nama=$("#nama").val();
		var ubah=nama.toLowerCase();
		
		$("#satuan_id").val(ubah);
	});
	</script>
	<!-- ie8 fixes -->
	<!--[if lt IE 9]>
	<script src="assets/js/excanvas.js"></script>
	<script src="assets/js/respond.js"></script>
	<![endif]-->	
	<script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
	<script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
	<script src="assets/js/app.js"></script>		

</html>