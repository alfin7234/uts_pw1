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
	<img src="images/pizza1.jpg" style="width:100%;" id="myMap">
	<div class="display-middle center">
		<span>JENIS - JENIS PASTA</span>
		<p><a href="#menu" class="button xlarge black" style="font-size:25px"">Learn More !</a></p>
	</div>
</header>

<!-- JENIS PASTA -->
            <article class="padding">
                <p><b>Pasta</b> adalah makanan olahan yang digunakan pada masakan Italia, yang biasanya terbuat dari adonan tidak beragi berbahan tepung gandum durum (semolina) yang dicampur dengan air atau telur dan dibentuk menjadi lembaran-lembaran atau bentuk-bentuk yang beragam, yang kemudian dimasak dengan cara direbus atau dipanggang. Di Indonesia, jenis pasta yang populer adalah spageti, makaroni dan lasagna.</p> 
                <br>
                <p>Berikut beberapa jenis-jenis pasta :</p>
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
			
<div class="container yellow grayscale-min padding-64 xlarge" id="menu">
	<div class="content">
		<div class="row center border border-dark-grey">
			<a href="javascript:void(0)" onclick="openMenu(event, 'Pizza');" id="myLink">
				<div class="col s4 tablink padding-large hover-red">Pizza</div>
			</a>
			<a href="javascript:void(0)" onclick="openMenu(event, 'Pasta');">
				<div class="col s4 tablink padding-large hover-red">Salads</div>
			</a>
			<a href="javascript:void(0)" onclick="openMenu(event, 'Starter');">
				<div class="col s4 tablink padding-large hover-red">Starter</div>
			</a>
		</div>

		<div id="Pizza" class="container menu padding-32 white">
			<h1><b>Margherita</b> <span class="right tag dark-grey round">$12.50</span></h1>
			<p class="text-grey">Fresh tomatoes, fresh mozzarella, fresh basil</p>
			<hr>

			<h1><b>Formaggio</b> <span class="right tag dark-grey round">$15.50</span></h1>
			<p class="text-grey">Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)</p>
			<hr>

			<h1><b>Chicken</b> <span class="right tag dark-grey round">$17.00</span></h1>
			<p class="text-grey">Fresh tomatoes, mozzarella, chicken, onions</p>
			<hr>

			<h1><b>Pineapple'o'clock</b> <span class="right tag dark-grey round">$16.50</span></h1>
			<p class="text-grey">Fresh tomatoes, mozzarella, fresh pineapple, bacon, fresh basil</p>
			<hr>

			<h1><b>Meat Town</b> <span class="tag red round">Hot!</span><span class="right tag dark-grey round">$20.00</span></h1>
			<p class="text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p>
			<hr>

			<h1><b>Parma</b> <span class="tag grey round">New</span><span class="right tag dark-grey round">$21.50</span></h1>
			<p class="text-grey">Fresh tomatoes, mozzarella, parma, bacon, fresh arugula</p>
		</div>

		<div id="Pasta" class="container menu padding-32 white">
			<h1><b>Lasagna</b> <span class="tag grey round">Popular</span> <span class="right tag dark-grey round">$13.50</span></h1>
			<p class="text-grey">Special sauce, mozzarella, parmesan, ground beef</p>
			<hr>

			<h1><b>Ravioli</b> <span class="right tag dark-grey round">$14.50</span></h1>
			<p class="text-grey">Ravioli filled with cheese</p>
			<hr>

			<h1><b>Spaghetti Classica</b> <span class="right tag dark-grey round">$11.00</span></h1>
			<p class="text-grey">Fresh tomatoes, onions, ground beef</p>
			<hr>

			<h1><b>Seafood pasta</b> <span class="right tag dark-grey round">$25.50</span></h1>
			<p class="text-grey">Salmon, shrimp, lobster, garlic</p>
		</div>


		<div id="Starter" class="container menu padding-32 white">
			<h1><b>Today's Soup</b> <span class="tag grey round">Seasonal</span><span class="right tag dark-grey round">$5.50</span></h1>
			<p class="text-grey">Ask the waiter</p>
			<hr>

			<h1><b>Bruschetta</b> <span class="right tag dark-grey round">$8.50</span></h1>
			<p class="text-grey">Bread with pesto, tomatoes, onion, garlic</p>
			<hr>

			<h1><b>Garlic bread</b> <span class="right tag dark-grey round">$9.50</span></h1>
			<p class="text-grey">Grilled ciabatta, garlic butter, onions</p>
			<hr>

			<h1><b>Tomozzarella</b> <span class="right tag dark-grey round">$10.50</span></h1>
			<p class="text-grey">Tomatoes and mozzarella</p>
		</div><br>
	</div>
</div>
  
<!-- Contact -->
<div class="container padding-64 blue-grey grayscale-min xlarge">
  <div class="content">
    <h1 class="center xlarge" style="margin-bottom:64px">Credits</h1>
    <p>Sumber data yang kami dapatkan : </p>
    <p>1. https://www.kompas.com/food/read/2020/10/14/190700375/15-jenis-pasta-yang-sering-dijumpai-di-indonesia?page=all</p>
    <p>2. https://www.unileverfoodsolutions.co.id/id/inspirasi-chef/knorr-world-cuisines/kenali-bentuk-pasta-anda-plus-beberapa-resep-pasta-untuk-dicoba.html</p>
    <p></p>
  </div>
</div>

<!-- Footer -->
<footer class="center black padding-48 large">
  <p>Made By 1672034 | 2172011 | 2172034</p>
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
