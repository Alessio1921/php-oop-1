<?php
  include ('./data/Movie.php');
  $Spiderman = new Movie("action","Spiderman","2h 1m","June 7, 2002","Sam Raimi");
  var_dump($Spiderman);
  $IronMan = new Movie("action","Iron man","2h 6 m","April 30, 2008","Jon Favreau");
  var_dump($IronMan);
  // $array = (array) $Spiderman;
  $Spiderman->setTitle("batman");
  $Spiderman->setGenre("Noia mortale");
  var_dump($Spiderman);
  // $array = get_object_vars($Spiderman);
  $result = print_r($Spiderman,true);
  var_dump($result)

?>
