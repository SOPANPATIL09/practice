<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first php</title>
</head>
<body>
    <dvi class="container">

    first php website
    </dvi>
    <?php
    echo "hello world this is first website";

$variable1 =34;
$variable2 =45;
echo $variable1;
echo     $variable2;
echo $variable1 + $variable2;

//arithmatic operator
echo "<br>";
  echo "the value of variable1 + variable2 is";
  echo "<br>";
  echo $variable1 + $variable2;
  echo "the value of variable1 - variable2 is";
  echo "<br>";
  echo $variable1 - $variable2;
  echo "the value of variable1 * variable2 is";
  echo "<br>";
  echo $variable1 * $variable2;
  echo "the value of variable1 / variable2 is";
  echo "<br>";
  echo $variable1 / $variable2;
  echo "<h1>assignment operator</h1>";
  echo "<br>";
   $newVar = $variable1;
   //$newvar +=2;
   $newVar +=3;
   echo "the value of new variable is ";
   echo $newVar;
   echo "<br>";
   $newvar = $variable2;
   $newvar *=9;
   Echo "the new value of variable2 is ";
   echo $newvar;

   echo"<br>";
   echo "<br>";
   //comparison Operators
   echo"<h1>comparison operators</h1>";
   echo var_dump(4==5);
   echo "<br>";
   echo var_dump(5!=5);
    echo "<br>";
   echo var_dump(4>=4);
   echo "<br>";
   echo var_dump(4<=5);
   echo "<h1>increment operator</h1>"
    ?>
    <?php
     echo "<h1>data types in php</h1>";
     echo "<br>";
     echo "1)";
     $var =65;
     echo var_dump($var);
     echo "<br>";

     $var= 'this';
     echo var_dump($var);
     echo '<br>';

     $var =65.7;
     echo var_dump($var);

     echo "<br>";
     $var =[1,2,3,4,5];
     echo var_dump($var);
     
    echo '<br>';
    $var = true;
    echo var_dump($var);

    echo'<br>';
    echo"<h1>this is a object creation</h1>";
    class car{
        public $make;
        public $model;
        public $color;
        public $price;
        public $typecar;
        public $speedofcar;
        public $sizeofcar;
        public $companyofcar;
        public $editionofcar;
        public $ownerofcar;
        public $locationofcar;
    
        public function correct_engine()
        {
            return "engine started";

        
        }
        
    }   
            $mycar = new car();
            $mycar->make ="toyota";
            $mycar->model ="232";
            $mycar->color ="sky";
            $mycar->price ="14000";
            $mycar->typecar = "lux_car";
            $mycar->speedofcar= "200km";
            $mycar->sizeofcar = "100 height and 200 width";
            $mycar->comapnyofcar ="toyota";
            $mycar->editionofcar ="9th edition of my car ";
            $mycar->ownerofcar ="sopan_patil";
            $mycar->locationofcar ="delhi";
            
            echo $mycar->correct_engine();
            echo '<br>';
            $var =$variable1 + $variable2;
            echo "this is addition -:";
            echo $var;
            echo "<br>";
            $k=20;
            $d=20;
            $add =$k + $d;
            echo $add;

         


    ?>
</body>
</html>