<?php 
     $title = 'Index';
     include './includes/header.php';
?>

<?php
  // connect to mongodb

  //$m = new MongoClient("mongodb+srv://BasseliT:Hyba85213*Test@cluster0-9eamb.mongodb.net/test?retryWrites=true&w=majority" );
 
  require_once __DIR__ . "/vendor/autoload.php";

  
$client = new MongoDB\Client('mongodb+srv://BasseliT:Hyba85213*Tes@cluster0-9eamb.mongodb.net/<dbname>?retryWrites=true&w=majority');
 
 $db = $client->test;
 echo "connect to mongodb";

echo phpinfo();
 
?>

<!-- index -->
    <!-- Basic Html -->
    <h1>Hello world</h1>
    <br>
    
    <?php
        // printing to use html echo
        echo " Hello PHP";
        echo "<br>";
        echo "Second line";
        //Declare variable
        $name = "Bassel Khalil";
        $age = 25;
        // echo variable
        echo $name;
        echo '<br>';
        echo '<h1> My Name is : '.$name .'</h1>';
        echo "<h1>My age is : $age</h1>";
   ?>
<button type="button" class="btn btn-outline-info">Click Me</button>
<button type="button" class="btn btn-outline-primary">Primary</button>
<button type="button" class="btn btn-outline-success">Success</button>

<?php   require './includes/footer.php';?>
