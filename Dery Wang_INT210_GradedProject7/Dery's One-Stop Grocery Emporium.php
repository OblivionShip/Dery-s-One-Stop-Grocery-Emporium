<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dery's One-Stop Grocery Emporium</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Dery's One-Stop Grocery Emporium</h1>
	<div><h5>We got beverages, we got dairy, we got fruits & vegetables, we got meats, we got snacks, 
	we got spices, we got an assortment of those right here at Dery's One-Stop Grocery Emporium.<br>Click any of the 
	categories to check out the featured items.</h5></div>
	<br>
</body>
<head>
	<em><u><h2 onclick="myFunction1()">BEVERAGES</h2></u></em>
	<em>We offer many beverages to choose from. Feel free to browser from our abundant selection. 
	However, we are offering a limited time discount for both <b>pop</b> and <b>coconut water</b> 
	so come get it soon.</em>
	
	<br><div id="myDIV1"><a href="Pop%20Section.html" target="_blank"><li><u>Pop</u></a>($0.86/2l)</li> 
	<a href="Coconut%20Water%20Section.html" target="_blank"><li><u>Coconut Water</u></a>($4.07/1l)</li></div>
</head>
<head>
	<em><u><h2 onclick="myFunction2()">DAIRY</h2></u></em>
	<em>The most famous within our dairy section is the<b> 2% milk</b> and <b>cheddar</b>.</em>
	
	<br><div id="myDIV2"><a href="2%25%20Milk%20Section.html" target="_blank"><li><u>2% Milk</u></a>($4.05/2l)</li>
	<a href="Cheddar%20Section.html" target="_blank"><li><u>Natural Cheddar</u></a>	($0.93/100g)</li></div>
</head>
<head>
	<em><u><h2 onclick="myFunction3()">FRUITS & VEGETABLES</h2></u></em>
	<em>From tropical fruits to garden grown vegetables, we offer a variety of fruits and vegetables. The most picked 
	from our assortment is the <b>mango</b> and <b>asparagus</b>.</em>

	<br><div id="myDIV3"><a href="Mango%20Section.html" target="_blank"><li><u>Fresh Mangos</u></a>	($1.17/each)</li>
	<a href="Asparagus%20Section.html" target="_blank"><li><u>Farmer's Market Asparagus</u></a>	($4.50/each)</li></div>
</head>
<head>
	<em><u><h2 onclick="myFunction4()">MEAT</h2></u></em>
	<em>Always fresh, always healthy, locally raised, our meat is hormone and chemical free. Particularly, the most sought after meat is our <b>beef</b> and <b>pork loin</b>.</em>

	<br><div id="myDIV4"><a href="AAA%20Beef%20Section.html" target="_blank"><li><u>AAA Beef</u></a>	($9.45/1kg)</li>
	<a href="Pork%20Loin%20Section.html" target="_blank"><li><u>Pork Loin</u></a>	($9.99/900g)</li></div>
</head>
<head>
	<em><u><h2 onclick="myFunction5()">SNACKS</h2></u></em>
	<em>Sometimes we can have cheat days. Sometimes we can indulge in snacks. What snacks? Our newest offer of 
	<b>crisps</b> and <b>cookies</b> are on sale right now. Hurry before it is too late.</em>

	<br><div id="myDIV5">
	<a href="Crisps%20Section.html" target="_blank"><li><u>Crisps</u></a>	($2.47/265gm)</li>
	<a href="Cookies%20Section.html" target="_blank">
	<li><u>Cookies</u></a>		($2.07/300g)</li></div>
</head>
<head>
	<em><u><h2 onclick="myFunction6()">SPICES</h2></u></em>
	<em>If you ever want to spice up your meals, come check out our spices aisle. Our best-seller is the <b>cumin</b> 
	and <b>paprika</b>.</em>

	<br><div id="myDIV6">
	<a href="Cumin%20Section.html" target="_blank">
	<li><u>Cumin</u></a>	($1.47/97g)</li>
	<a href="Paprika%20Section.html" target="_blank">
	<li><u>Paprika</u></a>	($1.47/130g)</li></div>
</head>
	<br>


<script>
function myFunction1() {
  var x = document.getElementById("myDIV1");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
<script>
function myFunction2() {
  var x = document.getElementById("myDIV2");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
<script>
function myFunction3() {
  var x = document.getElementById("myDIV3");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
<script>
function myFunction4() {
  var x = document.getElementById("myDIV4");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
<script>
function myFunction5() {
  var x = document.getElementById("myDIV5");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
<script>
function myFunction6() {
  var x = document.getElementById("myDIV6");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
</html>