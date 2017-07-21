<!DOCTYPE html>
<html>
<head>
<style> 
.flex-container {
    display: -webkit-flex;
    display: flex;  
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    text-align: center;
}

.flex-container > * {
    padding: 15px;
    -webkit-flex: 1 100%;
    flex: 1 100%;
}

.article {
    text-align: left;
}

header {background: black;color:white;}
footer {background: #aaa;color:white;}
.nav {background:#eee;}

.nav ul {
    list-style-type: none;
    padding: 0;
}
.nav ul a {
    text-decoration: none;
}

@media all and (min-width: 768px) {
    .nav {text-align:left;-webkit-flex: 1 auto;flex:1 auto;-webkit-order:1;order:1;}
    .article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2;}
    footer {-webkit-order:3;order:3;}
}
</style>
</head>


<body>

<div class="flex-container">

<header>
  <h1>PetShop</h1>
</header>

<nav class="nav">
<ul>
  <li><h1><a href="PetShopView.php">All pets in the shop</a></h1></li>
  <li><h1><a href="ViewMoreThanEveragePrice.php">More than average price</a></h1></li>
  <li><h1><a href="ViewCatsWhiteFluffy.php">Cats white and fluffy</a></h1></li>
  <li><h1><a href="#" style="color:blue;">Most expensive pets</a></h1></li>
</ul>
</nav>

<article class="article" > 
<p><h3>
 <?php
require_once "main.php";
echo $petshop->getExpensivePets();
?>
</h3></p>
</article>

<footer>Copyright &copy; Alexander Zubkov: alexzubkoff123@gmail.com</footer>
</div>

</body>
</html>











 