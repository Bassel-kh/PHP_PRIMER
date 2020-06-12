<?php 
    $title = "Function ";
    include 'includes/header.php';
?>
        <h1>IF-Else Statement</h1>
     <?php 
            // An if statement that will carry out an action based on the value of the variabel.
            echo "<h2> if Statement</h2>";
            $grade = 50;
            // === , ==, <, > 
            if ($grade >= 50) {
                # code...
                echo " <h3 style= 'color: green'> YOU HAVE PASSED </h3>";
            }
            else {
                 echo " <h3 style= 'color: red'>YOU HAVE FAILED </h3>";
            }

            $grade = 'A';
            // if-Else IF-Else
            if($grade == 'A'){
                echo "<h2 style= 'color: green'> You are a Superstar!</h2>";
            }
            elseif ($grade == 'B') {
                echo '<h2 style= "color: blue"> You did well !</h2>';
            }
            else {
                echo "<h2 style= 'color: red'> You have Failed</h2>";
            }

     ?>
<?php require 'includes/footer.php';?>
