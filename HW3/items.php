<?php
 $items = [
    [
        'id' => 1,
        'title' => 'Flute',
        'price' => 20000,
    ],
    [
        'id' => 2,
        'title' => 'Guitar',
        'price' => 18000,
    ],
    [
        'id' => 3,
        'title' => 'Piano',
        'price' => 68000,
    ],
    [
        'id' => 4,
        'title' => 'Drum',
        'price' => 68000,
    ],
];
// 1.
function min_max (array $arr1, array $arr2) {
    if ($arr1['price'] > $arr2['price']) return 1;
    if ($arr1['price'] < $arr2['price']) {
        return -1;
     } else {
         return 0;
     };
}; 
usort($items, 'min_max');
var_dump($items);


// 2. 
function minmax_and_title (array $arr1, array $arr2) {
    if ($arr1['price'] > $arr2['price']) return 1;
    if ($arr1['price'] < $arr2['price']) {
        return -1;
     } else {
         if ($arr1['title'] > $arr2['title']) return 1;
         if ($arr1['title'] < $arr2['title']) return -1;
     };
};
usort($items, 'minmax_and_title');
var_dump('sort by title ');
var_dump($items);