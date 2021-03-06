<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? "Home"}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/loader.js') }}" ></script>
</head>
<body>
<x-frontend.navbar/>
{{$slot}}
<x-frontend.footer/>

{{$footer_js ?? ""}}
</body>
</html>
