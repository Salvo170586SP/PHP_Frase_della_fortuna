<?php

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$nascita = $_POST['nascita'];
$citta = $_POST['citta'];

$benvenuto =  'Benvenuto ' . $nome . ' ' . $cognome;

$placeholder = "Se nato il $nascita e sei di $citta";

$frasi = [
    'Tutto ciò che ha un inizio ha anche una fine',
    'Commettere un errore e non correggersi: ecco il vero errore',
    'Chi sa non parla, chi parla non sa',
    'Chi sa contentarsi è ricco',
    'Colui che vince gli altri è potente, chi vince sé stesso è forte',
    'Una buona azione non comporta ricompensa',
    'Niente di grande è stato mai raggiunto senza l’entusiasmo',
    'NienOgni muro è una porta',
    'Ciò che rimproveri agli altri, non farlo tu stesso',
    'Senza fretta, ma senza sosta',
];

$num = rand(0,6);


$fraseRand = $frasi[$num];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Nunito', sans-serif;
        }
        header {
            padding: 20px;
            border-bottom: 1px solid black;
            text-align: center;
        }
        main{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
            font-size: 2rem;
        }

    </style>
</head>

<body>
    <header>
        <h1><? echo $benvenuto  ?></h1>
        <p><? echo $placeholder ?></p>
        <p>Ti diamo il bentornato nella nostra app della fortuna</p>
    </header>
    <main>
        <h3>Frase del giorno</h3>
        <p>"<? echo $fraseRand ?>"</p>
    </main>
</body>

</html>