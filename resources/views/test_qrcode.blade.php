<!DOCTYPE html>
<html>
    <head>
        <title>QR code Generator</title>
    </head>
<body>
    <div class="visible-print text-center">
        <h1>Laravel 7 - QR Code Generator Example</h1>
        {!! QrCode::size(250)->generate('www.google.com'); !!}
        {!! QrCode::size(250)->generate('string'); !!}
    </div>
</body>
</html>
