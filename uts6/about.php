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
		<span>ABOUT US</span>
		<p><a href="#about" class="button xxlarge black" style="font-size:25px">HI THERE O_O</a></p>
	</div>
</header>

<!-- About Container -->
<div class="container padding-64 pink xlarge" id="about">
	<div class="content">
		<div class="row center border border-dark-grey">
			<a href="javascript:void(0)" onclick="openMenu(event, '1672034');" id="myLink">
				<div class="col s4 tablink padding-large hover-black">1672034</div>
			</a>
			<a href="javascript:void(0)" onclick="openMenu(event, 'NRP1');">
				<div class="col s4 tablink padding-large hover-black">*NRP*</div>
			</a>
			<a href="javascript:void(0)" onclick="openMenu(event, 'NRP2');">
				<div class="col s4 tablink padding-large hover-black">*NRP*</div>
			</a>
		</div>

		<div id="1672034" class="container menu padding-32 white">
			<h1>
				<b>1672034 - Alfin Liunardi Senjaya</b>
			</h1>
			<img src="images/pizza1.jpg" style="width:50%;">
			<p class="text-grey">
				<table>
					<tr>
						<td>Nama </td>
						<td> : </td>
						<td> Alfin Liunardi Senjaya</td>
					</tr>
					<tr>
						<td>NRP </td>
						<td> : </td>
						<td>1672034</td>
					</tr>
					<tr>
						<td>Social Media </td>
						<td> : </td>
						<td><a href="https://www.instagram.com/alfinliunardi/" title="Alfin Liunardi" target="_blank"> @alfinliunardi</a></td>
					</tr>
				</table>
			</p>
			<hr>
		</div>

		<div id="NRP1" class="container menu padding-32 white">
			<h1>
				<b>2172011 - William Wijaya</b>
			</h1>
			<img src="images/foto.jpg" style="width:50%;">
			<p class="text-grey">
				<table>
					<tr>
						<td>Nama </td>
						<td> : </td>
						<td>William Wijaya</td>
					</tr>
					<tr>
						<td>NRP </td>
						<td> : </td>
						<td>2172011</td>
					</tr>
					<tr>
						<td>Social Media </td>
						<td> : </td>
						<td><a href="https://www.instagram.com/william.wijaya.54/" title="William Wijaya" target="_blank"> @william.wijaya.54</a></td>
					</tr>
				</table>
			</p>
			<hr>
		</div>

		<div id="NRP2" class="container menu padding-32 white">
			<h1>
				<b>2172025 - Morel Mychael Christopher Alpha</b>
			</h1>
			<img src="images/Morel.jpg" style="width:50%;">
			<p class="text-grey">
				<table>
					<tr>
						<td>Nama </td>
						<td> : </td>
						<td> Morel Mychael Christopher Alpha </td>
					</tr>
					<tr>
						<td>NRP </td>
						<td> : </td>
						<td>2172025</td>
					</tr>
					<tr>
						<td>Social Media </td>
						<td> : </td>
						<td><a href="https://www.instagram.com/morel.mychael.c.a/" title="Morel Mychael" target="_blank"> @morel.mychael.c.a</a></td>
					</tr>
				</table>
			</p>
			<hr>
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
