<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the order form is submitted

    if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['city'])) {
        // Get form data
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];

        // Set email details
        $to = "ossamadarouiche@gmail.com";
        $subject = "New Order: " . $name;
        $message = "Product Name: Code DZ\n";
        $message .= "Description: The best course in Egypt\n";
        $message .= "Client Name: " . $name . "\n";
        $message .= "Mobile: " . $phone . "\n";
        $message .= "City: " . $city . "\n";

        $headers = "From: ossamadarouiche@gmail.com";

        // Send email
        mail($to, $subject, $message, $headers);

        // Display success message
        echo "تم إرسال الطلب بنجاح!";
    } else {
        // Display error message if form data is incomplete
        echo "حدث خطأ أثناء معالجة الطلب. يرجى المحاولة مرة أخرى.";
    }
} else {
    // Redirect to the form page if accessed directly without submitting the form
    header("Location: index.html");
    exit();
}
?>
