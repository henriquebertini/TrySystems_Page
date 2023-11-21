<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_landing_page.css">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="script" href="scripts/scripts_landing_page.js">
    <link rel="icon" type="image/png" href="images/imagem-para-icone.png">
    <title>Landing Page - Try Systems</title>


</head>

<body>
    <script>
        AOS.init();
    </script>

    <div class="header">
        <div class="container">
            <h1>Try<span class="highlight">Systems</span></h1>
            <p>Sistemas inteligentes enriquecem empresas</p>
        </div>
    </div>

    <div class="project-section">
        <div class="container">
            <h2 class="centralized-title">Nossos principais Projetos de sistemas</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="images/try1.jpg" alt="Projeto 1">
                        <div class="card-body">
                            <h5 class="card-title">Sistema Avançado de Gestão para Restaurantes</h5>
                            <p class="card-text">Apresentamos um sistema completo de gestão para restaurantes, ideal para otimizar a administração de estabelecimentos gastronômicos.
                                <strong>Características chave incluem:</strong>
                            <ul>
                                <li><strong>Gestão Inteligente de Mesas:</strong> Gerenciamento eficiente do espaço disponível.</li>
                                <li><strong>Controle de Funcionários:</strong> Acompanhamento eficaz do desempenho e das tarefas da equipe.</li>
                                <li><strong>Gestão de Estoque:</strong> Controle de estoque para manutenção de um inventário preciso.</li>
                                <li><strong>Geração de Relatórios e Análises:</strong> Insights sobre vendas e desempenho operacional.</li>
                            </ul>
                            .</p>
                            <a href="https://www.instagram.com/trysystems.so/" class="btn btn-primary">Solicite um orçamento para a sua empresa.</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="images/try1.jpg" alt="Projeto 2">
                        <div class="card-body">
                            <h5 class="card-title"> Sistema de Bipagem e Etiquetagem para Eficiência Comercial e Industrial</h5>
                            <p class="card-text">Sistema inovador projetado para otimizar processos industriais e comerciais.
                                <strong>Funcionalidades principais:</strong>
                            <ul>
                                <li><strong>Shopfloor de Processos:</strong> Interface intuitiva para gestão de produção.</li>
                                <li><strong>Controle de Dados e Travas Personalizadas:</strong> Segurança e precisão nos dados de produção.</li>
                                <li><strong>Etiquetagem de Produtos:</strong> Soluções ágeis para rastreamento e identificação.</li>
                                <li><strong>Serialização de Produtos:</strong> Geração de números de série para controle de inventário.</li>
                                <li><strong>Coleta de Dados Avançada:</strong> Análise de dados para melhoria contínua.</li>
                            </ul>
                            </p>
                            <a href="https://www.instagram.com/trysystems.so/" class="btn btn-primary">Solicite um orçamento para a sua empresa.</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="images/try1.jpg" alt="Projeto 3">
                        <div class="card-body">
                            <h5 class="card-title">Sistema Integrado de Gestão para Supermercados e Frutarias</h5>
                            <p class="card-text">Sistema completo para supermercados e frutarias, projetado para melhorar as operações diárias.
                                <strong>Características principais:</strong>
                            <ul>
                                <li><strong>Pesagem Inteligente de Produtos:</strong> Eficiência e precisão na pesagem.</li>
                                <li><strong>Bipagem Rápida de Itens:</strong> Leitura de código de barras para registro rápido de produtos.</li>
                                <li><strong>Cálculos Financeiros Avançados:</strong> Ferramentas para simplificar o processo de checkout.</li>
                                <li><strong>Gestão Eficiente do Inventário:</strong> Controle de estoque em tempo real.</li>
                            </ul>
                            </p>
                            <a href="https://www.instagram.com/trysystems.so/" class="btn btn-primary">Solicite um orçamento para a sua empresa.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="graficos-section">
        <div class="container">
            <h2 class="centralized-title">Adesão de Sistemas Integrados no Último Ano</h2>
            <div class="row">
                <div class="col-md-6">
                    <canvas id="graficoComercial"></canvas>
                </div>
                <div class="col-md-6">
                    <canvas id="graficoIndustrial"></canvas>
                </div>
            </div>
        </div>
    </div>


    <div data-aos="fade-in">
        <div class="cta-section">
            <div class="container">
                <h2>Impulsione seu negócio com nossa expertise</h2>
                <p>Desenvolvemos soluções de software personalizadas para atender às suas necessidades.</p>
                <a href="https://www.instagram.com/trysystems.so/" class="cta-button" target="_blank">Acessar redes sociais</a>
            </div>
        </div>
    </div>

    <div id="confirmationCard" style="display: none;"></div>

    <div data-aos="fade-in">
        <div class="contact-form" id="contato">
            <div class="container">
                <h2>Entre em Contato</h2>
                <form>
                    <input type="text" placeholder="Nome">
                    <input type="email" placeholder="E-mail">
                    <textarea placeholder="Mensagem"></textarea>
                    <button type="submit" class="cta-button">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <div data-aos="fade-in">
        <div class="testimonial-section">
            <div class="container">
                <h2>O que nossos clientes dizem</h2>
                <div class="row">
                    <div class="col-md-4 testimonial">
                        <p>"A Try Systems entregou um sistema de alta qualidade que transformou nossa empresa. Altamente recomendado!"</p>
                    </div>
                    <div class="col-md-4 testimonial">
                        <p>"Equipe profissional e dedicada. Eles compreenderam nossas necessidades e superaram nossas expectativas."</p>
                    </div>
                    <div class="col-md-4 testimonial">
                        <p>"Excelente serviço ao cliente. Sempre disponíveis para responder às nossas perguntas e resolver problemas rapidamente."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2023 Try Systems - Desenvolvimento de Sistemas</p>
    </div>

    <script>
        const ctxComercial = document.getElementById('graficoComercial').getContext('2d');
        const graficoComercial = new Chart(ctxComercial, {
            type: 'line',
            data: {
                labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                datasets: [{
                    label: 'Adesão no Comercial',
                    data: [12, 19, 3, 5, 2, 3, 15, 8, 5, 10, 6, 12],
                    backgroundColor: 'rgba(6, 79, 36, 0.2)',
                    borderColor: 'rgba(6, 79, 36, 1)',
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const ctxIndustrial = document.getElementById('graficoIndustrial').getContext('2d');
        const graficoIndustrial = new Chart(ctxIndustrial, {
            type: 'line',
            data: {
                labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                datasets: [{
                    label: 'Adesão no Industrial',
                    data: [5, 10, 5, 2, 20, 18, 12, 17, 25, 22, 19, 24],
                    backgroundColor: 'rgba(6, 79, 36, 0.2)',
                    borderColor: 'rgba(6, 79, 36, 1)',
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>


</body>

</html>