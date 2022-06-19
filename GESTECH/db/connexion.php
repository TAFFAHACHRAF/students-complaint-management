<?php
	$conex=new mysqli("localhost","root","","getech");
	if ($conex->connect_error) {
            die("Connection failed: " . $conex->connect_error);
    } 
?>