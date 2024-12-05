<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Parsedown;

class CursoController extends Controller
{
    public function index()
{
    $path = resource_path('cursos'); // Diretório dos cursos

    $files = File::files($path); // Obter arquivos Markdown

    $cursos = [];
    foreach ($files as $file) {
        $content = File::get($file);
        $lines = explode("\n", $content);

        // Procurar a primeira linha que comece com "#"
        $title = 'Sem título'; // Título padrão caso nenhum seja encontrado
        foreach ($lines as $line) {
            if (str_starts_with(trim($line), '#')) {
                $title = trim($line, '# '); // Remove o "#" e espaços extras
                break;
            }
        }

        $cursos[] = [
            'name' => $file->getFilename(),
            'title' => $title, // Armazena o título principal
        ];
    }

    return view('cursos.index', compact('cursos'));
}


public function show($fileName)
{
    // Caminho do arquivo
    $path = resource_path("cursos/$fileName");

    if (!File::exists($path)) {
        abort(404);
    }

    // Ler o conteúdo do arquivo Markdown
    $content = File::get($path);

    // Converter Markdown para HTML usando Parsedown
    $parsedown = new \Parsedown();
    $htmlContent = $parsedown->text($content);

    // Extrair o título (primeiro cabeçalho)
    $lines = explode("\n", $content);
    $title = 'Sem título'; // Valor padrão caso o título não seja encontrado
    foreach ($lines as $line) {
        if (str_starts_with(trim($line), '#')) {
            $title = trim($line, '# '); // Remover o símbolo "#" e espaços extras
            break;
        }
    }

    return view('cursos.show', compact('fileName', 'htmlContent', 'title')); // Passar o título
}

}
