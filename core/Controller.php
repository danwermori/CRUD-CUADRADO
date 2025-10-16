<?php
// core/Controller.php
class Controller
{
    protected function views(string $views, array $data = []): void
    {
        extract($data);
        $viewFile = __DIR__ . '/../app/views/' . $views . '.php';

        if (!file_exists($viewFile)) {
            http_response_code(404);
            echo "Vista no encontrada: {$views}";
            return;
        }

        include __DIR__ . '/../app/views/layouts.php'; // archivo singular y consistente
    }

    protected function redirect(string $path): void
    {
        $url = BASE_URL ? rtrim(BASE_URL, '/') . '/' . ltrim($path, '/') : '/' . ltrim($path, '/');
        header("Location: $url");
        exit;
    }

    protected function h(?string $str): string
    {
        return htmlspecialchars((string)$str, ENT_QUOTES, 'UTF-8');
    }
}
