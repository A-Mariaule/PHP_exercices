<html>
  <head><title>Test</title></head>
  <body>
    <p>
        Hi! My name is
        <?php $name="Aurelien";
    echo $name; ?>
    </p>
    <p>
    I am <?php $age=25;
    echo $age;?>
     years old.
    </p>
    <p>
    My eyes are <?php $color="brown";
    echo $color;?>
    </p>
    <p>
        <?php $family= array(
            0=>'Nathanael',
            1=>'Jeremie',
            2=>'Marie-Eve',
            3=>'Anne-Lise',
            4=>'Adèle',
            5=>'Aurélien',
            6=>'Louis',
        );
        echo $family[0];
        ?>
    </p>
    <p>
        <?php $hungry=true;echo $hungry;
        ?>
        </p>
  </body>
</html>