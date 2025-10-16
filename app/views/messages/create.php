<?php

/** @var string|null $error */
?>
<section>
    <h2>Nuevo Registro</h2>

    <?php if (!empty($error)): ?>
        <div class="alert"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="post"
        action="<?= (BASE_URL ? rtrim(BASE_URL, '/') : '') ?>/mensajes/store"
        class="form">

        <label>Lado
            <input type="number" name="lado" min="1" required />
        </label>

        <label>Fecha
            <input type="date" name="fecha" required />
        </label>

        <button type="submit" class="btn">Guardar</button>
        <a class="btn secondary" href="/mensajes">Cancelar</a>
    </form>
</section>