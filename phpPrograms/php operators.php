<body>
    <div style="padding: 2;bottom: auto;height: 672.625;">
        <h1 style="color:red;margin-left: 100px;">PHP OPERATORS
        </h1>
        <p style="margin-left:100px;color:blue">1.Arithamatuc Operators</p>
        <p style="margin-left:120px;color:black">
            <?php
            echo "two numbers are 10 and 20 ";
            $a = 10;
            $b = 20;
            $c = $a + $b;
            echo "addition :", $c, "<br>";
            $d = $a - $b;
            echo "subtraction :", $d, "<br>";

            $e = $a * $b;
            echo "multiplication :", $e, "<br>";

            $f = $a / $b;
            echo "division :", $f, "<br>";

            $g = $a % $b;
            echo "modulus :", $g, "<br>";

            $h = $a ** $b;
            echo "exponention :", $h, "<br>";
            ?>
        </p>
        </p>
        <p style="margin-left:100px;color:blue">2.Assignment Operators</p>
        <p style="margin-left:120px;color:black">
            <?php
            $a = 10;
            $b = 20;
            $a = $b;
            echo "assign :", $a, "<br>";

            $a += $b;
            echo "Add and assign :", $a, "<br>";

            $a *= $b;
            echo "Multiply and assign :", $a, "<br>";

            $a /= $b;
            echo "divide and assign(quotient) :", $a, "<br>";

            $a %= $b;
            echo "divide and assign(reminder) :", $a, "<br>";
            ?>

        </p>
        </p>
        <p style="margin-left:100px;color:blue">3.Bitwise operators</p>
        <p style="margin-left:120px;color:black">
            <?php

            $a = 2;
            $b = 4;
            $c = $a & $b;
            echo "And : Bitwise & of 2 and 4 is : ", $c, "<br>";

            $b = 3;
            $c = 6;
            $d = $b | $c;
            echo "Or(inclusive or) : Bitwise | of 3 and 6 is : ", $c, "<br>";

            $e = 4;
            $f = 5;
            $g = $e ^ $f;
            echo "Xor(exclusive or) : Bitwise ^ of 4 and 5 is : ", $c, "<br>";

            $h = 5;
            $j = ~$h;
            echo "Not : Bitwise ~ of 5 is : ", $c, "<br>";

            $k = 10;
            $l = 20;
            $m = $k << $l;
            echo "Shift left : ", $c, "<br>";

            $n = 10;
            $o = 0;
            $p = $n >> $o;
            echo "Shift right : ", $c, "<br>";
            ?></p>

        </p>
        <p style="margin-left:100px;color:blue">4.Comparison Operators</p>
        <p style="margin-left:120px;color:black">
            <?php
            echo "Numbers are $a and $b", ",<br>";
            $a = 2;
            $b = 4;
            if ($a == $b) {
                echo "These numbers are Equal", "<br>";
            } else {
                echo "These numbers are not equal", "<br>";
            }

            if ($a === $b) {
                echo "These numbers are identical", "<br>";
            } else {
                echo "These numbers are not identical", "<br>";
            }


            if ($a != $b) {
                echo "These numbers are not equal", "<br>";
            } else {
                echo "These numbers are equal", "<br>";
            }


            if ($a <> $b) {
                echo "These numbers are not equal", "<br>";
            } else {
                echo "These numbers are equal", "<br>";
            }

            if ($a < $b) {
                echo "$a is less than $b", "<br>";
            } else {
                echo "$a is not less than $b", "<br>";
            }

            if ($a <= $b) {
                echo "$a is less than or equal to $b", "<br>";
            } else {
                echo "$a is not less than $b", "<br>";
            }


            $c = $a <=> $b;

            echo "$a <=> $b is :", $c, "<br>";

            ?>
        </p><br><br>
        <div style="margin-top: -720;margin-left: 359;">
            <p style="margin-left:100px;color:blue">5.Incrementing/Decrementing Operators</p>
            <p style="margin-left:120px;color:black">
                <?php
                $a = 10;
                echo 'Value of $a is :' . $a;
                echo '<br />After Pre-increment value of $a ( i.e. ++$a ) is: ' . ++$a;
                $a = 20;
                echo '<br />Value of $a is :' . $a;
                echo '<br />After Post-increment value of $a ( i.e. $a++ ) is: ' . $a++;
                $a = 30;
                echo '<br />Value of $a is :' . $a;
                echo '<br />After Pre-decrement value of $a ( i.e. --$a ) is: ' . --$a;
                $a = 40;
                echo '<br />Value of $a is :' . $a;
                echo '<br />After Post-decrement value of $a ( i.e. $a-- ) is: ' . $a--;
                ?>
            </p>
            <p style="margin-left:100px;color:blue">6.Logical Operators</p>
            <p style="margin-left:120px;color:black">
                <?php
                $x = 50;
                $y = 30;
                if ($x == 50 and $y == 30)
                    echo "and Success <br>";

                if ($x == 50 or $y == 20)
                    echo "or Success <br>";

                if ($x == 50 xor $y == 20)
                    echo "xor Success <br>";

                if ($x == 50 && $y == 30)
                    echo "&& Success <br>";

                if ($x == 50 || $y == 20)
                    echo "|| Success <br>";

                if (!$x)
                    echo "! Success <br>";
                ?>
            </p>
            <p style="margin-left:100px;color:blue">7.String Operators</p>
            <p style="margin-left:120px;color:black">
                <?php
                $x = "Are ";
                $y = "you ";
                $z = "Okay";
                echo "Concatenation: ", $x . $y . $z, "<br>";
                echo "Concatenation and assignment: ", $x .= $y;
                echo $x;
                ?>
            </p>
            <p style="margin-left:100px;color:blue">8.Array Operators</p>
            <p style="margin-left:120px;color:black">
                <?php
                $arr1 = array("phy" => 70, "che" => 80, "math" => 90);
                $arr2 = array("Eng" => 70, "Bio" => 80, "CompSci" => 90);
                $arr3 = $arr1 + $arr2;
                var_dump($arr3);
                echo"<br>";
                $arr4 = array(0 => 70, 2 => 80, 1 => 90);
                $arr5 = array(70, 90, 80);
                var_dump($arr4 == $arr5);
                echo"<br>";
                var_dump($arr5 != $arr4);
                ?>
            </p>
      </div>
        <style>
            body {

                background-image: url("white.jpg");
            }
        </style>
    </div>
</body>