<?php 
     $title = 'Arrays';
     include 'includes/header.php';
?>
    <h1>Arrays</h1>
    <?php
        // a variable
        $num = 3;

        // an array
        // Only one datatype
        $numbers = array(1,2,3,4,5,6,7,8,9,10);
        $size = count($numbers);

        for ($i=0; $i < $size; $i++) { 
            # code...
            echo "<p>$numbers[$i]</p>";
        }
    ?>
<?php require 'includes/footer.php';?>
