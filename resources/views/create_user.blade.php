<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman User</h1>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama">
        <br>

        <label for="npm">NPM : </label>
        <input type="text" name="npm" id="npm">
        <br>

        <label for="kelas">Kelas : </label>
        <input type="text" name="kelas" id="kelas">
        <br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>