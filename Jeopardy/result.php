<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="../Styles/style.css">
    </head>
    <body>
        <?php
            session_start();
            // Assign variables for displaying question page components
            $correct_answer = $_POST['correct_answer'] ?? '';
            $selected_answer = $_POST['choices'] ?? '';
            $point = $_POST['point'] ?? '';
            $c_a = trim($correct_answer);
            $s_a = trim($selected_answer);

            print "log:";
            echo $_SESSION['score'];
            echo $_SESSION['attempt'];
            echo $point;
            print "<br><br><br>";
            print "Your Answer<br>$s_a<br><br>";
            if($c_a == $s_a){
                print "CORRECT";
                $_SESSION['score'] += $point;
                $_SESSION['attempt'] += 1;
            }else{
                print "INCORRECT";
                $_SESSION['attempt'] += 1;
            }
            
        ?>
        <div id="container">
            <div id="result">
                <?php 

                     
                ?>
            </div>
            </div>

            <div>
                <a href="./jeopardy.php">Return</a>
            </div>
        </div>
    </body>
</html>
