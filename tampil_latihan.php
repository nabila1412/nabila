<?php
include 'database_latihan.php';
$db = new database();
?>
<h1>AYO DAFTAR</h1>
<h2>CALON MAHASISWA BARU</h2>
<h3>Data Registrasi Mahasiswa</h3>

<a href="input_latihan.php">Input Data</a>
<table border = "1">
	<tr>
		<th>No</th>
		<th>Program Pendidikan</th>
		<th>Nama Lengkap</th>
		<th>Email</th>
		<th>Opsi</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['program_pendidikan']; ?></td>
		<td><?php echo $x['nama_lengkap']; ?></td>
		<td><?php echo $x['email']; ?></td>
		<td>
			<a href="edit_latihan.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
			<a href="proses_latihan.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
		</td>
	</tr>
	<?php
	}
	?>
