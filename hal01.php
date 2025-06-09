<?php
// strat session
session_start();

// set session
$_SESSION['username'] = "budi";
$_SESSION['role'] = "admin";

echo "Halaman ini untuk mengset variabel session: ";
