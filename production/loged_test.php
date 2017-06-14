<?php

session_start();


if (!isset($_SESSION['user'])) {
	header("location:http://localhost/production/BuscaRep/index.php");
	die();
}