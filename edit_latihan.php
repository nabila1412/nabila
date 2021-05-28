<?php
include 'database_latihan.php';
$db = new database();
?>
<h1>AYO DAFTAR</h1>
<h2>CALON MAHASISWA BARU</h2>
<h3>Data Registrasi Mahasiswa</h3>

<form action="proses_latihan.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){
?>
<table>
    <tr>
		<td>Program Pendidikan</td>
		<td><input type="text" name="program_pendidikan" value="<?php echo $d['program_pendidikan'] ?>"></td>
		
	</tr>
	<tr>
		<td>Nama Lengkap</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="nama_lengkap" value="<?php echo $d['nama_lengkap'] ?>">
		</td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" value="<?php echo $d['email'] ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Daftar"></td>
	</tr>
<?php
}
?>
</table>