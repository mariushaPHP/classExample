
<?php

use Users\Automobilis;
use Users\Dviratis;
use Users\Motociklas;
use Users\Render;
use Users\Student;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $user1 = new  Student("Jonas", 'jonas@one.lt', 'bomzas');
        $user1->addDescription('muladiec');
        $user1->addSubject('PHP');
    ?>
    <ul>
        <?php
            Render::showAll($user1->getUserData());
        ?>
    </ul> 



    <?php

        $auto = new Automobilis('MERSAS', 'CLK', 240, 5, 5, 4, 1950);
        $auto->setKaina(25000);
        $auto->setAprasymas('Afigienas masiniukas:)');
        echo $auto;
        var_dump($auto);
        

        $moc = new Motociklas('YAMAHA', 'UBYSTVA', 2, 500, 320, 'Ziedinis');
        $moc->setKaina(8000);
        $moc->setAprasymas('Nemegstu motociklu');
        echo $moc;
        var_dump($moc);

        $bike = new Dviratis('Ereliukas', 'RAMBYNAS', 2, 15, 'miesto');
        $bike->setKaina(30);
        $bike->setAprasymas('Senas geras dviratukas');
        echo $bike;
        var_dump($bike);

    ?>

</body>
</html>