<?php
    echo "First DB Connection!";

    $db = pg_connect("host=ec2-54-157-88-70.compute-1.amazonaws.com
                dbname=dej4274bafrn9k
                port=5432
                user=nynbfmmylsqjgr
                password=07c84b2bbcf1d3233c2e4d4c731c0e4f64a6ced68960463f97e366f22d8cc026");
    pg_query("CREATE TABLE testing (id INTEGER)");
    echo "Script Executed!";
	
	header("location: ./ATNnew/html/Page.html");
?>
