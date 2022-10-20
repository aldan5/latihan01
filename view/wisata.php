<?php
    $url = "../data/wisata.json";
    $file = file_get_contents($url);
    $data = json_decode($file,true);

    $wisata = $data["wisata"];
    
    //$dt = json_encode($wisata);
    
    // echo "<pre>";
    // var_dump($wisata[1]);
    // echo "</pre>";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>wisata</title>
	<link rel="stylesheet" href="../style/wisata.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<nav>
       
        <div class="logo">
            <span id="clock" 
                style="padding: 50px;">jam menit detik</span>
            <span>E-Commerce Tourism Baubau</span>
        </div>
        
        <div class="wrappers">
            <li><a href="beranda.php">Beranda</a></li>
            <li><a href="wisata.php">Wisata</a></li>
            <li><a href="aboutme.php">Tentang Kami</a></li>
            <li><a href="dev.php">Profil developer</a></li>
        </div>
    </nav>
    <main>
    
       

    	<div class="container">
        <h1>Destinasi Wisata Kota Baubau</h1>
        
    		<div class="container-cards">
            <?php foreach($wisata as $wis):?>  
    		<div class="card">
    			<li><img src="<?php echo $wis["pict"]; ?>" width="200px" height="100px"></li>
    			<li><?php echo $wis["nama"]?></li>
    			<li><?php echo $wis["jenis"]?></li>
    			<li><?php echo $wis["track"]?></li>
                <button type="button" id="det">Details</button>
    		</div>
            <?php endforeach; ?>
            
            <div class="info">
             <div class="head-inf">
                <h3>Benteng Keraton</h3>
                <button id="close">X</button>
             </div>
             <img src="../view/gambar/benteng keraton.jpg">
             <p id="information">Bentenmg keratoii adalah benten yan terluyas didunnia</p>

        </div>
           
        
    </main>
   

    <div class="sosmed">
        <div class="instagram"><i class="fa-brands fa-square-instagram"></i> infobutonraya</div>
        <div class="fb"><i class="fa-brands fa-square-facebook"></i> Pesatuan Buton</div>
        <div class="pos"><i class="fa-solid fa-signs-post"></i> 93721</div>
        <div class="call"><i class="fa-solid fa-phone"></i> 0402-211529</div>
        <div class="email"><i class="fa-solid fa-envelope"></i> kotabaubau@gmail.com</div>
    </div>
</body>
<script src="../data/wisata.js"></script>
<script src="../style/jquery.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</html>
