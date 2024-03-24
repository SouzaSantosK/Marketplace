<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite('resources/scss/app.scss')
        <title>Cadastro</title>
    </head>
    <body>
        <section>
            <h1><span>Bem-vindo,</span> vamos fazer de você um membro.</h1>
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
                    <!-- <div class="required-password">
                        <p><span class="password-status">X</span> - Mínimo de 8 caracteres</p>
                        <p><span class="password-status">X</span> - Letras maiúsculas, minúsculas e um número</p>
                    </div> -->
                </div>
                <!-- <div class="input-group">
                    <input
                        required
                        type="text"
                        name="text"
                        autocomplete="off"
                    />
                    <label>Data de Nascimento</label>
                </div> -->
                <div class="terms">
                    <input type="checkbox" name="privacy" id="privacy" />
                    <p>
                        Ao marcar esta caixa, você concorda com a
                        <span>Política de privacidade</span> e os
                        <span>termos de uso da plataforma</span>.
                    </p>
                </div>
                <input type="submit" value="Cadastrar" class="submit-button"/>
            </form>
        </section>
        <script>
            const passwordBtn = document.getElementById("password-btn");
            const passwordInput = document.getElementById("password-input");
            // const passwordSpan = document.querySelectorAll(".password-status");

            passwordBtn.addEventListener("click", () => {
                passwordInput.type = passwordInput.type === "password" ? "text" : "password";
            })

            // const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;

            // passwordInput.addEventListener("input", function () {
            //     const validationResult = passwordRegex.test(this.value);

            //     if (validationResult) {
            //         console.log(`${this.value} é valido`);
            //         passwordSpan.innerText = "O";
            //     } else {
            //         console.log(`${this.value} é inválido`);
            //         passwordSpan.innerText = "X";
            //     }
            // })

        </script>
    </body>
</html>
