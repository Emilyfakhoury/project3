<style type="text/css">

* {
  margin: 0;
  padding: 0;
  border: 0;
  font-family: 'Libre Baskerville', serif;
}

.container {
  max-width: 900px;
  margin: 0 auto;
  text-align: center;
}

nav li {
  display: inline;
  margin: 10px;
}

nav {
  margin: 30px;
}

</style>

<div class="container">
  <header>
    <nav>
      <ul>
        <li>Home</li>
        <li>About</li>
        <li>Contact</li>
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
