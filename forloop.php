<?php 
    $title = "For loop";
    include 'includes/header.php';
?>
<h1>For Loop </h1>

    <?php 
    // For Loop

    for ($i=0; $i < 10 ; $i++) { 
        # code...
        echo "<p>HELLO World $i</p>";
    }

    ?>
    
<?php require 'includes/footer.php';?>
