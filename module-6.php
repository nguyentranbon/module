<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-6">
    <div class="widget-title-wrap">
        <h4 class="widget-title">Categories</h4>
    </div>  
    <ul>
        <li class="cat-item"><a href="#">Morocco</a> <span>2</span></li>
        <li class="cat-item"><a href="#">Russia</a> <span>3</span></li>
        <li class="cat-item"><a href="#">Serbia</a> <span>2</span></li>
        <li class="cat-item"><a href="#">Spain</a> <span>3</span> </li>
        <li class="cat-item"><a href="#">Sweeden</a> <span>1</span> </li>
        <li class="cat-item"><a href="#">USA</a> <span>3</span></li>
    </ul>
</div>
