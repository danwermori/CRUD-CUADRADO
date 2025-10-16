<?php

/** @var array $mensaje */
/** @var string|null $error */
?>
<section>
    <h2>Editar Mensaje</h2>

    <?php if (!empty($error)): ?>
        <div class="alert"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="post"
        action="<?= (BASE_URL ? rtrim(BASE_URL, '/') : '') ?>/mensajes/update"
        class="form">

        <input type="hidden" name="id" value="<?= (int)$mensaje['id'] ?>" />

        <label>Lado
            <input type="number" name="lado" min="1" required value="<?= (int)$mensaje['lado'] ?>" />
        </label>

        <label>Fecha
            <input type="date" name="fecha" required value="<?= htmlspecialchars($mensaje['fecha'] ?? '') ?>" />
        </label>

        <button type="submit" class="btn">Actualizar</button>
        <a class="btn secondary"
            href="<?= (BASE_URL ? rtrim(BASE_URL, '/') : '') ?>/mensajes/show?id=<?= (int)$mensaje['id'] ?>">Cancelar</a>
    </form>
</section>