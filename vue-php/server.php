<?php

    // includo il database
    include __DIR__ . "/database.php";

    header('Content-Type: application/json');

    // variabile del parametro genre già in minuscolo
    $genreParam = strtolower($_GET["genre"]);

    // se il parametro esiste e non è vuoto
    if (isset($genreParam) && $genreParam != "") {

        // dichiaro un array vuoto che sarà il database filtrato
        $database_filtered = [];

        // ciclo foreach sugli elementi del database originale
        foreach ($database as $item) {

            // dichiaro variabile genre degli elementi, già in minuscolo
            $genreItem = strtolower($item["genre"]);

            // se il genre dell'elemento è uguale al genre passato nel parametro
            if ($genreItem == $genreParam) {

                // allora pusha l'elemento nel db filtrato
                $database_filtered[] = $item;

            }
        }

        // quindi stampa il db filtratp
        echo json_encode($database_filtered);

       // altrimenti
    } else {

        // stampa il db originale
        echo json_encode($database);

    }
?>