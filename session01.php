<?php
session_start();
$sid = session_id();
echo $sid;
$_SESSION["name"] = "小町";
$_SESSION["age"] = 31;
