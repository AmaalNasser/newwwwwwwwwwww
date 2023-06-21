<!-- contact.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Comatible" content="ie=edge">

    <title>Amaal Nasser Laravel Package Test</title>
</head>

<body>
    <h1>Simple contact us page</h1>
    <form action="{{ route('contact') }}" method="post">
        @csrf

        <div class="form-element">
            <input type="text" name="name" placeholder="Name">
        </div>
        
        <div class="form-element">
            <input type="email" name="email" placeholder="Email">
        </div>

        <div class="form-element">
            <input type="text" name="subject" placeholder="Subject">
        </div>

        <div class="form-element">
            <textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
        </div>
        <button type="submit">Send</button>
    </form>
</body>

</html>
