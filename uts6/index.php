<!DOCTYPE html>

<!--
Nama (NRP)
- Alfin Liunardi Senjaya (1672034)
- William Wijaya (2172011)
- 

-->
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body>

<link rel="stylesheet" type="text/css" href="css/web_style.css">

<!-- Navbar (sit on top) -->
<div class="top hide-small">
	<div class="bar xlarge black opacity hover-opacity-off" id="myNavbar">
		<a href="index.php" class="bar-item button">HOME</a>
		<a href="jenis.php" class="bar-item button">JENIS PASTA</a>
		<a href="list.php" class="bar-item button">LIST RESTORAN</a>
		<a href="about.php" class="bar-item button">ABOUT US</a>
	</div>
</div>
  
<!-- Header with image -->
<header class="bgimg display-container grayscale-min" id="home">
	<img src="images/pizza1.jpg" style="width:100%;" >
	<div class="display-middle center">
		<span>Pasta</span>
		<p><a href="#HOME" class="button xxlarge black" style="font-size:25px">Learn More !</a></p>
	</div>
</header>

<!-- DEFINISI -->
<div class="container black padding-64 xlarge" id="HOME">
  <div class="content">
	<div class="row center border border-dark-grey">
		<a href="javascript:void(0)" onclick="openMenu(event, 'Definisi');" id="myLink">
			<div class="col s4 tablink padding-large hover-red">Definisi</div>
		</a>
		<a href="javascript:void(0)" onclick="openMenu(event, 'History');">
			<div class="col s4 tablink padding-large hover-red">History</div>
		</a>
		<a href="javascript:void(0)" onclick="openMenu(event, 'Persebaran');">
			<div class="col s4 tablink padding-large hover-red">Persebaran</div>
		</a>
	</div>

	<div id="Definisi" class="container menu padding-32 white">
		<h1>
			<b>Pasta</b>
		</h1>
		<img src="images/pizza1.jpg" style="width:100%;">
		<p class="text-grey">
			*Definisi Pasta*
		</p>
		<hr>
	</div>

	<div id="History" class="container menu padding-32 white">
		<h1>
			<b>History</b>
		</h1>
		<img src="images/pizza1.jpg" style="width:100%;">
		<p class="text-grey">
			*History Pasta*
		</p>
		<hr>
	</div>

	<div id="Persebaran" class="container menu padding-32 white">
		<h1>
			<b>Persebaran</b>
		</h1>
		<img src="images/pizza1.jpg" style="width:100%;">
		<p class="text-grey">
			*Persebaran Pasta*
		</p>
		<hr>
	</div>
	<br>

  </div>
</div>

<!-- Contact -->
<div class="container padding-64 blue-grey grayscale-min xlarge">
  <div class="content">
    <h1 class="center xlarge" style="margin-bottom:64px">Credits</h1>
    <p>Sumber data yang kami dapatkan : </p>
    <p>1. *Link*</p>
    <p>2. *Link*</p>
    <p>3. *Link*</p>
  </div>
</div>

<!-- Footer -->
<footer class="center black padding-48 large">
  <p>Made By 1672034 | *NRP* | *NRP*</p>
  <p class="tiny">Insipired By Some Web Template From W3 School</p>
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" red", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " red";
}
document.getElementById("myLink").click();
</script>

</body>
</html>

<!-- Halaman 2 -->

<!DOCTYPE html>
<html>
    <head>
        <title>Halaman 2</title>
        <link rel="stylesheet" href="css/web_style.css">
    </head>
    <body>
        <nav class="nav" class="bar2:hover">
            <a href="#1" class="bar" class=".bar:hover">Home</a>
            <a href="#2" class="bar" class=".bar:hover">Content</a>
            <a href="#3" class="bar" class=".bar:hover">Jenis-Jenis Pasta</a>
        </nav>
            <div class="img1">
            <div class="text">
            </div>
        </div>
            <article class="padding">
                <h1 size="20px" id="2">Content</h1>
                <br>
                <p><b>Pasta</b> adalah makanan olahan yang digunakan pada masakan Italia, yang biasanya terbuat dari adonan tidak beragi berbahan tepung gandum durum (semolina) yang dicampur dengan air atau telur dan dibentuk menjadi lembaran-lembaran atau bentuk-bentuk yang beragam, yang kemudian dimasak dengan cara direbus atau dipanggang. Di Indonesia, jenis pasta yang populer adalah spageti, makaroni dan lasagna.</p> 
                <br>
                <p id="3">Berikut beberapa jenis-jenis pasta :</p>
                <table>
                    <li>Spaghetti : pasta dengan helai panjang dan sangat halus</li>
                    <img src="images/spaghetti.jpg" width="200px" height="100px">
                    <li>Linguine : pasta yang mirip dengan spaghetti tetapi lebih lebar dibandingkan dengan potongan spaghetti</li>
                    <img src="images/linguine.jpg" width="200px" height="150px">
                    <li>Fettuccine : pasta yang memiliki bentuk rata seperti pita</li>
                    <img src="images/fettuccine.jpg" width="200px" height="125px">
                    <li>Capellini : adonannya mirip dengan spaghetti tetapi memiliki diameter lebih kecil</li>
                    <img src="images/capellini.jpg" width="250px" height="200px">
                    <li>Bucatini : pasta yang mirip juga dengan spaghetti tetapi memiliki lubang di tengahnya</li>
                    <img src="images/bucatini.jpg" width="200px" height="300px">
                    <li>Ravioli : lembaran pasta ditumpuk membentuk kantung-kantung kecil</li>
                    <img src="images/ravioli.jpg" width="200px" height="200px">
                    <li>Tortellini : pasta berukuran kecil dan berbentuk seperti cincin</li>
                    <img src="images/tortellini.jpg" width="225px" height="150px">
                    <li>Fusilli : pasta yang memiliki bentuk seperti pembuka botol tetapi memiliki spiral lebih rapat</li>
                    <img src="images/fusilli.jpg" width="225ps" height="150px">
                    <li>Farfalle : pasta yang berbentuk dasi kupu-kupu</li>
                    <img src="images/farfalle.jpg" width="250px" height="200px">
                    <li>Conchiglie : pasta yang memiliki bentuk menyerupai kerang</li>
                    <img src="images/conchiglie.jpg" width="200px" height="175px">
                    <li>Gnocchi : pasta yang berbentuk seperti pangsit</li>
                    <img src="images/gnocchi.jpg" width="275px" height="225px">
                    <li>Penne : penne adalah jenis pasta berlubang, dinamai penne karena bentuknya yang mirip dengan pena</li>
                    <img src="images/penne.jpg" width="225px" height="175px">
                    <li>Ziti : pasta yang bentuknya mirip seperti penne tetapi memiliki potong lurus di bagian ujungnya</li>
                    <img src="images/ziti.jpg" width="250px" height="200px">
                    <li>Orecchiette : bentuk pasta yang mirip dengan telinga kecil</li>
                    <img src="images/orecchiette.jpeg" width="200px" height="200px">
                    <li>Lasagna : pasta yang berbentuk lembaran datar</li>
                    <img src="images/lasagna.jpg" width="250px" height="200px">
                </table>
            </article>
    </body>
</html>
