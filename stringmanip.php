<?php 
    $title = "String Manipulation ";
    include 'includes/header.php'
?>
<h1>PHP String Manipulation</h1>
    <?php
        // Concatenation of strings 
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with Rock";
        $name = "bassel Khalil";
        echo $phrase1.", named tiffany, ".$phrase2;
        echo '<br>';
        echo '<hr>';
        // String  transformation
        echo 'Uppercase first letter: ' .ucfirst($name).'<br/>';
        echo 'Uppercase first letter of each word: ' . ucwords($name). '<br>';
        echo 'Uppercase : '. strtoupper($name).'<br>';
        echo 'Lower case: ' . strtolower("THIS WAS ALL UPPER CASE").'<br>';
        echo '<hr/>';
        echo 'Repeat String: ' . str_repeat('A', 5).'<br>';

        echo 'Get a Substring: ' . substr($name, 3, 5).'<br>';

        echo 'Get position of string: ' .strpos($name, 's') .'<br>';
        // Return NULL
        //echo ' GEt position of string: ' .strpos($combine, 'z').'<br>';
        echo 'Find Character "R": '.strchr($name, 'R').'<br>';
        echo 'Find Character "l": '.strchr($name, 'l').'<br>';

        echo 'Whithout Trim: '. "A" . " B C D ". "E" .'<br>';
        echo 'Trim spaces on the both sides: '. "A" . trim(" B C D ") . "E" .'<br>';
        echo 'Trim spaces on the left sides: '. "A" . ltrim(" B C D ") . "E" .'<br>';
        echo 'Trim spaces on the right sides: '. "A" . rtrim(" B C D ") . "E" .'<br>';

        echo ' Replace string with another: '. str_replace("stand", "sit", $phrase2 ) . '<br>';

    ?>
<?php require 'includes/footer.php'?>
