<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        p {
            padding: 0 25px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h2 style="padding: 15px 25px; font-size: 26px; color: #fff; background: #1D1E3B;">
        Hello Cloud Copy! This is {{ $data['name'] }}.
    </h2>
    <div>
        <p>{{ $data['message'] }}</p>
        <p>Please contact me here for further discussions: <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></p>
    </div>
</body>
</html>