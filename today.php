<?php
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Asia/Shanghai'); // 设置时区为上海
//先定义一个数组
$weekarray = array("日", "一", "二", "三", "四", "五", "六"); 

// 获取当前日期和时间
$today = date('Y年m月d日 l, H:i:s');

// 输出结果
echo '今天是：' . $today;
?>