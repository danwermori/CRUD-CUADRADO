<?php

/** @var array $mensajes */
?>
<section class="cuadrados">
    <h2>Cuadrados</h2>
    <div class="btn02">
        <a href="<?= (BASE_URL ? rtrim(BASE_URL, '/') : '') ?>/messages/create" class="btn btn-primary">Nuevo</a>
    </div>
    <?php if (empty($mensajes)): ?>
        <div class="empty">No hay mensajes aún. Crea el primero.</div>
    <?php else: ?>
        <div class="grid">
            <?php foreach ($mensajes as $m): ?>
                <article class="card">
                    <h3>#<?= (int)$m['id'] ?></h3>
                    <p><strong>Lado:</strong> <?= (int)$m['lado'] ?></p>
                    <p><strong>Área:</strong> <?= (int)$m['area'] ?></p>
                    <p><strong>Perímetro:</strong> <?= (int)$m['perimetro'] ?></p>
                    <p class="muted"><strong>Fecha:</strong> <?= htmlspecialchars($m['fecha']) ?></p>
                    <div class="row">
                        <a class="btn" href="<?= (BASE_URL ? rtrim(BASE_URL, '/') : '') ?>/messages/show?id=<?= (int)$m['id'] ?>">Ver</a>
                        <a class="btn secondary" href="<?= (BASE_URL ? rtrim(BASE_URL, '/') : '') ?>/messages/edit?id=<?= (int)$m['id'] ?>">Editar</a>
                        <a class="btn danger" href="<?= (BASE_URL ? rtrim(BASE_URL, '/') : '') ?>/messages/delete?id=<?= (int)$m['id'] ?>">Eliminar</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>