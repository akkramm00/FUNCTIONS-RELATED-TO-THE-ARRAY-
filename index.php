<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
// La fonction " array_keys " qui affiche les clès d'un tableau :
// Tableau associatif => 

$voitures = array(
  "Citroen" => "DS3",
  "renault" => "Clio",
  "Peugeot" => "306",
  "Peugeot2" => 306
);
//pour les tableaux, on utilise la fonction " print_r " pour afficher les resultats .

print_r(array_keys($voitures));
echo "<br>";
// on peut ajouter deux argument optionnels(type-valeur , type-strict):
print_r(array_keys($voitures, 306, true)); 

// La fonction " array_value() " : affiche un new array avec les values :
$loisirs = array(
  "sport" => "trail",
  "voyage" => "Ecosse",
  "Musique" => "Guitare"
);
echo "<pre>";
print_r(array_values($loisirs));
echo "</pre>";

echo "<br>";

// la fonction " array_key_exists()" permet de vérifier si une clè exixte dans une array :
// revenant a l'array $voirues pour cet exercice:
if(array_key_exists("Citroen",$voitures)){
  echo "la clè  exixte";
}else{
  echo "la clè n'exixte pas";
}
echo "<br>";

// La fonction " array_search()": deux arguùment spour fonctionner :
// avec echo : elle renvoie le clè d'une valeur dans un tableau:
echo array_search("DS3" , $voitures). "<br>";
echo array_search("Guitare", $loisirs)."<br>";

// La fonction " in_array() " renvoie ' echo message' si la valeur est trouvé ;
//EXAMPLE+>
 $prenoms = array("Pierre", "paul", "Jacques");
if(in_array("Jacques", $prenoms)) {
  echo "prénom trouvé";
}else{
  echo "prénom non trouvé";
}
echo "<br><br>";
  // fonction " count()" ; renvoie le nombre d'élément d'un tableau :
 $sports = array("natation", "velo", "course", "natation");
 echo count($sports);
// Fonctions " array_count_values" :
print_r(array_count_values($sports)). "<br>";

// comparer deux tableaux associatifs avec la fonction 
// " array_diff_assoc" :
echo "<br>";
$compare =array(
  "a" => "bleu",
  "b" => "vert",
  "c" => "jaune"
  );
$comparant = array(
   "a" => "bleu",
  "b" => "vert"
);

print_r(array_diff_assoc($compare, $comparant)). "<br><br>";
echo "<br>";
print_r(array_diff_key($compare, $comparant)). "<br>";//compare que les keys;
echo "<br>";
print_r(array_intersect($compare, $comparant)). "<br>";// compare les similitudes:














?> 

  <!--
  This script places a badge on your repl's full-browser view back to your repl's cover
  page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
  teal, blue, blurple, magenta, pink!
  -->
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>