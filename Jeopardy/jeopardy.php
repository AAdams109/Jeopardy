<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../Styles/style.css">
    </head>
    <body>
        <?php
            include ("./q_query.php");
            session_start();
            global $score;
            $score = $_SESSION['score'];
            // Initialize score if it doesn't exist
            if (!isset($_SESSION['score'])) {
                $_SESSION['score'] = 0;
            }
            if (!isset($_SESSION['attempt'])) {
                $_SESSION['attempt'] = 0;
            }
            
        ?>

        <div id="header">
            <nav>
                <h2 id="user-name">Name</h2>
                <ul>
                    <li><a href="leaderboard.html">Leaderboard</a> </li>
                </ul>
                <form action="login.html" id="log-out-form">
                    <button type="submit" id="log-out">Log Out</button>
                </form>
            </nav>
        </div>
        <table id="jeopardy-table">
            <tr class="Category">
                <td>Geography</td>
                <td>Biology</td>
                <td>Category</td>
                <td>Category</td>
                <td>Category</td>
                <td>Category</td>
            </tr>
            <tr>
                <td id="value">
                    <a href="./q_query.php?c=Geography&p=200">
                        $200
                    </a>
                </td>
                <td id="value"><a href="./q_query.php?c=Biology&p=200">$200</a></td>
                <td>$200</td>
                <td>$200</td>
                <td>$200</td>
                <td>$200</td>
            </tr>
            <tr>
                <td>$400</td>
                <td>$400</td>
                <td>$400</td>
                <td>$400</td>
                <td>$400</td>
                <td>$400</td>
            </tr>
            <tr>
                <td>$600</td>
                <td>$600</td>
                <td>$600</td>
                <td>$600</td>
                <td>$600</td>
                <td>$600</td>
            </tr>
            <tr>
                <td>$800</td>
                <td>$800</td>
                <td>$800</td>
                <td>$800</td>
                <td>$800</td>
                <td>$800</td>
            </tr>
            <tr>
                <td>$1000</td>
                <td>$1000</td>
                <td>$1000</td>
                <td>$1000</td>
                <td>$1000</td>
                <td>$1000</td>
            </tr>
        </table>

        <div class="footer">
            <ul>
                <li>Name</li>
                <li>Score: <?= $score?></li>
            </ul>
        </div>
    </body>
</html>