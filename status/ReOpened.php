<?php

class ReOpened  extends TaskStatus
{
    public function __construct()
    {
        echo "Re opened status <br>";
    }

    public function in_progres() {
        return new InProgres();
    }

}