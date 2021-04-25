<?php
error_reporting(0);
if(isset($_POST['submit'])) {
	$angka1 = $_POST['input1'];
	$angka2 = $_POST['input2'];
	$operator = $_POST['operator'];
if (!$angka1 == "" AND !$angka2 == "") {
	

	if ($operator == "tambah") {
		$hasil = $angka1 + $angka2;
	} elseif ($operator == "kurang"){
		$hasil = $angka1 - $angka2;
	}elseif ($operator == "kali"){
		$hasil = $angka1 * $angka2;
	}elseif ($operator == "bagi"){
		$hasil = $angka1 / $angka2;
	} }else {
		$isi = "silahkan isi nilai terlebih dahulu";
	}

}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Kalkulator </title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styled.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
<div class="container-text center-block"><br><br><br><br>	
<div class="kalkulator">
	<h1>Kalkulator Sederhana</h1><br>
		<form method="post" action="">
			<input type="text" name="input1" placeholder="masukkan angka pertama"> <br><br>
			</select><br>
			<input type="text" name="input2" placeholder="masukkan angka kedua"> <br><br>
			<label>Pilih operator </label> <select name="operator">
				<option value="tambah">tambah</option>
				<option value="kurang">kurang</option>
				<option value="kali">kali</option>
				<option value="bagi">bagi</option>
			</select><br><br>
			<button type="submit" name="submit">submit</button>

			<div class="hasil"><textarea> <?php echo $hasil.$isi; ?></textarea></div>
        
            <div class="row">
                <div class="col-sm-12">
                <div class="text-center">
                    <p> &copy;copyright 2021 Nadilla Putri</a>.</p>
        </form>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/script.js"></script>    
    </div>
</body>
</html>