<?php

const API_URL = "https://whenisthenextmcufilm.com/api";

#Inicializar una nueva sesión de cURL; ch = cURL handle
$ch = curl_init(API_URL);

// Indicar que queremos recibir el resultadode la petición y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

/*  
    Ejecutar la petición 
    y guardar la respuesta en una variable
*/
$resultado = curl_exec($ch);
$data = json_decode($resultado, true);

?>

<head> 
    <meta charset="UTF-8">
    <title> Próxima película de Marvel </title>
    <meta name="description" content="Consulta la próxima película de Marvel">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">

    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    >
</head>


<main>

    <section>
        <img src="<?= $data['poster_url']; ?>" width="300" alt="Poster de <?= $data['title']; ?>" style="border-radius: 16px;">
    </section>

    <hgroup>
        <h3> <?= $data['title']; ?> se estrena en <?php echo $data['days_until']; ?> </h3>
        <p> Fecha de estreno: <?= $data['release_date']; ?> </p>
        <p> La siguiente es: <?= $data['following_production']['title']; ?> </p>
    </hgroup>
    
</main>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

</style>