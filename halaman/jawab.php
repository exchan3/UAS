<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Result</title>
</head>

<body>
	<?php
//koneksi ke database
include "../koneksi.php";
	$qry=mysqli_query($koneksi, "select * from peserta order by id_user desc");
	$data=mysqli_fetch_array($qry);
	$nama=$data['nama'];
	$email=$data['email'];
    ?>

    <table border=0 align = center>
        <tr><td>Nama </td><td> : <?php echo ucwords($nama); ?></td></tr>
        <tr><td>Email </td><td> : <?php echo $email; ?></td></tr>
  
    <?php
 
 
    session_start();
 
    $jawab = $_SESSION['jawab'];
 
?>
  
        <?php
 
            $i = 0;
 
            $benar = $salah = 0;
 
            $sql =mysqli_query($koneksi,"select * from tbl_soal WHERE aktif='Y'");
 
            while($key = mysqli_fetch_array($sql)){
 
        
 
                    if ($jawab[$i] == $key['jawaban']) {
 
                        $benar++;
 
                    }else{

                         $salah++;
 
                    }
 
                $i++;
 
            }


            $result=mysqli_query($koneksi, "select * from tbl_soal WHERE aktif='Y'");
                $jumlah_soal=mysqli_num_rows($result);
                $score = 100/$jumlah_soal*$benar;
                $hasil = number_format($score,1);
 
         ?>
  
 
         <tr><td>Jawaban Benar </td><td> : <?php echo $benar; ?></td></tr>
         <tr><td>Jawaban Salah </td><td> : <?php echo $salah; ?></td></tr>
         </table>
		<div align="center"><h3>Score anda adalah : <?php echo $hasil; ?></h3></div>
        <div align="center"><a class="btn btn-primary" href="index.php?page=kunci" role="button">Lihat Kunci Jawaban</a>
            &nbsp;<a a class="btn btn-primary" href="../index.php">Home</a></div>
</body>
</html>