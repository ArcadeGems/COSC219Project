<?php
$conn = mysqli_connect("sql201.infinityfree.com", "if0_35513046", "EjF9MFxXjeeh", "if0_35513046_arcadegems");
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully\n";
$maxCommentWidth = 50; // Maximum width of the comment column

session_start();
$sql = null;
$username = null;
$username = isset($_COOKIE['username']) ? $_COOKIE['username'] : null;
$checkAdmin = "SELECT * FROM members WHERE firstname = '$username' AND admin = 1";
$checkAdminResult = mysqli_query($conn, $checkAdmin);
if ($username == "1equals1" && mysqli_num_rows($checkAdminResult) > 0) {
    $sql = "SELECT * FROM members  ORDER BY members.admin DESC";
    $result = mysqli_query($conn, $sql);
} else if (mysqli_num_rows($checkAdminResult) > 0) {
    $sql = "SELECT * FROM comments";
    $result = mysqli_query($conn, $sql);
} else {
    if ($username != null) {
        $sql = "SELECT CONCAT(UCASE(SUBSTRING(members.firstname, 1, 1)), LCASE(SUBSTRING(members.firstname, 2)), ' ', UCASE(SUBSTRING(members.lastname, 1, 1))) AS email, comments.comment FROM comments JOIN members ON comments.email = members.email";
        $result = mysqli_query($conn, $sql);
    }
}

if (mysqli_num_rows($result) > 0 && $username != "1equals1") {

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
    printf("| %-" . $lengths['email'] . "s ", "Member");
    printf("| %-" . $lengths['comment'] . "s ", "Comment");


    // Generate table row
    echo "|\n";
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
} else if (mysqli_num_rows($result) > 0 && $username == "1equals1" ) {

    $lengths = ['firstname' => 0, 'lastname' => 0, 'email' => 0, 'password' => 0, 'age' => 0, 'admin' => 0];

    // Calculate max lengths
    while ($row = mysqli_fetch_assoc($result)) {
        foreach ($row as $key => $value) {
            $lengths[$key] = max($lengths[$key], strlen($value));
        }
    }
    mysqli_data_seek($result, 0);
    while ($row = mysqli_fetch_assoc($result)) {
        foreach ($row as $key => $value) {

                printf("| %-" . $lengths[$key] . "s ", $value);
            
        }
        echo "|\n";
    }
} else {
    echo "No results found\n";
}
