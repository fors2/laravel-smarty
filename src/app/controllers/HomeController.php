<?php

class HomeController extends BaseController {

    public function index() {
        $this->test1  = "hello";
        $this->test2  = "world";
        $this->layout = "index";
    }
}
