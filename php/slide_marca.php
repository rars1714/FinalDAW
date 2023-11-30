<?php
    $brands = [
        "assets/img/features/ovo.png",
        "assets/img/features/comme.png",
        "assets/img/features/dlfn.png",
        "assets/img/features/fog.png",
        "assets/img/features/off.png",
        "assets/img/features/bape.png",
        "assets/img/features/supreme.png",
        "assets/img/features/jordan.png",

    ];

    $slideCount = 2; // Número de slides

    echo '<div class="col">
            <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="multi-item-example" data-bs-ride="carousel">
                <div class="carousel-inner product-links-wap" role="listbox">';

    for ($i = 0; $i < $slideCount; $i++) {
        echo '<div class="carousel-item ' . ($i === 0 ? 'active' : '') . '">
                <div class="row">';

        // Calcular el índice de inicio para cada slide
        $startIndex = $i * (count($brands) / $slideCount);
        // Calcular el índice de fin para cada slide
        $endIndex = min(($i + 1) * (count($brands) / $slideCount), count($brands));

        for ($j = $startIndex; $j < $endIndex; $j++) {
            echo '<div class="col-3 p-md-5">
                    <a href="#"><img class="img-fluid brand-img" src="' . $brands[$j] . '" alt="Brand Logo"></a>
                </div>';
        }

        echo '</div></div>';
    }

    echo '</div></div></div>';
?>    