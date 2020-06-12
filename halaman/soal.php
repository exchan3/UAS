<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Soal</title>
</head>

<body>

<div align="center">
	<?php
include "../koneksi.php";   

    echo "<h3 style='color:blue;'>Pilihlah salah satu jawaban yang benar!</h3>";
 echo '<table width="100%" border="0">';

 
    session_start();
 
    $soal = $_SESSION['soal'];
 
    $no = $_SESSION['no'];
 
    if(isset($_POST['next'])){
 
        $_SESSION['jawab'][] = $_POST['option'];
 
        if($_POST['option'] == $soal[$no-2]['jawaban']){
 
            $_SESSION['score'] = $_SESSION['score'] + 10;
 
        }
 
    }
 
    if(isset($soal[$no-1])){
 
?>

<a href="index.php">Kembali ke soal 1</a>
 
    <form action="" method="POST">
 
        <p>
 
       
            <table border="0" width="40%">
            <tr><td> <?php
 
            echo $no.". "; $_SESSION['no']++;
 
            echo $soal[$no-1]['soal'];
 
            $jawaban = $_SESSION['option'][$no-1];
 
            shuffle($jawaban);
 
        ?></td></tr>
            <tr><td><?php
 
            for ($i=0; $i < 4; $i++) {
 
        ?>
 
            <input type="radio" name="option" value="<?php echo $jawaban[$i]; ?>" required/> <?php echo $jawaban[$i]; ?></br>
 
        <?php
 
            }
 
         ?>
 </td></tr>
        </table>
 
        </p>
 
        
        <input type="submit" name="next" value="next">
 
    </form>
 </div>
</body>
 
</html>
 
<?php
 
    }else{
 
        header("location:index.php?page=jawab");
 
    }
 
?>
</body>
</html>
