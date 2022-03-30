<?php

declare(strict_types=1);

namespace Whirlwind\Infrastructure\Http\Exception;

class MethodNotAllowedHttpException extends HttpException
{
    public function __construct(string $message = 'Method not allowed.', $code = 0, \Exception $previous = null)
    {
        parent::__construct(405, $message, $code, $previous);
    }
}
