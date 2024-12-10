<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class TodoController extends BaseController
{
    public function getTodo() : ResponseInterface {
        $todo = [
          'title' => 'Laundry',
          'description' => 'Clean the dirty clothes',
          'priority' => 4
        ];
      
        return $this->response
                    ->setStatusCode(200)
                    ->setJson($todo);
      }
}
