<?php
$statuses = [
    [
        "type"=>"info",
        "title"=>"Scheduled maintenance and restart",
        "description"=>"Server maintenance and restart are scheduled on 27 April 2018, 17.30 PM.",
        "time" => strtotime("24 April 2018 17:46")
    ]
];

$response = [
    "last-update"=>time(),
    "status"=>"PLANNED",
    "reports" => $statuses,
];

file_put_contents("status.json", $response, JSON_PRETTY_PRINT);
file_put_contents("status.min.json", $response);
