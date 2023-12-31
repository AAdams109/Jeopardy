<?php function sortbyScore($a, $b){
	return $b['score'] - $a['score'];
}


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Final Results</title>
        <link href="../Styles/leaderboard_style.css" rel="stylesheet">
    </head>
    <body>
	 <table id="leaderboard">
           <caption>Final Results</caption>
          <tr>
            <th>Name</th>
            <th>Winnings</th>
          </tr>
      
	  <?php
		$userData = array();
	   $i = 0;
	   foreach(file(".././Login/userdata.txt") as $line){
			$arr = explode(",", $line);	//get each line of the text file and turn into array
			$userData[$arr[0]] = array('name' => $arr[0], 'score' => $arr[2]);	//turn each line into associative array
			usort($userData, "sortbyScore");	//sort from highest to lowest score
	   }
	   foreach($userData as $val){?>
          <tr>
            <td><?= $val['name'];	//print name?>	
			</td>
            <td><?= $val['score'];	//print score?></td>
          </tr>
	   <?php 
	   $i++;
		if ($i == 10){	//only print top 10 users
				break;
			}
	   } ?>
		 </table>

        <div id="new-game">
            <form method="post">
                <input type="submit" value="New Game" name="restart" id="return-board">
            </form>
		<p>Clear your browser history to make the questions visible.</p>
		<?php
			 if(isset($_POST['restart'])) { 
				require_once('restartGame.php');
				newGame();
				
			} ?>
           </div>
		
		 
    </body>
</html>
