<?php

/**
 * foREST - a simple RESTful PHP API
 * 
 * @version 1.0
 * @author Vincent Composieux <vincent.composieux@gmail.com>
 */

namespace Forest\Resources;

use Forest\Core\Request,
    Forest\Core\Resource,
    Forest\Core\Views\Json;

/**
 * Books
 */
class Books extends Resource {
    /**
     * List all books
     * 
     * @param Request $request
     * 
     * @return array
     */
    public function getBooks(Request $request) {

        $query = $this->query('books.list', $request);
        
        $json = new Json();
        return $json->display($query[0]);
    }
}
