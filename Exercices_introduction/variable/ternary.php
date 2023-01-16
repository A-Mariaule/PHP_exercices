<?php
$hello= (isset($_GET["Man"])) ? "Hello Sir" : "Hello Miss";
echo $hello
?>
<form>
    <label for="Man">Man</label>
    <input type="radio" name="Man">
    <label for="Woman">Woman</label>
    <input type="radio" name="Woman">
    <input type="submit" name="submit">
</form>