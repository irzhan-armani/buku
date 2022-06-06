<?php
include 'koneksi.php';

// berikut script untuk proses tambah buku ke database 
if(!empty($_POST['isbn'])){
    // menangkap data post

    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];
    $abstrak = $_POST['abstrak'];
    $isbn = $_POST['isbn'];
    

    $data[] = $judul;
    $data[] = $pengarang;
    $data[] = $jumlah;
    $data[] = $tanggal;
    $data[] = $abstrak;
    $data[] = $isbn;

    // simpan data barang

    $sql = 'UPDATE buku SET judul=?,pengarang=?,jumlah=?,tanggal=?,abstrak=? WHERE isbn=?';
		/**
		 * @var $connection PDO
		 */
        $row = $connection->prepare($sql);
		$row->execute($data);
		
		// redirect
		echo '<script>alert("Berhasil Edit Data");window.location="all.php"</script>';

	}
	// untuk menampilkan data barang berdasarkan id barang
	$isbn = $_GET['isbn'];
	$sql = "SELECT *FROM buku WHERE isbn= ?";
/**
 * @var $connection PDO
 */
	$row = $connection->prepare($sql);
	$row->execute(array($isbn));
	$hasil = $row->fetch();
?>