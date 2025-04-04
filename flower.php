<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Flower{
        public $name;   
        public $color;
        function __construct($name,$color){
            $this->name=$name;
            $this->color=$color;

        }
        function get_name(){
            return $this->name;
            
        }
        function get_color(){
            return $this->color;
        }
        }
        $rose=new Flower('Rose','Red');
    
        echo $rose->get_name();
        echo '<br>';
        echo $rose->get_color();
    
    ?>
</body>
</html>