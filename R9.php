<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
    <?php
      $numeros=[
        "1",
        "3",
        "5",
        "7",
        "9",
        "11",
        "13",
        "15",
        "17",
        "19",
        "21",
        "23",
        "25",
        "27",
        "29",
        "31",
        "33",
        "35",
        "37",
        "39"
    ];
    for ($i=0; $i<count($numeros); $i++) {
      echo "<li class=\"numeros\">".$numeros[$i]."</li>";
    }
     ?>
     </ul>
  </body>
</html>
