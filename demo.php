<?php
    $name = "Miguel";
    $isDev = true;
    $age = 17;

    $isOld = $age > 50;

    define('LOGO_URL', 'https://www.php.net/images/logos/new-php-logo.png');

    $output = "Hola \"$name\", con una edad de $age.";
    $outputAge = match (true){
        $age < 2 => "Eres un bebé, $name.",
        $age < 10 => "Eres un niño, $name.",
        $age < 18 => "Eres un adolescente, $name.",
        $age == 18 => "Felicidades por ser mayor de edad, $name.",
        $age < 40 => "Eres un adulto joven, $name.",
        $age < 65 => "Eres un adulto viejo, $name.",
        default => "eres mas madera que fruta, $name."
    };

    $bestLanguages = ["PHP", "JavaScript", "Python", "C#", "Java"];
    $bestLanguages[] = "Go";
    $bestLanguages[] = "Rust";

    $person = [
        "name" => $name,
        "age" => $age,
        "isDev" => $isDev,
        "languages" => ["PHP", "JavaScript", "Python"],
    ];

    $person['name'] = "Pepa pig";
    $person['languages'][] = "C++";




?>





<ul>
    <?php foreach ($bestLanguages as $key => $language) : ?>
        <li><?= $key . " " . $language; ?></li>
    <?php endforeach; ?>
</ul>

<h3>Lenguajes que conoce <?= $person['name']; ?>: <?= implode(", ", $person['languages']); ?></h3>

<h3> <?= implode(", ", $bestLanguages); ?> </h3>


<h2>
    <?= $outputAge; ?>
</h2>

<!-- <?php if ($isOld) : ?>
    <h2> Eres viejo, lo siento. </h2>

<?php elseif ($isDev) : ?>
    <h2> No eres viejo, pero eres dev, estás jodido. </h2>

<?php else : ?>
    <h2> Eres joven, disfruta tu vida. </h2>

<?php endif; ?> -->








<img src="<?= LOGO_URL; ?>" alt="PHP Logo" width="200">
<h1>
    <?= $output; ?>
</h1>








<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

</style>