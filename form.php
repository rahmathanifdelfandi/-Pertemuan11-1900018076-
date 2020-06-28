<a href="form.html">Kembali ke halaman sebelumnya</a>
<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

$eror = false;

if(@$_POST['Nama']==''){
	echo "Nama harus disi tidak boleh kosong<br/>";
	$eror = true;
}
if(@$_POST['JK']==''){
	echo "Jenis Kelamin harus disi tidak boleh kosong<br/>";
	$eror = true;
}
if(@$_POST['jurusan']==''){
	echo "Jurusan harus disi tidak boleh kosong<br/>";
	$eror = true;
}
if(!$eror){
	echo "Terimakasih sudah mengisi semua data anda :) :)";
}
 ?> 