<?php



class Opened extends TaskStatus
{

    public function __construct()
    {
        echo "Opened status <br>";
    }

    public function in_progres()
    {
        return new InProgres();
    }

}