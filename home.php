<?php
    session_start();
    if (empty($_SESSION['username']))
        {
            header("location:login.php");
        }
?>
<html>
      <title> Halaman </title>
          <body>
              <H4> SELAMAT ANDA BERHASIL LOGIN
              <?php
                    echo $_SESSION['username'];
              ?>
              </H4>
			  <hr>
			  <h2>Daftar Produk</h2>
			  <img src="kaos.jpg" width="230px" height="230px">
			  <br><b>70.000</b>
			  <br><br>
			  <img src="baju.jpg" width="230px" height="230px">
			  <br><b>170.000</b>
			  <br><br>

          </body>
</html>
