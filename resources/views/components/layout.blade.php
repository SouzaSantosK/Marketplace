<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dá um titulo aqui'}}</title>
    @vite('resources/scss/nav_footer.scss')
</head>
<body>
    <nav id="nav">
        <a href="">Link 1</a>
        <a href="">Link 1</a>
        <a href="">Link 1</a>
    </nav>
    {{ $slot }}
    <footer>
        <p>@Textotexto</p>
    </footer>
    <script>
        const navbar = document.getElementById('nav');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 0) {
                navbar.classList.add('fixed');
            } else {
                navbar.classList.remove('fixed');
            }
        })
    </script>
</body>
</html>