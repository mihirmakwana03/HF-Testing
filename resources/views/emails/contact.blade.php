<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Contact Request</title>
</head>
<body>
  <h2>New Contact Request</h2>
  <p><strong>Name:</strong> {{ $data['name'] }}</p>
  <p><strong>Email:</strong> {{ $data['email'] }}</p>
  @if(!empty($data['subject']))
    <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
  @endif
  <p><strong>Message:</strong><br>{{ nl2br(e($data['message'])) }}</p>
</body>
</html>
