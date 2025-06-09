<?php
session_start();

if (isset($_SESSION['username'])){
    echo "Selamat datang ".$_SESSION['username'];
} else {
    echo "Halaman ini harus login dulu...";
}