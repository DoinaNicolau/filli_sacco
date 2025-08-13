<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@vite(['resources/scss/app.scss', 'resources/js/app.js'])
 <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.4.0/model-viewer.min.js"></script>
<body>
    <x-navbar />
    <div class="site-wrapper">
        <main>
            {{ $slot }} 
        </main>
    </div>
   <x-footer />
</body>
</html>