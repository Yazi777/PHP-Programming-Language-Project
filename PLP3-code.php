<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <?php
            $int1 = 3;
            $string1 = "This is a string.";
            $myArray = array("This", "is", "an", "array.");
            $float1 = 52.967;
            $boolean1 = TRUE;
            $boolean2 = FALSE;

            $addin = $int1 + $float1;
            #it is a widening conversion resulting in a float
            $array2 = array(3, "is greater than", 1);
            #yes you can put different datatypes in the same array

            $consi1 = 1.0 + "3";
            $consi2 = 1 + "yay 3";
            $consi3 = 1 + "3 yay";
            #yes you can convert from a string to an int or float
            #but only if the string begins with numeric info
            #and the beginning numeric info is all that will be used

            $x = "5" + 6;
            echo $x;
            #originally did not compile because of variable naming convention

        ?>
    </body>
</html>
