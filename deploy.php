<?php

if ($_GET['key'] === 'bxn5XNWNEoHetCtJgjgUzJ2ocLYeWeeRpKOyw') {
    $output = '';

    echo "<pre>";

    exec('git reset --hard HEAD', $output);
    print_r($output);

    $output = '';

    exec('git pull origin master', $output);
    print_r($output);

    echo "</pre>";
}

?>
