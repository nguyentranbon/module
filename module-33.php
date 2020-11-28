<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-33">
    <div class="search-bar">
        <div class="container">
            <form method="get" class="searchform">
                <div class="travelog-form">
                    <input type="text" value="" name="s" class="form-control" placeholder="Input search query and hit enter...">
                </div>
            </form>
        </div>
    </div>
</div>
