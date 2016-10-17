<?php
// * Fill in these values from your Facebook Developer Account.
// * Read the readme.md file for instructions on setting that up.
$app_id = getenv('FB_APP_ID');
$app_secret = getenv('FB_APP_SECRET');


// * Enter your facebook page id below.  This is used for the default for view if one isn't specified in the URL.
$page_id = getenv('FB_PAGE_ID');

// * Default max posts to retrieve.  Can be customized per type of query below, and in
// * URL by appending "&count=X" to any query.
// * max value: 200
// * default:   10
$count = getenv('POST_COUNT') or 10;

?>
