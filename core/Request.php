<?php 
class Request{
    public $url; //URL appelé par l'utilisateur

    function __construct()
    {
       $this->url = $_SERVER['PATH_INFO']; 
    }
}