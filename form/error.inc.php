<style type="text/css">

/*========================================


  Universal Styling


 =======================================*/

* {
  margin: 0;
  padding: 0;
  border: 0;
  font-family: 'Libre Baskerville', serif;
}

a {
  text-decoration: none;
  color: black;
}

a:visited {
  color: black;
}

/*========================================


  Header Styling


 =======================================*/

header {
  padding: 45px;

}

header li {
  display: inline-block;
  margin: 0 20px;
}

nav h1, nav ul{
  display: inline;
}

nav ul {
  margin-left: 20px;
}

nav h1, .upper-right-container {
  display: inline;
}

.upper-right-container {
  float: right;
}

/*========================================


  Main General Styling


 =======================================*/

.container {
  max-width: 1100px;
  margin: 0 auto;
  text-align: center;
  animation: fadein 1s;
}

h2 {
  font-size: 30px;
  margin-bottom: 30px;
}

h3 {
  font-size: 24px;
}

main {
  min-height: 85vh;
}

@keyframes fadein {
  from {
    opacity: 0;
    transform: rotate(-3deg);
  }

  to {
    opacity: 1;
    transform: rotate(0);
  }
}


</style>

<div class="container">
  <header>
    <nav>
      <h1><a href="index.html">Emily Fakhoury</a></h1>
      <ul>
        <li> <a href="shop/shop.html">Shop</a></li>
        <li> <a href="about.html">About</a></li>
        <li> <a href="contact.html">Contact</a></li>
        <div class="upper-right-container">
          <li> <a href="https://www.instagram.com/ahmoograms/"><img src="images/instagram.png" alt="instagram" title="instagram" width=25px></a></li>
          <li> <a href="shop/cart.html"><img src="images/shopping-cart.png" alt="cart" title="cart" width=60px></a></li>
        </div>
      </ul>
    </nav>
  </header>

	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>


	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>


	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>
