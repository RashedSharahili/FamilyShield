<?php

require __DIR__. '/vendor/autoload.php';

use Orhanerday\OpenAi\OpenAi;

$open_ai = new OpenAi('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');

// get prompt parameter
$prompt = $_GET['prompt'];

class Obj {

    public $role;
    public $content;
}

$msg = new Obj();

$msg->role = "user";
$msg->content = $prompt;

// set api data
$complete = $open_ai->completion([
    'model' => 'gpt-3.5-turbo',
    // 'prompt' => $prompt,
    'messages' => [$msg],
    'temperature' => 1,
    'max_tokens' => 200
], function($curl_info, $data) {
    echo $data;
    echo PHP_EOL;
    ob_flush();
    flush();

    return strlen($data);
});

// var_dump($complete);
var_dump(json_decode($complete, true));

?>