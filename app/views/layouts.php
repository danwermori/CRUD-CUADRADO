<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="Proyecto MVC con PHP y MySQL">
    <title>Gestor de Figuras - MVC</title>
    <link rel="icon" href="<?= (BASE_URL ? rtrim(BASE_URL, '/') : '') ?>/img/message.png" type="image/png">
    <link rel="stylesheet" href="<?= (BASE_URL ? rtrim(BASE_URL, '/') : '') ?>/asset/css/style.css">
</head>

<body>
    <header class="container">
        <h1>
            <a href="<?= (BASE_URL ? rtrim(BASE_URL, '/') : '') ?>">✔️ CRUD CUADRADO ✔️</a>
        </h1>
        <nav>
            <a href="<?= (BASE_URL ? rtrim(BASE_URL, '/') : '') ?>/mensajes" class="btn btn-primary">Mensajes</a>
        </nav>
    </header>

    <main class="container">
        <?php include $viewFile; ?>
    </main>

    <footer class="container footer">
        <small>Hecho con ❤️ usando PHP MVC</small>
    </footer>

    <script src="<?= (BASE_URL ? rtrim(BASE_URL, '/') : '') ?>/asset/js/app.js"></script>
</body>
</html>
