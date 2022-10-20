<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/beranda.css">
    <title>Document</title>
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
            <li><a href="dev.php">profil developer</a></li>
        </div>
    </nav>
    <main>
        <div class="forms">
            <form method="post" action="wisata.php">
                <table>
                    <h2>Sistem Informasi Wisata Kota Baubau</h2>
                    <th>
                        <tr>
                        <td><label for="email">masukkan username</label></td>
                        <td><input type="email" id="email" name="email"></td>
                        </tr>
                        <br><br>
                    </th>
                    <th>
                        <tr>
                            <td><label for="pass">masukkan password</label></td>
                            <td><input type="password" id="pas" name="pass"></td>
                        </tr>
                    </th>
                    <td><button type="submit" name="masuk">Login</td>
                </table>
                
              
                
            </form>
        </div>
    </main>
    <aside>
        <img src="gambar/logo baubau.jpg" class="lb">
        <p id="desc">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis corporis aperiam in fugiat voluptate dolor! Sint unde rem qui id incidunt error impedit, enim corporis 
            soluta accusamus? Ad, at expedita.
        </p>
    </aside>
</body>
</html>