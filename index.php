<?php
  function calculate($type, $number1, $number2)
  {
      switch($type)
      {
        case '+':
          $total = $number1 + $number2;
        break;
        case '-':
          $total = $number1 - $number2;
        break;
        case '/':
          $total = $number1 / $number2;
        break;
        case '*':
          $total = $number1 * $number2;
        break;
        default:
          echo ("No arguments were given!");
        break;
      }


      echo '<center><h1><div style="width:500px;margin:auto;">';
      echo ("Total: " . $total);
      echo ("<br><br>First number given: " . $number1 . "<br>Type of math: " . $type . "<br>Second number given: " . $number2);
      echo ("<br><br><br>" . $number1 . " " . $type . " " . $number2 . " = " . $total);
      echo '</div></h1></center>';


    }
      calculate ("+", 5, 250);
?>
