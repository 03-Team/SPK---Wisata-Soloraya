<?php
	session_start();
	include("koneksi.php");
	if (@$_SESSION['userlogin'] == "")
	{
		header("location:login.php?pesan=Belum Login");
		exit;
	}
	if (isset($_POST['button']))
	{
		mysqli_query($db, "INSERT INTO alternatif(id_alternatif, nama_alternatif, deskripsi) VALUES('$_POST[id_alternatif]', '$_POST[nama_alternatif]', '$_POST[deskripsi]')");
		header("location:alternatif.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SPK Destinasi Wisata Metode Fuzzy Database</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Georgia, Times New Roman, Times, serif;
	font-size: 13px;
	color: #333333;
}
.style1 {
	color: #000099;
	font-size: 24px;
}
a:link {
	text-decoration: none;
	color: #333333;
}
a:visited {
	text-decoration: none;
	color: #333333;
}
a:hover {
	text-decoration: underline;
	color: #FF0000;
}
a:active {
	text-decoration: none;
	color: #333333;
}
.style2 {font-weight: bold}
-->
</style></head>

<body>
<table width="1000" border="0" align="center" cellpadding="7" cellspacing="1" bgcolor="#000099">
  <tr>
    <td height="50" bgcolor="#FFFFFF" align="center"><span class="style1">SPK Destinasi Wisata Metode Fuzzy Database</span></td>
  </tr>
  <tr>
    <td height="35" bgcolor="#FFFFFF"><span class="style2"><a href="admin.php">Home</a> | <a href="alternatif.php">Alternatif</a> | <a href="kriteria-fuzzy.php">Kriteria Fuzzy</a> | <a href="nilai-fuzzy.php">Nilai Fuzzy</a> | <a href="logout.php">Logout</a></span></td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#FFFFFF"><br />
      <strong>Tambah Data Alternatif</strong><br />
      <br />
      <form id="form1" name="form1" method="post" action="">
        <table width="450" border="0" cellpadding="5" cellspacing="1" bgcolor="#000099">
          <tr>
            <td width="159" bgcolor="#FFFFFF">ID Alternatif Wisata</td>
            <td width="218" bgcolor="#FFFFFF"><input type="text" name="id_alternatif" id="id_alternatif" /></td>
          </tr>
          <tr>
            <td width="159" bgcolor="#FFFFFF">Nama Alternatif Wisata</td>
            <td width="218" bgcolor="#FFFFFF"><input type="text" name="nama_alternatif" id="nama_alternatif" /></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF">Deskripsi</td>
            <td bgcolor="#FFFFFF"><textarea name="deskripsi" cols="30" rows="4" id="deskripsi"></textarea></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF">&nbsp;</td>
            <td bgcolor="#FFFFFF"><input type="submit" name="button" id="button" value="Simpan" /></td>
          </tr>
        </table>
      </form>
      <br />
    <br /></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
      <td width="47%" height="35" align="left"><strong>&copy; Kelompok 3</strong></td>
        <td width="53%" height="35" align="right"><strong>Sistem Pendukung Keputusan 2024</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
