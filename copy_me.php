<?php

$dir = dirname(__FILE__);
$random_name = preg_replace('/[^a-zA-Z0-9]/', '', base64_encode(random_bytes(10)));
$file = $random_name . '.php';
copy(__FILE__, $dir . DIRECTORY_SEPARATOR . $file);
?>
<html>
    <head>
        <title><?= basename(__FILE__) ?></title>
    </head>
    <body>
        <a href="<?= $file ?>"><?= $file ?></a>
    </body>
</html>
<?php unlink(__FILE__);