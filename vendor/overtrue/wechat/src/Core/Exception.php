<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * Exception.php.
 *
 * @author    overtrue <i@overtrue.me>
 * @copyright 2015 overtrue <i@overtrue.me>
 *
 * @see      https://github.com/overtrue
 * @see      http://overtrue.me
 */

namespace EasyWeChat\Core;

use Exception as BaseException;
use Throwable;

/**
 * Class Exception.
 */
class Exception extends BaseException
{
    function __construct($message = "", $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
        echo json_encode (array ( "state" => 2, "message" => $code.'+'.$message ));
        exit();
    }
}
