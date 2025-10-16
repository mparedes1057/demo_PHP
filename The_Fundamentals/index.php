<?php
$llibres = [
        [
                'nom' => 'Llibre1',
                'autor' => 'Autor1',
                'enllaç' => 'Enllaç1',
                'any' => 2021
        ],
        [
                'nom' => 'Llibre2',
                'autor' => 'Autor2',
                'enllaç' => 'Enllaç2',
                'any' => 2022
        ],
        [
                'nom' => 'Llibre3',
                'autor' => 'Autor3',
                'enllaç' => 'Enllaç3',
                'any' => 2023
        ],
        [
                'nom' => 'Llibre4',
                'autor' => 'Autor2',
                'enllaç' => 'Enllaç4',
                'any' => 2025
        ]
];

/* PODEM PASSAR UNA FUNCIÓ COM A PARÀMETRE, EN AQUEST CAS EMPLEAM ES COMPARADOR (NO LA CONDICIO).
function filter ($items, $fn)
$filteredItems = ［］；
foreach ($items as $item) {
if (fn()) {
$filteredItems[] = $item;
}
return $filteredItems;
}
$filteredBooks = filter($books, function ($book) {          array_filter TÉ LA MATEIXA SINTXIS I JA VE IMPLEMENTAT DE BASE, AIXÍ NO S'HA DE IMPLEMENTAR EL CODI
return $book[ 'releaseYear'] ≥ 2000;
});
*/

$filtrat = function ($items, $atribut, $condicio){
    $itemsFiltrats = [];

    foreach ($items as $item){
        if ($item[$atribut] === $condicio){
            $itemsFiltrats [] = $item;
        }
    }

    return $itemsFiltrats;
};



require "index.view.php";