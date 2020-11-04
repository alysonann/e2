<?php
namespace App;

class EvenNumber extends Number
{
    public function isValid()
    {
        // return is_numeric($this->num) and ($this->num % 2 == 0);
        return parent::isValid() and ($this->num % 2 == 0);
    }
}