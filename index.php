<?php
if (!isset($_GET['page'])) {
    header('Location: index.html');
    exit;
}