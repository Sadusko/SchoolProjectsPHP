<?php
function reken($n1, $n2, $type) //n1 is nummer 1 en n2 is nummer 2 - $type is optellen aftrekken etc.
{

      switch($type)
      {
        case "optellen":
        $tot = $n1 + $n2;
        echo "<h2> ". $n1 . " + ". $n2 . " = " . $tot . "</h2><br>";
        break;

        case "delen":
        $tot = $n1 / $n2;
        echo "<h2> ". $n1 . " / ". $n2 . " = " . $tot . "</h2><br>";
        break;

        case "aftrekken":
        $tot = $n1 - $n2;
        echo "<h2> ". $n1 . " - ". $n2 . " = " . $tot . "</h2><br>";
        break;

        case "keer":
        $tot = $n1 + $n2;
        echo "<h2> ". $n1 . " * ". $n2 . " = " . $tot . "</h2><br>";
        break;

        default:
        echo "<br><br><br><h3>Exception:</h3>No arguments given in calculate...";
        break;
      }
}
reken(3,5,'optellen');
reken(100,7,'aftrekken');
reken(10,10,'keer');
reken(3,3,'delen');
echo "<br><h3>Test for default.</h3><br>";
reken(5,5);

?>
