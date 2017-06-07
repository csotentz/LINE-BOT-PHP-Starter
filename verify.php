<?php
$access_token = '2vmFfe7MlKb5bgbP7RWsQncaDaLHV8yL+UG9qNAgO7QzcY5cmjChoTQH3zqbiHcqdRdTGl0FI9OeXWdJTRgR5PW5eNRHglGAeZ/4qq7AdGXGZdDO07m8UnEkxxeT3S80rzrmUcCVAhAQUY3/sO0/mcgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;