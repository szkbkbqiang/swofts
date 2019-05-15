<?php
/**
 * user: zhang.shangshang@tslsmart.com
 * Date: 2019/5/14 上午9:40
 */

namespace App\Exception;


use Swoft\Bean\Annotation\ExceptionHandler;
use Swoft\Bean\Annotation\Handler;
use Swoft\Http\Message\Server\Response;

/**
 * @ExceptionHandler()
 * Class ExceptionHandlers
 * @package App\Exception
 */
class ExceptionHandlers
{

    /**
     * @Handler(ValidatorException::class)
     * @param Response $response
     * @param \Throwable $throwable
     * @return Response
     */
    public function validatorException(Response $response, \Throwable $throwable)
    {
        return $response->withContent($throwable->getMessage());
    }
}