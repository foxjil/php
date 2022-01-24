<?php


class ItemStorage{
    private $items = [];

    // добавление товара в хранилище,
    // товары в массиве хранятся по значению id:
    // id товара => товар
    public function add_item(Item $item){
        $this->items[$item->getId()] = $item;
    }

    // написать реализацию следующих методов
    public function get_by_id(string $id){
        // возвращает товар по id
        return $this->items[$id];
    }

    public function get_by_title(string $title){
        // возвращает товар по названию (title)
        foreach ($this->items as $item) {
            if ($item->getByTitle() == $title) {
                return $item;
            }
        }
    }

    public function get_by_price(int $price_from, int $price_to){
        // возвращает товары, стоимость которых находится в диапазоне от $price_from до $price_to
        $goods_by_price = [];
        foreach ($this->items as $item) {
            if ($item->getByPrice() >= $price_from && $item->getByPrice() <- $price_to) {
                $goods_by_price[] = $item;
            }
        }
        return $goods_by_price;
    }

    public function get_by_material(...$materials){
        // возвращает товары, которые изготовлены из материалов, перечисленных в $materials,
        // например,
        // при вызове в метод передаются ->get_by_material('дерево', 'железо', 'пластик');
        // значит метод должен вернуть все товары, сделанные из дерева, железа или пластика
        $goods_by_material = [];
        foreach ($this->items as $item) {
            if (in_array($item->getByMaterial()), array_map($materials)) {
                $goods_by_material[] = $item;
            }
        }
        return $goods_by_material; 
    }

    public function get_by_price_and_material(int $price_to, string $material){
        // возвращает товары, стоимость которых не превышает $price_to и
        // материал, из которого изготовлен товар соответствует $material
        $goods_by_price_and_material = [];
        foreach ($this->items as $item) {
            if ($item ->getByPrice() <- $price_to && $item->getByMaterial() == $material) {
                $goods_by_price_and_material[] = $item;
            }
        }
        return $goods_by_price_and_material;
    }
}