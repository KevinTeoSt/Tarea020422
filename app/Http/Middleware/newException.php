<?php namespace App\Http\Middleware;
use Exception;
use Illuminate\Contracts\Http\Exception\HttpException;
class Handler extends Middleware {
    /** * La colección de excepciones. * * @var array */
    protected $exceptions = []; /** * Agrega una excepción a la colección. * * @param \Exception $exception * @param string $message * @param string $url */
    public function __construct(Exception $exception, $message, $url)
    { $this->exceptions[] = $exception; } }
