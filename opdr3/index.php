<?php
class Vogel
{
    public $type;
    public $color;
    public $flyable;

    public function __construct($type2, $color2, $flyable2)
    {

        $this->type = $type2;
        $this->color = $color2;
        $this->flyable = $flyable2;
    }
}


class Parkiet extends Vogel
{
    public function __construct($name, $color)
    {

        // $this->parent

        $this->name = $name;
        $this->color = $color;
        // $name = new Vogel("Parkiet");
        // $color = new Vogel("Blauw");
    }
}
class Duif extends Vogel
{

    public function __construct()
    {
        $this->type = "Duif";
        $this->color = "Grijs";
        $this->flyable = TRUE;
    }
}


// $Parkiet = new Parkiet("Parkiet", 'blauw');
// $Duif = new Duif();
$Mus = new Vogel("Mus", "Bruin", TRUE);
$Duif = new Vogel("Duif", "Grijs", TRUE);

print "<pre>";
var_dump($Duif);
print "<br>";
var_dump($Mus);


?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voorbeeld</title>
</head>

<body>
    <?php

    // echo $Parkiet->name;
    // echo "<br>" . $Parkiet->color;

    ?>
</body>

</html>