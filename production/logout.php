<?php

session_start();
session_unset();
session_destroy();

header("location:http://localhost/production/BuscaRep/index.php");