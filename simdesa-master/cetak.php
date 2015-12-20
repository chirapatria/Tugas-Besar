<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<!-- print preview surat -->
<div id="cetak" style="display:none;position:absolute;" onclick="cetak(this)"><img src="img/print.png" /></div>
<div id="surat_tampil" style="display:none;">
<!-- awal kepala surat -->

<div id="kepala_surat"><img src="img/gresik.jpg" width="100px" height="100px" id="logo_surat" valign="baseline"/>
<strong>PEMERINTAHAN KABUPATEN <?php echo strtoupper($desa['kabupaten']) ?><br/>
KECAMATAN  <?php echo strtoupper($desa['kecamatan']) ?><br/>
DESA  <?php echo strtoupper($desa['nama']) ?><br/></strong>
<?php echo ucwords($desa['alamat']) ?> Telp. <?php echo $desa['tlp'] ?>
</div>
<!-- akhir kepala surat -->

<div class="garis"></div>
<div id="nomer_surat">
<div style="text-transform:uppercase;text-decoration:underline;font-weight:bolder">Surat Keterangan <?php echo $nama_surat;?></div>
        <div>Nomer : <?php echo $nomer_surat;?></div>
</div>
<div id="par_pembuka">
<span class="masuk_alinea">&nbsp;</span>Yang bertanda tangan dibawah ini , 
Kepala Desa <?php echo $desa["nama"] ?>, 
Kecamatan <?php echo $desa["kecamatan"] ?>, Kabupaten <?php echo $desa["kabupaten"] ?> menerangkan dengan 
sebenarnya bahwa orang tersebut dibawah ini :
</div>
<div id="content_surat"></div>
<div id="par_penutup"><span class="masuk_alinea">&nbsp;</span>Demikian Surat Keterangan ini diberikan, untuk 
dapat digunakan sebagaimana mestinya.</div>
<div class="tanda_tangan" id="ybs" <?php echo $ybs ?> >
	<div>&nbsp;</div>
	<div class="kosong">Yang Bersangkutan</div>
	<div id="nama_pemohon"></div>
</div>	
<div class="tanda_tangan" style="float:right">
	<div>Duduksampeyan, <?php echo date("d-m-Y") ?></div>
	<div class="kosong" id="pejabat"><?php echo $desa["tt_kades"]; ?></div>
	<div id="nama_pejabat"><?php echo "<span style='text-transform:uppercase;text-decoration:underline'>".$desa["kades"]."</span>"; ?></div>
</div>
<?php echo $mengetahui; ?>
</div>
</body>
</html>