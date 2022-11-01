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
                  <li><a href="#"><?= $nav[2]?></a></li>
                  <li><a href="mangga.php"><?= $nav[3]?></a></li>
                  <li><a href="pisang.php"><?= $nav[4]?></a></li>
                </ul>
              </li>
              <li><a href="kontak.php"><?= $nav[5]?></a></li>
            </ul>
          </nav>
        </header>

        <section>
          <h2>Jeruk</h2>
          <img src="../img/jeruk.jpg" width="150px" height="150px" alt="" />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste
            corrupti porro mollitia corporis quam pariatur tenetur recusandae,
            animi dicta facilis dolores dolorum. Consequatur, id. Quos, suscipit
            esse? Optio, nisi commodi?
          </p>

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ipsa
            modi incidunt unde magni id excepturi veniam vitae laboriosam
            deserunt, quod perferendis vero ullam repellat, ducimus consequuntur
            porro similique aut!
          </p>

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident,
            fuga perferendis voluptates rem eaque quas cupiditate animi velit
            sed beatae, corrupti reiciendis laborum aperiam! Sapiente esse quas
            dolores unde culpa!
          </p>

          <ol>
            <li>meningkatkan daya memory</li>
            <li>baik untuk usus</li>
            <li>meningkatkan sistem kekebalan tbuh</li>
            <li>baik untuk jantung</li>
            <li>menurunkan tekanan darah</li>
            <li>mengurangi resiko diabetes</li>
          </ol>

          <h3>Daftar Harga</h3>
          <table border="1">
            <tr>
              <th rowspan="2">Jenis Apel</th>
              <th colspan="2">Harga</th>
            </tr>
            <tr>
              <th>Per Kilo</th>
              <th>Per Biji</th>
            </tr>

            <tr>
              <td>Apel manalagi</td>
              <td>50.000</td>
              <td>5.000</td>
            </tr>
            <tr>
              <td>Apel fuji</td>
              <td>60.000</td>
              <td>6.000</td>
            </tr>
            <tr>
              <td>Apel anna</td>
              <td>70.000</td>
              <td>7.000</td>
            </tr>
            <tr>
              <td>Apel merah</td>
              <td>55.000</td>
              <td>5.500</td>
            </tr>
          </table>
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
