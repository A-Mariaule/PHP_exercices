<?php
/*
//exercice 1
$family=["Nathanael", "Jérémie" , " Marie-Eve" , " Anne-Lise" , "Adèle" , "Aurélien"  , "Louis"] ;
print_r($family);
$recipes=["tarte aux lentilles","pates au saumon" , "crêpe bretonne"];
print_r($recipes);
$movie=["Gladiator","Wiplash","Eternal Sunshine of the Spotless Mind","Le voyage de Chihiro","Wiplash","5 centimètre par seconde"];
echo $movie[3];
var_dump($movie);

//exercice 2
$me = array(
    "firstname" =>"Aurélien",
    "lastname"  =>"Mariaule",
    "age" => 25,
    "favourite season" => "fall",
    "soccer" => true,
);
$me["hobbies"]=["music","reading","video games"];
echo '<pre>';
print_r($me);
echo '</pre>';
$mother = array(
    "firstname" =>"Fabienne",
    "lastname" => " Méaux",
    "age" => 60,
    "favourite season" =>"fall",
    "soccer"=>false,
    "hobbies"=>["reading","walking"],
);
echo '<pre>';
print_r($mother);
echo '</pre>';
$me["mother"]=$mother;
echo '<pre>';
print_r($me);
echo '</pre>';
//count 
echo count($me);
print_r(count($me["hobbies"]));
print_r(count($me["hobbies"])+count($mother["hobbies"]));
$me["hobbies"][]="taxidermy";
$me["lastname"]="Durand";

$soulmate = array(
    "firstanme" =>"Emma",
    "lastname" =>"Dupont",
    "age" =>25,
    "favourite season" =>"spring",
    "soccer" =>true,
    "hobbies"=>["sport","chess","reading"],
);

// perform array operation
$possible_hobbies_via_intersection = array_intersect($me["hobbies"],$soulmate["hobbies"]);
$possible_hobbies_via_merge = array_merge($me["hobbies"],$soulmate["hobbies"]);

echo '<pre>';
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';
*/
//exercices suites
$web_development=[
    "frontend"=>[],
    "backend"=>[],
];
$web_development["frontend"][]="xhtml";
$web_development["backend"][]="Ruby on Rails";
$web_development["frontend"][]="css";
$web_development["backend"][]="Flash";
$web_development["frontend"][]="javascript";
$web_development["frontend"][0]="html";
unset($web_development["backend"][0]);
echo '<pre>';
print_r($web_development);
echo '</pre>;'

?>