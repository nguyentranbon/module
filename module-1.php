<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-1">
    <header class="standard">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-4">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="http://<?php echo $url_path ?>/images/hinh1.png" alt="Logo" width="252" height="50"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav justify-content-end ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link text-uppercase px-2 mx-1" href="#">Home <i class="fa fa-angle-down"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase px-2 mx-1" href="#">Header <i class="fa fa-angle-down"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase px-2 mx-1" href="#">Areas <i class="fa fa-angle-down"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase px-2 mx-1" href="#">Pages <i class="fa fa-angle-down"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase px-2 mx-1" href="#">Contact </a>
                        </li>
                        <li class="search px-2 mx-1"><a href="#"  class="trigger-search"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</div>

<script>

</script>

