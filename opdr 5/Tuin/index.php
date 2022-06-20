<?php
class Tuintje
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}
class Roos extends Tuintje
{
    public $color;
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getColor($color)
    {
        return $this->color;
    }
}



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
    $obj = new Tuintje("Rozentuin");
    $objChild = new Roos("Zwart");
    $objChild->setColor("Paars");
    echo $objChild->name;
    echo "<br>" . $objChild->color;
    ?>

</body>

</html>