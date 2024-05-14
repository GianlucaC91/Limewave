<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail Template</title>
</head>
<body>
    <h1> Grazie per averci contattato! </h1>
    <p>Nome: {{$contactMail ['name']}}</p>
    <p>Email: {{$contactMail ['email']}}</p>
    <p>Messaggio: {{$contactMail ['description']}}</p>
</body>
</html>