<!DOCTYPE html>

<!--
Nama (NRP)
- Alfin Liunardi Senjaya (1672034)
- 
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
		<span>LIST RESTORAN</span>
		<p><a href="#menu" class="button xxlarge black" style="font-size:25px">Let See !</a></p>
	</div>
</header>

<!-- JENIS PASTA -->
<div class="container green padding-64 xlarge" id="menu">
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

<!-- About Container -->
<div class="container padding-64 red grayscale xlarge" id="about">
  <div class="content">
    <h1 class="center jumbo" style="margin-bottom:64px">About</h1>
    <p>The Pizza Restaurant was founded in blabla by Mr. Italiano in lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <p><strong>The Chef?</strong> Mr. Italiano himself<img src="/w3images/chef.jpg" style="width:150px" class="circle right" alt="Chef"></p>
    <p>We are proud of our interiors.</p>
    <img src="/w3images/onepage_restaurant.jpg" style="width:100%" class="margin-top margin-bottom" alt="Restaurant">
    <h1><b>Opening Hours</b></h1>
    
    <div class="row">
      <div class="col s6">
        <p>Mon & Tue CLOSED</p>
        <p>Wednesday 10.00 - 24.00</p>
        <p>Thursday 10:00 - 24:00</p>
      </div>
      <div class="col s6">
        <p>Friday 10:00 - 12:00</p>
        <p>Saturday 10:00 - 23:00</p>
        <p>Sunday Closed</p>
      </div>
    </div>
    
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
