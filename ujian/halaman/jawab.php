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
	$alamat=$data['alamat'];
	
	echo "Nama = ".ucwords($nama). "<br>";
	echo "Email = ".$email. "<br>";
	echo "Alamat = ".ucwords($alamat). "<br>";
	echo "<br><br>";

       if(isset($_POST['submit'])){
            $pilihan=$_POST["pilihan"];
            $id_soal=$_POST["id"];
            $jumlah=$_POST['jumlah'];
            
            $score=0;
            $benar=0;
            $salah=0;
            $kosong=0;
            
            for ($i=0;$i<$jumlah;$i++){
                //id nomor soal
                $nomor=$id_soal[$i];
                
                //jika user tidak memilih jawaban
                if (empty($pilihan[$nomor])){
                    $kosong++;
                }else{
                    //jawaban dari user
                    $jawaban=$pilihan[$nomor];
                    
                    //cocokan jawaban user dengan jawaban di database
                    $query=mysqli_query($koneksi, "select * from tbl_soal where id_soal='$nomor' and knc_jawaban='$jawaban'");
                    
                    $cek=mysqli_num_rows($query);
                    
                    if($cek){
                        //jika jawaban cocok (benar)
                        $benar++;
                    }else{
                        //jika salah
                        $salah++;
                    }
                    
                } 
                /*RUMUS
                Jika anda ingin mendapatkan Nilai 100, berapapun jumlah soal yang ditampilkan 
                hasil= 100 / jumlah soal * jawaban yang benar
                */
                
                $result=mysqli_query($koneksi, "select * from tbl_soal WHERE aktif='Y'");
                $jumlah_soal=mysqli_num_rows($result);
                $score = 100/$jumlah_soal*$benar;
                $hasil = number_format($score,1);
            }
        }

        //Lakukan Penyimpanan Kedalam Database
      echo "<table border=0>
         <tr><td>Jawaban Benar</td><td> : $benar </td></tr>
         <tr><td>Jawaban Salah</td><td> : $salah</td></tr>
         <tr><td>Soal Tidak di jawab</td><td>: $kosong</td></tr>
		 <tr><td> Score anda adalah : $score </td></tr>
		</table>
		</div>";
        ?>
	<a class="btn btn-primary" href="index.php?page=kunci" role="button">Lihat Kunci Jawaban</a>
	&nbsp;<a href="../index.php">Home</a>
</body>
</html>