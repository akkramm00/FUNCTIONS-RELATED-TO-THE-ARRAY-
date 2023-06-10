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
print_r(array_intersect($compare, $comparant)). "<br>";// compare les similitudes.
echo"<br>";
// les fonction squi pemettent de rajouter des elements au tableaux:
// " array_fill(index, nbre de fois , "la valeur" )" romplir en anglais:

print_r(array_fill(0, 5, "houss"));  echo"<br>";

//Autre manière pour afficher le resultat :
$remplissage = array_fill(0, 6, "php"); // assigner la fonction a une variable.
print_r($remplissage); echo"<br>";

$clefs = array("a", "b", "c", "d");
$remplir= array_fill_keys($clefs, "bleu");

print_r($remplir);
echo"<br>";

// array_push($tableau a completer, "valeur1", "valeur 2") => a la fin du tableau. ===> EMAPLE:
$couleur = array("bleu", "blanc");
array_push($couleur, "rouge", "jaune")."<br>";


print_r($couleur);
echo"<br>";
array_pop($couleur); // permet de supprimer le dernier element du tableau .
print_r($couleur);
echo"<br>";

array_unshift($couleur, "jaune", "violet");//permet d'inserer des elemets au début du tableau;
print_r($couleur);
echo"<br>";
array_shift($couleur); // permet de supprimer le premier elem du tableuax .
echo"<br>";

// la fonction " array_splice()":

$couleur1 = array("a" => "bleue", "b" => "vert", "c" => "jaune");
$couleur2 = array("a" => "rouge", "b" => "violet");

print_r(array_splice($couleur1, 1));// permet se supprimer tous les elements a partir de l'indice [1], et retourner un nouveau tableau avec les elements supprimés
echo"<br>";
print_r($couleur1);
echo"<br>";
// array_merge();

$alpha = array("a", "b");
$beta = array("c", "d", "f", "g");

$omega =array_merge($alpha, $beta);
print_r($omega);
echo"<br>";

//array_combine():combine deux tableau si les deux ont la meme longueur :
//le premier servira d'index pour lme deuxième: => EXAMPLE/

$table1 = array("x", "y");
$table2 = array("20", "30");

$table3= array_combine($table1, $table2);
print_r($table3);
echo"<br>";

// array_unique( permet de supprimer les doublons dans un tableau)=> EXAMPLE =>
$prenoms = array("houssaine", "alain", "4", "george",10,  "houssaine", 4, "10");
print_r(array_unique($prenoms));
echo"<br>";
// cette fonction est sensible a la casse pour les lettres ,mais insensible les les chiffres ("4" = 4 ; "10" = 10);

// La fonction sort(): ordonner le tableau dans un ordre croissant(chiffres et lettres )
sort($prenoms);
echo"<br>";
//============================================================================
//=========== Les functions concernant les tableaux associatifs ==============


//            ksort(ordre croissant selon les keys)
//            krsort(ordre décroissant selon les keys)
//            asort(ordre croissant selon les values)
//            arsort(ordre décroissant selon les values)

//                 créons un tableau associatif:

$agenom = array("Pierre" => 25, "Paul" => 30, "Jacques" => 35);
ksort($agenom);
print_r($agenom);



?> 

  <!--
  This script places a badge on your repl's full-browser view back to your repl's cover
  page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
  teal, blue, blurple, magenta, pink!
  -->
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>