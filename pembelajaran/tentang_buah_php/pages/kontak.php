<?php 
  $judul = 'tentangbuah.com';
  $nav = ['Home','Apel','Jeruk','Mangga','Pisang','Kontak','Buah'];
  $cprght = 'copyright bibism 2022';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
    <div class="wrapper">
      <div class="contain">
        <header>
          <img src="../img/buah.jpg" alt="" />
          <h1><?= $judul?></h1>

          <nav>
            <ul>
              <li><a href="../index.php"><?= $nav[0]?></a></li>
              <li>
                <a href="#"><?= $nav[6]?></a>
                <ul>
                  <li><a href="apel.php"><?= $nav[1]?></a></li>
                  <li><a href="jeruk.php"><?= $nav[2]?></a></li>
                  <li><a href="mangga.php"><?= $nav[3]?></a></li>
                  <li><a href="pisang.php"><?= $nav[4]?></a></li>
                </ul>
              </li>
              <li><a href="#"><?= $nav[5]?></a></li>
            </ul>
          </nav>
        </header>
        <section>
          <form action="" method="get">
            <fieldset>
              <legend>Informasi Pemesanan</legend>
              <table>
                <tr>
                  <td>Nama :</td>
                  <td>
                    <input
                      type="text"
                      placeholder="masukan nama anda!"
                      required
                    />
                  </td>
                </tr>
                <tr>
                  <td>Email :</td>
                  <td>
                    <input
                      type="email"
                      placeholder="masukan email anda!"
                      required
                    />
                  </td>
                </tr>
                <tr>
                  <td>Alamat :</td>
                  <td>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                  </td>
                </tr>
              </table>
              <input type="button" name="button" value="Kirim" />
            </fieldset>
          </form>
        </section>
        <footer>
          <p>
            <i class="fa fa-copyright" aria-hidden="true"
              ><?= $cprght?></i>
          </p>
        </footer>
      </div>
    </div>
  </body>
</html>
