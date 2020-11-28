<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-9">
    <div class="widget-title-wrap">
        <h4 class="widget-title">Subscribe</h4>
    </div>
    <div class="travelog-form">
        <h4 class="text-center">Stay tuned with latests travel posts</h4>
        <input type="text" class="form-control email" placeholder="Input Email Here">
        <a href="javascript:;" class="btn btn-default subscribe">Subscribe</a>
    </div>

</div>
