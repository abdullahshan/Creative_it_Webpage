<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
</head>
<body>
    <h1>Name : {{ $contactMail->name }}</h1>
    <p>Email : {{ $contactMail->email }}</p>
    <p>Subject : {{ $contactMail->subject }}</p>
    <p>Message :  {{ $contactMail->message }}</p>

</body>
</html>