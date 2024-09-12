<!-- Exercice : Créer 4 recettes avec titre et auteur, boucler pour les afficher -->

<?php

$recipes = [[
    'titre' => 'Spaghetti Carbonara',
    'auteur' => 'Mario'
  ],
  [
    'titre' => 'Poulet au curry',
    'auteur' => 'Sophie'
  ],
  [
    'titre' => 'Salade César',
    'auteur' => 'Julia'
  ],
  [
    'titre' => 'Tarte aux pommes',
    'auteur' => 'Michel'
  ]
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recettes de cuisine</title>
</head>
<body>
  <h1>Lite des recettes</h1>
  
  <ul>
    <?php 
    for ($i = 0; $i < count($recipes); $i++) {
      echo '<li>' . $recipes[$i]['titre'] . 'par ' . $recipes[$i]['auteur'] . '</li>';
    }
    ?>
  </ul>
</body>
</html>