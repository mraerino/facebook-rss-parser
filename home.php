<?php
<<<<<<< HEAD
//v1.1
=======
//v1.0
>>>>>>> 5bc7a2493926b74440733016713e66b7e257c9fa

$host = 'api.twitter.com';
$method = 'GET';
$path = '/1.1/statuses/home_timeline.json'; // api call path

$query = array( // query parameters
    'count' => $cnt,
    'trim_user' => $home_trim_user,
	'exclude_replies' => $home_exclude_replies,
	'contributor_details' => $home_contributor_details,
	'include_rts' => $home_include_rts,
);

include "functions.php";

if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off'
    || $_SERVER['SERVER_PORT'] == 443) {

    $protocol = 'https://';
} else {
    $protocol = 'http://';
}

print('<?xml version="1.0" encoding="utf-8"?>'. PHP_EOL);
print('<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en" xml:base="'.$_SERVER['SERVER_NAME'].'">'. PHP_EOL);

print('<id>https://twitter.com/'.$twitter_data[0]['user']['screen_name'].'/statuses/'. $twitter_data[0]['id_str'] .'</id>'. PHP_EOL);
print('<title>Home Timeline of @'. $sn . '</title>'. PHP_EOL);
print('<updated>'.date('c', strtotime($twitter_data[0]['created_at'])).'</updated>'. PHP_EOL);

print('<link href="https://twitter.com/" rel="alternate" type="application/atom+xml"/>'. PHP_EOL);
print('<link href="'.$protocol.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'].'" rel="self" type="application/atom+xml" />'. PHP_EOL);

include "feed.php";

<<<<<<< HEAD
?>
=======
print('</feed>'. PHP_EOL);
print('<!-- vim:ft=xml -->');
?>
>>>>>>> 5bc7a2493926b74440733016713e66b7e257c9fa