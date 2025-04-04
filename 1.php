<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Friut{
        public $name;
        function __construct($name){
            $this->name=$name;
        }
        function get_name()
        {
            return $this->name;
        }
    }
    $apple= new Friut('Apple');
    echo $apple->get_name();
    ?>
</body>
</html>