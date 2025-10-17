<?php
// app/Controllers/MensajeController.php
class MensajeController extends Controller
{
    public function index()
    {
        $mensajes = Mensaje::all();
        $this->views('messages/index', compact('mensajes'));
    }

    public function create()
    {
        $this->views('messages/create');
    }

    public function store()
    {
        try {
            $lado = (int)($_POST['lado'] ?? 0);
            $fecha = trim($_POST['fecha'] ?? '');

            if ($lado <= 0 || $fecha === '') {
                throw new RuntimeException('Todos los campos son obligatorios y deben ser válidos.');
            }

            $area = $lado * $lado;
            $perimetro = 4 * $lado;

            $id = Mensaje::create([
                'lado' => $lado,
                'area' => $area,
                'perimetro' => $perimetro,
                'fecha' => $fecha
            ]);

            $this->redirect('/messages/show?id=' . $id);
        } catch (Throwable $e) {
            $error = $e->getMessage();
            $this->views('messages/create', compact('error'));
        }
    }

    public function show()
    {
        $id = (int)($_GET['id'] ?? 0);
        $mensaje = $id ? Mensaje::find($id) : null;

        if (!$mensaje) {
            http_response_code(404);
            echo 'Mensaje no encontrado';
            return;
        }

        $this->views('messages/show', compact('mensaje'));
    }

    public function edit()
    {
        $id = (int)($_GET['id'] ?? 0);
        $mensaje = $id ? Mensaje::find($id) : null;

        if (!$mensaje) {
            http_response_code(404);
            echo 'Mensaje no encontrado';
            return;
        }

        $this->views('messages/edit', compact('mensaje'));
    }

    public function update()
    {
        try {
            $id = (int)($_POST['id'] ?? 0);
            $lado = (int)($_POST['lado'] ?? 0);
            $fecha = trim($_POST['fecha'] ?? '');

            if ($lado <= 0 || $fecha === '') {
                throw new RuntimeException('Todos los campos son obligatorios y deben ser válidos.');
            }

            $area = $lado * $lado;
            $perimetro = 4 * $lado;

            Mensaje::updateById($id, [
                'lado' => $lado,
                'area' => $area,
                'perimetro' => $perimetro,
                'fecha' => $fecha
            ]);

            $this->redirect('/messages/show?id=' . $id);
        } catch (Throwable $e) {
            $error = $e->getMessage();
            $mensaje = [
                'id' => $_POST['id'] ?? 0,
                'lado' => $_POST['lado'] ?? 0,
                'fecha' => $_POST['fecha'] ?? '',
            ];
            $this->views('messages/edit', compact('mensaje', 'error'));
        }
    }

    public function destroy()
    {
        $id = (int)($_POST['id'] ?? 0);
        if ($id) {
            Mensaje::deleteById($id);
        }
        $this->redirect('/messages');
    }
}
