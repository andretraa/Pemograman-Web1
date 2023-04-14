<?php
session_start();

if(isset($_COOKIE['nama']) && isset($_COOKIE['jeniskelamin']) && isset($_COOKIE['tempatlahir']) && isset($_COOKIE['tanggallahir']) 
&& isset($_COOKIE['agama']) && isset($_COOKIE['alamatlengkap'])) {
  $nama = $_COOKIE['nama'];
  $jeniskelamin = $_COOKIE['jeniskelamin'];
  $tempatlahir = $_COOKIE['tempatlahir'];
  $tanggallahir = $_COOKIE['tanggallahir'];
  $agama = $_COOKIE['agama'];
  $alamatlengkap = $_COOKIE['alamatlengkap'];
} else {
  $nama = "";
  $jeniskelamin = "";
  $tempatlahir = "";
  $tanggallahir = "";
  $agama = "";
  $alamatlengkap = "";
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Form Biodata</title>
  <style>
    body {
	background: #1690A7;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 150vh;
	flex-direction: column;
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

form {
	width: 500px;
	border: 2px solid #ccc;
	padding: 30px;
	background: #fff;
	border-radius: 15px;
}
h2 {
	text-align: center;
	margin-bottom: 40px;
}

h3 {
	text-align: center;
	margin-bottom: 40px;
}
input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
label {
	color: #888;
	font-size: 18px;
	padding: 10px;
}
</style>
</head>
<body>
  <form action="proses.php" method="post">
  <h2>Form Biodata</h2>
  <h3>Silahkan masukan data diri anda dibawah</h3>
    <label for="nama">Nama Lengkap:</label>
    <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>"><br><br>

    <label for="jeniskelamin">Jenis Kelamin</label>
    <input type="jeniskelamin" id="jeniskelamin" name="jeniskelamin" value="<?php echo $jeniskelamin; ?>"><br><br>

    <label for="tempatlahir">Tempat lahir</label>
    <input type="tempatlahir" id="tempatlahir" name="tempatlahir" value="<?php echo $tempatlahir; ?>"><br><br>

    <label for="tanggallahir">Tanggal Lahir</label>
    <input type="tanggallahir" id="tanggallahir" name="tanggallahir" value="<?php echo $tanggallahir; ?>"><br><br>

    <label for="agama">Agama</label>
    <input type="agama" id="email" name="agama" value="<?php echo $agama; ?>"><br><br>

    <label for="alamatlengkap">Alamat Lengkap</label>
    <input type="alamatlengkap" id="alamatlengkap" name="alamatlengkap" value="<?php echo $alamatlengkap; ?>"><br><br>
    <input type="submit" name="submit" value="+ Add">
  </form>
</body>
</html>
