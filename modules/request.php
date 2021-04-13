<?php
require('url-parser.php');

class Request {
    private $method;
    private $path;
    private $params;
    private $body;

    public function __construct(){
        $this->method = $_SERVER["REQUEST_METHOD"];
        $this->setUrl($_SERVER["REQUEST_URI"]);
    }

    public function getMethod() {
        return $this->method;
    }

    public function setMethod($method) {
        $this->method = $method;
    }

    public function setUrl($url) {
        $result = parseRequestUrl($url);
        $this->path = $result[0];
        $this->params = $result[1];
    }

    public function getParams() {
        return $this->params;
    }

    public function getRoute() {
        return $this->path;
    }
}