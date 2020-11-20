<?php
// Use function:filter_var to sanitizer a variable with a rule.
$raw = 'http://123.abc/ : def&#165;/index.html';
$url = filter_var($raw,
    FILTER_SANITIZE_URL);
echo $raw, '<br/>';
echo $url, '<br/>';
