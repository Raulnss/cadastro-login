<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['id'])) {
    die("<meta HTTP-EQUIV='refresh' CONTENT='0; ../inicial.html'>");
}
?>