<?php 
    $title = "Function ";
    include 'includes/header.php';
?>
    <h1><?php echo $title ?></h1>

    <?php 

        /* Defining a Function */

        function writeMessage() {
            echo "You are really a nice person, have A nice time! <br>";

        }

        // Callng a Function
        writeMessage();

        /* Functions with parameters */

        function addFunction($num1, $num2) {
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is: $sum <br>";

        }

        /* pass byReferance - use ampersand in parameter */
        function changeNum(&$num) {
            $num = $num + 10;
            // $num += 10;
        }

        function returnProduct($num1, $num2) {
            $prod = $num1 + $num2;
            return $prod;
        }

        $num = 500;
        addFunction(10, 11);
        addFunction($num, 11);
        addFunction('10', "52");

        changeNum($num);
        echo $num . '<br>';

        $return_value = returnProduct(10, 59);
        echo $return_value . '<br>';





    ?>
    
<?php require 'includes/footer.php';?>
