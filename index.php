<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
#Inicializar una nueva sesion de cURL; ch = curl handle
$ch = curl_init(API_URL);

//queremos recibir el resultado de la peticion y no mostrar en la pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//ejecutar la peticion y guardamos el resultado 

$result = curl_exec($ch);
$data = json_decode($result, true);

curl_close($ch);

// var_dump($data);

?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="La Proxima pelicula de Marvel" />
    <!-- Centered viewport --> 
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    />
</head>

<main>
   
    <section>
        <img src="<?= $data["poster_url"]; ?>" width= "300px";  alt="Poster de <?= $data["title"] ?>" style="border-radius: 16px"/>
    </section>

    <hgroup>
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> dias</h3>
        <p> Fecha de estreno <?= $data["release_date"]; ?></p>
        <P>La siguiente Pelicula es <?= $data["following_production"]["title"]; ?> </P>
    </hgroup>
</main>

<style>
    body{
        background-color: #0002;
    }
    section{
        display: grid;
        place-content: center;
    }
    hgroup{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

</style>
