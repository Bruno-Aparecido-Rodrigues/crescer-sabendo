<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voluntários</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    <script src=" {{ asset('js/script.js') }} "></script>

    @vite('resources/css/app.css')

</head>

<body class="bg-white overflow-x-hidden">

    <!--navbar-->
    <header class="bg-white">
        <div class="flex items-center justify-between ">
            <div id="logo" class="flex items-center p-5 bg-customRed rounded-br-only">
                <p id="plogo" class="text-white font-itim text-5xl">Meu Perfil</p>
            </div>

            <nav id="navbar" class="hidden  md:flex items-center space-x-12 gap-14">
                <a href="/account" class="text-customBlue  text-2xl font-itim hover:text-customRed hover:underline hover:pb-3 ">Meus Dados</a>
                <a href="#" class="text-customBlue   text-2xl font-itim hover:text-red-700   hover:underline hover:pb-3">Mural</a>
                <a href="/courses" class="text-customBlue   text-2xl font-itim hover:text-red-700   hover:underline hover:pb-3 ">Cursos</a>
                <a href="/courses" class="text-customRed  text-2xl font-itim hover:text-customRed hover:underline hover:pb-3 ">Voluntários</a>
                <a href="/courses" class="text-customBlue   text-2xl font-itim hover:text-red-700   hover:underline hover:pb-3 ">Matriculas</a>


            </nav>

            <div id="userAction" class="hidden md:flex items-center space-x-2 mr-3 ">
                <a href="#" class="text-gray-600 hover:text-customRed ">
                    <img id="userImg" class="h-10 mr-2" src="{{ asset('images/icons/userIconRed.png') }}" alt="">
                </a>
            </div>

            <div id="mobile-nav" class="md:hidden mr-5 ">
                <button id="mobile-menu-toggle" class="focus:outline-none">
                    <img class="h-10" src="{{ asset('images/icons/taskbarRed.png') }}" alt="">
                </button>
            </div>

        </div>


        <div id="mobile-menu" class="hidden bg-white py-2 px-4">
            <a href="/account" class="block text-customBlue  text-lg font-itim py-2 hover:text-customRed">Meus Dados</a>
            <a href="#" class="text-customBlue  text-lg font-itim hover:text-customRed  ">Mural</a>
            <a href="/courses" class="block text-customRed  text-lg font-itim py-2 hover:text-customRed ">Cursos</a>
        </div>
    </header>
    <!--fim da navbar-->


    <div class="bg-customRed flex flex-row">
        <label for="perfil" class="bg-white p-10 rounded-full w-fit h-fit flex border-2 border-black">
            <img src="{{ asset('image/mais.svg') }}" width="120" height="120" alt="">
        </label>
        <label class="text-3xl font-bold">Nome da ONG</label>
    </div>

    <div class="flex items-center justify-center">
        <div class="w-full max-w-5xl rounded-xl bg-gray-100 py-6 px-4 sm:px-8 items-center justify-center mt-4">
            <form method="" action="">
                @csrf
                <div class="flex flex-col">
                    <div class="w-full flex flex-col h-full">
                        <h1 class="text-lg font-bold text-black flex justify-center items-center">Adicionar</h1> <!--Título-->

                        <!--primeira parte do formulário-->
                        <div class="flex flex-col md:flex-row justify-between mt-6 space-y-4 md:space-y-0 md:space-x-4">
                            <div class="w-full md:w-1/4">
                                <label for="name-ar" class="text-black">Nome da área:</label>
                                <input id="name-ar" type="text" name="name-ar" class="mt-1 block w-full rounded-xl px-3.5 py-2 border-4 border-customRed">
                            </div>

                            <div class="w-full md:w-1/4">
                                <label for="tel-cont" class="text-black">Telefone para contato:</label>
                                <input id="tel-cont" type="text" name="tel-cont" class="mt-1 block w-full rounded-xl px-3.5 py-2 border-4 border-customRed">
                            </div>

                            <div class="w-full md:w-1/4">
                                <label for="email" class="text-black">E-mail para contato</label>
                                <input id="email" type="text" name="email" class="mt-1 block w-full rounded-xl px-3.5 py-2 border-4 border-customRed">
                            </div>

                            <div class="w-full md:w-1/4">
                                <label for="cidade" class="text-black">Cidade:</label>
                                <input id="cidade" type="text" name="cidade" class="mt-1 block w-full rounded-xl px-3.5 py-2 border-4 border-customRed">
                            </div>
                        </div>

                        <!--segunda parte do formulário-->
                        <div class="flex flex-col md:flex-row justify-between mt-4 space-y-4 md:space-y-0 md:space-x-4">
                            <div class="w-full md:w-2/3">
                                <label for="voluntarios" class="text-black">Voluntários desejados</label>
                                <textarea id="voluntarios" name="voluntarios" placeholder="Descreva o motivo da procura por voluntários e seus requisitos" class="mt-1 block w-full resize-none border-4 border-customRed rounded-xl px-6 py-3"></textarea>
                            </div>

                            <div class="w-full md:w-1/3 flex md:flex-row flex-col gap-4">
                                <div class="flex flex-col flex-1">
                                    <label for="day" class="text-black">Dias da semana</label>
                                    <input id="day" type="text" name="day" placeholder="Ex: Segunda a sexta" class="mt-1 block w-full rounded-xl px-3.5 py-2 border-4 border-customRed">
                                </div>

                                <div class="flex flex-col flex-1">
                                    <label for="hour" class="text-black">Horário</label>
                                    <input id="hour" type="text" name="hour" placeholder="Ex: 13h às 14h" class="mt-1 block w-full rounded-xl px-3.5 py-2 border-4 border-customRed">
                                </div>
                            </div>
                        </div>


                        <!--botão de criação-->
                        <div class="flex place-content-end mt-4">
                            <button class="bg-red-500 text-lg text-white rounded-lg px-10 py-2 hover:bg-red-900">Criar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--card de exibição da necessidade-->
    <div class="flex items-center justify-center">
        <div class="w-full max-w-5xl rounded-xl bg-gray-100 border-2 border-gray-400 py-6 px-4 sm:px-10 items-center justify-center mt-4">
            <div class="flex flex-col">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center">
                    <div class="flex items-center">
                        <label class="text-black mr-1">ONG:</label>
                        <label class="text-red-500 font-bold">Crescer Sabendo</label><!--adicionar back-end-->
                    </div>
                    <div class="flex flex-col items-start sm:items-end mt-4 sm:mt-0">
                        <label>Tel: (11) 99999-9999</label>
                        <label>E-mail: xxxx@gmail.com</label>
                    </div>
                </div>

                <!-- Linhas horizontais -->
                <div class="my-4">
                    <hr class="border-2 border-gray-400">
                </div>

                <div class="flex flex-col justify-between">
                    <h1 class="text-lg font-bold text-indigo-900 flex justify-center items-center">Necessidade: Professor de música</h1><!--adicionar back-end-->
                    <p class="text-justify text-lg w-full my-4">Procuramos professores de música com experiência em ensino e domínio de pelo menos um instrumento musical.<!--adicionar back-end-->
                        Os candidatos devem ser comprometidos, pacientes e ter disponibilidade para ministrar aulas semanais.
                        Além disso, buscamos pessoas que tenham sensibilidade para trabalhar em comunidades carentes, com o desejo
                        de fazer a diferença na vida dos alunos por meio da arte.</p>
                </div>

                <!-- Seção de localização, horário e botões -->
                <div class="flex flex-col sm:flex-row items-start sm:items-center mt-4">
                    <div class="flex flex-col sm:flex-row w-full sm:w-auto sm:justify-between">
                        <label class="flex mb-4 sm:mb-0 text-left sm:text-left">São Paulo</label>
                        <label class="flex mb-4 sm:mb-0 text-left sm:text-left sm:ml-4 sm:mr-auto">Horário 13h às 17h - Segunda a sexta</label>
                    </div>
                    <!-- Botões de ação -->
                    <div class="flex flex-col sm:flex-row gap-4 mt-4 sm:mt-0 sm:ml-auto">
                        <button class="bg-blue-500 text-lg text-white rounded-lg px-10 py-2 hover:bg-blue-900">Editar</button>
                        <button class="bg-red-500 text-lg text-white rounded-lg px-10 py-2 hover:bg-red-900">Excluir</button>
                    </div>
                </div>


            </div>
        </div>
    </div>



</body>

</html>