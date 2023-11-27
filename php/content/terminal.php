<?php

$conn = mysqli_connect("localhost", "coscuser", "letmein", "cosc219");

if (mysqli_connect_errno()) {
	die("Connection failed: ".mysqli_connect_error());
}

echo "Connected successfully\n";

$sql = "SELECT * FROM emailList";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $lengths = ['f_name' => 0, 'l_name' => 0, 'email' => 0];

    // Calculate max lengths
    while ($row = mysqli_fetch_assoc($result)) {
        foreach ($row as $key => $value) {
            $lengths[$key] = max($lengths[$key], strlen($value));
        }
    }

    // Reset result pointer
    mysqli_data_seek($result, 0);

    // Generate table header
    foreach ($lengths as $key => $length) {
        echo "+", str_repeat("-", $length + 2);
    }
    echo "+\n";

    // Generate table row
    while ($row = mysqli_fetch_assoc($result)) {
        foreach ($row as $key => $value) {
            printf("| %-" . $lengths[$key] . "s ", $value);
        }
        echo "|\n";
    }

    // Generate table footer
    foreach ($lengths as $key => $length) {
        echo "+", str_repeat("-", $length + 2);
    }
    echo "+\n";
} else {
    echo "No results found.\n";
}

?>