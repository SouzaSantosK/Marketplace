<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/scss/home.scss')
    <title>Home</title>
</head>
<body>
    <x-layout>
        <section class="hero">
            <div>
                <h1>Nike <br> Jordan 3</h1>
                <p class="preco-de">De <span>R$ 789,99</span></p>
                <p class="preco-por">por R$ 619,99</p>
            </div>
        </section>
        <section class="products">
            <h2>Nossos Produtos</h2>
            <div class="grid">
                <div class="card">
                    <div class="image">
                        <div class="buttons">
                            <a href="">Carrinho</a>
                            <a href="">Ver mais</a>
                        </div>
                    </div>
                    <div class="content">
                        <p class="name">Blusa Moletom Nike</p>
                        <p class="price"><span>De R$ 459,99</span> por R$ 459,98</p>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <div class="buttons">
                            <a href="">Carrinho</a>
                            <a href="">Ver mais</a>
                        </div>
                    </div>
                    <div class="content">
                        <p class="name">Shorts Nike Dri-FIT Classic</p>
                        <p class="price"><span>De R$ 149,99</span> por R$ 119,99</p>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <div class="buttons">
                            <a href="">Carrinho</a>
                            <a href="">Ver mais</a>
                        </div>
                    </div>
                    <div class="content">
                        <p class="name">Tênis Nike Metcon 9 Masculino</p>
                        <p class="price"><span>De R$ 1199,99</span> por R$ 999,99</p>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <div class="buttons">
                            <a href="">Carrinho</a>
                            <a href="">Ver mais</a>
                        </div>
                    </div>
                    <div class="content">
                        <p class="name">Boné Nike Dri-FIT Unissex</p>
                        <p class="price"><span>De R$ 209,99</span> por R$ 149,99</p>
                    </div>
                </div>
            </div>
        </section>
    </x-layout>
</body>
</html>