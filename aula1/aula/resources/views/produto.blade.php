<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($produto as $tbproduto)

    <h1>{{ $tbproduto -> name_produto }}</h1>
    <h1>{{ $tbproduto -> id_produto }}</h1>

    
    @endforeach
</body>
</html>