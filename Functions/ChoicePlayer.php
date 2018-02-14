<?php
    function ChoicePlayer($randomTeam, $randomPlayer, $pos) {
        switch($randomTeam){
            case 0:
                $team = "Cavaliers";
                break;
            case 1:
                $team = "Lakers";
                break;
            case 2:
                $team = "Rockets";
                break;
            case 3:
                $team = "Spurs";
                break;
            case 4:
                $team = "Warriors";
                break;
        }
        switch($randomPlayer){
            case 0:
                $player = "Center";
                break;
            case 1:
                $player = "Forward1";
                break;
            case 2;
                $player = "Forward2";
                break;
            case 3;
                $player = "Guard1";
                break;
            case 4;
                $player = "Guard2";
                break;
        }
        echo "<img id='reel$pos' src ='Players/$team/$player.png' 'width='100' >";
    }
?>