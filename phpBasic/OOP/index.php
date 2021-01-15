<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>PHP OOP</title>
  </head>
  <body>
  	<div class="bg-primary text-center">
  		<div class="container">
  			<h2 style="padding: 40px; text-transform: uppercase; font-weight: bold;">Now we learn PHP OOP</h2>
  		</div>
  	</div>
  <div class="container">


<!-- Create a oop class -->
<?php
// create a class in OOP
class Student {
  public $name="Masum Mina";
  public $attendance = true;
  public $result = 89;

}
$student = new Student();
  echo $student -> name =66 ;

?>


<?php
// php class and properties declare 
class Students {
  public $Student_name= " Md Masum Mina";
  public $Attendance = true;
  public $toral_mark=88;
}
$class10 = new Students ();
echo "<br>";
echo $class10 -> Student_name = "Md Mamun";
echo "<br>";
echo $class10 -> Attendance = true;


?>
<?php
echo "Php class and properties";
class AllStudent {
  public $name ="Anamul kabir";
  public $class = "Nine";
  public $id = 220999;
  public $mark=80;
}
$class_nine = new AllStudent();
echo "<br>";
$Stu_text= "<b>Student name is: </b>";
echo $class_nine -> name = $Stu_text . "Naeemul islam";
echo $class_nine -> name = "Naeemul islam";


?>

<?php
  echo "<h2>OOP function or method</h2>";
  class studentTwo {
    public $stuname;
    public $stuAttention;
    public $stuMark;
    public function stuDetails($stuname,$stuAttention,$stuMark){
      $this -> stuname=$stuname;
      $this -> stuAttention = $stuAttention;
      $this -> stuMark = $stuMark;
    }
  }
  $classEight= new studentTwo();
  $classEight -> stuDetails('AllAH Yumi Rohaman', False, 99);
  echo $classEight -> stuname;
?>
<?php
  echo "<br><h3>Resturent Bill Submit OOP Method chaining </h3>";
  class stuChaining {
    public $dinner = 20;
    public $dessert = 4;
    public $coldDrink = 2;
    public $bill;
    function dinnerChai($person){
      $this -> bill +=$this -> dinner * $person;
      return $this;
    }
    function desserts ($person){
      $this -> bill += $this -> dessert * $person;
      return $this;
    }
  }
  $bill = new stuChaining();
  echo $bill -> dinnerChai(2) -> bill . "<br>";
  echo $bill -> desserts(2) -> bill;
?>
<?php
  class resBill{
    public $barger=30;
    public $gril=10;
    public $dess = 8;
    public $bills;
    public function __construct(){
      $this -> bills =5;
    }
    public function cusbill($person){
      $this -> bills += $this -> barger * $person;
      return $this;
    }
    public function grilpri($person){
      $this -> bills += $this -> gril * $person;
      return $this;
    }
  }
  $bills = new resBill();
  // echo  "<br>" . $bills -> cusbill(2) -> bills;
  // echo "<br>" . $bills -> grilpri(3) -> bills;
  echo "<br>";
  echo "total bill is:" . $bills -> cusbill(2) ->grilpri(3) -> bills;
?>


<?php
echo "<h2><br>OOP inheritance</h2>";

class Apples{
  public $name;
  public function apple($name){
    $this->name=$name;
  }
}
class Mango{
  public $name;
  public function apple($name){
    $this->name=$name;
  }
}
$mangoF= new Mango();

$mangoF -> apple('My favourite fruit is mango');
echo $mangoF-> name;



// $apples = new Apples;
// $apples -> apple('My Favourit fruits');
// echo $apples -> name;

?>
<?php
  echo "<h1>OOP inheritance</h1>";
  class fruits{
    public $name;
    public function Apple($name){
      $this->name=$name;
    }
  }
  class Applessd extends fruits{
    public function Apple($name){
      $this->name=$name;
    }
  }
  class Mangos{

  }

$appless = new Applessd();
$appless -> Apple('Hello Apple');
echo $appless -> name;



  // $masum = new fruits();
  // $masum-> Apple("Apple is on of my favourite fruits");
  // echo "<br>";
  // echo $masum -> name;
?>
























    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>