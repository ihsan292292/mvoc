<section>
    <div style="background-color: #eed6ff;padding: 2;">
        <h1 style="color:black;margin-left: 100px;">PHP Variables
        </h1>
        <p style="margin-left:100px;color:blue">1.PHP Variable: Declaring string, integer, and float</p>
        <p style="margin-left:120px;color:green"><?php
                                                    $str = "hello string";
                                                    $x = 200;
                                                    $y = 44.6;
                                                    echo "string is: $str <br/>";
                                                    echo "integer is: $x <br/>";
                                                    echo "float is: $y <br/>";
                                                    ?>
        </p>
        <p style="margin-left:100px;color:blue">2.PHP Variable: Sum of two variables</p>
        <p style="margin-left:120px;color:green"> <?php
                                                    $x = 5;
                                                    $y = 6;
                                                    $z = $x + $y;
                                                    echo $z;
                                                    ?>

        </p>
        <p style="margin-left:100px;color:blue">3.PHP Variable: case sensitive</p>
        <p style="margin-left:120px;color:green"><?php
                                                    $color = "red";
                                                    echo "My car is " . $color . "<br>";
                                                    echo "My house is " . $COLOR . "<br>";
                                                    echo "My boat is " . $coLOR . "<br>";
                                                    ?>
        </p>
        <p style="margin-left:100px;color:blue">4.PHP Variable: Rules</p>
        <p style="margin-left:120px;color:green"><?php
                                                    $a = "hello"; //letter (valid)  
                                                    $_b = "hello"; //underscore (valid)  

                                                    echo "$a <br/> $_b";
                                                    ?></p>
        <h1 style="color:black;margin-left: 100px;">PHP Variables </h1>
        <p style="margin-left:100px;color:blue">1.Local variable</p>
        <p style="margin-left:120px;color:green"><?php
                                                    function local_var()
                                                    {
                                                        $num = 45;  //local variable  
                                                        echo "Local variable declared inside the function is: " . $num;
                                                    }
                                                    local_var();
                                                    ?> </p>


        <p style="margin-left:100px;color:blue">2.Global variable</p>
        <p style="margin-left:120px;color:green"><?php
                                                    $name = "Sanaya Sharma";        //Global Variable  
                                                    function global_var()
                                                    {
                                                        global $name;
                                                        echo "Variable inside the function: " . $name;
                                                        echo "</br>";
                                                    }
                                                    global_var();
                                                    echo "Variable outside the function: " . $name;
                                                    ?> </p>


        <p style="margin-left:100px;color:blue">3.Using $GLOBALS instead of global</p>
        <p style="margin-left:120px;color:green"><?php
                                                    $num1 = 45;      //global variable  
                                                    $num2 = 3;     //global variable  
                                                    function globalvar()
                                                    {
                                                        $sum = $GLOBALS['num1'] + $GLOBALS['num2'];
                                                        echo "Sum of global variables is: " . $sum;
                                                    }
                                                    globalvar();
                                                    ?> </p>
        <p style="margin-left:100px;color:blue">4.Static variable</p>
        <p style="margin-left:120px;color:green">
            <?php
            function static_var()
            {
                static $num1 = 3;       //static variable  
                $num2 = 6;          //Non-static variable  
                //increment in non-static variable  
                $num1++;
                //increment in static variable  
                $num2++;
                echo "Static: " . $num1 . "</br>";
                echo "Non-static: " . $num2 . "</br>";
            }

            //first function call  
            static_var();

            //second function call  
            static_var();
            ?> </p>
        <h1 style="color:black;margin-left: 100px;">PHP $ and $$ Variables </h1>
        <h4 style="color: red;margin-left:120px;">Example 1</h4>
        <p style="margin-left:120px;color:green">
            <?php
            $x = "abc";
            $$x = 200;
            echo $x . "<br/>";
            echo $$x . "<br/>";
            echo $abc;
            ?> </p>
            <h4 style="color: red;margin-left:120px;">Example 2</h4>
        <p style="margin-left:120px;color:green">
            <?php
            $x = "U.P";
            $$x = "Lucknow";
            echo $x . "<br>";
            echo $$x . "<br>";
            echo "Capital of $x is " . $$x;
            ?></p>
            <h4 style="color: b;margin-left:120px;">Example 3</h4>
        <p style="margin-left:120px;color:green">
            <?php
            $name = "Cat";
            ${$name} = "Dog";
            ${${$name}} = "Monkey";
            echo $name . "<br>";
            echo ${$name} . "<br>";
            echo $Cat . "<br>";
            echo ${${$name}} . "<br>";
            echo $Dog . "<br>";
            ?></p>
    </div>
    </section>