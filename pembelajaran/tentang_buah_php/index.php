<?php 
  $judul = 'tentangbuah.com';
  $nav = ['Home','Apel','Jeruk','Mangga','Pisang','Kontak','Buah'];
  $cprght = 'copyright bibism 2022';


  for ($i=0; $i < 5; $i++) { 
    echo $i;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Documen</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="wrapper">
      <div class="contain">
        <header>
          <img src="img/buah.jpg" alt="" />
          <h1><?= $judul?></h1>

          <nav>
            <ul>
              <li><a href="#"><?= $nav[0]?></a></li>
              <li>
                <a href="#"><?= $nav[6]?></a>
                <ul>
                  <li><a href="pages/apel.php"><?= $nav[1]?></a></li>
                  <li><a href="pages/jeruk.html"><?= $nav[2]?></a></li>
                  <li><a href="pages/mangga.html"><?= $nav[3]?></a></li>
                  <li><a href="pages/pisang.html"><?= $nav[4]?></a></li>
                </ul>
              </li>
              <li><a href="pages/kontak.html"><?= $nav[5]?></a></li>
            </ul>
          </nav>
        </header>
        <section>
          <h2>Definisi</h2>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi
            distinctio, rem provident nam omnis sequi nostrum assumenda debitis
            atque, in animi autem itaque! Accusamus nobis excepturi, numquam
            ullam consequatur quos?
            <br />
            <br />
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi
            distinctio, rem provident nam omnis sequi nostrum assumenda debitis
            atque, in animi autem itaque! Accusamus nobis excepturi, numquam
            ullam consequatur quos?
            <br />
            <br />
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi
            distinctio, rem provident nam omnis sequi nostrum assumenda debitis
            atque, in animi autem itaque! Accusamus nobis excepturi, numquam
            ullam consequatur quos?
          </p>
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