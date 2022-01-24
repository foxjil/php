<?php

class Item
{
    private $id; // не может быть отрицательным или 0
    private $title; // максимум 10 символов
    private $price; // не может быть отрицательным или 0
    private $material; // минимум 3 символа

    // свойства title и id являются обязательными,
    public function __construct(string $id, string $title)
    {
        if ($id > 0) $this->id = $id;
        if (mb_strlen($title) <= 10) $this->title = $title;
    }
    // добавить все необходимые геттеры и сеттеры
    public function setId($id) {
        if ($id <= 0) {
            throw new InvalidArgumentException('id не может быть меньше 0');
        }
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setTitle(string $title) 
    {
        if (mb_strlen(trim($title)) > 10) {
            throw new InvalidArgumentException('Максимум 10 символов');
        }
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setPrice($price) 
    {
        if ($price <= 0) {
            throw new InvalidArgumentException('Значение должно быть больше 0');
        }
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setMaterial(string $material) 
    {
        if (mb_strlen(trim($material)) < 3) {
            throw new InvalidArgumentException('Минимум 3 символа');
        }
        $this->material = $material;
    }

    public function getMaterial()
    {
        return $this->material;
    }
}