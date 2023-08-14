<?php
    class calculadora{
        public function sumar($a, $b){
            return $a + $b;
        }

        public function restar($a, $b){
            return $a - $b;
        }

        public function multiplicar($a, $b){
            return $a * $b;
        }

        public function dividir($a, $b){
            if( $b =!0){
                return $a / $b;
            }else{
                return "Error el valor dividir es 0";
            }
        }
    }

    $calculadora = new calculadora;

    echo "Suma: " . $calculator->add($num1, $num2) . "<br>";
    echo "Resta: " . $calculator->subtract($num1, $num2) . "<br>";
    echo "Multiplicación: " . $calculator->multiply($num1, $num2) . "<br>";
    echo "División: " . $calculator->divide($num1, $num2) . "<br>";

?>