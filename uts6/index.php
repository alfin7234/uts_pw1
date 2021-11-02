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
