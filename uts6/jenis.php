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
		<span>JENIS - JENIS PASTA</span>
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
				<div class="col s4 tablink padding-large hover-red">Salads</div>
			</a>
			<a href="javascript:void(0)" onclick="openMenu(event, 'Starter');">
				<div class="col s4 tablink padding-large hover-red">Starter</div>
			</a>
		</div>
		<div id="Pizza" class="container menu padding-32 white">
			<h1><b>Margherita</b> <img src="images/margherita.jpg" style="width:25%;"> <span class="right tag dark-grey round">$12.50</span></h1>
			<p class="text-grey">Fresh tomatoes, fresh mozzarella, fresh basil</p>
			<hr>

			<h1><b>Formaggio</b> <img src="images/formaggiopizza.jpg" style="width:25%;"> <span class="right tag dark-grey round">$15.50</span></h1>
			<p class="text-grey">Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)</p>
			<hr>

			<h1><b>Chicken</b> <img src="images/chickenpizza.jpg" style="width:25%;"> <span class="right tag dark-grey round">$17.00</span></h1>
			<p class="text-grey">Fresh chicken, mozzarella and bbq sauce</p>
			<hr>

			<h1><b>Pineapple'o'clock</b> <img src="images/pineapplepizza.jpg" style="width:25%"> <span class="right tag dark-grey round">$16.50</span></h1>
			<p class="text-grey">Chesse, hot pepperoni, tomato sauce, fresh pineapple</p>
			<hr>

			<h1><b>Meat Town</b> <img src="images/pepperonipizza.jpg" style="width:25%;"> <span class="tag red round">Hot!</span><span class="right tag dark-grey round">$20.00</span></h1>
			<p class="text-grey">Mozzarella, hot pepporoni, mushroom</p>
			<hr>

			<h1><b>Parma</b> <img src="images/parmapizza.jpg" style="width:25%;"> <span class="tag grey round">New</span><span class="right tag dark-grey round">$21.50</span></h1>
			<p class="text-grey">Parma with ham, salmon and egg</p>
		</div>

		<div id="Pasta" class="container menu padding-32 white">
			<h1><b>Lasagna</b> <img src="images/lasagna.jpg" style="width:25%;"> <span class="tag grey round">Popular</span> <span class="right tag dark-grey round">$13.50</span></h1>
			<p class="text-grey">Special sauce, mozzarella, parmesan, ground beef</p>
			<hr>

			<h1><b>Ravioli</b> <img src="images/ravioli.jpg" style="width:25%;"> <span class="right tag dark-grey round">$14.50</span></h1>
			<p class="text-grey">Ravioli filled with special sauce</p>
			<hr>

			<h1><b>Spaghetti Classica</b> <img src="images/spaghetti.jpg" style="width:25%;"> <span class="right tag dark-grey round">$11.00</span></h1>
			<p class="text-grey">Fresh tomatoes, onions, ground beef</p>
			<hr>

			<h1><b>Seafood pasta</b> <img src="images/seafood.jpg" style="width:25%;"> <span class="right tag dark-grey round">$25.50</span></h1>
			<p class="text-grey">Seafood spaghetti with mussels and shrimp</p>
		</div>


		<div id="Starter" class="container menu padding-32 white">
			<h1><b>Bruschetta</b> <img src="images/bruschetta.jpg" style="width:25%"> <span class="right tag dark-grey round">$8.50</span></h1>
			<p class="text-grey">Bread with pesto, tomatoes, onion, garlic</p>
			<hr>

			<h1><b>Garlic bread</b> <img src="images/garlicbread.jpg" style="width:25%;"> <span class="right tag dark-grey round">$9.50</span></h1>
			<p class="text-grey">Grilled ciabatta, garlic butter, onions</p>
			<hr>

			<h1><b>Tomozzarella</b> <img src="images/mozzarella.jpg" style="width:25%"><span class="right tag dark-grey round">$10.50</span></h1>
			<p class="text-grey">Fresh tomatoes and mozzarella with basil</p>
		
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
