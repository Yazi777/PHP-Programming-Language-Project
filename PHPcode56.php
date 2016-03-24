<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <?php
            #recursive function
            recurs(3);
            function recurs($a){
                if($a < 7){
                    echo "$a\n";
                    $a = $a + 1;
                    recurs($a);
                }
            }
            echo "<br>";
            #overwritten variable?
            $b = "first!";
            $c = 0;
            while($c < 2){
                $b = "haha I overwrote you";
                echo "$b <br>";
                $c++;
            }
            echo "$b <br>";
            #overwritten variables?
            $d = 42;
            overrr($d);
            function overrr($x){
                echo $x;
                $d = 24;
                echo "<br>The new d= $d<br>";
            }
            echo $d;
            echo"<br>";
            #assignments
            $arya = array("c","a","t");
            $aryb = array("d","o","g");
            $arya = $aryb;
            $aryb[1] = "u";
            foreach ($arya as $value) {
                echo "$value";
            }
            echo"<br>";
            foreach ($aryb as $value) {
                echo "$value";
            }
        ?>
    </body>
</html>
