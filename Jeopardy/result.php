<!--+++ Use this file for page connection & data processing +++-->
<!DOCTYPE html>
<html>
    <head>
        <title>Jeopardy</title>
        <link rel="stylesheet" href="../Styles/result-css.css">
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
            ?>
            <div id="container">
                <div id="result">
                    <?php 
                        echo $point;
                        print "<br><br>";
                        print "Correct Answer<br>$c_a<br><br>";
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
                </div>
            </div>

                <div>
                    <a id="return" href="./jeopardy.php">Return</a>
                </div>
        </div>
    </body>
</html>
