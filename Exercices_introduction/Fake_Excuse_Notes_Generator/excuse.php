<?php
//vérification que le form est rempli
if(isset($_GET["name"],$_GET["gender"],$_GET["name_teacher"],$_GET["reason"])){
    // récupération des variables du form
    $name=$_GET["name"];
    $gender=$_GET["gender"];
    $name_teacher=$_GET["name_teacher"];
    $reason=$_GET["reason"];
    //date
    $day_name=date("l");
    $day_number = date("d");
    $month_name=date("F");
    $year=date("Y");
    $date="<p class=\"main__response--date\">  ".$day_name." , the " . $day_number. " " . $month_name. " " .$year ." </br> </p>";

    // création des variables pour la personalisation du mot d'excuse
    $gender_text=($gender=="Boy")?"Our son":"Our daugter";

    switch($reason){
        case "illness":
            $excuse="His state of health justifies this absence. The family doctor recommended a period of rest.";
            break;
        case "death":
            $excuse="His favorite gold fish is recently dead so we are going to bury him tomorrow.";
            break;
        case "activity":
            $excuse="Tomorrow , He is going to a basket match with his club  .";
            break;
        case "end":
            $excuse="Tomorrow will be the end of world .";
            break;

    }
    //génération du mot d'excuse
    $message ="<p class=\"main__response--message\"> </br> Mr/Ms ".$name_teacher . " , </br>  ". $gender_text ." , ".$name .", will not be able to attend class tomorrow. " .$excuse . " Our child should return to class as soon as possible. <br>Our most sincere greetings.</p>";

}

//html
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Fake Excuse Notes Generator</title>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
    <body>

        <header class="header">
        <h1 class="header__title">Fake Excuse Notes Generator</h1>
        </header>

        <main class="main">
            <form class="main__form" >
                <label for="name">Name of your child</label>
                <input type="text" name="name" class="main__form--name">
                <label for="gender">Gender</label>
                <select class="main__form--gender" name="gender">
                    <option value="Boy">Boy</option>
                    <option value="Girl">Girl</option>
                </select>
                <label for="name_teacher">Name of the teacher</label>
                <input type="text" name="name_teacher" class="main__form--name_teacher">
                <label for="reason">Reason for the absence :</label>
                <label for="illness">Illness</label>
                <input type="radio" class="main__form--illness" name="reason" value="illness">
                <label for="death">death of the pet (or a family member)</label>
                <input type="radio" class="main__form--death" name="reason" value="death">
                <label for="activity">significant extra-curricular activity</label>
                <input type="radio" class="main__form--activity" name="reason" value="activity">
                <label for="end">End of the world</label>
                <input type="radio" class="main__form--end" name="reason" value="end">
                <input type="submit" class="main__form--submit" name="submit" value="Create">
            </form>
            <div class="main__response">
                <?php 
                    //vérification que le form est rempli
                    if(isset($message)){
                        echo $date;
                        echo $message;
                    }
                    else{
                        echo "Complete the form ";
                    }
                ?>
            </div>
        </main>
    </body>

</html>