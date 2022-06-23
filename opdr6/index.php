<?php
require "classes/figuur.class.php";
require "classes/vierkant.class.php";
require "classes/ciliner.class.php";


$obj = new Vierkant(6);
echo $obj->getX();
echo "<br>" . $obj->berekenOppervlakte(7);
