<HTML>

<HEAD>
    <title>Hapus Data</title>
</HEAD>

<BODY>
    <h1>Hapus Data Mahasiswa</h1>
    <?php
    $del = $_POST['NRP'];
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "dini-php");
    $sqlstr = "Delete from mahasiswa where NRP='$del'";
    $hasil = mysqli_query($conn, $sqlstr) or die(mysqli_error());
    echo "<h3>Data dengan NRP : $del Sudah berhasil dihapus </h3>";
    ?>
    <a href="form_tambahdata.html">Return to Home</a>
</BODY>

</HTML>