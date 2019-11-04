<?php

    require_once 'lib/router/Router.class.php';
    if (isset($_POST['keywords'])) {
        insert($_POST['keywords']);
    }

    function insert($jey) {
        echo "The insert function is called.";
        Router::searchKeywords($key);
    }
?>