<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Grazie per averci contattato!</h1>
    <p>Abbiamo ricevuto il tuo messaggio e ti risponderemo al più presto. Non esitare a contattarci se hai ulteriori domande o richieste. Siamo qui per aiutarti!</p>
    <h3>{{ $user_data['user'] }}</h3>
    <p><strong>Email:</strong> {{ $user_data['email'] }}</p>
    <p><strong>Messaggio:</strong> {{ $user_data['message'] }}</p>
</body>
</html>