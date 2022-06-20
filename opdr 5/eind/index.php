<?php
require "classes/vierkant.class.php";
$obj = new Vierkant(6);
echo $obj->getX();
echo "<br>" . $obj->berekenOppervlakte(7);
