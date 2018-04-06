<?php

require_once 'TaskStatus.php';
require_once 'status/Opened.php';
require_once 'status/InProgres.php';
require_once 'status/Resolved.php';
require_once 'status/ReOpened.php';
require_once 'status/Verified.php';
require_once 'status/Closed.php';





class Task
{

    private $status;


    public function __construct(TaskStatus $status)
    {
        $this -> status = $status;


    }

    public function setStatus(TaskStatus $status)
    {
        $this->status = $status;

    }

    public function getstatus()
    {
        return get_class($this -> status);

    }


    public function opened()
    {
        $this->setStatus($this -> status ->opened());


    }

    public function in_progres()
    {
        $this->setStatus($this -> status ->in_progres());

    }

    public function resolved()
    {
        $this->setStatus($this -> status ->resolved());

    }

    public function reopened()
    {
        $this->setStatus($this -> status ->reopened());

    }

    public function verified()
    {
        $this->setStatus($this -> status ->verified());

    }

    public function closed()
    {
        $this->setStatus($this -> status ->closed());

    }


}
