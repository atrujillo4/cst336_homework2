<?php
    function whoWins($t, $p, $t2, $p2, $score){
        echo "<div id='output'>";
        #echo $score[$t][$p] . " " . $score[$t2][$p2] . "<br>";
        if($score[$t][$p] > $score[$t2][$p2]){
            echo "<br>" . "Player 1 wins". "<br>";
        }
        else {
            echo "<br>" . "Player 2 wins". "<br>";
        }
        echo "</div>";
    }
?>