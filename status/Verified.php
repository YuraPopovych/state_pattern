<?php



class Verified extends TaskStatus
{
    public function __construct()
    {
        echo "Verified status <br>";
    }
    public function closed(){
        return new Closed();
    }
}