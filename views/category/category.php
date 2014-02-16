<?php

class category_View extends View {

  public function setId($id) {
    $this->threads = R::find("thread", "category=?", array( $id ) );
    $this->title = R::load("category", $id)->name;
  }
}
