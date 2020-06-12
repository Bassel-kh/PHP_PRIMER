<?php 
    $title = "Switch Statement ";
    include 'includes/header.php'
?>
    <h1>Switch Statement</h1>
    <?php 
        $grade = 'A';

        switch ($grade) {
            case 'A':
                # code...
                echo "<h2 style= 'color: green'> You are a Superstar!</h2>";
           
                break;
            case 'B':
                # code...
                echo '<h2 style= "color: blue"> You did well !</h2>'; 
               
                break;
            default:
                # code...
                echo "<h2 style= 'color: red'> You have Failed</h2>";

                break;
        }
    ?>
<?php require 'includes/footer.php'?>
