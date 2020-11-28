<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<?php include '../139/module-33.php'; ?>
<?php include '../139/module-1.php'; ?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php include '../139/module-10.php'; ?>
            </div>
            <div class="col-md-3">
                <?php include '../139/module-6.php'; ?>
                <?php include '../139/module-7.php'; ?>
                <?php include '../139/module-9.php'; ?>
            </div>
        </div>
    </div>
</div>