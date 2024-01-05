<?php
session_start();
if (isset($_SERVER['username'])) {
    header(header: "Location: index.html");
    exit();
}
echo "Welcome To Admin Zone";
