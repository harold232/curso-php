<?php
    $name = "Miguel";
    $isDev = true;
    $age = 17;

    $isOld = $age > 40;

    define('LOGO_URL', "https://www.php.net/images/logos/php-logo.svg");
    // var_dump($name); gettype($name);

    $output = "Hola $name";
    $output .= ", con una edad de $age. 😊";

    $outputAge = match (true) {
        $age < 2 => "Eres un bebé",
        $age < 10 => "Eres un niño",
        $age < 18 => "Eres un adolescente",
        $age === 18 => "Eres un mayor de edad",
        $age < 40 => "Eres un adulto joven",
        $age < 60 => "Eres un adulto mayor",
        default => "Hueles a madera que ya te vas a morir",
    };

    const NOMBRE = 'Miguel';

    $bestLanguage = ["PHP", "JavaScript", "Python", 1, 2];
    $bestLanguage[3] = "Java";
    $bestLanguage[] = "TypeScript";

    $person = [
        "name" => "Miguel",
        "age" => 17,
        "isDev" => true,
        "languages" => ["PHP", "JavaScript", "Python"],
    ];

    $person["name"] = "pheralb";
    $person["languages"][] = "Java";


?>

<h3>
    El mejor lenguaje es <?= $bestLanguage[3] ?>
</h3>

<ul>
    <?php foreach ($bestLanguage as $key => $language) : ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach; ?>
</ul>

<h2><?= $outputAge ?></h2>
<img src= "<?= LOGO_URL ?>" alt="PHP LOGO" width="200">
<h1>
    <?= $output ?>
</h1>


<?php if ($isOld) : ?>
    <h2>Usted es mayor de 40 años</h2>
<?php else : ?>
    <h2>Usted es menor de 40 años</h2>
<?php endif; ?>



