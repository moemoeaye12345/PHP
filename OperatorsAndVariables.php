<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators And Variables</title>
</head>
<body>

        <?php

        //Arithmetic Operator
            // $x = 2**4;
            // echo ($x)."\n";

        //Assignment Operator
        // $flower = "Rose";
        // $number = 100;
        // $double = 12.1;

        // $a = 10;
        // $b = 20;
        // $sum = $a + $b;
        // echo($sum)."\n";


        //Combine Assignment Operator
        // $num = 5;
        // $num += 5;
        // $num -= 5;
        // $num *= 5;
        // $num /= 5;

        // echo ($num)."\n";

        //Increment and Decrement Operator 
        
        // $num1 = 1;

        // $num1 ++;
        // echo($num1)."\n";

        // $num1 --;
        // echo ($num1);

        //Comparison Operators
        //Logical Operators
        // $num2 = 5;
        // if( $num2 <= 50 && $num2 >= 10){
        //     echo "True"."\n";
        // }
        // else{
        //     echo "False"."\n";
        // }

        //Object 

        // $stu = new Profile();
        // $stu->name = "John Doe";
        // $stu->age = 20;

        // $teacher = new Profile();
        // $teacher->name = "Jack";
        // $teacher->age = 40;

        // echo $teacher->name;
        

        //string Concatination
            // echo '<br\>';
            // $a = "Hello World";
            // $b = ' Test $a ';
            // $c = " Testing $a ";

            // echo $a ." ".$b.$c;


        //HEREDOC

        // $myHTML =<<<LABLE
        // What is Lorem Ipsum? $a
        // Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        // LABLE;

        // echo $myHTML;


        //NOWDOC

        // $myNew = <<< 'HERE'
        // What is Lorem Ipsum? $a
        // Lorem Ipsum is simply dummy text of the printing and typesetting industry.

        // HERE;

        // echo $myNew;


        $name = "Moe Moe Aye";
        echo $name[0];
        echo $name[1];
        echo $name[3];

        echo gettype($name);






        
        
        ?>
    
</body>
</html>

