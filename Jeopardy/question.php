<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="../Styles/style.css">
    </head>
    <body>
        <?php
            // Assign variables for displaying question page components
            $category = $_GET['category'] ?? '';
            $point = $_GET['point'] ?? '';
            $question = $_GET['que'] ?? '';
            $c_1 = $_GET['c1'] ?? '';
            $c_2 = $_GET['c2'] ?? '';
            $c_3 = $_GET['c3'] ?? '';
            $c_4 = $_GET['c4'] ?? '';
            $c_a = $_GET['ca'] ?? '';
        ?>
        <div id="container">
            <div id="money">
                <h1><?php echo $point; ?></h1>
            </div>
            <div id="question">
                <h1><?php echo $question; ?></h1>
            </div>
            <div id="answer">
                <form method="post" action="./question.php">
                    <input type="radio" id="c1" name="choices" value="<?php echo $c_1; ?>">
                    <label for="c1"><?php echo $c_1 ?></label><br><br><br>
                    
                    <input type="radio" id="c2" name="choices" value="<?php echo $c_2; ?>">
                    <label for="c2"><?php echo $c_2 ?></label><br><br><br>
                    
                    <input type="radio" id="c3" name="choices" value="<?php echo $c_3; ?>">
                    <label for="c3"><?php echo $c_3 ?></label><br><br><br>

                    <input type="radio" id="c4" name="choices" value="<?php echo $c_4; ?>">
                    <label for="c4"><?php echo $c_4 ?></label><br><br><br>

                    <input type="submit" name="submit" value="Submit">
                    
                </form>
            </div>

            <div>
                <a href="./jeopardy.php">Return</a>
            </div>
        </div>
    </body>
</html>
