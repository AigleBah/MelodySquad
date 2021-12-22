<?php

session_start();

// Configuration files
require_once '../Config/config.php';
require_once '../Config/database.php';

// Header
include '../View/Template/header.php';

// Router
include '../Controller/router.php';

// Footer
include '../View/Template/footer.php';