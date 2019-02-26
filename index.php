<?php
// define variables and set to empty values
$nameErr = $emailErr = $telErr = $msgErr = "";
$name = $email = $tel = $comment = $msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Nome é obrigatório";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "E-mail é obrigatório";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["tel"])) {
    $telErr = "Telefone para contato é obrigatório";
  } else {
    $tel = test_input($_POST["tel"]);
  }

  if (empty($_POST["message"])) {
    $msgErr = "Mensagem é obrigatória";
  } else {
    $msg = test_input($_POST["message"]);
  }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Rodrigo Ross">
  <meta name="keywords" content="awati">
  <meta name="keywords" content="sucupira">
  <meta name="keywords" content="sucupira">
  <meta name="keywords" content="computação em nuvem, consultoria, outsourcing, implantações, TI">
  <meta name="description" content="Awati tecnologia planejada, &eacute; uma empresa de TI que opera em Cuiab&aacute;/V&aacute;rzea Grande, prestando servi&ccedil;os de consultoria, outsourcing e implanta&ccedil;&otilde;es para empresas nas mais diversos ramos de trabalho.">
  <link rel="icon" type="imagem/png" href="img/icons/favicon.png" />

  <title>Awati - Tecnologia planejada</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
    rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
    rel='stylesheet' type='text/css'>

  <!-- Plugin CSS 
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">-->

  <!-- Custom styles and scripts for this template -->
  <link href="css/awati.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <img src="img/icons/brand-coloridoo.png">
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#products">Produto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item hvr-underline-reveal">
            <a href="https://awati.com.br/otrs/customer.pl" class="nav-link">AwatiDesk</a>
          </li>
          <li class="nav-item hvr-underline-reveal">
            <a href="#PortalVirti" class="nav-link">Virti</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-10 mx-auto mt-5">
          <h1 class="text-uppercase">
            <strong>REDUZA CUSTOS COM SUPORTE E FORNECEDORES: CONHEÇA O COMPUTADOR POR ASSINATURA.</strong>
          </h1>
          <hr>
        </div>
        <div class="col-lg-8 mx-auto">
          <p class="text-faded mb-5">Aumente a competitividade da sua empresa, sem aumentar seus custos!</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#virti">Saiba Mais</a>
        </div>
      </div>
    </div>
  </header>

  <section class="bg-primary" id="about">
    <div class="container">
      <div class="row  text-center">
        <div class="col-lg-8 mx-auto">
          <h2 class="section-heading text-white">Awati</h2>
          <hr class="dark my-4">
          <p class="text-justify ident mb-4 text-faded">Desde 2010, oferecemos soluções personalizadas aos nossos
            clientes, através de um
            diagnóstico preciso das necessidades, propondo ações precisas e integradas para cada um. Idealizamos,
            planejamos e implantamos projetos que trazem resultados reais e definitivos.</p>
          <p class="text-justify mb-4 ident text-faded"> Somos a alta produtividade de uma maneira simples. Somos a
            forma mais
            inteligente de utilizar a tecnologia. Somos a Awati. E somos o parceiro que você precisa para virtualizar
            desktops, com segurança, qualidade e alto desempenho.</p>
          <p class="texte-justify mb-4 ident text-faded">Reconhecidos pelo mercado e valorizados pelos clientes,
            lançamos o virti:
            uma nova forma de usar computadores.</p>
        </div>
        <div class="col-lg-8 mx-auto text-white">
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Olha o que fazemos</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Serviços -->
  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">Nossos serviços</h2>
          <hr class="my-4">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-eye text-primary mb-3 sr-icon-4"></i>
              <h3 class="mb-3">Análise</h3>
              <p class="text-muted mb-0">Realizamos a análise da sua infraestrutura assim como projetos de implantação.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <i class="fas fa-4x fa-search text-primary mb-3 sr-icon-3"></i>
            <h3 class="mb-3">Consultoria</h3>
            <p class="text-muted mb-0">Realizamos projetos de consultoria para a sua empresa mostrando a melhor opção técnológica disponivel atualmente.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-building text-primary mb-3 sr-icon-2"></i>
              <h3 class="mb-3">Implantações</h3>
              <p class="text-muted mb-0">Acompanhamos desde a análise do seu problema até a implantação final do projeto próprio para sua empresa.</p>
            </div>
          </div>
      </div>
    </div>
  </section>

  <!--Produto-->
  <section class="bg-secondary" id="products">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading text-white">Virti</h2>
          <hr class="my-4">
          <p class="text-faded mb-4">Apresentamos então uma nova solução para todas as empresas.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#comparativo">Compare</a>
        </div>
      </div>
    </div>
  </section>

  <!--Virti-->
  <section class="p-4" id="virti">
    <div class="row">
      <div class="col-lg-8 mx-auto mb-5">
        <h3 class="section-heading text-center">O que é?</h3>
        <hr class="my-4">
        <p class="text-justify ident">O Virti é um serviço de virtualização de desktop. Isso
          significa que não é necessário mais um computador para acessar arquivos, dispositivos, aplicativos e dados
          que estejam em Nuvem. Uma ferramenta que diminui os custos, aumenta a produtividade e atende a necessidade
          especifica de cada pessoa/empresa. Além de proporcionar mobilidade e segurança total.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h3 class="section-heading text-center">Como funciona?</h3>
        <hr class="my-4">
        <p class="text-justify ident "></p>
      </div>
    </div>
    <div class="row mb-5">
      <img src="img/bg/como-funciona.jpg" alt="Passo a Passo" class="col-lg-12">
    </div>

    <div class="row mb-5">
      <div class="col-lg-8 mx-auto">
        <h3 class="section-heading text-center">Para quem fazemos?</h3>
        <hr class="my-4">
        <p class="text-justify ident">É importante destacar que o Virti é para todos os tipos e tamanhos de empresas, públicas ou privadas, e, inclusive, profissionais autônomos. 
          Antes de tudo, ele é uma solução para quem quer gastar menos com computadores e ganhar mais em recursos. Como o sistema e as ferramentas são flexíveis, proporcionam alto rendimento com baixo custo de implantação.</p>
        <p class="text-justify ident">Cheque ai para quem recomendamos nossa solução:</p>  
        <ul class="portfolio">
          <li class="ml-3 viavel">Empresas que estão iniciando as atividades - menor patrimônio, menos riscos.</li>
          <li class="ml-3 viavel">Empresas que têm projetos com tempo determinados (temporários).</li>
          <li class="ml-3 viavel">Empresas que estão trocando/adquirindo computadores.</li>
          <li class="ml-3 viavel">Empresas que precisam de computadores, mas fazem uso reduzido deste (menos horas).</li>
          <li class="ml-3 viavel">Empresas de crescimento rápido/Startups.</li>
          <li class="ml-3 viavel">Instituições filantrópicas (sem fins lucrativos).</li>
          <li class="ml-3 viavel">Instituições de ensino, públicas e particulares.</li>
          <li class="ml-3 viavel">Empresas públicas.</li>
          <li class="ml-3 viavel">Franquias.</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="bg-primary" id="beneficios">
    <div class="container text-white">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="text-white">Beneficios</h2>
          <hr class="dark">
          <p class="text-center text-faded mb-5">Nós buscamos trazer o melhor e incorporar a agilidade e a velocidade que o mercado anda, pare de perder tempo e dinheiro implantando um serviço caro e com necessidade de manutenção periodica.</p>
          <a id="btn-ben" href="#lista-beneficios" class="btn btn-secondary btn-xl" onclick="lista('show')">Olha só algumas das vantagens!</a>
        </div>
      </div>
      <div class="row nSelecionado" id="lista-beneficios">
        <div class="col-lg-8 mx-auto">
          <p class="ident text-justify mb-2 text-faded">Nós buscamos trazer o melhor e incorporar a agilidade e a velocidade que o mercado anda, pare de perder tempo e dinheiro implantando um serviço caro e com necessidade de manutenção periodica.</p>
          <p class="ident text-justify mb-2 text-faded">Olha só algumas das vantagens de adquirir o Virti:</p>
          <ul class="mb-5"> 
            <li class="ml-4 viavel text-white">Receptores de baixo custo.</li>
            <li class="ml-4 viavel text-white">Diminui problemas.</li>
            <li class="ml-4 viavel text-white">Pague somente o que usar.</li>
            <li class="ml-4 viavel text-white">Gerenciamento centralizado atraves do portal gerencie tudo com poucos cliques faça o trabalho de mil!</li>
            <li class="ml-4 viavel text-white">Menor custo de propriedade.</li>
            <li class="ml-4 viavel text-white">Suporte totalmente em portugues brasileiro.</li>
            <li class="ml-4 viavel text-white">Economiza energia.</li>
            <li class="ml-4 viavel text-white">Ecologico.</li>
            <li class="ml-4 viavel text-white">Pare de apagar incêndio e comece a planejar diminuição do custo operacional.</li>
            <li class="ml-4 viavel text-white">Tecnologia nacional, que emprega brasileiros, ajudamos a girar a economia local.</li>
          </ul>
          <div class="text-center">
            <a href="#beneficios" class="btn btn-secondary btn-xl" onclick="lista('hide')">Mostrar Menos ...</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Comparativo -->
  <section id="comparativo">
    <div class="container" id="vantagens">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading">Compare</h2>
          <hr class="my-4">
          <p class=" text-justify ident mb-3">Os beneficios de utilizar o Virti são vários, mas porque você não dá uma olhada nas diferenças da linha Virti. Clique nos diferentes produtos e compare o que cada um acresce a sua empresa :D</p>
        </div>
      </div>
      <div class="row" id="superior">
        <div class="vantagem float-left hvr-sweep-to-right mx-auto col-lg-6" id="v1">
          <h2 id="aga1" class="display-2 text-center" onclick="vantagem('v1','info1')">virti.cloud</h2>
          <div class="nSelecionado" id="info1">
            <p class="ident text-center mx-auto">A awati se preocupa com...</p>
            <li class="viavel">Todos os beneficios do virti.local.</li>
            <li class="viavel">Mais seguro que o virti.local.</li>
            <li class="viavel">Computador como serviço / computador por assinatura.</li>
            <li class="viavel">Recuperação de desastres</li>
            <li class="viavel">Manutenções mais rápidas - Formatar computador ficou no passado menos tempo parado.</li>
            <li class="viavel">Maior facilidade na aquisição não gaste todo seu caixa comprando computadores.</li>
            <li class="viavel">Diminuição drástica na depreciação não fica obsoleto tenha um computador virtual novo
              quando quiser sem ter que comprar um novo equipamento.</li>
          </div>
        </div>
        <div class="vantagem float-left hvr-sweep-to-left mx-auto col-lg-6" id="v2">
          <h2 id="aga2" class="display-2 text-center" onclick="vantagem('v2','info2')">virti.dash</h2>
          <div class="nSelecionado" id="info2">
            <p class="ident text-center mx-auto">A awati se preocupa com...</p>
            <div class="lista">
              <ul>
                <li class="viavel">Receptores pequenos,discretos e silenciosos.</li>
                <li class="viavel">Ativação rápida.</li>
                <li class="viavel">Imune a vírus.</li>
                <li class="viavel">Mude configurações de varios dispositivos simultaneamente.</li>
                <li class="viavel">Gerenciamento simples.</li>
                <li class="viavel">Segurança</li>
                <li class="viavel">Padronização do ambiente.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row" id="inferior">
        <div class="vantagem float-left hvr-sweep-to-right mx-auto col-lg-6" id="v3">
          <h2 id="aga3" class="display-2 text-center" onclick="vantagem('v3','info3')">virti.eco</h2>
          <div class="nSelecionado" id="info3">
            <p class="ident text-center mx-auto">A awati se preocupa com...</p>
            <div class="lista">
              <ul>
                <li class="viavel">Ativação rápida.</li>
                <li class="viavel">Não pague por serviço ocioso (desligamos os recursos quando não há necessidade).</li>
                <li class="viavel">Faça mais pagando menos.</li>
                <li class="viavel">A tecnologia usada em grandes corporações ao alcance da sua empresa. Sua empresa
                  pode usar a tecnologia do futuro (cloud).</li>
                <li class="viavel">Somos mais baratos por temos a solução mais inteligente.</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="vantagem float-left hvr-sweep-to-left mx-auto col-lg-6" id="v4">
          <h2 id="aga4" class="display-2 text-center" onclick="vantagem('v4','info4')">virti.local</h2>
          <div class="nSelecionado" id="info4">
            <p class="ident text-center mx-auto">A awati se preocupa com...</p>
            <div class="lista">
              <ul>
                <li class="viavel">Receptores pequenos,discretos e silenciosos.</li>
                <li class="viavel">Muito mais seguro que computador.</li>
                <li class="viavel">Padronização do ambiente.</li>
                <li class="viavel">Multi sessão.</li>
                <li class="viavel">Backup mais fácil.</li>
                <li class="viavel">Manutenções mais rápidas Formatar computador ficou no passado menos tempo parado.</li>
                <li class="viavel">Maior facilidade na aquisição não gaste todo seu caixa comprando computadores.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Contato-->
  <section id="contact" class="bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading">Entre em contato</h2>
          <hr class="my-4">
          <p class="mb-0">Se interessou pelos nosso trabalho e quer fazer um orçamento, entre em contato conosco, que
            iremos retornar o mais breve possivel, ou entre em contato atráves de uma ligação!</p>
        </div>
      </div>
      
      <!--Formulario-->
      <div class="row mb-5">
          <form class="formulario box" name="formContato" method="POST" action="formulario.php" onsubmit="return(validate());">
              <div class="form-row">
                <div class="col-sm-6">
                  <div class="form-group">
                  <label class="col-5 col-form-label" for="nome">Nome Completo</label>
                  <input type="text" class="form-control form-control-lg" placeholder="Seu nome" name="name" id="name" data-toggle="tooltip" data-placement="bottom" title="Por favor, insira o seu nome!" data-trigger="manual">
                  </div>
                  <div class="form-group">
                    <label class="col-5 col-form-label" for="mail">E-mail</label>
                      <input type="email" class="form-control form-control-lg" placeholder="nome@exemplo.com" name="email" id="mail" data-toggle="tooltip" data-placement="bottom" title="Por favor, insira o seu e-mail!" data-trigger="manual">
                  </div>
                  <div class="form-group">
                    <label class="col-5 col-form-label" for="tel">Telefone</label>
                    <input type="tel" class="form-control form-control-lg" placeholder="Contato" name="tel" id="tel" minlength="8" maxlength="14">
                  </div>
                  <small id="infoHelp" class="form-text text-muted text-right">Suas informações serão mantidas em sigilo e não serão distribuidas!</small>
                </div>
                <div class="col-sm-6">
                          <div class="form-group">
                            <label class="col-5 col-form-label" for="mensagem">Fale conosco</label>
                            <textarea class="form-control form-control-lg" name="message" id="mensagem" rows="8" placeholder="Sua mensagem aqui!" data-toggle="tooltip" data-placement="bottom" title="Mensagem obrigatória" data-trigger="manual" required></textarea>
                          </div>
                </div>
              </div>
              <div class="text-center mt-4">
                <button type="submit" class="btn btn-outline btn-lg btn-block">Enviar</button>
                <span class="sr-only">Enviar</span>
              </div>
            </form>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center">
          <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
          <p>55 65 9 8451-0367</p>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
          <p>
            <a href="mailto:comercial@awati.com.br">contato@awati.com.br</a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <div class="container-fluid col-lg-12 bg-dark">
      <div class="row">
          <div class="text-center mx-auto">
              <div class="cpright">
                  <small>© Rodrigo Ross - 2018</small>
              </div>
          </div>
        </div>
  </div>
  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>
  <script src="js/script.js"></script>

</body>

</html>