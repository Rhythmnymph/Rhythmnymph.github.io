<?php
echo "<p>Los valores enviados en el método post: </P>";
while (list($name, $value)=each($_POST)) {
  echo $name."= ".$value."<br/>";
  # code...
}?>
