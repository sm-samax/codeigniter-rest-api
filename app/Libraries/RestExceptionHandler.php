<?php

namespace App\Libraries;

use CodeIgniter\Debug\BaseExceptionHandler;
use CodeIgniter\Debug\ExceptionHandlerInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Throwable;

class RestExceptionHandler extends BaseExceptionHandler implements ExceptionHandlerInterface
{

    public function handle(
        Throwable $exception,
        RequestInterface $request,
        ResponseInterface $response,
        int $statusCode,
        int $exitCode
    ): void 
    {
       $data = [
        'status' => $statusCode,
        'message' => $exception->getMessage(),
       ];

       $response->setJson($data)
                ->setStatusCode($statusCode)
                ->send();
    }
}