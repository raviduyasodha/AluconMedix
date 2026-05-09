<!DOCTYPE html>
<html>
<head>
    <title>New Inquiry from Website</title>
</head>
<body>
    <h2>New Inquiry Form Submission</h2>
    <p><strong>Name:</strong> {{ $contact['name'] }}</p>
    <p><strong>Email:</strong> {{ $contact['email'] }}</p>
    <p><strong>Subject:</strong> {{ $contact['subject'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $contact['message'] }}</p>
</body>
</html>
