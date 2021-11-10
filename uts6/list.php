<!DOCTYPE html>

<!--
Nama (NRP) 
    * - William Wijaya (2172011) 
    * - Alfin Liunardi Senjaya (1672034)
    * - Morel Mychael Christopher Alpha (2172025)
	*
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
	<img src="images/pasta6.jpg" style="width:100%;" id="myMap">
	<div class="display-middle center">
		<span>LIST RESTORAN</span>
		<p><a href="#menu" class="button xxlarge black" style="font-size:25px">Let See !</a></p>
	</div>
</header>

<!-- Restoran  PASTA -->
<div class="container green padding-64 xlarge" id="menu">
  <div class="content">
	<div class="row center border border-dark-grey">
		<a href="javascript:void(0)" onclick="openMenu(event, 'Indonesia');" id="myLink">
			<div class="col s4 tablink padding-large hover-red">Indonesia</div>
		</a>
		<a href="javascript:void(0)" onclick="openMenu(event, 'Italy');">
			<div class="col s4 tablink padding-large hover-red">Italy</div>
		</a>
	</div>

	<div id="Indonesia" class="container menu padding-32 white">
		<table class="table">
			<caption><h1>Restoran Pasta Di Indonesia</h1></caption>
				<tr>
					<td>
						<img src="images/1.jpg" style="width:75%;">
					</td>
					<td>
						<h1><a href="https://www.google.com/maps/place/Pasta+Kangen+Ungu+Bandung/@-6.9299435,107.6373078,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68e974001b86cb:0xb647545d6fb41022!8m2!3d-6.9299488!4d107.6394965" target="_blank">Pasta Kangen Ungu Bandung</h1><br>
						<h5>Jl. Gatot Subroto No.337, Maleer, Kec. Batununggal, Kota Bandung, Jawa Barat 40274</h5></a>
					</td>
				</tr>
				<tr>
					<td>
						<img src="images/2.jpg" style="width:75%;">
					</td>
					<td><a href="https://fashion-e-pasta-bandung.business.site/?utm_source=gmb&utm_medium=referral" target="_blank">
						<h1>Fashion E Pasta</h1><br>
						<h5>Jl. Bukit Pakar Timur No.112, Ciburial, Kec. Cimenyan, Bandung, Jawa Barat 40198</h5></a>
					</td>
				</tr>
				<tr>
					<td>
						<img src="images/3.png" style="width:75%;">
					</td>
					<td>
						<h1 class=""><a href="https://www.google.com/maps/place/Osteria+Bandung/@-6.8824188,107.5772472,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68e683fce27f5f:0x71779467e2a33daf!8m2!3d-6.8824241!4d107.5794359" target="_blank">Osteria Bandung</h1><br>
						<h5>Jl. Lemah Neundeut No.9, Sukawarna, Kec. Sukajadi, Kota Bandung, Jawa Barat 40164</h5>
						</a>
					</td>
				</tr>
				<tr>
					<td>
						<img src="images/4.jpeg" style="width:75%;">
					</td>
					<td>
					<h1><a href="https://food.grab.com/id/en/restaurant/warung-pasta-bandung-dago-delivery/IDGFSTI00000lcj" target="_blank">WARUNG PASTA Bandung</h1><br>
					<h5>Jl. Ganesa No.4, Lb. Siliwangi, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132</h5></a>
					</td>
				</tr>
				<tr>
					<td>
						<img src="images/5.jpg" style="width:75%;">
					</td>
					<td>
						<h1><a href="https://www.google.com/maps/place/Pasta+Nafisa/@-6.9712217,107.6332206,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68e92d13426851:0xa0d241a14441afc9!8m2!3d-6.9712257!4d107.6353807" target="_blank">Pasta Nafisa</h1><br>
						<h5>Jl. Babakan Ciamis No.85B, Sukapura, Kec. Dayeuhkolot, Bandung, Jawa Barat 40267</h5>
					</td>
				</tr>
				<tr>
					<td>
						<img src="images/6.jpg" style="width:75%;">
					</td>
					<td>
						<h1><a href="https://www.google.com/maps/place/Eatalia+Italian+Delights/@-6.9241177,107.6097573,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68e628dd2905f7:0xe178de9808dbb6bb!8m2!3d-6.924123!4d107.611946" target="_blank">Eatalia Italian Delights</h1><br>
						<h5>Jl. Lengkong Besar No.45, Paledang, Kec. Lengkong, Kota Bandung, Jawa Barat 40251</h5>
						</a>
					</td>
				</tr>
				<tr>
					<td>
						<img src="images/7.jpg" style="width:75%;">
					</td>
					<td>
						<h1><a href="https://gofood.co.id/english/bandung/restaurant/elrey-pasta-e079ef94-1121-4bd3-bbad-d2cf8a805170" target="_blank">Elrey Pasta</h1><br>
						<h5>Jl. Panaitan No.23, Kb. Pisang, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40112</h5></a>
					</td>
				</tr>
				<tr>
					<td>
						<img src="images/8.jpg" style="width:75%;">
					</td>
					<td>
						<h1><a href="https://food.grab.com/id/en/restaurant/warung-pasta-rawamangun-delivery/IDGFSTI000001sx" target="_blank">WARUNG PASTA Rawamangun</h1><br>
						<h5>Jl. Balai Pustaka Timur No.53, RT.5/RW.10, Rawamangun, Kec. Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13220</h5>
						</a>
					</td>
				</tr>
				<tr>
					<td>
						<img src="images/9.jpg" style="width:75%;">
					</td>
					<td>
						<h1><a href="https://gofood.co.id/english/bandung/restaurant/pasta-la-vista-gandapura-17182d71-8ea5-4429-9b9e-3093f63b67e9" target="_blank">Pasta La Vista</h1><br>
						<h5>Jl. Gandapura No.73, Merdeka, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40113</h5>
						</a>
					</td>
				</tr>
				<tr>
					<td>
						<img src="images/10.jpg" style="width:75%;">
					</td>
					<td>
						<h1><a href="https://food.grab.com/id/en/restaurant/toscana-italian-restaurant-kemang-delivery/6-CYT2V3AXHA6EEE" target="_blank">Toscana</h1><br>
						<h5>Jl. Kemang Raya No.120, RT.3/RW.2, Bangka, Kec. Mampang Prpt., Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12730</h5></a>
					</td>
				</tr>
		</table>
	</div>

	<div id="Italy" class="container menu padding-32 white">
		<table class="table">
			<caption><h1>Restoran Pasta Di Italy</h1></caption>
			<tr>
				<td>
					<img src="images/11.jpg" style="width:75%;">
				</td>
				<td>
					<h1><a href="https://dalmoros.ca/" target="_blank">Dal Moro's</h1><br>
					<h5>Calle Casseleria, 5324, 30122 Venezia VE, Italy</h5>
					</a>
				</td>
			</tr>
			<tr>
				<td>
					<img src="images/12.jpg" style="width:75%;">
				</td>
				<td>
					<h1><a href="https://pastachef.com/" target="_blank">al42 by Pasta Chef Monti</h1><br>
					<h5>Via Baccina, 42, 00184 Roma RM, Italy</h5>
					</a>
				</td>
			</tr>
			<tr>
				<td>
					<img src="images/Osteria.jpg" style="width:75%;">
				</td>
				<td>
					<h1><a href="https://https://osteriafrancescana.it//" target="_blank">Osteria Francescana</h1><br>
					<h5>Via Stella, 22, 41121 Modena MO, Italy</h5>
					</a>
				</td>
			</tr>
			<tr>
				<td>
					<img src="images/13.jpg" style="width:75%;">
				</td>
				<td>
					<h1><a href="https://www.freshpasta2go.it/en/" target="_blank">We Love Italy fresh pasta to go</h1><br>
					<h5>Calle de l'Orso, 5529, 30124 Venezia VE, Italy</h5>
					</a>
				</td>
			</tr>
			<tr>
				<td>
					<img src="images/Cantina.jpg" style="width:75%;">
				</td>
				<td>
					<h1><a href="https://cantinaecucina.it/" target="_blank">Cantina e Cucina</h1><br>
					<h5>Via del Governo Vecchio, 87, 00186 Roma RM, Italy</h5>
					</a>
				</td>
			</tr>
			<tr>
				<td>
					<img src="images/14.jpg"style="width:75%;">
				</td>
				<td>
					<h1><a href="https://www.google.com/maps/place/Italy+Restaurant+Milano/@45.466195,9.1855455,20.75z/data=!3m1!5s0x4786c6ad3d9df671:0xc98ec540aa7c214b!4m13!1m7!3m6!1s0x4786c6ad3d991a6b:0xa933c5c72320e501!2sVia+S.+Prospero,+4,+20121+Milano+MI,+Italy!3b1!8m2!3d45.4662142!4d9.185737!3m4!1s0x4786c6ad178c7939:0xf7f89a8a46498d7f!8m2!3d45.4661701!4d9.1858569" target="_blank">Restaurant Milano</h1><br>
					<h5>Via S. Prospero, 4, 20121 Milano MI, Italy</h5>
					</a>
				</td>
			</tr>
			<tr>
				<td>
					<img src="images/17.jpg" style="width:75%;">
				</td>
				<td>
					<h1><a href="http://www.trattoriaaldina.it/" target="_blank">Cantina e Cucina</h1><br>
					<h5>Via del Governo Vecchio, 87, 00186 Roma RM, Italy</h5>
					</a>
				</td>
			</tr>
		</table>
	</div>
	<br>
  </div>
</div>

<!-- Footer -->
<footer class="center black padding-48 large">
	<p>Made By 1672034 | 2172011 | 2172034</p>
	<p class="tiny">Insipired By Some Web On The Internet and My Web "Kerja Praktek"</p>
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
