<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Name :{{ $mailData['name'] }}, Age:{{ $mailData['age'] }} ({{ $mailData['gender'] }})</h3>
    <p>
        {{ $mailData['email'] }}
    </p>
    <h3>Education :{{ $mailData['education'] }}</h3>
    <h5>Contact :{{ $mailData['mobile'] }}</h5>
    
</body>
</html>