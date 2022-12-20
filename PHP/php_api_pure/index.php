<?php
if ($_SERVER['REQUEST_METHOD'] === "GET") {
    http_response_code(404);
    $json = json_decode('{"name": "Hernande", "idade": 24, "function": "nada"}');
    print_r($json);
    // echo json_encode(array(
    //     array(
    //         "nome" => "Hernande",
    //         "idade" => 24

    //     ),
    //     array(
    //         "nome" => "Outro"
    //     )
    // ));
} else {
    print_r($_SERVER);
}
