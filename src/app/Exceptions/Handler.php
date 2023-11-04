<?php

namespace App\Exceptions;

use App\Http\Controllers\UtilsController;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Request;
use Response;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        $exceptionName = get_class($exception);
        if (
            $exceptionName  == "Symfony\Component\HttpKernel\Exception\NotFoundHttpException"
            || $exceptionName == "Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException"
        ) {
            return $request->expectsJson()
                ?: response()->json(['message' => 'Este servicio no existe.'], 405);
        } else if ($exceptionName  == "Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException") {
            return $request->expectsJson()
                ?: response()->json(['message' => 'Debes logearte primero antes de consumir este servicio '], 401);
        } else if ($exceptionName == "Symfony\Component\Debug\Exception\FatalThrowableError") {
            $utilsController = new UtilsController();
            $utilsController->setTransactionalLog($request, $exception);
            return $request->expectsJson()
                ?: response()->json(['message' => 'Internal Server Error '], 500);
        } else {
            return parent::render($request, $exception);
        }
    }
}
