<?php
$users=[

['id' => 1, 'name' => 'alex' ],
['id' => 2, 'name' => 'samu' ],
['id' => 3, 'name' => 'giacomo' ],
['id' => 4, 'name' => 'mimmo' ],

];

$response = [
"status" => "200",
"message" => "Arrivato",
"payload" => $users,
];

http_response_code(200);
header('Content-Type: application/json');
echo json_encode($response);


?>