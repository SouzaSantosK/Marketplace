<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite('resources/scss/form.scss')
        <title>Cadastro</title>
    </head>
    <body>
        <section>
            <div class="title">
                <h1>Faça seu <span>Cadastro</span></h1>
                <p>ou <a href="./login">faça seu login</a></p>
            </div>
            <form method="POST" action="/cadastrar">
                @csrf
                <div class="input-group">
                    <input
                        required
                        type="email"
                        name="email"
                        autocomplete="off"
                        id="email"
                        placeholder=""
                    />
                    <label>E-mail</label>
                </div>
                <div class="col-2">
                    <div class="input-group">
                        <input
                            required
                            type="text"
                            name="nome"
                            autocomplete="off"
                        />
                        <label>Nome</label>
                    </div>
                    <div class="input-group">
                        <input
                            required
                            type="text"
                            name="sobrenome"
                            autocomplete="off"
                        />
                        <label>Sobrenome</label>
                    </div>
                </div>
                <div>
                    <div class="input-group">
                        <input
                            required
                            type="password"
                            name="senha"
                            autocomplete="off"
                            id="password-input"
                        />
                        <label>Senha</label>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            id="password-btn"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"
                            />
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                            />
                        </svg>
                    </div>
                </div>
                <input type="submit" value="Cadastrar" class="submit-button" />
            </form>
            <p class="copy">
                &copy; 2024 - Todos os direitos reservados
                <a href="">Política</a> e <a href="">Privacidade</a>
            </p>
        </section>
    </body>
</html>
