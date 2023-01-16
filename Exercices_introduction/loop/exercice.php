<?php
/*
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

foreach ($pronouns as $pronoun){
    if($pronoun==="He/She"){
        echo $pronoun . " codes <br>";
    }
    else{
        echo $pronoun . " code <br>";   
    }
}

//script while
$number=1;
while ($number <=120){
    echo $number  ." <br>";
    $number++;

}

// script for
for ($number=1;$number<=120;$number++){
    echo $number  ." <br>";
}

$keller5_list=["Arno" ,"Aurélien" ,"Aurore" ,"Benjamin" ,"Céline" ,"Corentin" ,"Dominique" ,"Edouard" ,"Hugo","Jofrey" ,"Jonathan" ,"jonathan" ,"Laura" ,"Lysie" ,"Marnie" ,"Mathilde" ,"Milo" ,"Nadim" ,"Nathalie" ,"Nathalie" ,"Nour" ,"Pierre" ,"Quentin","Virginie"];
foreach ($keller5_list as $name) {
    echo $name . " <br>";
}
*/
$countries = array(
    "United States",
    "Canada",
    "United Kingdom",
    "Australia",
    "New Zealand",
    "Germany",
    "France",
    "Japan",
    "China",
    "Italy"
);

$countries2 = array(
    "US" => "United States",
    "CA" => "Canada",
    "UK" => "United Kingdom",
    "AU" => "Australia",
    "NZ" => "New Zealand",
    "DE" => "Germany",
    "FR" => "France",
    "JP" => "Japan",
    "CN" => "China",
    "IT" => "Italy"
);

?>
<!DOCTYPE html>
<html>
<select>
    <?php
    foreach ($countries as $country)
        echo "<option>" . $country . "</option>"
    ?>
</select>
<select>
    <?php
    foreach ($countries2  as $key => $country)
        echo "<option value=" . $key . ">" . $country . "</option>"
    ?>
</select>

</html>