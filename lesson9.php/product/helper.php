<?php

function redirect($url) {
    header("Location: $url");
    exit;
}

function redirectHome() {
    redirect('index2.php');
}