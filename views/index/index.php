<?php

class index_View extends View {
  public function __construct() {
    parent::__construct();
    $this->kinds = R::findall("kind","ORDER BY id DESC");
  }
}
