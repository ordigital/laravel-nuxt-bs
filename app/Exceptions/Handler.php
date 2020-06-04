<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

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


    public function report(Throwable $exception) {
        return parent::report($exception);
    }

    public function shouldReport(Throwable $exception) {
        returnparent::shouldReport($exception);
    }

    public function render($request, Throwable $exception) {
        return parent::render($request, $exception);
    }

    public function renderForConsole($output, Throwable $exception) {
        return parent::renderForConsole($output, $exception);
    }
}

