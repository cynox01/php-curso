<?php
    //variables
    $name = "Brian";
    $age = 35;
    $output = "mi nombre es $name y tengo $age";
    $isOld = $age > 20;
    define('LOGO_URL', 'https://www.php.net/images/logos/new-php-logo.png');

    if ($isOld) {
        $output .= " y soy viejo";
    } else {
        $output .= " y soy joven";
    }

    $bestLanguages = ["php", "javascript", "python"];
    $bestLanguages[] = "ruby";
    $bestLanguages[] = "c++";

    $person = [
        "name" => "Brian",
        "age" => 35,
        "isOld" => true
    ];
    
?>

<ul>
    <!-- iterar un array con foreach -->
    <?php foreach ($bestLanguages as $key => $language) : ?>
        <li><?= $key. " " . $language ?></li>
    <?php endforeach; ?>    
</ul>

<img src="<?= LOGO_URL ?>" alt="php logo" width="200">
<h1>
<!-- //forma de renderizar variables en php -->
    <?= $output ?>
</h1>




<style>
    :root {
        background-color: #0002;
    }

    body {
        display: grid;
        place-content: center;
        
    }
</style>