<?php


class Resolved extends TaskStatus
{
    public function __construct()
    {
        echo "Resolved status <br>";
    }

    public function verified(){
        return new Verified();
    }

    public function reopened(){
        return new ReOpened();
    }

}