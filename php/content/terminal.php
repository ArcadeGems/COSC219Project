<?php
$conn = mysqli_connect("sql3.freesqldatabase.com", "sql3665664", "CgfGZSk8Ij", "sql3665664");

if (mysqli_connect_errno()) {
    die("Connection failed: ".mysqli_connect_error());
}

echo "Connected successfully\n";
$maxCommentWidth = 50; // Maximum width of the comment column

$sql = "SELECT * FROM comments";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $lengths = ['email' => 0, 'comment' => 0];

    // Calculate max lengths
    while ($row = mysqli_fetch_assoc($result)) {
        foreach ($row as $key => $value) {
            $lengths[$key] = max($lengths[$key], strlen($value));
        }
    }

    // Reset result pointer
    mysqli_data_seek($result, 0);

    // Generate table header
    foreach ($lengths as $key => $value) {
        printf("| %-" . $value . "s ", $key);
    }

  // Generate table row
// Generate table row
while ($row = mysqli_fetch_assoc($result)) {
    $commentLines = [];
    foreach ($row as $key => $value) {
        if ($key == 'comment' && strlen($value) > $maxCommentWidth) {
            // Wrap the comment onto multiple lines
            $commentLines = explode("\n", wordwrap($value, $maxCommentWidth, "\n"));
            $value = $commentLines[0];
        }
        printf("| %-" . $lengths[$key] . "s ", $value);
    }
    echo "|\n";

    // Print remaining comment lines
    for ($i = 1; $i < count($commentLines); $i++) {
        printf("| %-" . $lengths['email'] . "s | %-" . $lengths['comment'] . "s |\n", "", $commentLines[$i]);
    }
}
} else {
    echo "No results found.\n";
}
?>