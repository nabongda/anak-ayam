<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>anak ayam</title>
</head>
<body>
<?php
// jumlah ayam pertama
$anakayam=3;

echo "tek-kotek-kotek-kotek anak ayam turun ";
echo $anakayam;
echo "<br>";

// kondisi nilai awal $i=$anakayam jika variabel anakayam kurang dari 0 maka variabel anakayam dikurangi 1
for ($i=$anakayam; $i>0  ; $i--) { 
	$anakayam = $anakayam-1;
	if ($anakayam>0) {
        //jika$anakayam%2>0 maka akan menampilkan teks warna biru 
		if ($anakayam%2==0) {
			?>
			<p style="color:blue">mati satu tinggal <?php echo $anakayam ?> </p>
			<?php
        }

        //jika$anakayam%2>0 maka akan menampilkan teks warna orange 
		elseif ($anakayam%2>0) {
			?>
			<p style="color:orange">mati satu tinggal <?php echo $anakayam ?> </p>
			<?php
		}
    }
    
	else{
		echo "Mati satu habis semua T_T hiks";
	}
}
	?>
</body>
</html>
