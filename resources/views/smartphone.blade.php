<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smartphone</title>
</head>
<body>
<h2>Here is a new device</h2>
<p>{{ $smartphone->name }},
    {{ $smartphone->cpu->vendor }}
    {{ $smartphone->cpu->core }} cores,
    {{ $smartphone->display->resolution }} display,
    {{ $smartphone->camera->megapixel }} megapixels camera,
    battery capacity {{ $smartphone->battery->capacity }} mAh.</p>
</body>
</html>