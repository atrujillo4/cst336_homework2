<?php
    include 'Functions/scores.php';
    include 'Functions/ChoicePlayer.php';
    include 'Functions/WhoWins.php';
    
    function play(){
        $score = createScore($score);
        $random_team = rand(0,4);
        $random_player = rand(0,4);
        ChoicePlayer($random_team, $random_player, 1);
        $random_team2 = rand(0,4);
        $random_player2 = rand(0,4);
        #Makes sure the players are not on the same team
        while ($random_team == $random_team2) {
        $random_team2 = rand(0,4);
        }
        ChoicePlayer($random_team2, $random_player2, 2);
        whoWins($random_team,$random_player,$random_team2,$random_player2, $score);
    }
    
?>