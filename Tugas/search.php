<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Searching</title>
</head>

<body>
<h1>Pencarian Data Mahasiswa</h1>
<?php
   $search=$_GET['nama'];
   $conn=mysqli_connect("localhost","root","");
   mysqli_select_db($conn,"dini-php");
   $sqlstr="select * from mahasiswa where nama like '%$search%'";
   $hasil=mysqli_query($conn,$sqlstr);
   $jumlah=mysqli_num_rows($hasil);
   echo "<h3>Data ditemukan : $jumlah</h3>";
   while($record=mysqli_fetch_row($hasil)){
   echo "<br>NRP : $record[0] <br>";
   echo "Nama : $record[1] <br>";
   echo "Foto : $record[2] <br>";
   $sqlstr="select Nama from Jurusan where ID_Jur='$record[3]'";
   $hasil2=mysqli_fetch_row(mysqli_query($conn,$sqlstr));
   echo "Jurusan : $hasil2[0] <br>";
   }
?>
        <a href="form_tambahdata.html">Back to Home</a>
</body>
</html>