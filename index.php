<?php
    echo "First DB Connection!";

    $db = pg_connect("host=ec2-18-210-90-1.compute-1.amazonaws.com
                dbname=d6lrq0b5fv0dd6
                port=5432
                user=vvubcmhuaiqdzh
                password=fb6c88dd6722d2caf4064f04e8c02fc2691f49cc960c645993da31033225db5c");
    pg_query("CREATE TABLE testing (id INTEGER)");
    echo "Script Executed!";
?>
