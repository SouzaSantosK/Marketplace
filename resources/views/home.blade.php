<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite('resources/scss/home.scss')
        <title>Home</title>
    </head>
    <body>
        <x-layout>
            <section class="hero">
                <div>
                    <p class="tag">Novos lançamentos</p>
                    <h1>Artigos esportivos</h1>
                    <p class="description">
                    Descubra as últimas tendências em moda esportiva, equipamentos de alta qualidade e acessórios para levar sua performance ao próximo nível. 
                    </p>
                    <a href="">Veja Mais</a>
                </div>
            </section>
            <!-- <section class="brands">
                <div class="slider">
                    <img src="/images/nike.png" alt="" />
                    <img src="/images/nike.png" alt="" />
                    <img src="/images/nike.png" alt="" />
                    <img src="/images/nike.png" alt="" />
                    <img src="/images/nike.png" alt="" />
                    <img src="/images/nike.png" alt="" />
                </div>
            </section> -->
            <section class="showcase">
                <div class="row-span-2">
                    <img src="/images/air-jordan-4-retro.png">
                </div>
                <div>
                <img src="/images/air-jordan-4-retro-under.png">
                </div>
                <div>
                    <img src="/images/air-jordan-4-retro-back.png">
                </div>
            </section>
            <section class="ad">
                <div>
                    <p class="tag">Produtos para</p>
                    <h2>Academia</h3>
                    <p class="description">Descubra uma variedade de opções projetadas para maximizar seus resultados e elevar seu desempenho.</p>
                    <a href="">Ver Coleção</a>
                </div>
            </section>
            <section class="wall">
                <div class="wall-column">
                    <div class="card size-a">
                        <img src="/images/bone.png">
                    </div>
                    <div class="card size-b">
                        <img src="/images/hoodie.png">
                    </div>
                    <div class="card size-a">
                        <img src="/images/shorts.png">
                    </div>
                </div>
                <div class="wall-column">
                    <div class="card size-c">
                        <img src="/images/aqua-swoosh.png">
                    </div>
                    <div class="card size-b">
                        <img src="/images/clube-fleece.jpg">
                    </div>
                </div>
                <div class="wall-column">
                    <div class="card size-c">
                        <img src="/images/g-flex.png">
                    </div>
                    <div class="card size-c">
                        <img src="/images/12-oz-stride.png">
                    </div>
                </div>
            </section>
            <section class="catalog">
                <h3>Ficou interessado?</h3>
                <p>Conheça nosso catálogo</p>
                <div>
                    <div class="card">
                        <h4>Exclusivos</h4>
                    </div>
                    <div class="card">
                        <h4>Acessórios</h4>
                    </div>
                    <div class="card">
                        <h4>Calçados</h4>
                    </div>
                    <div class="card">
                        <h4>Esportivos</h4>
                    </div>
                </div>
            </section>
        </x-layout>
    </body>
</html>
