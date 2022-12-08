<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    http_response_code(404);
    echo json_encode(array(
        array(
            "nome" => "Hernande",
            "idade" => 24

        ),
        array(
            "nome" => "Outro"
        )
    ));
} else {
    print_r($_SERVER);
}
