<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
</head>
<body>
    <h2>Contact Form Submission</h2>
    <p>Name: {{ $formData['nombre'] }}</p>
    <p>Email: {{ $formData['email'] }}</p>
    <p>Message: {{ $formData['mensaje'] }}</p>
</body>
</html>
