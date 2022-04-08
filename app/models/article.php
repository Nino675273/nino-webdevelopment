<?php

class Article implements \JsonSerializable {

    private int $id;
    private string $name;
    private string $description;
    private string $company;
    private float $price;
    private string $imageurl;

    public function __construct($_id = null, $_name=null, $_description=null, $_company=null, $_price=null, $_imageurl=null)
    {
        if ($_id !== null) $this->id = $_id;
        if ($_name !== null) $this->name = $_name;
        if ($_description !== null) $this->description = $_description;
        if ($_company !== null) $this->company = $_company;
        if ($_price !== null) $this->price = $_price;
        if ($_imageurl !== null) $this->imageurl = $_imageurl;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setCompany(string $company)
    {
        $this->company = $company;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
    }

    public function setImageurl(string $imageurl)
    {
        $this->imageurl = $imageurl;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getImageurl()
    {
        return $this->imageurl;
    }

    public function jsonSerialize(): mixed
    {
        return get_object_vars($this);
    }
}

?>