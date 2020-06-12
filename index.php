<?php 
     $title = 'Index';
     include './includes/header.php';
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
