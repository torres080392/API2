<!DOCTYPE html>
<html>
<head>
    <title>Importar Productos</title>
</head>
<body>
    <form action="{{ route('import.products') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button type="submit">Importar Productos</button>
    </form>
</body>
</html>

