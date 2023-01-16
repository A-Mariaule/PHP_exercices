<?php
/*
$text=" According to a researcher ( sic     ) at Cambridge University , it doesn't matter in what order the letters in a word are , the only important thing is that the first and last letter be at the right place . The rest can be a total mess and you can still read it without problem . This is because the human mind does not read every letter by itself but the word as a whole .";

foreach (explode(" ",$text) as $word) {
    echo str_shuffle($word) . " ";
    
}
*/
//mettre en majuscule la première lettre d'un mot 
function capitalize_Firstletter($mot){
   return  mb_convert_case($mot, MB_CASE_TITLE, 'UTF-8');
};

//affiche l'année actuelle 
date("Y");

//affiche date, heure , minute et secondes
date_default_timezone_set("Europe/Paris");
date("Y-m-d / h:i:s");

//sommes de deux nombres + vérification des entrées
function sum($a,$b){
    if((is_int($a) || is_float($a)) && (is_int($b) || is_float($b)))
        return $a+$b;
    else{
        return "Error: argument is not a number.";
    }
};

//prend une chaine de caractère est retourne la première lettre de chaque mot en majuscule 

function acronym($string){
    $table_words=explode(" ",$string);
    $acronym="";
    foreach ($table_words as $word) {
        $new_word=mb_convert_case(substr($word,0,1), MB_CASE_UPPER, 'UTF-8');
        $acronym = $acronym . $new_word;
    }
    return $acronym;
};

//changer les lettres a et e consécutives par "æ"
function ChangeLetter($string){
    return str_replace("ae","æ",$string);
};

function Opposite_ChangeLetter($string){
    return str_replace("æ","ae",$string);
};

//afficher message d'erreur

function feedback($message,$css="info"){
    $div = "<div class=\"".$css ."\"> Error:" . $message . " </div>" ;
    return $div;
}


//génération d'un mot aléatoire

function random_word(){
    $file="words_alpha.txt";
    $file_arr = file($file);
    foreach($file_arr as $word){
        if(strlen($word)<=5){
            $file_arr5[]=$word;
        }
        elseif(7<=strlen($word) &&strlen($word)<=15 ){
            $file_arr15[]=$word;
        }
    }
    $rand5=rand(0,count($file_arr5)-1);
    $rand15=rand(0,count($file_arr15)-1);
    $word5=$file_arr5[$rand5];
    $word15=$file_arr15[$rand15];
    echo "<h1>Generate a new word</h1>";
    echo "<p>  ". $word5 . " " . $word15 . "</p>";
    echo "<button>Generate</button>";

}

random_word();



//mettre en minuscule un mot
function De_capitalize($string){
    return  mb_convert_case($string, MB_CASE_LOWER, 'UTF-8');
}

//volume d'un cone 
function calculate_cone_volum($ray,$height){
    $volume = $ray*$ray*pi()*$height*(1/3);
    return  $volume . " cm<sup>3</sup><br/>";
}
