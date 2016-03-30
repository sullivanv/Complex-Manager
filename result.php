<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Ma calculette</title>
    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
    <div class="content">
      <h1>Calculette de complexe</h1>
      <div class="result">
        <?php if (($_POST['nombreVR1'] < -10 || $_POST['nombreVR1'] > 10) || ($_POST['nombreVR2'] < -10 || $_POST['nombreVR2'] > 10))
          {
            echo "Les nombres testés doivent être compris entre -10 et 10.";
            ?>
            <div id="retour">
              <button id="boutton"><a href="../Index.php"><b>Retour</b></a></button>
            </div>
            <?php
            exit;
          }
        ?>
        <?php echo "La partie réelle de votre nombre est " . $_POST['nombreVR1'] . " et la partie imaginaire est " . $_POST['nombreVR2'] . ".<br>"?>
        <?php 
              if (($_POST['nombreVR1'] == 0) && ($_POST['nombreVR2'] == 0))
                echo "Le conjuge de votre nombre est 0.<br>";
              else if ($_POST['nombreVR1'] == 0 && $_POST['nombreVR2'] > 0)
                echo "Le conjuge de votre nombre est - " . $_POST['nombreVR2'] . "i.<br>";
              else if ($_POST['nombreVR1'] == 0 && $_POST['nombreVR2'] < 0)
                echo "Le conjuge de votre nombre est " . $_POST['nombreVR2'] . "i.<br>";
              else if ($_POST['nombreVR2'] == 0)
                echo "Le conjuge de votre nombre est " . $_POST['nombreVR1'] . ".<br>";
              else if ($_POST['nombreVR2'] > 0)
                echo "Le conjuge de votre nombre est " . $_POST['nombreVR1'] . " - " . $_POST['nombreVR2'] . "i.<br>";
              else
              {
                $v2 = -$_POST['nombreVR2'];
                echo "Le conjuge de votre nombre est " . $_POST['nombreVR1'] . " + " . $v2 . "i.<br>";
              }
              ?>
        <?php $x = $_POST['nombreVR1'];
              $y = $_POST['nombreVR2'];
              $z = $x * $x + $y * $y;
              if ($z == 0)
                echo "Votre nombre ne possède pas d'inverse (division par 0 impossible).<br>";
              else if ($y > 0)
              {
               if ($x == 0) 
                 echo "L'inverse est : - (" . $y . "i/" . $z . ").<br>";
                else
                  echo "L'inverse est : (" . $x . "/" . $z . ") - (" . $y . "i/" . $z . ").<br>";
              }
              else if ($y == 0)
                echo "L'inverse est : (" . $x . "/" . $z . ").<br>";
              else
              {
                $ybis = -$y;
                if ($x == 0)
                  echo "L'inverse est : (" . $ybis . "i/" . $z . ").<br>";
                else
                  echo "L'inverse est : (" . $x . "/" . $z . ") + (" . $ybis . "i/" . $z . ").<br>";
              }
              ?>
          <?php
              $modulex = pow($x, 2);
              $moduley = pow($y, 2);
              $module = $modulex + $moduley;
              echo "Le module est la racine carre de " . $module;
              $mod = sqrt($module);
              echo " soit : " . $mod . ".<br>";
          ?>
          <?php
          if ($x == 0 && $y == 0)
            echo "Le nombre 0 ne possede pas d'argument !";
          else
          {
            if ($y == 0)
              $arg = "π";
            else if ($x != 0)
              $arg = atan($y / $x);
            else if ($x == 0 && $y > 0)
              $arg = "π/2";
            else if ($x == 0 && $y < 0)
            {
              $arg = "3π/2";
            }
            echo "Son argument est " . $arg . "[2π].<br>";
          }
          ?>
          <?php
          if ($x == 0 && $y == 0)
            echo "Le nombre 0 ne possède donc pas de forme trigonométrique !<br>";
          else
          {
            $cos = $x / $mod;
            $sin = $y / $mod;
            echo "Enfin, sa forme trigonométrique est : √" . $module . "*(cos ". $cos . " + i sin " . $sin . ").<br>";
          }
          ?>
          
        </div>
        <div id="retour">
          <a href="../Index.php"><button id="boutton"><b>Retour</b></button></a>
        </div>
        <div id="CanvasElem">
          <canvas id="canvas" width="300px" height="300px"
                  data-nombre1="<?php echo $_POST['nombreVR1']; ?>" data-nombre2="<?php echo $_POST['nombreVR2']; ?>">
          </canvas>
        </div>
    </div>
    <script type="text/javascript" src="canvas.js"></script>
  </body>
</html>