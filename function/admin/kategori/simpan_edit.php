<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'db_sparepart');
$id = $_POST['id_kategori'];
$kategori = $_POST['kategori'];
$query = mysqli_query($koneksi, "UPDATE `tbl_kategori`SET
			`kategori` = '$kategori',
			WHERE `id_kategori` = '$id' 
			");

echo "<script>alert('tersimpan');
			window.location='/penjualan_konter/function/admin/halaman.php?page=kategori/data_kategori';
			</script>";
