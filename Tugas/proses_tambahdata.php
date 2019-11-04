<html>

<head>
    <title>Tambah Data</title>
</head>

<body>
    <h2>TAMBAH DATA</h2>
    <?php
    $NRP = $_POST["NRP"];
    $nama = $_POST["Nama"];
    $alamat = $_POST["Alamat"];
    $jurusan = $_POST["ID_Jur"];
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi gagal");
    mysqli_select_db($conn, "dini-php");
    $sqlstr = "insert into mahasiswa (NRP,Nama,Alamat,ID_jur)
            values ('$NRP','$nama','$alamat','$jurusan')";
    $hasil = mysqli_query($conn, $sqlstr);
    if ($hasil) {
        echo "<h4>Berhasil Menyimpan Data!</h4><br>";
    } else {
        echo "<h4>Tidak Berhasil Menyimpan</h4><br>";
    }
    mysqli_select_db($conn, "dini-php");
    $hasil = mysqli_query($conn, "select Nama from jurusan where ID_Jur='$jurusan'");
    $row = mysqli_fetch_array($hasil);
    $jurusan = $row[0];
    echo "NRP : $NRP <br>";
    echo "Nama : $nama <br>";
    echo "Alamat : $alamat <br>";
    echo "Jurusan : $jurusan <br>";
    ?>
    <a href="form_tambahdata.html">Home</a>
</body>

</html>