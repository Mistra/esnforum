<?php

class thread_View extends View {

  public function setId($id) {
    $this->posts = R::find("post", "thread=?", array( $id ) );
    //$this->title = R::load("category", $id)->name;
  }
}
