<?php

class Controller{
  protected $cms;
  protected $page_slug;

  public function __construct($cms, $page_slug){
    $this->cms = $cms;
    $this->page_slug = $page_slug;
  }
}