<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conteúdo sobre Desenvolvimento de Sistemas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 90vh;
        }

        .header {
            background: #064F24;
            color: #fff;
            text-align: left;
            padding: 2% 5% 2% 5%;
            overflow: hidden;
        }

        .header h1,
        .header p {
            margin: 0;
            font-size: 7em;
        }

        .header a {
            color: #fff;
            text-decoration: none;
            margin: 0 20px;
            font-size: 20px;
        }

        .footer {
            background: #064F24;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            font-size: 20px;
        }

        .container {
            background-color: #f7f7f7;
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        .course {
            background: #fff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: background 0.3s, transform 0.2s;
            cursor: pointer;
        }

        .ebook {
            background: #fff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: background 0.3s, transform 0.2s, box-shadow 0.3s;
            cursor: pointer;
        }

        .ebook:hover {
            background: #f7f7f7;
            transform: scale(1.02);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .course:hover {
            background: #f7f7f7;
            transform: scale(1.02);
        }


        .article {
            width: 15%;
            background-color: #f7f7f7;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            cursor: pointer;
            padding: 10px;
            margin: 5px;
        }

        .article-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }


        .article:hover {
            transform: scale(1.05);
            background-color: #e1e1e1;
        }

        .article h3 {
            text-align: center;
        }

        .article img {
            display: block;
            margin: 0 auto;
            width: 50%;
            padding: 20px;
        }

        .article p {
            display: none;
        }
    </style>
</head>

<body>
    <div class="header animated-element">
        <h1>Conteúdo educativo</h1>
        <nav>
            <a href="#artigos">Artigos</a>
            <a href="#cursos">Cursos Gratuitos</a>
            <a href="#ebooks">E-books sobre T.I</a>
            <a href="#ebooks">Dicas de carreira</a>
        </nav>
    </div>

    <div class="container">
        <section id="artigos" class="animated-element">
            <h2>Artigos sobre Desenvolvimento de Sistemas</h2>
            <div class="article-grid">
                <div class="article">
                    <h3>Artigo 1: Título do Artigo 1</h3>
                    <img src="images/img1.jpg" alt="Imagem do Artigo 1">
                </div>
                <div class="article">
                    <h3>Artigo 2: Título do Artigo 2</h3>
                    <img src="images/img2.jpg" alt="Imagem do Artigo 2">
                </div>
                <div class="article">
                    <h3>Artigo 3: Título do Artigo 3</h3>
                    <img src="images/img3.jpg" alt="Imagem do Artigo 3">
                </div>
                <div class="article">
                    <h3>Artigo 2: Título do Artigo 2</h3>
                    <img src="images/img2.jpg" alt="Imagem do Artigo 2">
                </div>
                <div class="article">
                    <h3>Artigo 3: Título do Artigo 3</h3>
                    <img src="images/img3.jpg" alt="Imagem do Artigo 3">
                </div>
            </div>
        </section>
    </div>

    <div class="container">
        <section id="cursos" class="animated-element">
            <h2>Cursos Gratuitos</h2>
            <div class="course">
                <h3>Curso 1: Introdução ao Desenvolvimento de Sistemas</h3>
                <p>Este curso introdutório aborda os conceitos básicos de desenvolvimento de sistemas. Lorem ipsum dolor sit amet...</p>
            </div>
            <div class="course">
                <h3>Curso 2: Programação Web Avançada</h3>
                <p>Este curso avançado explora a programação web em detalhes. Consectetur adipiscing elit...</p>
            </div>
            <div class="course">
                <h3>Curso 3: Banco de Dados e SQL</h3>
                <p>Aprenda sobre bancos de dados e SQL neste curso. Nullam fringilla dui sed elit tristique...</p>
            </div>
        </section>
    </div>

    <div class="container">
        <section id="ebooks" class="animated-element">
            <h2>E-books Gratuitos</h2>
            <div class="ebook">
                <h3>E-book 1: Título do E-book 1</h3>
                <p>Descrição do e-book 1. Lorem ipsum dolor sit amet...</p>
            </div>
            <div class="ebook">
                <h3>E-book 2: Título do E-book 2</h3>
                <p>Descrição do e-book 2. Consectetur adipiscing elit...</p>
            </div>
            <div class="ebook">
                <h3>E-book 3: Título do E-book 3</h3>
                <p>Descrição do e-book 3. Nullam fringilla dui sed elit tristique...</p>
            </div>
        </section>
    </div>


    <div class="container">
        <section id="news" class="animated-element">
            <h2>Notícias de Tecnologia</h2>
            <article>
                <h3>Novo Smartphone Lançado</h3>
                <p>Hoje, a empresa XYZ lançou seu mais recente smartphone com recursos inovadores e uma câmera de alta resolução.</p>
            </article>
            <article>
                <h3>Tendências de Tecnologia em 2023</h3>
                <p>Um resumo das tendências tecnológicas que estão moldando o ano de 2023, incluindo IA, 5G e mais.</p>
            </article>
        </section>
    </div>

    <div class="container">
        <section class="image-slider">
            <h2>Galeria de Imagens</h2>
            <div class="image-carousel">
                <img src="images/img1.jpg" alt="Imagem 1">
                <img src="images/img1.jpg" alt="Imagem 1">
                <img src="images/img1.jpg" alt="Imagem 1">
            </div>
        </section>
    </div>

    <div class="container">
        <section class="about">
            <h2>Sobre a Empresa</h2>
            <p class="about-text">A Estacionamento é uma empresa de tecnologia dedicada a simplificar e otimizar a busca por vagas de estacionamento. Nós colaboramos com empresas parceiras em toda a região para oferecer uma experiência de estacionamento conveniente e eficiente.</p>
            <p class="about-text">Com a nossa plataforma avançada, os usuários podem encontrar vagas disponíveis, reservar antecipadamente e pagar de forma segura, tudo isso com apenas alguns cliques. Nossa missão é melhorar a mobilidade urbana proporcionando soluções inovadoras e acessíveis para o estacionamento.</p>
        </section>
    </div>

    <div class="footer">
        <p>&copy; 2023 Try Systems - Desenvolvimento de Sistemas</p>
    </div>
</body>

</html>