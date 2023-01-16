<?php
$human='<iframe src="https://giphy.com/embed/CLnmxQqmk6X16" width="480" height="264" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/dancing-adventure-time-CLnmxQqmk6X16">via GIPHY</a></p>';
$cat= '<iframe src="https://giphy.com/embed/MDJ9IbxxvDUQM" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/cat-kisses-hugs-MDJ9IbxxvDUQM">via GIPHY</a></p>';
$unicorn = '<iframe src="https://giphy.com/embed/fckbO2dUKL3bmuYFoW" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/PlayWonderlands-unicorn-day-butt-stallion-fckbO2dUKL3bmuYFoW">via GIPHY</a></p>';
$choice="";
$choice=(isset($_GET["human"])) ? $human: $choice;
$choice=(isset($_GET["cat"])) ? $cat: $choice;
$choice=(isset($_GET["unicorn"])) ? $unicorn: $choice;
echo $choice;
?>
<form >
    <label for="question">"Are you a human, a cat or an unicorn ?"</label></br>
    <input type="radio" name="human">
    <label for="human">human</label>
    <input type="radio" name="cat">
    <label for="cat">cat</label>
    <input type="radio" name="unicorn">
    <label for="unicorn">unicorn</label></br>
    <input type="submit" name="submit" value="submit">
</form>