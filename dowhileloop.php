<?php 
    $title = "While loop";
    include 'includes/header.php';
?>
    <h1>While loop</h1>
    <?php
        $grade = 0; 
        //infinite Loop 
        // while ($grade <= 10) {
        //     # code...
        //     echo '<p> I AM LESS THAN 10!</p>';
        // }

        while ($grade < 10) {
            # code...
            echo '<p> I AM LESS THAN 10!'.$grade.'</p>';
            $grade ++;
        }
        echo 'Exite Loop';
    ?>

    <h1>DO-While Loop</h1>
    <?php 
        do {
            # code...
            echo "<p> I AM DO WHILE LOOP ( $grade )</p>";
            $grade ++;
        } while ($grade <= 10);
        echo 'Exite Loop';
    ?>

<?php require 'includes/footer.php';?>
