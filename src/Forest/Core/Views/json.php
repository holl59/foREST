<?php
/**
 * foREST - a simple RESTful PHP API
 * 
 * @version 1.0
 * @author Vincent Composieux <vincent.composieux@gmail.com>
 */

namespace Forest\Core\Views;

use Forest\Core\Abstraction;

/*
 * Json Class
 */
Class Json extends Abstraction {

  private function encodeUtf8($n) {
      return (utf8_encode($n));
    }

  public function display($data) {

header('Content-Type:application/json');

    $array = array_map(array($this,"encodeUtf8"),$data);

    return json_encode($array);
  }
}



?>