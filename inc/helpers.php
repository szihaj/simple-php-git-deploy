<?php

function branch($default = null)
{
    $branch = (isset($_GET['branch']) ? trim($_GET['branch']) : null);

    if ( ! $branch && $default !== null) {
        $branch = $default;
    } elseif ( ! $branch) {
        die('Cannot use function `branch` without specifying a branch.');
    }

    return $branch;
}
