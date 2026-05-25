<?php

use api\core\Controller;

class Home extends Controller{
  
  public function index(){
    $this->view('home/index');
  }
}

class Product extends Controller{
  
  public function index(){
    $this->view('product/index');
  }
}
class Category extends Controller{
  
  public function index(){
    $this->view('category/index');
  }
}
