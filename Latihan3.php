<!DOCTYPE html>
<html>
<head>
    <title>Menghitung Faktorial</title>
</head>
<body>
    <form name="nilai" method="POST">
    <table>
        <tr>
            <td>Masukkan Bilangan</td>
            <td><input type="text" name="Bil"/></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="hasil" value="Hasil"/></td>
        </tr>
    </table>

<?php
error_reporting(0);
if($_POST['hasil']!=''){
    $bil=$_POST['Bil'];
           
    function faktorial($bil){
        if($bil <= 1){
            $hasil = 1;
            return $hasil; 
        }else if($bil>1){
            for($i = 1; $i <= $bil; $i++){
                $hasil = $bil * faktorial($bil-1);
                }
            return $hasil;
        }
    }
    echo "Bilangan : " .$bil. "<br>";
    echo "Faktorial dari " .$bil. " adalah : " .faktorial($bil);
}
?>
</form>
</body>
</html>
