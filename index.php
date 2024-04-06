<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $mailTo = "augusto210907@duck.com";
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    $mensagem_nome = "$nome $sobrenome\n$mensagem";

    $headers = "From: $email";
    
    if (mail($mailTo, $assunto, $mensagem_nome, $headers)){
      echo '<script>
      alert("Mensagem enviada !")
      </script>';
    }

    else{
        echo '<script>
        alert("Ocorreu um erro no envio da mensagem !")
        </script>';
    }
}
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="Dra. Ivone Pereira de Sousa, advogada em Francisco Morato, SP. Especializada em Direito Civil, Direito Trabalhista, Direito Previdenciário e Direito de Família." />
  <title>
    Dra. Ivone Pereira de Sousa | Advocacia e Assistência Jurídica em
    Francisco Morato, SP
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

  <script defer src="./assets/js/script.js"></script>

  <link rel="icon" href="./assets/images/logo_nobg.png" />

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <link rel="stylesheet" type="text/css" href="./assets/styles/style.css" />
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-smooth-scroll="true" class="position-relative">

  <div class="spinner-wrapper">
    <div class="spinner-border" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>


  <!-- NAVBAR -->
  <nav id="navbar" class="navbar navbar-expand-lg sticky-lg-top text-center" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand d-none d-lg-block ms-5" href="./index.html" style="width: 23%;">
        <img id="logo-lg" class="img navbar-brand d-none d-lg-block" src="./assets/images/logo_adv.png"
          alt="Dra. Ivone Pereira de Sousa Francisco Morato SP" width="100%" /></a>


      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <a class="navbar-brand" href="#navbar">
          <img class="" src="./assets/images/logo_adv.png" alt="" style="width: 80%" />
        </a>
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse mt-2 text-center" id="navbarSupportedContent">
        <ul class="navbar-nav nav-underline nav-fill mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="#inicio">início</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#quemsomos">quem somos</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#services">áreas de atuação</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#contato">contato</a>
          </li>
        </ul>

        <div class="social-icon mt-lg-0 mt-xl-0 mt-xxl-0 mt-md-2 mt-4 mx-xxl-5 mx-xl-5 mx-lg-5 mx-0">
          <a class="me-0" href="https://wa.me/11950728490" target="_blank">
            <i class="bi bi-whatsapp"></i></a>
          <a class="me-0" href=""><i class="bi bi-instagram"></i></a>
          <a class="me-0" href=""><i class="bi bi-facebook"></i></a>
          <a class="me-0"
            href="mailto:ivone.shiniti@adv.oabsp.org.br?subject=Contato%20Dra.%20Ivone%20Pereira%20de%20Sousa&body=Ol%C3%A1%2C%0A%0AGostaria%20de%20entrar%20em%20contato%20para%20mais%20informa%C3%A7%C3%B5es.%0A%0AAtenciosamente%2C%0ANome%20Completo"
            target="_blank"><i class="bi bi-envelope-fill"></i></a>
        </div>
      </div>
    </div>
  </nav>

  <!-- HERO SECTION -->
  <section id="inicio" class="hero d-flex align-items-center text-center">
    <div class="container">
      <div class="row">
        <div class="col-12 align-items-center">
          <h1 class="display-5 fw-semibold" data-aos="fade-down" data-aos-delay="200" data-aos-duration="800">
            ADVOCACIA COM EXCELÊNCIA E COMPROMISSO
          </h1>
          <h4 class="h4" data-aos="fade-up" data-aos-delay="300">
            Comprometidos com a excelência em cada detalhe do seu caso
          </h4>
          <p class="subtitle" data-aos="fade-up" data-aos-delay="300">ATUAMOS PRINCIPALMENTE EM DIREITO CIVIL,
            REALIZANDO <strong>PRISÃO CIVIL</strong>, ALÉM DE
            PREVIDENCIÁRIO,
            <strong>SOLICITANDO SEU BENEFÍCIO</strong>
          </p>
          <a href="https://wa.me/11950728490" data-aos="fade-up" data-aos-delay="350"
            class="btn btn-outline-light me-3">ENVIE SEU CASO</a>
          <a href="#services" data-aos="fade-up" data-aos-delay="350" class="btn btn-outline-light">VEJA NOSSAS
            ESPECIALIDADES</a>
        </div>
      </div>
    </div>
  </section>

  <!-- QUEM SOMOS -->

  <section id="quemsomos" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
          <div class="section-title">
            <h1 class="display-4 fw-semibold">Sobre a Advogada</h1>
            <div class="line"></div>
            <p>
              Descubra a Excelência Jurídica em Francisco Morato com uma
              Parceira Determinada na Defesa dos seus Direitos:<br />
              Dra. Ivone Pereira de Sousa
            </p>
          </div>
        </div>

        <div class="col-lg-6">
          <img src="./assets/images/quemsomos.jpg" class="img-thumbnail ms-5" data-aos="fade-down" data-aos-delay="50"
            alt="" style="width: 80%" />
        </div>

        <div class="col-lg-5" data-aos="fade-down" data-aos-delay="150">
          <h1 class="display-5 mt-4 mt-sm-4 mt-md-4 mt-lg-0 mt-xl-0 mt-xxl-0">
            Dra. Ivone Pereira<br />
            de Sousa
          </h1>
          <p>OAB/SP nº 437.365<br /><br /></p>
          <p class="about_us">
            Nossa missão é fornecer orientação jurídica sólida e personalizada
            para nossos clientes. Com um compromisso inabalável com a
            excelência, dedicamo-nos a oferecer serviços jurídicos abrangentes
            e eficazes, sempre com o mais alto padrão de profissionalismo e
            ética.<br /><br />
          </p>
          <p class="about_us">
            Atuando nas Áreas Cível, Trabalhista, Previdenciário, Família e
            Sucessões e Empresarial.<br /><br />
          </p>
          <p class="about_us">
            Membro da OAB - Subseção 249 de Francisco Morato SP.<br /><br />
          </p>
          <p class="about_us">
            Estamos comprometidos em sempre oferecer um serviço de excelência
            para nossos clientes. Se você precisa de assistência jurídica
            confiável e eficaz em Francisco Morato, SP, entre em contato
            conosco hoje mesmo para uma consulta inicial. Estamos aqui para
            ajudar a aliviar o fardo legal e guiá-lo em direção a um futuro
            mais promissor.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ÁREAS DE ATUAÇÃO -->

  <section id="services" class="section-padding border-top">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <div class="section-title" data-aos="fade-down" data-aos-delay="50">
            <h1 class="display-4 fw-semibold">Áreas de Atuação</h1>
            <div class="line"></div>
            <p>
              Áreas de Atuação em Direito Cível, Trabalhista, Previdenciário e
              Família e Sucessões.
            </p>
          </div>
        </div>
      </div>

      <div class="row g-xxl-5 g-xl-5 g-lg-5 g-md-4 g-3">
        <div class="col-lg-2"></div>
        <div class="col-lg-4 col-sm-6 justify-content-center text-center">
          <div class="service theme-shadow p-lg-5 p-4 h-100 d-flex flex-column" data-aos="fade-down"
            data-aos-delay="150">
            <div class="iconbox">
              <i class="bi bi-building-fill" style="font-size: 45px"></i>
            </div>
            <h5 class="mt-4 mb-3">DIREITO CÍVEL</h5>
            <ul class=" ">
              <li>Indenização por Danos Morais</li>
              <li>Revisional de Contratos</li>
              <li>Direito do Consumidor</li>
              <li class="fw-bold">Prisão Civil</li>
            </ul>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 text-center">
          <div class="service theme-shadow p-lg-5 p-4 h-100 d-flex flex-column" data-aos="fade-down"
            data-aos-delay="250">
            <div class="iconbox">
              <i class="bi bi-briefcase-fill" style="font-size: 45px;"></i>
            </div>
            <h5 class="mt-4 mb-3">DIREITO TRABALHISTA</h5>
            <ul class=" ">
              <li>Assédio Moral no Trabalho</li>
              <li>Reclamatória Trabalhista</li>
              <li class="fw-bold">Acidente de Trabalho</li>
              <li>Rescisão Indireta</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2"></div>

        <div class="col-lg-2"></div>
        <div class="col-lg-4 col-sm-6 text-center">
          <div class="service theme-shadow p-lg-5 p-4 h-100 d-flex flex-column" data-aos="fade-down"
            data-aos-delay="350">
            <div class="iconbox">
              <i class="bi bi-safe-fill" style="font-size: 45px;"></i>
            </div>
            <h5 class="mt-4 mb-3">DIREITO PREVIDENCIÁRIO</h5>
            <ul class=" ">
              <li>Aposentadoria por Tempo de Contribuição</li>
              <li>Revisão de Aposentadoria</li>
              <li>Pensão por Morte</li>
              <li class="fw-bold">Auxílio-Doença</li>
            </ul>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 text-center">
          <div class="service theme-shadow p-lg-5 p-4 h-100 d-flex flex-column" data-aos="fade-down"
            data-aos-delay="450">
            <div class="iconbox">
              <i class="bi bi-person-standing" style="font-size: 45px"></i>
              <i class="bi bi-person-standing-dress" style="font-size: 45px"></i>
            </div>
            <h5 class="mt-4 mb-3">DIREITO DE FAMÍLIA</h5>
            <ul class=" ">
              <li class="fw-bold">Inventário e Partilha de Bens</li>
              <li>Guarda Compartilhada</li>
              <li>Pensão Alimentícia</li>
              <li>Divórcio Amigável</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2"></div>
      </div>
    </div>
  </section>

  <!-- CONTATO -->

  <section id="contato" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <div class="section-title" data-aos="fade-down" data-aos-delay="50">
            <h1 class="display-4 fw-semibold">Fale Conosco</h1>
            <div class="line"></div>
            <p>
              Utilize o formulário abaixo para nos enviar suas consultas. Nossa equipe está à disposição para fornecer
              orientação jurídica de qualidade e teremos o prazer de ajudá-lo.
            </p>
          </div>
        </div>
      </div>

      <div class="row justify-content-center" data-bs-theme="dark" data-aos="fade-down" data-aos-delay="150">
        <div class="col-lg-8">
          <form method="POST" class="row g-3 p-lg-5">
            <div class="col-lg-6 form-floating">
              <input type="text" name="nome" class="form-control" id="floatingInput" placeholder="Insira Primeiro Nome"
                required />
              <label class="ms-1" for="floatingInput">
                <p>Insira Primeiro Nome*</p>
              </label>
            </div>

            <div class="col-lg-6 form-floating">
              <input type="text" name="sobrenome" class="form-control" id="floatingInput"
                placeholder="Insira Sobrenome" />
              <label class="ms-1" for="floatingInput">
                <p>Insira Sobrenome</p>
              </label>
            </div>

            <div class="col-lg-12 form-floating">
              <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                required />
              <label class="ms-1" for="floatingInput">
                <p>Insira seu E-mail*</p>
              </label>
            </div>

            <div class="col-lg-12 form-floating">
              <input type="text" name="assunto" class="form-control" id="floatingInput" placeholder="Assunto"
                required />
              <label class="ms-1" for="floatingInput">
                <p>Assunto*</p>
              </label>
            </div>

            <div class="col-lg-12 form-floating">
              <textarea name="mensagem" class="form-control" placeholder="Insira seu Comentário" id="floatingTextarea"
                required></textarea>
              <label class="ms-1" for="floatingTextarea">
                <p>Insira seu Comentário*</p>
              </label>
            </div>

            <div class="col-lg-12 d-grid">
              <input class="btn rounded mb-5" type="submit" value="Enviar Mensagem" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->

  <footer>
    <div class="footer-top border-bottom">
      <div class="container">
        <div class="row gy-5">
          <div class="col-lg-3 col-sm-6 text-center" data-aos="fade-down" data-aos-delay="150" id="img">
            <a href="#inicio" style="width: 10%;">
              <img src="./assets/images/logo_nobg.png" class="mb-3 w-100" alt="" />
            </a>
            <h5 class="mb-2" id="nome">Dra. Ivone Pereira de Sousa</h5>
            <p class="mb-0" id="nome">Advocacia e Assistência Jurídica</p>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-down" data-aos-delay="250">
            <h5 class="">ÁREAS DE ATUAÇÃO</h5>
            <div class="line"></div>
            <ul>
              <li>
                <a href="#services">
                  <p>DIREITO CÍVIL</p>
                </a>
              </li>
              <li>
                <a href="#services">
                  <p>DIREITO DE FAMÍLIA</p>
                </a>
              </li>
              <li>
                <a href="#services">
                  <p>DIREITO PREVIDENCIÁRIO</p>
                </a>
              </li>
              <li>
                <a href="#services">
                  <p>DIREITO TRABALHISTA</p>
                </a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-down" data-aos-delay="350">
            <h5 class="">CONTATO</h5>
            <div class="line"></div>
            <ul>
              <li>
                <a href="https://maps.app.goo.gl/ho3mx9mvG3d8vypF9">
                  <p>
                    Rua João Mendes Júnior, Centro - Francisco Morato SP
                  </p>
                </a>
              </li>
              <li>
                <a href="mailto:ivone.shiniti@adv.oabsp.org.br?subject=Contato%20Dra.%20Ivone%20Pereira%20de%20Sousa&body=Ol%C3%A1%2C%0A%0AGostaria%20de%20entrar%20em%20contato%20para%20mais%20informa%C3%A7%C3%B5es.%0A%0AAtenciosamente%2C%0ANome%20Completo"
                  target="_blank">
                  <p>ivone.shiniti@adv.oabsp.org.br</p>
                </a>
              </li>
              <li>
                <a href="https://wa.me/5511950728490">
                  <p>(11) 95072-8490</p>
                </a>
              </li>
            </ul>
          </div>

          <div id="footer" class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-down" data-aos-delay="450">
            <a href=""></a>
            <p style="text-align: justify;">
              Conecte-se conosco para obter assistência jurídica de excelência e ficar por dentro de nossos serviços.
            </p>
            <div class="social-icons">
              <a href="https://wa.me/11950728490" class="me-3"><i class="bi bi-whatsapp"></i></a>
              <a href="" class="me-3"><i class="bi bi-instagram"></i></a>
              <a href="" class="me-3"><i class="bi bi-facebook"></i></a>
              <a class=""
                href="mailto:ivone.shiniti@adv.oabsp.org.br?subject=Contato%20Dra.%20Ivone%20Pereira%20de%20Sousa&body=Ol%C3%A1%2C%0A%0AGostaria%20de%20entrar%20em%20contato%20para%20mais%20informa%C3%A7%C3%B5es.%0A%0AAtenciosamente%2C%0ANome%20Completo"
                target="_blank"><i class="bi bi-envelope-fill"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-auto">
            <p>Copyright © 2024. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Botão do WhatsApp -->

  <a class="whatsapp-btn" href="https://wa.me/11950728490" target="_blank">
    <i class="bi bi-whatsapp"></i>
  </a>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="./assets/js/main.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>