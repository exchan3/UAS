<?php
 
    include '../koneksi.php';
 
    session_start();
 
    $jawab = $_SESSION['jawab'];
 
?>
 
<!DOCTYPE html>
 
<html>
 
<head>
 
    <title>Kunci Jawaban</title>
    <meta charset="utf-8">
 
</head>
 
<body>
 	<center><h2>KUNCI JAWABAN</h2></center><BR>

 
    <table border="1" align="center" style="text-align: ">
 
        <tr>
 
            <td>NO</td>

            <td>Soal</td>
 
            <td>Jawaban Anda</td>
 
            <td>Kunci Jawaban</td>
 
            <td>Status</td>
 
        </tr>
 
        <?php
 
            $i = 0;
 
            $benar = $salah = 0;
 
            $sql =mysqli_query($koneksi,"select * from tbl_soal WHERE aktif='Y'");
 
            while($key = mysqli_fetch_array($sql)){
 
        ?>
 
        <tr>
 
            <td><?php echo $i+1; ?></td>

            <td><?php echo $key['soal']; ?></td>
 
            <td><?php echo $jawab[$i] ?></td>
 
            <td><?php echo $key['jawaban']; ?></td>
 
            <td>
 
                <?php
 
                    if ($jawab[$i] == $key['jawaban']) {
 
                        echo "Benar";
 
                        $benar++;
 
                    }else{
 
                        echo "Salah";
 
                        $salah++;
 
                    }
 
                 ?>
 
            </td>
 
        </tr>
 
        <?php
 
                $i++;
 
            }
 
         ?>
 
    </table>
	
 	<div align="center"><a href="index.php?page=jawab">Kembali ke Result</a></div>
	<div align="center"><a href="../index.php">Kembali ke Home</a></div>
</body>
</html>
