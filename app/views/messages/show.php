<?php

/** @var array $mensaje */
?>
<article class="card wide">
    <h2>Mensaje #<?= (int)$mensaje['id'] ?></h2>

    <ul>
        <li><strong>Lado:</strong> <?= (int)$mensaje['lado'] ?></li>
        <li><strong>Área:</strong> <?= (int)$mensaje['area'] ?></li>
        <li><strong>Perímetro:</strong> <?= (int)$mensaje['perimetro'] ?></li>
        <li><strong>Fecha:</strong> <?= htmlspecialchars($mensaje['fecha']) ?></li>
        <li><strong>Creado:</strong> <?= htmlspecialchars($mensaje['create_at']) ?></li>
    </ul>

    <form method="post"
        action="<?= (BASE_URL ? rtrim(BASE_URL, '/') : '') ?>/mensajes/delete"
        onsubmit="return confirm('¿Eliminar este mensaje?');">
        <input type="hidden" name="id" value="<?= (int)$mensaje['id'] ?>" />

        <a class="btn" href="<?= (BASE_URL ? rtrim(BASE_URL, '/') : '') ?>/mensajes/edit?id=<?= (int)$mensaje['id'] ?>">Editar</a>
        <button type="submit" class="btn danger">Eliminar</button>
        <a class="btn secondary" href="<?= (BASE_URL ? rtrim(BASE_URL, '/') : '') ?>/mensajes">Volver</a>
    </form>
</article>