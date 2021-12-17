<?php
    $query = "insert into startable (name, recipe, stars) values("
        .$_Post[name].","
        .$_Post[recipe].","
        .$_Post[stars].","
    mysqli_query($, $query);

    $q = "select * from startable"
    $result = mysqli_query (coan $q);
        while ($row = mysqli_fetch_assoc($result)
            $row[name] $row[recipe]
?>