<?php 
$teman="teman-teman Dinah :)"
 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>OUTPUT KE-2 PAW</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<script>
		var nama = prompt ("Haloo! Namaku adalah :");
		var asal = prompt ("Aku berasal dari :");
	</script>
		<h1>Halo, Selamat Datang <?php echo "$teman";?> </h1>
 			<p><?php echo  '"ini adalah output dari pertemuan Mata Kuliah PAW yang ke -2 pada tanggal 29 Agustus 2022"'; ?> </p>
 		<h3> 1. Tipe Data PHP : Integer </h3> 
 			<p> Tipe Data Integer merupakan Tipe Data yang berupa bilangan bulat baik positif maupun negatif  <br><br>
 			contoh ke-1 merupakan hasil dari perkalian variabel <br> x = 3
 			dengan <br> y = 3 <br> yang hasilnya merupakan bulan lahirku</p>
 			<?php  
 		 		$x=3;
 				$y=3;
				var_dump($x * $y) ;
			?>
 		 	
			<br>
 			<p>contoh ke-2 merupakan total bayar dari jumlah : <br> 
 				barang = 5 <br>
 				total  = 1221 <br> 
 				diskon = 1192 <br>
 				yang hasilnya merupakan tanggal lahirku</p>
 		 	<?php  
 		 		$jml_barang    =5;
			    $subtotal    =1221;
			    $diskon        =1192;
			    $bayar        =$subtotal-$diskon;			 
			    var_dump($subtotal-$diskon);
			?> <br>

		<h3> 2. Tipe Data PHP : String</h3> 
 			<p> Tipe Data String merupakan Tipe data yang berisi text, kalimat, atau kumpulan karakter.<br><br>
 			contoh ke-1 yaitu penggabungan dari nama depan dan nama belakang.<br>
 				nama depan = Dinah<br>
 				nama belakang = Nuraini
 			</p>
 			<?php  
 		 		$nama_depan = " Dinah";
				$nama_belakang = "Nuraini";
				echo $nama_depan . " ". $nama_belakang;

			?>
 		 	
			<br>
 			<p>contoh ke-2 yaitu mengembalikan string dari kata <br>
 			"Dinah Nuraini"</p>
 		 	<?php  
 		 		
			    echo strrev("Dinah Nuraini");
			?>
			<br>
		<h3> 3. Tipe Data PHP : Float</h3>
 			<p> Tipe Data  Float adalah angka dengan titik desimal dan dapat diperluas ke bentuk eksponensial. <br><br>
 			contoh ke-1  yaitu Nilai float tidak lain adalah pecahan desimal yang memiliki presisi sendiri. dengan,<br>
 			harga jual   =0.9;<br>
    		harga beli   = 29.0;<br>
 			<?php
    			$bulan   = 0.9;
    			$tanggal  = 29.0;

    			echo " Harga jualnya adalah $bulan \n";
    			{
    				echo "Harga belinya adalah $tanggal";
    			}
			?>
			<br>
 			<p>contoh ke-2 yaitu penjumlahan dan perkalian bilangan float antara bulan dan tanggal lahir dengan variabel <br>
 				a = 0.9<br>
 				b = 29.0 <br>
 		 	<?php  
 		 		$a = 0.9;
 				$b = 29.0;
 				$c = $a + $b; 
			    echo "Hasil penjumlahan adalah $c";
			    echo "<br>";

			    //perkalian bilangan float
			    $d=$a * $b;
			    echo "Hasil perkalian adalah $d"
			?>
		<h3> 4. Perulangan For</h3> 
			<p>contoh ke-1 yaitu perulangan sebanyak 9 kali di mulai dari 1 dan kurang dari 10 <br><br>
 			<?php 
				for ($i=1; $i < 10 ; $i++) { 
				    // inisialisasi, kondisi terminasi , inkremen
				    echo("Hello World! ke- ".$i."<br>");
				}

			?>

			<p>contoh ke-2 yaitu menampilkan angka di mulai dari 1 dan sama dengan 10 <br><br>
 			<?php 
				for ($j=1; $j <= 10 ; $j++) { 
				    
				    echo $j;
				    // membuat perulangan yang menampilkan angka 1 - 10
				}

			?>
</body>
</html>