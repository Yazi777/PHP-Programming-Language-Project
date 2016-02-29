       <?php
            #PHP supports one-condition if/else statements
            $a = 5;
            $a > 2 ? $b = 7 : FALSE;
            echo "$b <br>";

            #PHP supports multi-condition if/else statements
            $c = 3;
            $d = 7;
            if ($c == 3 && $d < 9){
                echo "Success <br>";
            }

            #PHP supports loops
            #while
            $e = 1;
            while($e <= 3){
                echo "Number is: $e <br>";
                $e++;
            }
            #do-while
            $f = 3;
            do {
                echo "Your number went down to: $f <br>";
                $f--;
            } while ($f > 0);
            #for
            for ($g = 0; $g <= 3; $g++) {
                echo "Counting up, we're at: $g <br>";
            }
            #foreach
            $artists = array("Nirvana", "KoRn", "Rob Zombie", "Marilyn Manson");
            foreach ($artists as $value) {
                echo "$value <br>";
            }


            #switch statements with breaks
            #'continue' means the same as 'break' in
            #PHP switch statements
            $food = "enchilada";
            switch ($food) {
                case "doughnut":
                    echo "The food you're craving is a doughnut";
                    break;
                case "enchilada":
                    echo "The food you're craving is an enchilada";
                    break;
                case "shrimp":
                    echo "The food you're craving is shrimp";
                    break;
                default:
                    echo "Apparently you're not craving anything good.";
            }

            #short-circuit logic
            function saySomething(){
                echo "hi!";
                return TRUE;
            }
            if(FALSE && saySomething()){
                echo "statement evaluated to true";
            }


        ?>
