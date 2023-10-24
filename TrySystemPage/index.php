<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try Systems - Desenvolvimento de Sistemas</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .header {
            color: #fff;
            text-align: left;
            padding: 2% 5% 2% 5%;
            overflow: hidden;
        }

        .header h1,
        .header p {
            margin: 0;
            font-size: 6em;
            color: #064F24;
        }

        @keyframes slide-in {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .footer {
            background: #064F24;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
            font-size: 20px;
        }

        .section {
            padding: 20px;
            text-align: left;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin: 20px;
            margin-top: 1px;
            width: 50%;
        }

        .image-container {
            text-align: right;
            margin-top: -35%;
            margin-right: 15%;
        }

        .image-container img {
            max-width: 100%;
        }

        body.animation .section,
        body.animation .image-container,
        body.animation .header {
            animation: slide-in 2s ease;
        }

        .animated-element {
            animation: slide-in 2s ease;
        }

        .button-container {
            text-align: left;
            margin: 20px 0 0 20px;
        }

        .contact-button {
            background: #064F24;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 20px;
            cursor: pointer;
            margin-top: 1px;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width: 100%;
        }

        .close {
            color: #000;
            float: right;
            font-size: 24px;
            cursor: pointer;
        }
    </style>
</head>

<body class="animation">
    <div class="header animated-element">
        <h1>Try</h1>
        <p>Systems</p>
    </div>

    <div class="section animated-element" id="sobre">
        <h2>Sobre</h2>
        <p>Conheça mais sobre a Try Systems e nossa missão:</p>
        <p>Somos uma empresa de desenvolvimento de sistemas dedicada a criar soluções inovadoras para atender às necessidades de nossos clientes. Nossa equipe altamente qualificada trabalha para entregar produtos de alta qualidade e atender às expectativas de nossos parceiros de negócios.</p>
    </div>

    <div class="section animated-element" id="projetos">
        <h2>Projetos</h2>
        <p>Confira alguns dos projetos que concluímos recentemente:</p>
        <ul>
            <li><strong>Projeto 1:</strong> Desenvolvimento de um aplicativo móvel para rastreamento de entregas.</li>
            <li><strong>Projeto 2:</strong> Criação de um sistema de gerenciamento de estoque para uma grande empresa de varejo.</li>
            <li><strong>Projeto 3:</strong> Desenvolvimento de um site de comércio eletrônico personalizado.</li>
        </ul>
    </div>

    <div class="button-container animated-element">
        <button class="contact-button" onclick="openModal()">Entrar em contato</button>
        <a href="page_conteudo.php">
            <button class="content-button">Acessar Conteúdo</button>
        </a>
    </div>



    <div class="image-container animated-element" id="imagem">
        <img src="images/img1.jpg" alt="img1">
    </div>

    <div class="footer">
        <p>&copy; 2023 Try Systems - Desenvolvimento de Sistemas</p>
    </div>

    <div class="modal" id="contactModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <div class="modal-header">
                    <h2 class="modal-title">Entre em contato</h2>
                </div>
                <div class="modal-body">
                    <form class="contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Seu nome">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Seu email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="4" placeholder="Sua mensagem"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Enviar</button>
                </div>
            </div>
        </div>
    </div>



    <script>
        // Função para abrir o modal
        function openModal() {
            var modal = document.getElementById("contactModal");
            modal.style.display = "block";
        }

        // Função para fechar o modal
        function closeModal() {
            var modal = document.getElementById("contactModal");
            modal.style.display = "none";
        }
    </script>
</body>

</html>