<?php 

// Specific route
router()->get('/', function() {
    require ROOT_PATH . '/views/pages/index.php';
});