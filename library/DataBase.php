<?php

class DataBase
{
    protected $link = null;
    protected $result = null;

    public function __construct($params)
    {
        extract($params);
        $this->link = mysqli_connect($host,$user,$password,$bd);

        if (!$this->getLink())
        {
            exit;
        }
    }
    public function getLink()
    {
        return $this->link;
    }
    public function getResult()
    {
        return $this->result;
    }
    public function makeQuery($query)
    {
        $this->getLink();
        if (!$this->result = $mysqli->query($query))
        {
            exit;
        }
    }
}