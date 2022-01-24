<?php
require_once 'Item.php';
require_once 'ItemStorage.php';
// создать объекты Item (товар) и ItemStore (хранилище),
$item_table = new Item(1, 'Стол');
$item_table->setMaterial('Дуб');
$item_table->setPrice(12000);

$item_chair = new Item(2, 'Стул');
$item_chair->setMaterial('Ольха');
$item_chair->setPrice(10000);

$item_storage = new ItemStorage();
// добавить товары в хранилище
$item_storage_1->addItem($item_table);
$item_storage_2->addItem($item_chair);
// вызвать методы поиска товаров в хранилище:
    // get_by_material,
    var_dump($item_storage->get_by_material());
    // get_by_price_and_material,
    var_dump($item_storage->get_by_price_and_material());
    // get_by_price
    var_dump($item_storage->get_by_price()); 