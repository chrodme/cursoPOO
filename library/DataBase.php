<?php

class DataBase
{
    protected $link = null;
    protected $result = null;

    public function __construct($params)
    {
        extract($params);
        //var_dump($params);
        $this->link = mysqli_connect($host,$user,$password,$db);

        if (!$this->getLink())
        {
            exit;
        }
    }
   public function getLink()
    {
        //var_dump($this->link);
        return $this->link;
    }
    public function getResult()
    {
        return $this->result;
    }
    public function makeQuery($query)
    {
        //$this->getLink();
        if (!$this->result = mysqli_query($query))
        {
            $this->result = null;
            exit;
        }
        return $this->result;
    }
}