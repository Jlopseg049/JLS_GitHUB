<?php
    function estilosa(string $s, int $num = 0){
        switch ($num){
            case 1:
                echo "<h1>". $s . "</h1>";
                break;
            case 2:
                echo "<h2>". $s . "</h2>";
                break;
            case 3:
                echo "<h3>". $s . "</h3>";
                break;
            case 4:
                echo "<h4>". $s . "</h4>";
                break;
            case 5:
                echo "<h5>". $s . "</h5>";
                break;
            case 6:
                echo "<h6>". $s . "</h6>";
                break;
            default:
                echo "<p>". $s . "</p>";
                break;
            }
    }