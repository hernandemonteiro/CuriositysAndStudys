<?php echo "<pre>";
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    http_response_code(404);
    print_r(["hernande"]);
    print_r($_POST);
    print_r($_SERVER);
} else {
    print_r($_SERVER);
}
echo "</pre>";
