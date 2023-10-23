<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
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
        body.animation .image-container {
            animation: slide-in 2s ease;
        }

        /* Adicione uma classe comum para todos os elementos que você deseja animar */
        .animated-element {
            animation: slide-in 2s ease;
        }
    </style>
</head>
<body class="animation">
    <div class="header">
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

    <div class="section animated-element" id="contato">
        <h2>Contato</h2>
        <p>Entre em contato conosco para obter mais informações ou esclarecer dúvidas:</p>
        <ul>
            <li><strong>Endereço:</strong> Rua Exemplo, 1234</li>
            <li><strong>Telefone:</strong> (11) 1234-5678</li>
            <li><strong>Email:</strong> contato@trysystems.com</li>
            <li><strong>Visite nossas páginas:</strong>
                <ul>
                    <li><a href="pagina1.html">Instagram</a></li>
                    <li><a href="pagina2.html">YouTube</a></li>
                    <li><a href="pagina3.html">Email</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="image-container animated-element" id="imagem">
        <img src="images/img1.jpg" alt="img1">
    </div>

    <div class="footer">
        <p>&copy; 2023 Try Systems - Desenvolvimento de Sistemas</p>
    </div>
</body>
</html>
