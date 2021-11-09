<!DOCTYPE html>

<!--
Nama (NRP)
- Alfin Liunardi Senjaya (1672034)
- William Wijaya (2172011)
- Morel Mychael Christopher Alpha (2172025)

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
		<span>JENIS - JENIS PASTA & PIZZA</span>
		<p><a href="#menu" class="button xlarge black" style="font-size:25px"">Learn More !</a></p>
	</div>
</header>

<!-- JENIS PASTA -->			
<div class="container yellow grayscale-min padding-64 xlarge" id="menu">
	<div class="content">
		<div class="row center border border-dark-grey">
			<a href="javascript:void(0)" onclick="openMenu(event, 'Pizza');" id="myLink">
				<div class="col s4 tablink padding-large hover-red">Pizza</div>
			</a>
			<a href="javascript:void(0)" onclick="openMenu(event, 'Pasta');">
				<div class="col s4 tablink padding-large hover-red">Pasta</div>
			</a>
			<a href="javascript:void(0)" onclick="openMenu(event, 'Starter');">
				<div class="col s4 tablink padding-large hover-red">Dessert</div>
			</a>
		</div>
		<div id="Pizza" class="container menu padding-32 white">
			<h1><b>Margherita</b> <img src="images/margherita.jpg" style="width:25%;"></h1>
			<h2><p class="text-grey">Fresh tomatoes, fresh mozzarella, fresh basil</p><h2>
			<hr>

			<h1><b>Formaggio</b> <img src="images/formaggiopizza.jpg" style="width:25%;"></h1>
			<h2><p class="text-grey">Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)</p></h2>
			<hr>

			<h1><b>Chicken</b> <img src="images/chickenpizza.jpg" style="width:25%;"></h1>
			<h2><p class="text-grey">Fresh chicken, mozzarella and bbq sauce</p></h2>
			<hr>

			<h1><b>Pineapple'o'clock</b> <img src="images/pineapplepizza.jpg" style="width:25%"></h1>
			<h2><p class="text-grey">Chesse, hot pepperoni, tomato sauce, fresh pineapple</p></h2>
			<hr>

			<h1><b>Meat Town</b> <img src="images/pepperonipizza.jpg" style="width:25%;"></h1> 
			<h2><p class="text-grey">Mozzarella, hot pepporoni, mushroom</p></h2>
			<hr>

			<h1><b>Parma</b> <img src="images/parmapizza.jpg" style="width:25%;"></h1>
			<h2><p class="text-grey">Parma with ham, salmon and egg</p></h2>
		</div>

		<div id="Pasta" class="container menu padding-32 white">
			<h1><b>Spaghetti</b> <img src="images/spaghetti.jpg" style="width:25%;"></h1>
			<h2><p class="text-grey">Pasta dengan helai panjang dan sangat halus</p></h2>
			<hr>

			<h1><b>Linguine</b> <img src="images/linguine.jpg" style="width:25%;"></h1>
			<h2><p class="text-grey">Pasta yang mirip dengan spaghetti tetapi lebih lebar dibandingkan dengan potongan spaghetti</p></h2>
			<hr>

			<h1><b>Fettuccine</b> <img src="images/fettuccine.jpg" style="width:25%;"></h1>
			<h2><p class="text-grey">Pasta yang memiliki bentuk rata seperti pita</p></h2>
			<hr>

			<h1><b>Bucatini</b> <img src="images/bucatini.jpg" style="width:25%;"></h1>
			<h2><p class="text-grey">Pasta yang mirip juga dengan spaghetti tetapi memiliki lubang di tengahnya</p></h2>
			<hr>

			<h1><b>Capellini</b> <img src="images/capellini.jpg" style="width:25%;"></h1>
			<h2><p class="text-grey">Adonannya mirip dengan spaghetti tetapi memiliki diameter lebih kecil</p></h2>
			<hr>

			<h1><b>Tortellini</b> <img src="images/tortellini.jpg" style="width:25%;"></h1>
			<h2><p class="text-grey">Pasta berukuran kecil dan berbentuk seperti cincin</p></h2>
			<hr>

			<h1><b>Ravioli</b> <img src="images/ravioli.jpg" style="width:25%;"></h1>
			<h2><p class="text-grey">Lembaran pasta ditumpuk membentuk kantung-kantung kecil</p></h2>
			<hr>

			<h1><b>Fusilli</b> <img src="images/fusilli.jpg" style="width:25%;"></h1>
			<h2><p class="text-grey">Pasta yang memiliki bentuk seperti pembuka botol tetapi memiliki spiral lebih rapat</p></h2>
			<hr>

			<h1><b>Farfalle</b> <img src="images/farfalle.jpg" style="width:25%;"></h1>
			<h2><p class="text-grey">Pasta yang berbentuk dasi kupu-kupu</p></h2>
			<hr>

			<h1><b>Conchiglie</b> <img src="images/conchiglie.jpg" style="width:25%;"></h1>
			<h2><p class="text-grey">Pasta yang memiliki bentuk menyerupai kerang</p></h2>
			<hr>

			<h1><b>Gnocchi</b> <img src="images/gnocchi.jpg" style="width:25%;"></h1>
			<h2><p class="text-grey">Pasta yang berbentuk seperti pangsit</p></h2>
			<hr>

			<h1><b>Penne</b> <img src="images/penne.jpg" style="width:25%;"></h1>
			<h2><p class="text-grey">Penne adalah jenis pasta berlubang, dinamai penne karena bentuknya yang mirip dengan pena</p></h2>
			<hr>

			<h1><b>Ziti</b> <img src="images/ziti.jpg" style="width:25%;"></h1>
			<h2><p class="text-grey">Pasta yang bentuknya mirip seperti penne tetapi memiliki potong lurus di bagian ujungnya</p></h2>
			<hr>

			<h1><b>Orecchiette</b> <img src="images/orecchiette.jpeg" style="width:25%;"></h1>
			<h2><p class="text-grey">Bentuk pasta yang mirip dengan telinga kecil</p></h2>
			<hr>

			<h1><b>Lasagna</b> <img src="images/lasagna.jpg" style="width:25%;"></h1>
			<h2><p class="text-grey">Pasta yang berbentuk lembaran datar</p></h2>
			<hr>
		</div>


		<div id="Starter" class="container menu padding-32 white">
			<h1><b>Bruschetta</b> <img src="images/bruschetta.jpg" style="width:25%"></h1>
			<h2><p class="text-grey">Bread with pesto, tomatoes, onion, garlic</p></h2>
			<hr>

			<h1><b>Garlic bread</b> <img src="images/garlicbread.jpg" style="width:25%;"></h1>
			<h2><p class="text-grey">Grilled ciabatta, garlic butter, onions</p></h2>
			<hr>

			<h1><b>Tomozzarella</b> <img src="images/mozzarella.jpg" style="width:25%"></h1>
			<h2><p class="text-grey">Fresh tomatoes and mozzarella with basil</p></h2>
		
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
    <p>3. https://www.thespruceeats.com/pasta-with-seafood-mushroom-cream-sauce-3060673</p>
	<p>4. https://thebusybaker.ca/easy-homemade-garlic-bread/</p>
	<p>5. https://eatigo.com/id/jakarta/id/r/formaggio-coffee-resto-tangerang-5005054</p>
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
