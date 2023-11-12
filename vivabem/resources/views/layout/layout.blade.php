<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') - Academia Viva Bem</title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/sobre') }}">Sobre</a></li>
            <li><a href="{{ url('/modalidade') }}">Modalidade</a></li>
            <li><a href="{{ url('/treino') }}">Treino</a></li>
            <li><a href="{{ url('/noticia') }}">Notícia</a></li>
            <li><a href="{{ url('/contato') }}">Contato</a></li>
        </ul>
    </nav>

    <main class="container">
        @yield('conteudo')
    </main>

    <footer>
        <h2>TIPI 2023- SENAC SMP</h2>
    </footer>

    {{-- <script></script> --}}

</body>
</html>
