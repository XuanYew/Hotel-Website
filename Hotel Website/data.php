<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $guests = $_POST['guests'];

    // Just echo back for now (you can save to a database later)
    echo "<h2>Booking Received</h2>";
    echo "Check-in: $checkin <br>";
    echo "Check-out: $checkout <br>";
    echo "Guests: $guests <br>";
} else {
    echo "No data submitted.";
}
?>
