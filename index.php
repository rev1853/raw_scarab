<?php
if (isset($_POST['path'])) {
    $path = $_POST['path'];
    $content = file_get_contents("raw/" . $path);
    echo json_encode(['content' => base64_encode($content)]);
} else {
    echo "error: No path specified";
}
