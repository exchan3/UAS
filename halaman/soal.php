<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Soal</title>
</head>

<body>
<center>	
	<?php
	include "../koneksi.php";   
	echo "<h3 style='color:blue;'>Pilihlah salah satu jawaban yang benar!</h3>";
  echo '<table width="100%" border="0">';
  
	$halaman = 1;
	$page=isset($GET["halaman"]) ? (int)$_GET["halaman"]:1;
	$mulai=($page>1)?($page*$halaman)-$halaman:0;
	
        $hasil=mysqli_query($koneksi, "select * from tbl_soal WHERE aktif='Y' ORDER BY RAND ()");
        $jumlah=mysqli_num_rows($hasil);
        $urut=0;
		    $tampilan=mysqli_query($koneksi, "select * from tbl_soal LIMIT $mulai, $halaman");
        while($row =mysqli_fetch_array($tampilan)){
            $id=$row["id_soal"];
            $pertanyaan=$row["soal"];
            $pilihan_a=$row["a"];
            $pilihan_b=$row["b"];
            $pilihan_c=$row["c"];
            $pilihan_d=$row["d"]; 
            ?>
            <table border="0" width="50%">
            <form name="form1" method="post" action="index.php?page=jawab">
            <input type="hidden" name="id[]" value=<?php echo $id; ?>>
            <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
            <tr>
                  <td width="5%"><?php echo $urut=$urut+1; ?></td>
                  <td><?php echo "$pertanyaan"; ?></td>
            </tr>
            <tr>
                  <td height="21">&nbsp;</td>
                <td>
               A.  <input name="option[<?php echo $id; ?>]" type="radio" value="A"> 
                <?php echo "$pilihan_a";?> </td>
            </tr>
            <tr>
                  <td>&nbsp;</td>
                <td>
               B. <input name="option[<?php echo $id; ?>]" type="radio" value="B"> 
                <?php echo "$pilihan_b";?> </td>
            </tr>
            <tr>
                  <td>&nbsp;</td>
                <td>
              C.  <input name="option[<?php echo $id; ?>]" type="radio" value="C"> 
                <?php echo "$pilihan_c";?></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
              D.   <input name="option[<?php echo $id; ?>]" type="radio" value="D"> 
                <?php echo "$pilihan_d";?> </td>
            </tr>   
        <?php
        }
        ?>
        
		</table>
		<tr>
		<td>
		<nav aria-label="Page navigation example">
		  <ul class="pagination justify-content-center">
			<li class="page-item disabled">
			  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Sebelumnya</a>
			</li>
			<li class="page-item">
			  <a class="page-link" href="#" >Selanjutnya</a>
			</li>
		  </ul>
		</nav>
		</td>
		</tr>
		</form>
	</center>
</body>
</html>