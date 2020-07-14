<?php
declare (strict_types=1);

namespace think;

use Pheanstalk\Pheanstalk;

/**
 * | Notes：消息类库
 * +----------------------------------------------------------------------
 * | PHP Version 7.2+
 * +----------------------------------------------------------------------
 * | Copyright (c) 2011-2020 https://www.xxq.com.cn, All rights reserved.
 * +----------------------------------------------------------------------
 * | Author: 阶级娃儿 <devloper@zhujinkui.com>
 * +----------------------------------------------------------------------
 * | Date: 2020/7/14 16:46
 * +----------------------------------------------------------------------
 */
class Push
{
    public function TplNotice(array $data = [], $tube_name = 'default')
    {
        $pheanstalk = new Pheanstalk('127.0.0.1', 11300);

        return $result = $pheanstalk->putInTube($tube_name, json_encode($data), $tube_name, Pheanstalk::DEFAULT_DELAY, Pheanstalk::DEFAULT_TTR);
    }
}