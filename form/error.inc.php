<!-- CSS -->

<style type="text/css">

*{
  margin:0;
  padding: 0;
  border:0;
}

body{
  background: #e7b6ff0f;
}

h1{
    text-align: center;
    font: 20px "Raleway", sans-serif;
    padding: 100px 0 0;
    color: #1e1e1e;
}

a{
  font: 16px "Raleway", sans-serif;
  text-decoration: none;
  color:#1e1e1e;
}

p {
  font: 16px "Raleway", sans-serif;
  line-height: 1.5em;
  padding: 15px 0 0;
  color:#1e1e1e;
  text-align: center;

}

</style>

	<h1>Campos incompletos!</h1>
	<p>Lo siento pero no has completado todos los campos requeridos.</p>
	<p>Haz click en <a href="#" onClick="history.go(-1)">regresar</a> para completar los campos restantes.</p>

	<ul>
			<?php
			for($i=0; $i<count($this->missing_required_fields); $i++){
				echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
			}
			?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
