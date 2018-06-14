<?php namespace PHPBook\Environment\Variable;

class Item {

    private $name;

    private $description;

    private $value;

    public function setName(String $name): Item {
        $this->name = $name;
        return $this;
    }

    public function getName(): ?String {
        return $this->name;
    }

    public function setDescription(String $description): Item {
        $this->description = $description;
        return $this;
    }

    public function getDescription(): ?String {
        return $this->description;
    }

    public function setValue(String $value): Item {
        $this->value = $value;
        return $this;
    }

    public function getValue(): ?String {
        return $this->value;
    }

}
