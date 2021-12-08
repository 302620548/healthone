<?php


class Contact
{
    public $id;
    public $day;
    public $time;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}