<?php

//load.php

include('dbconfig.php');

$data = array();
//$select = "SELECT checkin,checkout FROM users WHERE request_status=1";
$query = "SELECT * FROM users WHERE request_status=1";

$statement = $dbconn->prepare($query);

$statement->execute();


if ($statement->rowCount() > 0) {

    $result = $statement->fetchAll();

    foreach ($result as $row) {
        $data[] = array(
            'id'   => $row["id"],
            'title'   => $row["notes"],
            'start'   => $row["checkin"],
            'end'   => $row["checkout"]. "T23:59:00"
        );
    }

    echo json_encode($data);
}
