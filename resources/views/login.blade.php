<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login</title>

        @vite('resources/scss/form.scss')
        <style>
            body {
                background-position: center;
            }
        </style>
    </head>
    <body>
        <section>
            <div class="title">
                <h1>Faça seu <span>Login</span></h1>
                <p>ou <a href="./cadastro">crie sua conta</a></p>
            </div>
            <form action="">
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
                <div>
                    <div class="input-group">
                        <input
                            required
                            type="password"
                            name="text"
                            autocomplete="off"
                        />
                        <label>Senha</label>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
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
                <button class="submit-button">Entrar</button>
                <a>Esqueceu sua senha?</a>
            </form>
            <p class="copy">
                &copy; 2024 - Todos os direitos reservados
                <a href="">Política</a> e <a href="">Privacidade</a>
            </p>
        </section>
    </body>
</html>
