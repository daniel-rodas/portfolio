<?php
/**
 * Created by PhpStorm.
 * User: Rodas
 * Date: 4/29/2016
 * Time: 2:15 AM
 */

//namespace Utility;

class Utility
{
    public function renderSilent($content)
    {
        return (isset($content) ? $content : '');
    }

    public function isNonEmptyString($var)
    {
        return !empty($var) && is_string($var);
    }

    public function isNonEmptyInteger($var)
    {
        return !empty($var) && is_integer($var);
    }
    
    public function isCaptchaValid()
    {
        try {

            $url = 'https://www.google.com/recaptcha/api/siteverify';
            $data = ['secret'   => '6LfErSMTAAAAAJYkh2s5tka-2_Ib3JarrK1g5kr4',
                'response' => $_POST['g-recaptcha-response'],
                'remoteip' => $_SERVER['REMOTE_ADDR']];

            $options = [
                'http' => [
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'POST',
                    'content' => http_build_query($data)
                ]
            ];

            $context  = stream_context_create($options);
            $result = file_get_contents($url, false, $context);
            return json_decode($result)->success;
        }
        catch (Exception $e) {
            return null;
        }
    }
}
