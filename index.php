<!DOCTYPE html>
<html lang="en">
<head>
<title>Angga Pratama</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  padding: 0;
  margin: 0;
}

/* Style the header */
header {
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
  background-image: url(https://www.pngmagic.com/product_images/website-background-image-size-psd-vector-photo.jpg);
  background-size: cover;
  background-position: 0 -150px ;
  border-bottom: 3px solid black;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; 
  background: #1E1854;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #3151C6;
  height: 300px; 
  background-image: url(https://www.pngmagic.com/product_images/background-image-cover-PSD-Vector-Photo.jpg);
  background-size: cover;
  background-position: 0 -150px;
  color: white;
  border-left: 3px solid black;
  /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
  font-family: 'Times New Roman', Times, serif;
}

/* Style the footer */
footer {
  background-color: black;
  padding: 1px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}

.jarak li {
  margin-bottom: 8px;
}

</style>
</head>
<body>

<header>
  <h2>Angga Pratama</h2>
  <h2>2005176007</h2>
</header>

<section>
  <nav>
    <ul class="jarak">
      <li><a href="?menu=home">home</a></li>
      <li><a href="?menu=profil">profil</a></li>
      <li><a href="?menu=medsos">medsos</a></li>
      <li><a href="?menu=covid">cek covid</a></li>
    </ul>
  </nav>
  
  <article>
    <?php
    error_reporting (E_ALL ^ E_NOTICE);
    $menu=$_GET['menu'];
    if($menu=="home") { include "home.html";}
    else if ($menu=="profil") { include "profil.html";}
    else if ($menu=="medsos") { include "medsos.html";}
    else if ($menu=="covid") { include "covid.php";}
    else { include "home.html";};
    ?>
  </article>
</section>



<footer>
  <p>Latihan Dasar HTML dan CSS - Pemrogaman Web 1</p>
</footer>

</body>
</html>

