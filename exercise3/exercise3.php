<?php

/* 3.    Masyve $holidays turime kelionių agentūros siūlomas keliones su kaina ir dalyvių skaičiumi.
      Terminale išspausdinkite santrauką, kurioje matytusi miesto pavadinimas, kelionių pavadinimai ir dalyvių sumokėta suma
      Dėmesio! Santraukoje nerodykite tų kelionių, kurių kaina yra null. (3 balai)
      Destination "Paris".
      Titles: "Romantic Paris", "Hidden Paris"
      Total: 99500
      ************
      Destination "New York"
      ...
 */

   $holidays = [
       [
           'title' => 'Romantic Paris',
           'destination' => 'Paris',
           'price' => 1500,
           'tourists' => 55,
       ],
       [
           'title' => 'Amazing New York',
           'destination' => 'New York',
           'price' => 2699,
           'tourists' => 21,
       ],
       [
           'title' => 'Spectacular Sydey',
           'destination' => 'Sydey',
           'price' => 4130,
           'tourists' => 9,
       ],
       [
           'title' => 'Hidden Paris',
           'destination' => 'Paris',
           'price' => 1700,
           'tourists' => 10,
       ],
       [
           'title' => 'Emperors of the past',
           'destination' => 'Beijing',
           'price' => null,
           'tourists' => 10,
       ],
   ];

   function summary_holidays(array $array): void
   {
       $options = [];
       foreach ($array as $route) {
           if (!isset($route['price'])) {
               continue;
           }
           $destination = $route['destination'];
           if (!isset($options[$destination])) {
               $options[$destination] = [
                   'destination' => $destination,
                   'titles' => [],
                   'total' => 0,
               ];
           }
           $options[$destination]['titles'][] = $route['title'];
           $options[$destination]['total'] += $route['price'] * $route['tourists'];
       }
       foreach ($options as $option) {
           echo 'Destination: '.$option['destination'].PHP_EOL;
           echo 'Titles: ' . implode(', ', $option['titles']).PHP_EOL;
           echo 'Total cash: '.$option['total'].PHP_EOL.PHP_EOL;
       }
   }
   summary_holidays($holidays);