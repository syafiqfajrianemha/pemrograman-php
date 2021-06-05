<?php

$data = [
    "action" => "Create"
];
$action = $data["action"] ?? "Nothing";

// if (isset($data["action"])) {
//     $action = $data["action"];
// } else {
//     $action = "Nothing";
// }

echo $action;
