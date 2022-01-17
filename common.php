<?php

/** 获取操作系统 */
function get_os()
{
    $agent = $_SERVER['HTTP_USER_AGENT'];
    $os    = '未知操作系统';

    if (preg_match('/win/i', $agent) && strpos($agent, '95')) {
        $os = 'Windows 95';
    }
    if (preg_match('/win 9x/i', $agent) && strpos($agent, '4.90')) {
        $os = 'Windows ME';
    }
    if (preg_match('/win/i', $agent) && preg_match('/98/i', $agent)) {
        $os = 'Windows 98';
    }
    if (preg_match('/win/i', $agent) && preg_match('/nt/i', $agent)) {
        $os = 'Windows NT';
    }
    if (preg_match('/win/i', $agent) && preg_match('/nt 6.0/i', $agent)) {
        $os = 'Windows Vista';
    }
    if (preg_match('/win/i', $agent) && preg_match('/nt 6.1/i', $agent)) {
        $os = 'Windows 7';
    }
    if (preg_match('/win/i', $agent) && preg_match('/nt 6.2/i', $agent)) {
        $os = 'Windows 8';
    }
    if (preg_match('/win/i', $agent) && preg_match('/nt 10.0/i', $agent)) {
        $os = 'Windows 10'; #添加win10判断
    }
    if (preg_match('/win/i', $agent) && preg_match('/nt 5.1/i', $agent)) {
        $os = 'Windows XP';
    }
    if (preg_match('/win/i', $agent) && preg_match('/nt 5/i', $agent)) {
        $os = 'Windows 2000';
    }

    if (preg_match('/win/i', $agent) && preg_match('/32/i', $agent)) {
        $os = 'Windows 32';
    }
    if (preg_match('/linux/i', $agent)) {
        $os = 'Linux';
    }
    if (preg_match('/unix/i', $agent)) {
        $os = 'Unix';
    }
    if (preg_match('/sun/i', $agent) && preg_match('/os/i', $agent)) {
        $os = 'SunOS';
    }
    if (preg_match('/ibm/i', $agent) && preg_match('/os/i', $agent)) {
        $os = 'IBM OS/2';
    }
    if (preg_match('/Mac/i', $agent) && preg_match('/PC/i', $agent)) {
        $os = 'Macintosh';
    }
    if (preg_match('/PowerPC/i', $agent)) {
        $os = 'PowerPC';
    }
    if (preg_match('/AIX/i', $agent)) {
        $os = 'AIX';
    }
    if (preg_match('/HPUX/i', $agent)) {
        $os = 'HPUX';
    }
    if (preg_match('/NetBSD/i', $agent)) {
        $os = 'NetBSD';
    }
    if (preg_match('/BSD/i', $agent)) {
        $os = 'BSD';
    }
    if (preg_match('/OSF1/i', $agent)) {
        $os = 'OSF1';
    }
    if (preg_match('/IRIX/i', $agent)) {
        $os = 'IRIX';
    }
    if (preg_match('/FreeBSD/i', $agent)) {
        $os = 'FreeBSD';
    }
    if (preg_match('/teleport/i', $agent)) {
        $os = 'teleport';
    }
    if (preg_match('/flashget/i', $agent)) {
        $os = 'flashget';
    }
    if (preg_match('/webzip/i', $agent)) {
        $os = 'webzip';
    }
    if (preg_match('/offline/i', $agent)) {
        $os = 'offline';
    }
    if (strpos($agent, 'iphone')) {
        $os = 'iphone';
    }
    if (strpos($agent, 'ipad')) {
        $os = 'ipad';
    }
    if (strpos($agent, 'android')) {
        $os = 'android';
    }
    if (stripos($agent, "SAMSUNG") !== false || stripos($agent, "Galaxy") !== false || strpos($agent, "GT-") !== false || strpos($agent, "SCH-") !== false || strpos($agent, "SM-") !== false) {
        $os = 'android ->三星';
    }
    if (stripos($agent, "Huawei") !== false || stripos($agent, "Honor") !== false || stripos($agent, "H60-") !== false || stripos($agent, "H30-") !== false) {
        $os = 'android ->华为';
    }
    if (stripos($agent, "Lenovo") !== false) {
        $os = 'android ->联想';
    }
    if (strpos($agent, "MI-ONE") !== false || strpos($agent, "MI 1S") !== false || strpos($agent, "MI 2") !== false || strpos($agent, "MI 3") !== false || strpos($agent, "MI 4") !== false || strpos($agent, "MI-4") !== false) {
        $os = 'android ->小米';
    }
    if (strpos($agent, "HM NOTE") !== false || strpos($agent, "HM201") !== false) {
        $os = 'android ->红米';
    }
    if (stripos($agent, "Coolpad") !== false || strpos($agent, "8190Q") !== false || strpos($agent, "5910") !== false) {
        $os = 'android ->酷派';
    }
    if (stripos($agent, "ZTE") !== false || stripos($agent, "X9180") !== false || stripos($agent, "N9180") !== false || stripos($agent, "U9180") !== false) {
        $os = 'android ->中兴';
    }
    if (stripos($agent, "OPPO") !== false || strpos($agent, "X9007") !== false || strpos($agent, "X907") !== false || strpos($agent, "X909") !== false || strpos($agent, "R831S") !== false || strpos($agent, "R827T") !== false || strpos($agent, "R821T") !== false || strpos($agent, "R811") !== false || strpos($agent, "R2017") !== false) {
        $os = 'android ->OPPO';
    }
    if (strpos($agent, "HTC") !== false || stripos($agent, "Desire") !== false) {
        $os = 'android ->HTC';
    }
    if (stripos($agent, "vivo") !== false) {
        $os = 'android ->vivo';
    }
    if (stripos($agent, "K-Touch") !== false) {
        $os = 'android ->天语';
    }
    if (stripos($agent, "Nubia") !== false || stripos($agent, "NX50") !== false || stripos($agent, "NX40") !== false) {
        $os = 'android ->努比亚';
    }
    if (strpos($agent, "M045") !== false || strpos($agent, "M032") !== false || strpos($agent, "M355") !== false) {
        $os = 'android ->魅族';
    }
    if (stripos($agent, "DOOV") !== false) {
        $os = 'android ->朵唯';
    }
    if (stripos($agent, "GFIVE") !== false) {
        $os = 'android ->基伍';
    }
    if (stripos($agent, "Gionee") !== false || strpos($agent, "GN") !== false) {
        $os = 'android ->金立';
    }
    if (stripos($agent, "HS-U") !== false || stripos($agent, "HS-E") !== false) {
        $os = 'android ->海信';
    }
    if (stripos($agent, "Nokia") !== false) {
        $os = 'android ->诺基亚';
    }
    return $os;
}
/** 获取ip */
function get_client_ip()
{
    if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) {
        $ip = getenv("HTTP_CLIENT_IP");
    } else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) {
        $ip = getenv("HTTP_X_FORWARDED_FOR");
    } else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) {
        $ip = getenv("REMOTE_ADDR");
    } else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")) {
        $ip = $_SERVER['REMOTE_ADDR'];
    } else {
        $ip = "unknown";
    }
    return $ip;
}

/** 获取浏览器 */
function get_browsers()
{
    if (!empty($_SERVER['HTTP_USER_AGENT'])) {
        $br = $_SERVER['HTTP_USER_AGENT'];
        if (preg_match('/MSIE/i', $br)) {
            $br = 'MSIE';
        } elseif (preg_match('/Firefox/i', $br)) {
            $br = 'Firefox';
        } elseif (preg_match('/Chrome/i', $br)) {
            $br = 'Chrome';
        } elseif (preg_match('/Safari/i', $br)) {
            $br = 'Safari';
        } elseif (preg_match('/Opera/i', $br)) {
            $br = 'Opera';
        } else {
            $br = 'Other';
        }
        return $br;
    } else {
        return "获取浏览器信息失败！";
    }
}
function getLang()
{
    if (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        $lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
        $lang = substr($lang, 0, 5);
        if (preg_match("/zh-cn/i", $lang)) {
            $lang = "简体中文";
        } elseif (preg_match("/zh/i", $lang)) {
            $lang = "繁体中文";
        } else {
            $lang = "English";
        }
        return $lang;
    } else {
        return "获取浏览器语言失败！";
    }
}

//ip地址的位置
function get_ip_location($ip = '')
{
    $ip      = $ip ? $ip : '';
    $host    = "https://hcapi20.market.alicloudapi.com";
    $path    = "/ip";
    $method  = "GET";
    $appcode = "fe70f7bb62594ba2aafcc29581848c74";
    $headers = array();
    array_push($headers, "Authorization:APPCODE " . $appcode);
    $querys = "ip=" . $ip;
    $bodys  = "";
    $url    = $host . $path . "?" . $querys;

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_FAILONERROR, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($curl, CURLOPT_HEADER, true);
    if (1 == strpos("$" . $host, "https://")) {
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    }
    $res = curl_exec($curl);
    $res = json_decode($res, true);
    if ($res) {
        if ($res['ret'] == 200) {
            $data['region'] = $res['data']['country_id'];
        } else {

        }
    }
    if ($res) {
        //增加香港澳门台湾的
        if (strpos($res['data']['region'], "香港") !== false) {
            $country = "香港";
        } else if (strpos($res['data']['region'], "澳门") !== false) {
            $country = "澳门";
        } else if (strpos($res['data']['region'], "台湾") !== false) {
            $country = "台湾";
        } else {
            $country = $res['data']['country'];
        }

    } else {
        $country = '';
    }
    if($ip=="127.0.0.1"||$ip=="localhost"){
        return "localhost";
    }
    return $country;
}
