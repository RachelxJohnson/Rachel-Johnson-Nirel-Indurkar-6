<?php
    $query = "insert into revtable (stars) values("
        .$_Post[stars].","
    mysqli_query($conn, $query);

    $q = "select * from revtable"
    $result = mysqli_query ($conn $q);
        while ($row = mysqli_fetch_assoc($result)
            $row[stars]
?>