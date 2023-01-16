<?php
/**
 * Series of exercises on PHP conditional structures.
*/  
/*
// 1.1 Clean your room Exercise 

$room_is_filthy = false;

if( $room_is_filthy ){
	echo "Yuk, Room is dirty : let's clean it up !";
	//cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}


// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = ["health hazard","filthy","dirty","clean","immaculate"];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[2]; 

if( $room_filthiness==="health hazard" ||$room_filthiness==="filthy"){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if($room_filthiness==="dirty"){
	echo "Yuk, Room is dirty : let's clean it up !";

} else {
	echo "<br>Nothing to do, room is neat.";
}

// 2. "Different greetings according to time" Exercise
date_default_timezone_set('Europe/Paris');
$now = date("H:i"); // How to get the current time in PHP ? Google is your friend ;-)
// Test the value of $now and display the right message according to the specifications.

if( date("05:00")<= $now && $now <=date("09:00")){
    echo "Good morning !";
}
elseif( date("09:01")<= $now && $now <=date("12:00")){
    echo "Good day !";
}
elseif( date("12:01")<= $now && $now <=date("16:00")){
    echo "Good afternoon !";
}
elseif( date("16:01")<= $now && $now <=date("21:00")){
    echo  "Good evening !";
}
elseif( date("21:01")<= $now && $now <=date("04h59")){
    echo  "Good night !";
}

// 3. "Different greetings according to age" Exercise
if (isset($_GET['age'])){
    if(isset($_GET['Man'])){
        $gender="mister";
        $gender_kid="Boy!";
    }
    elseif(isset($_GET['Woman'])){
        $gender="miss";
        $gender_kid="Girl!";
    }
	// Form processing
    $age=$_GET['age'];
    if($age<12){
        if(isset($_GET['yes'])){
            echo "Hello " . $gender_kid;
        }
        else{
            echo "Aloha ". $gender_kid;
        }
    }
    elseif(12<=$age && $age<18){
        if(isset($_GET['yes'])){
            echo "Hello ". $gender. " Teenager !";
        }
        else{
            echo "Aloha ". $gender. " Teenager !";
        }
    }
    elseif(18<=$age && $age<115){
        if(isset($_GET['yes'])){
            echo "Hello ". $gender. " Adult !";
        }
        else{
            echo "Aloha ". $gender. " Adult !";
        }
    }
    elseif($age>=115){
        echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
    }
}
// Form (incomplete)
?>
<form method="get" action="">
	<label for="age">How old are you ?</label>
	<input type="text" name="age">
    <label for="Man">Man</label>
    <input type="radio" name="Man">
    <label for="Woman">Woman</label>
    <input type="radio" name="Woman">
    <label for="language">Do you speak English?</label>
    <label for="yes">yes</label>
    <input type="radio" name="yes">
    <label for="no">no</label>
    <input type="radio" name="no">
	<input type="submit" name="submit" value="Greet me now">
</form>


//6. The Girl Soccer team
$age=$_GET["age"];
$gender="girl";
$message="welcome to the team !";
if(isset($_GET['Man'])){
    $gender="boy";
}
$name=$_GET["name"];
if($age<21 || $age>40 || $gender==="boy"){
    $message="Sorry you don't fit the criteria";
}
echo $message


<form method="get" action="">
    <label for="name">What is your name ?</label>
    <input type="text" name="name">
	<label for="age">How old are you ?</label>
	<input type="text" name="age">
    <label for="Man">Man</label>
    <input type="radio" name="Man">
    <label for="Woman">Woman</label>
    <input type="radio" name="Woman">
    <input type="submit" name="submit">
</form>

//8. "School sucks!" Exercise
if(isset($_GET["number"]) && 0<=$_GET["number"] && $_GET["number"] <=20 ){
    if($_GET["number"]<=4){
        echo "This work is really bad. What a dumb kid! ";
    }
    elseif($_GET["number"]>4 && $_GET["number"]<=9){
        echo "This is not sufficient. More studying is required.";
    }
        elseif($_GET["number"]==10){
        echo  "barely enough!";
    }
        elseif($_GET["number"]>10 && $_GET["number"]<=14){
        echo "Not bad!";
    }
        elseif($_GET["number"]>14 && $_GET["number"]<=18){
        echo "Bravo, bravissimo!";
    }
        elseif($_GET["number"]>18 && $_GET["number"]<=20){
        echo  "Too good to be true : confront the cheater!";
    }

}
else{
    echo "The number must be between 0 and 20";
}

<form method="get" action="">
    <label for="number">What is the student's score ?</label>
    <input type="number" name="number">
</form>

*/

