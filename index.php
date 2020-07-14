<?php
// 消息推送测试文件
// +----------------------------------------------------------------------
// | PHP version 5.3+
// +----------------------------------------------------------------------
// | Copyright (c) 2012-2014 http://www.myzy.com.cn, All rights reserved.
// +----------------------------------------------------------------------
// | Author: 阶级娃儿 <262877348@qq.com> 群：304104682
// +----------------------------------------------------------------------
header("Content-Type: Text/Html;Charset=UTF-8");
require "./vendor/autoload.php";

$obj = new \think\Push();


// $data = [
//     'touser' => 'ow5Gn1Hzg0sBqv4lKZrkgfi7Ae1Y',
//     'template_id' => 'bnfsL4-ZoHZIBLY5mQQX-WTWpTaSuRDTzdCbYIgeq8k',
//     'url' => 'https://map.baidu.com',
//     // 'miniprogram' => [
//     //     'appid' => 'xxxxxxx',
//     //     'pagepath' => 'pages/xxx',
//     // ],
//     'data' => [
//         'first'    => '新会员注册成功',
//         'keyword1' => ['jinkui.Zhu', '#FF0000'],
//         'keyword2' => ['某某', '#FFFF00'],
//         'remark'   => '如果疑问，请在微信服务号中输入“KF”，**将在第一时间为您服务！'
//     ]
// ];

// $data = [
//     'touser' => 'ow5Gn1Hzg0sBqv4lKZrkgfi7Ae1Y',
//     'template_id' => 'fCSX-AQokIZjnbVeOTPaeOBehkBN1XZJPqhBdBLHr1w',
//     'url' => 'https://map.baidu.com',
//     // 'miniprogram' => [
//     //     'appid' => 'xxxxxxx',
//     //     'pagepath' => 'pages/xxx',
//     // ],
//     'data' => [
//         'first'    => '尊敬的jinkui.Zhu用户：您转入的一笔资金已成功入账。',
//         'keyword1' => ['1200.00', '#FF0000'],
//         'keyword2' => ['2015年7月27日', '#FFFF00'],
//         'remark'   => '请您及时登录平台查询，感谢您的支持！客服热线：4008-520-000，如果疑问，请在微信服务号中输入“人工客服”，将在第一时间为您服务！'
//     ]
// ];

$data = [
    'touser' => 'ow5Gn1Hzg0sBqv4lKZrkgfi7Ae1Y',
    'template_id' => 'sD-XXNzdkqWYCh1QQ7oAtZSLyAAVlsu_aDMafyeOVxE',
    'url' => 'https://map.baidu.com',
    // 'miniprogram' => [
    //     'appid' => 'xxxxxxx',
    //     'pagepath' => 'pages/xxx',
    // ],
    'data' => [
        'first'    => '您申请的提现金额已到帐.',
        'keyword1' => date('Y-m-d H:i:s', time()),
        'keyword2' => '微信',
        'keyword3' => '100.00',
        'keyword4' => '2.00',
        'keyword5' => '98.00',
        'remark'   => '感谢你的使用！如果疑问，请在微信服务号中输入“人工客服”，将在第一时间为您服务！'
    ]
];
$obj = new \think\Push();
$sendStatus = $obj->TplNotice($data);

var_dump($sendStatus);





