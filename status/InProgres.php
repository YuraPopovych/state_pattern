<?php


class InProgres extends TaskStatus
{
    public function __construct()
    {
        echo "In progres status <br>";
    }

    public function resolved()
    {
        return new Resolved();
    }

    public function closed()
    {
        return new Closed();
    }



}