<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author mistra
 */
class user {
  public function __construct(){
    echo "User::create";
  }
  public function loadById(){
  }
  
 public function __destruct(){
   echo "User::destroy";
 }
}