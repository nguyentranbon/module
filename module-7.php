<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-7">
    <div class="widget-title-wrap">
        <h4 class="widget-title">Recent Comments</h4>
    </div>
    <ul>
        <li>
            <div class="widget-image-thumb">
                <img src="http://<?php echo $url_path ?>/images/hinh7-1.png" alt="" class="img-fluid">
            </div>
            <div class="widget-text">
                <p>Sandy Smith</p>
                <p class="small"><i class="far fa-clock"></i>5 years ago</p>
            </div>
            <a href="#" class="grey">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium..."</a>
        </li>
        <li>
            <div class="widget-image-thumb">
                <img src="http://<?php echo $url_path ?>/images/hinh7-2.png" alt="" class="img-fluid">
            </div>
            <div class="widget-text">
                <p>Sandy Smith</p>
                <p class="small"><i class="far fa-clock"></i>5 years ago</p>
            </div>
            <a href="#" class="grey">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium..."</a>
        </li>
    </ul>
</div>
