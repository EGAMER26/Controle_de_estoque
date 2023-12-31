<?php
    session_start();
    print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_session['email']);
        unset($_session['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];

?>



<!DOCTYPE html>
<html lang = "pt-BR">
  <head>
    <meta charset    = "UTF-8" />
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge" />
    <meta name       = "viewport" content        = "width=device-width, initial-scale=1.0" />
    <link
      rel  = "stylesheet"
      href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>legalite</title>
    <link rel="stylesheet" href="style.css">
    <link rel = "preconnect" href = "https://fonts.googleapis.com" />
    <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin />
    <link
      href = "https://fonts.googleapis.com/css2?family=Martel:wght@700&display=swap"
      rel  = "stylesheet"
    />
    <link rel = "preconnect" href = "https://fonts.googleapis.com" />
    <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin />
    <link
      href = "https://fonts.googleapis.com/css2?family=Open+Sans&display=swap"
      rel  = "stylesheet"
    />
    <link rel  = "preconnect" href                                                   = "https://fonts.googleapis.com">
    <link rel  = "preconnect" href                                                   = "https://fonts.gstatic.com" crossorigin>
    <link href = "https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel = "stylesheet">
    <link rel  = "stylesheet" href                                                   = "https://use.fontawesome.com/releases/v5.4.1/css/all.css">

  </head>
  <body style="display: initial;" onscroll = "all()">
  <nav  id       = "navigation">
  <a    onclick  = "closeMenu()" href            = "#">
  <img  width="110" height="70" src      = "assets/logo.png" alt = "logo legalide" />
      </a>

      <ul id="nav_ul" style="padding-right: 28;">
        <li><a onclick = "menuShoww()" href = "#" class = "active">Início</a></li>
        <li>
          <a onclick = "menuShoww()" id = "aproduct" href = "#product">Produtos</a>
        </li>
        <li><a onclick = "menuShoww()" id = "aabout" href = "#about">Sobre</a></li>
        <li>
          <a onclick = "menuShoww()" id = "acontact" href = "#contact">Contatos</a>
        </li>
      </ul>
      <a class = "navSB" href = "http://localhost:8080/cadastro/listagem_carrinho.php"
        ><img
          src = "assets/icn shopping-cart .icn-xs.png"
          alt = "icone carrinho de compra"
          /></a>
          <?php
             echo "<p class=\"logado\">$logado</p>";
          ?>
          <div class   = "menu-btn">
          <i   onclick = "menuShoww()"><img src = "assets/icn menu .icn-xs.png" /></i>
          </div>
          <button class="buttonGetOut"><a href="sair.php">SAIR</a>
            
          </button>

          
        </nav>
        
    
    <header>
      <div class       = "deskContant headertop">

        <h1>
          Conheça a melhor loja <span class="span_vermelho">de</span> calçados!
        </h1>
        <p>
          Bem-vindo à nossa loja! Oferecemos uma grande variedade de calçados para homens, mulheres e crianças.
        
        </p>
        
      </div>
<div class = "picture">

    <img   src    = "assets/tenisLogo.png" class       = "moca" alt = "tenis" />
</div>
    </header>
    <main    id    = "product">
    <section class = "practice">
        <h2 style="color:white;">
          Principais marcas
        </h2>
        
        <div class = "cards">
        <div class = "card">
        <img width="100" src   = "assets/Logo_NIKE.svg.png" alt = "pendulo" /><a
             href  = ""
              ></a
            >
          </div>
          <div class = "card2">
          <img width="100" src   = "assets/logo-puma-icon.png" alt = "martelo da corte" /><a href = ""
              ></a
            >
          </div>
          <div class = "card">
          <img width="100" src   = "assets/logo_adidass.png" alt = "prancheta" /><a href = ""
              ></a
            >
          </div>
        </div>
      </section>
      <section class = "advice">
        <h2>
          Mais comprados
        </h2>
        <p>
         
           
        </p>

    <div id="cartoesTenis">
    <div class="productt" id="produto1">
    <img src="assets/tenis1.png" alt="Tênis 1">
    <h3>Nike</h3>
    <p>Air Force 1</p>
    <p>Preço: R$ 799,00</p>
    <form name="prod1" method="post" action="">
        <!-- Valores do produto -->
        <input type="hidden" name="nome_produtoo" value="Air Force 1">
        <input type="hidden" name="preco_produto" value="799.00">
        <input type="hidden" name="preco_total" value="799.00">
        

        <!-- Quantidade -->
        
        <input type="hidden" name="quantidade_produto" id="quantidade" value="1" min="1">

        <!-- id seção -->
        <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['email'];?>">

        <!-- Botão "adicionar ao carrinho" -->
        <input type="submit" name="adicionar_carrinho" id="input_add_item_carrinho" value="Adicionar ao carrinho" onclick="document.prod1.action='cadastrar_prod_carrinho.php'">
    </form>
</div>

    <div class="productt" id="produto1">
    <img src="assets/tenis2.png" alt="Tênis 1">
    <h3>Nike</h3>
    <p>Legend Essential</p>
    <p>Preço: R$ 299,00</p>
    <form name="prod2" method="post" action="">
        <!-- Valores do produto -->
        <input type="hidden" name="nome_produtoo" value="Legend Essential">
        <input type="hidden" name="preco_produto" value="299.00">
        <input type="hidden" name="preco_total" value="299.00">

        <!-- Quantidade -->
        
        <input type="hidden" name="quantidade_produto" id="quantidade" value="1" min="1">

        <!-- id seção -->
        <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['email'];?>">

        <!-- Botão "adicionar ao carrinho" -->
        <input type="submit" name="adicionar_carrinho" id="input_add_item_carrinho" value="Adicionar ao carrinho" onclick="document.prod2.action='cadastrar_prod_carrinho.php'">
    </form>
</div>

    <div class="productt" id="produto1">
    <img src="assets/tenis3.png" alt="Tênis 1">
    <h3>Nike</h3>
    <p>Air Zoom Vapor</p>
    <p>Preço: R$ 899,00</p>
    <form name="prod3" method="post" action="">
        <!-- Valores do produto -->
        <input type="hidden" name="nome_produtoo" value="Air Zoom Vapor">
        <input type="hidden" name="preco_produto" value="899.00">
        <input type="hidden" name="preco_total" value="899.00">

        <!-- Quantidade -->
        
        <input type="hidden" name="quantidade_produto" id="quantidade" value="1" min="1">

        <!-- id seção -->
        <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['email'];?>">

        <!-- Botão "adicionar ao carrinho" -->
        <input type="submit" name="adicionar_carrinho" id="input_add_item_carrinho" value="Adicionar ao carrinho" onclick="document.prod3.action='cadastrar_prod_carrinho.php'">
    </form>
</div>

    <div class="productt" id="produto1">
    <img src="assets/tenis4.png" alt="Tênis 1">
    <h3>Nike</h3>
    <p>Revolution 6</p>
    <p>Preço: R$ 399,00</p>
    <form name="pord4" method="post" action="">
        <!-- Valores do produto -->
        <input type="hidden" name="nome_produtoo" value="Revolution 6">
        <input type="hidden" name="preco_produto" value="399.00">
        <input type="hidden" name="preco_total" value="399.00">

        <!-- Quantidade -->
        
        <input type="hidden" name="quantidade_produto" id="quantidade" value="1" min="1">

        <!-- id seção -->
        <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['email'];?>">

        <!-- Botão "adicionar ao carrinho" -->
        <input type="submit" name="adicionar_carrinho" id="input_add_item_carrinho" value="Adicionar ao carrinho" onclick="document.pord4.action='cadastrar_prod_carrinho.php'">
    </form>

</div>

    

    <div class="productt" id="produto1">
    <img src="assets/tenis6.png" alt="Tênis 1">
    <h3>Nike</h3>
    <p>SB Zoom</p>
    <p>Preço: R$ 199,00</p>
    <form name="prod5" method="post" action="">
        <!-- Valores do produto -->
        <input type="hidden" name="nome_produtoo" value="SB Zoom">
        <input type="hidden" name="preco_produto" value="199.00">
        <input type="hidden" name="preco_total" value="199.00">

        <!-- Quantidade -->
        
        <input type="hidden" name="quantidade_produto" id="quantidade" value="1" min="1">

        <!-- id seção -->
        <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['email'];?>">

        <!-- Botão "adicionar ao carrinho" -->
        <input type="submit" name="adicionar_carrinho" id="input_add_item_carrinho" value="Adicionar ao carrinho" onclick="document.prod5.action='cadastrar_prod_carrinho.php'">
    </form>
</div>


          </div>
         
        
      </section>
       <section class = "about"></section>
       <section class = "contact"></section>
    </main>
    <section id = "about">
    <h2>Nosso Diferencial</h2>
      <p>
     
      </p>
      <div class = "container_Geral">

      <div class = "mini_Container">
  <img style="opacity: 1;"
  class = "gostoso"
  src   = "assets/vide.png"
  alt   = "chead gostoso sorrindo"
  />
      </div>
      <div class = "container_Content">

      
      <h2>As melhores condições de compra</h2>

      <p>
        
      </p>
      <div class  = "agrupador">
      <div class  = "container">
      <div class  = "img">
      <img height = "32px" src = "assets/icn settings .icn-md.png" alt = "" />
          </div>
          <div class = "text">
            <h4>
              Mais segurança na sua compra<br />
              
            </h4>
          </div>
          <div></div>
          <div class = "p">
            <p> Certificado SSL e Meios de pagamento seguros </p>
          </div>
        </div>
        <div class  = "container">
        <div class  = "img">
        <img height = "32px" src = "assets/icn settings .icn-md.png" alt = "" />
          </div>
          <div class = "text">
            <h4>
              Entregamos para todo o Brasil <br />
              
            </h4>
          </div>
          <div class = "d"></div>
          <div class = "p">
            <p>Na nossa loja, entregamos para todo o Brasil! </p><p>Isso significa que você pode fazer suas compras com tranquilidade </p>
          </div>
        </div>
      </div>
    </div>
    </div>
    </section>
    <section id = "logos">
      <picture>
        <source srcset = "assets/big_Container.png" media = "(min-width: 1024px)" >
        <img    src    = "assets/container.png" alt       = "logos">
      </picture>
      <div class = "subscribe">
        <h2>
          Subscribe For Latest <br />
          Newsletter
        </h2>

        <label for = "email">
          <input
            type         = "email"
            autocomplete = "on"
            maxlength    = "40"
            placeholder  = "Your Email"
            
            class = "subEmail"
          />
          <button>subscribe</button>
        </label>
      </div>
      <div class = "faixa"></div>
    </section>
    <section id = "contact">
      <h2>Entre em contato</h2>
      <p>
        
      </p>

      <div class = "cardsContact">
      <div class = "cardContact">
          <svg
            width   = "73"
            height  = "72"
            viewBox = "0 0 73 72"
            fill    = "none"
            xmlns   = "http://www.w3.org/2000/svg"
          >
            <g clip-path = "url(#clip0_964_13928)">
              <path
                d    = "M56.9295 38.9947C56.578 38.6426 56.1605 38.3632 55.7009 38.1726C55.2413 37.982 54.7487 37.8839 54.2511 37.8839C53.7536 37.8839 53.2609 37.982 52.8013 38.1726C52.3417 38.3632 51.9242 38.6426 51.5727 38.9947L45.534 45.0334C42.7344 44.1999 37.5102 42.3057 34.1992 38.9947C30.8881 35.6836 28.9939 30.4594 28.1605 27.6598L34.1992 21.6211C34.5513 21.2696 34.8306 20.8521 35.0212 20.3925C35.2118 19.9329 35.3099 19.4403 35.3099 18.9427C35.3099 18.4452 35.2118 17.9525 35.0212 17.4929C34.8306 17.0333 34.5513 16.6159 34.1992 16.2643L19.0456 1.11076C18.6941 0.758646 18.2766 0.479298 17.817 0.288701C17.3574 0.0981045 16.8647 0 16.3672 0C15.8696 0 15.377 0.0981045 14.9174 0.288701C14.4578 0.479298 14.0403 0.758646 13.6888 1.11076L3.41467 11.3849C1.97508 12.8245 1.16436 14.802 1.19467 16.8212C1.2818 22.2159 2.71003 40.9533 17.4772 55.7204C32.2443 70.4876 50.9817 71.912 56.3802 72.003H56.4863C58.4865 72.003 60.377 71.215 61.809 69.783L72.0831 59.5088C72.4352 59.1573 72.7146 58.7398 72.9052 58.2802C73.0957 57.8207 73.1938 57.328 73.1938 56.8304C73.1938 56.3329 73.0957 55.8402 72.9052 55.3807C72.7146 54.9211 72.4352 54.5036 72.0831 54.1521L56.9295 38.9947ZM56.4484 64.4224C51.7205 64.3428 35.544 63.0737 22.834 50.3599C10.0822 37.6081 8.84722 21.3749 8.77146 16.7417L16.3672 9.14594L26.164 18.9427L21.2656 23.8411C20.8203 24.2861 20.4929 24.835 20.313 25.4382C20.1331 26.0414 20.1063 26.68 20.2351 27.2961C20.3261 27.7318 22.5498 38.0627 28.8386 44.3515C35.1273 50.6402 45.4583 52.864 45.8939 52.9549C46.5097 53.0874 47.1489 53.0627 47.7527 52.8833C48.3565 52.7039 48.9054 52.3755 49.3489 51.9283L54.2511 47.0299L64.0479 56.8267L56.4484 64.4224Z"
                fill = "#D0A144"
              />
            </g>
            <defs>
              <clipPath id = "clip0_964_13928">
                <rect
                  width     = "72"
                  height    = "72"
                  fill      = "white"
                  transform = "translate(0.5)"
                />
              </clipPath>
            </defs>
          </svg>
          <a href = "https://mail.google.com/mail/u/0/#inbox"
            >comercial@eos.com</a
          >
          <a href = "https://mail.google.com/mail/u/0/#inbox"
            >(11) 91234-4321</a
          >
          <h4></h4>
          <button>Submit Request</button>
        </div>
        <div class = "cardContact2">
          <svg
            width   = "73"
            height  = "72"
            viewBox = "0 0 73 72"
            fill    = "none"
            xmlns   = "http://www.w3.org/2000/svg"
          >
            <path
              d    = "M29.5 42C37.4968 42 44 35.721 44 28C44 20.279 37.4968 14 29.5 14C21.5032 14 15 20.279 15 28C15 35.721 21.5032 42 29.5 42ZM29.5 21C33.4984 21 36.75 24.1395 36.75 28C36.75 31.8605 33.4984 35 29.5 35C25.5016 35 22.25 31.8605 22.25 28C22.25 24.1395 25.5016 21 29.5 21Z"
              fill = "#D0A144"
            />
            <path
              d    = "M27.4338 70.3403C28.0367 70.7693 28.7591 71 29.5 71C30.2409 71 30.9633 70.7693 31.5662 70.3403C32.6492 69.577 58.103 51.2624 57.9997 28.4002C57.9997 12.7411 45.214 0 29.5 0C13.786 0 1.00031 12.7411 1.00031 28.3825C0.897002 51.2624 26.3508 69.577 27.4338 70.3403ZM29.5 7.10006C41.2882 7.10006 50.8748 16.6532 50.8748 28.418C50.9496 44.173 35.2427 58.3199 29.5 62.9598C23.7609 58.3163 8.05042 44.1659 8.12524 28.4002C8.12524 16.6532 17.7118 7.10006 29.5 7.10006Z"
              fill = "#D0A144"
            />
          </svg>

          <a href = "https://www.google.com/maps?authuser=0"
            >Av. Antônia Rosa Fioravanti, 804</a
          >
          <a href = "https://www.google.com/maps?authuser=0"
            >Centro, Mauá - SP, 09390-120</a
          >
          <h4></h4>
          <button>Abrir no mapa</button>
        </div>
        <div class = "cardContact3">
          <svg
            width   = "73"
            height  = "72"
            viewBox = "0 0 73 72"
            fill    = "none"
            xmlns   = "http://www.w3.org/2000/svg"
          >
            <g clip-path = "url(#clip0_964_13949)">
              <path
                d    = "M70.3484 2.16199C69.9592 1.75903 69.4674 1.48003 68.9308 1.35781C68.3943 1.23558 67.8354 1.27521 67.3198 1.47202L3.8615 25.4708C3.31422 25.6867 2.84305 26.0706 2.51056 26.5716C2.17807 27.0726 2 27.6669 2 28.2756C2 28.8844 2.17807 29.4787 2.51056 29.9797C2.84305 30.4807 3.31422 30.8646 3.8615 31.0805L31.5524 42.5999L42.6287 71.3984C42.8368 71.9426 43.1935 72.4115 43.6549 72.7473C44.1162 73.0832 44.6619 73.2712 45.2248 73.2883C45.8077 73.2759 46.3733 73.08 46.847 72.7266C47.3207 72.3732 47.6804 71.8787 47.8785 71.3084L70.9542 5.31183C71.1507 4.78108 71.1981 4.20317 71.0909 3.64548C70.9836 3.08779 70.7261 2.5733 70.3484 2.16199ZM45.2248 61.8889L37.1771 40.89L50.9937 26.5207L46.9266 22.291L32.9946 36.7802L12.9187 28.2906L63.4834 9.30162L45.2248 61.8889Z"
                fill = "#D0A144"
              />
            </g>
            <defs>
              <clipPath id = "clip0_964_13949">
                <rect
                  width     = "72"
                  height    = "72"
                  fill      = "white"
                  transform = "translate(0.5)"
                />
              </clipPath>
            </defs>
          </svg>

          <a href = "https://www.instagram.com"
            >Instagram / Twitter </a
          >
          <a href = "https://www.instagram.com"
            >@eosstore_</a
          >
          <h4></h4>
          <button>Instagram</button>
        </div>
      </div>
      
    </section> 
    <footer>
      <header>
        
        <center>
          <div class = "touch">
            <h3>Contatos</h3>
            <div class = "touch1">
              <svg
                width   = "24"
                height  = "25"
                viewBox = "0 0 24 25"
                fill    = "none"
                xmlns   = "http://www.w3.org/2000/svg"
              >
                <g clip-path = "url(#clip0_964_12952)">
                  <path
                    d    = "M18.8481 12.9767C18.7367 12.8652 18.6045 12.7767 18.4589 12.7163C18.3133 12.656 18.1573 12.6249 17.9997 12.6249C17.8421 12.6249 17.686 12.656 17.5405 12.7163C17.3949 12.7767 17.2626 12.8652 17.1513 12.9767L15.2385 14.8895C14.3517 14.6255 12.6969 14.0255 11.6482 12.9767C10.5994 11.9279 9.99938 10.2731 9.73538 9.38635L11.6482 7.47357C11.7597 7.36223 11.8482 7.22998 11.9085 7.08441C11.9689 6.93883 12 6.78278 12 6.62518C12 6.46758 11.9689 6.31153 11.9085 6.16595C11.8482 6.02038 11.7597 5.88813 11.6482 5.77679L6.84821 0.976838C6.73686 0.865304 6.60462 0.776819 6.45904 0.716447C6.31347 0.656075 6.15741 0.625 5.99982 0.625C5.84222 0.625 5.68616 0.656075 5.54059 0.716447C5.39501 0.776819 5.26277 0.865304 5.15142 0.976838L1.89706 4.23121C1.44106 4.6872 1.18426 5.31359 1.19386 5.95319C1.22146 7.66197 1.67386 13.5971 6.35141 18.2747C11.029 22.9522 16.9641 23.4034 18.6741 23.4322H18.7077C19.3413 23.4322 19.9401 23.1826 20.3937 22.729L23.648 19.4747C23.7596 19.3633 23.8481 19.2311 23.9084 19.0855C23.9688 18.9399 23.9999 18.7839 23.9999 18.6263C23.9999 18.4687 23.9688 18.3126 23.9084 18.167C23.8481 18.0215 23.7596 17.8892 23.648 17.7779L18.8481 12.9767ZM18.6957 21.031C17.1981 21.0058 12.0742 20.6038 8.04819 16.5767C4.00904 12.5375 3.61784 7.39557 3.59384 5.92799L5.99982 3.52201L9.10298 6.62518L7.5514 8.17677C7.41036 8.3177 7.30665 8.49157 7.24967 8.68264C7.19268 8.87372 7.1842 9.07598 7.225 9.27115C7.2538 9.40915 7.9582 12.6815 9.95018 14.6735C11.9422 16.6655 15.2145 17.3699 15.3525 17.3987C15.5476 17.4406 15.75 17.4328 15.9413 17.376C16.1325 17.3192 16.3064 17.2151 16.4469 17.0735L17.9997 15.5219L21.1029 18.6251L18.6957 21.031Z"
                    fill = "#8EC2F2"
                  />
                </g>
                <defs>
                  <clipPath id = "clip0_964_12952">
                    <rect
                      width     = "24"
                      height    = "24"
                      fill      = "white"
                      transform = "translate(0 0.625)"
                    />
                  </clipPath>
                </defs>
              </svg>
              <a href = "#">(11) 91234-4321</a>
            </div>
            <div class = "touch2">
              <svg
                width   = "24"
                height  = "31"
                viewBox = "0 0 24 31"
                fill    = "none"
                xmlns   = "http://www.w3.org/2000/svg"
              >
                <g clip-path = "url(#clip0_964_12956)">
                  <path
                    d    = "M11.9999 18.2499C15.3089 18.2499 17.9999 15.5589 17.9999 12.2499C17.9999 8.94097 15.3089 6.25 11.9999 6.25C8.69097 6.25 6 8.94097 6 12.2499C6 15.5589 8.69097 18.2499 11.9999 18.2499ZM11.9999 9.24997C13.6544 9.24997 14.9999 10.5955 14.9999 12.2499C14.9999 13.9044 13.6544 15.2499 11.9999 15.2499C10.3455 15.2499 8.99997 13.9044 8.99997 12.2499C8.99997 10.5955 10.3455 9.24997 11.9999 9.24997Z"
                    fill = "#8EC2F2"
                  />
                  <path
                    d    = "M11.13 29.9707C11.3839 30.152 11.688 30.2494 12 30.2494C12.312 30.2494 12.6161 30.152 12.87 29.9707C13.326 29.6482 24.0434 21.9098 23.9999 12.2499C23.9999 5.63344 18.6164 0.25 12 0.25C5.38357 0.25 0.000132055 5.63344 0.000132055 12.2424C-0.0433675 21.9098 10.674 29.6482 11.13 29.9707ZM12 3.24997C16.9634 3.24997 20.9999 7.28642 20.9999 12.2574C21.0314 18.9143 14.418 24.8917 12 26.8522C9.58353 24.8902 2.9686 18.9113 3.0001 12.2499C3.0001 7.28642 7.03655 3.24997 12 3.24997Z"
                    fill = "#8EC2F2"
                  />
                </g>
                <defs>
                  <clipPath id = "clip0_964_12956">
                    <rect
                      width     = "24"
                      height    = "29.9997"
                      fill      = "white"
                      transform = "translate(0 0.25)"
                    />
                  </clipPath>
                </defs>
              </svg>
              <a href = "#">Av. Antônia Rosa Fioravanti, 804</a>
            </div>
            <div class = "touch3">
              <svg
                width   = "24"
                height  = "27"
                viewBox = "0 0 24 27"
                fill    = "none"
                xmlns   = "http://www.w3.org/2000/svg"
              >
                <g clip-path = "url(#clip0_964_12961)">
                  <path
                    d    = "M23.71 2.21646C23.575 2.07676 23.4045 1.98004 23.2185 1.93766C23.0325 1.89529 22.8388 1.90903 22.66 1.97726L0.660001 10.2973C0.470269 10.3721 0.306921 10.5052 0.191652 10.6789C0.0763829 10.8526 0.0146484 11.0586 0.0146484 11.2697C0.0146484 11.4807 0.0763829 11.6867 0.191652 11.8604C0.306921 12.0341 0.470269 12.1672 0.660001 12.2421L10.26 16.2357L14.1 26.2197C14.1721 26.4083 14.2958 26.5709 14.4557 26.6873C14.6157 26.8037 14.8049 26.8689 15 26.8749C15.2021 26.8705 15.3982 26.8026 15.5624 26.6801C15.7266 26.5576 15.8513 26.3862 15.92 26.1885L23.92 3.30846C23.9881 3.12446 24.0046 2.92411 23.9674 2.73076C23.9302 2.53742 23.8409 2.35905 23.71 2.21646ZM15 22.9229L12.21 15.6429L17 10.6613L15.59 9.19486L10.76 14.2181L3.8 11.2749L21.33 4.69166L15 22.9229Z"
                    fill = "#8EC2F2"
                  />
                </g>
                <defs>
                  <clipPath id = "clip0_964_12961">
                    <rect
                      width     = "24"
                      height    = "26"
                      fill      = "white"
                      transform = "translate(0 0.874756)"
                    />
                  </clipPath>
                </defs>
              </svg>
              <a href = "#">comercial@eos.com</a>
            </div>
          </div>
        </center>
      </header>
      <section class = "socialLinks">
        <h4>Encontre o par perfeito para cada passo na vida. Sua loja de tênis de confiança</h4>
        <ul>
          <li>
            <a href = "#"
              ><svg
                width   = "24"
                height  = "24"
                viewBox = "0 0 24 24"
                fill    = "none"
                xmlns   = "http://www.w3.org/2000/svg"
              >
                <path
                  d    = "M23.04 0H0.96C0.429 0 0 0.429 0 0.96V23.04C0 23.571 0.429 24 0.96 24H23.04C23.571 24 24 23.571 24 23.04V0.96C24 0.429 23.571 0 23.04 0ZM20.268 7.005H18.351C16.848 7.005 16.557 7.719 16.557 8.769V11.082H20.145L19.677 14.703H16.557V24H12.816V14.706H9.687V11.082H12.816V8.412C12.816 5.313 14.709 3.624 17.475 3.624C18.801 3.624 19.938 3.723 20.271 3.768V7.005H20.268Z"
                  fill = "#335BF5"
                />
              </svg>
            </a>
          </li>
          <li>
            <a href = "#"
              ><svg
                width   = "24"
                height  = "24"
                viewBox = "0 0 24 24"
                fill    = "none"
                xmlns   = "http://www.w3.org/2000/svg"
              >
                <g clip-path = "url(#clip0_964_12976)">
                  <path
                    d    = "M12.0018 5.84719C8.59683 5.84719 5.84883 8.59519 5.84883 12.0002C5.84883 15.4052 8.59683 18.1532 12.0018 18.1532C15.4068 18.1532 18.1548 15.4052 18.1548 12.0002C18.1548 8.59519 15.4068 5.84719 12.0018 5.84719ZM12.0018 15.9992C9.79983 15.9992 8.00283 14.2022 8.00283 12.0002C8.00283 9.79819 9.79983 8.00119 12.0018 8.00119C14.2038 8.00119 16.0008 9.79819 16.0008 12.0002C16.0008 14.2022 14.2038 15.9992 12.0018 15.9992ZM18.4068 4.16119C17.6118 4.16119 16.9698 4.80319 16.9698 5.59819C16.9698 6.39319 17.6118 7.03519 18.4068 7.03519C19.2018 7.03519 19.8438 6.39619 19.8438 5.59819C19.8441 5.40942 19.8071 5.22245 19.7349 5.048C19.6628 4.87354 19.557 4.71504 19.4235 4.58155C19.29 4.44807 19.1315 4.34223 18.957 4.2701C18.7826 4.19796 18.5956 4.16096 18.4068 4.16119ZM23.9958 12.0002C23.9958 10.3442 24.0108 8.70319 23.9178 7.05019C23.8248 5.13019 23.3868 3.42619 21.9828 2.02219C20.5758 0.615193 18.8748 0.180193 16.9548 0.0871931C15.2988 -0.00580693 13.6578 0.00919311 12.0048 0.00919311C10.3488 0.00919311 8.70783 -0.00580693 7.05483 0.0871931C5.13483 0.180193 3.43083 0.618193 2.02683 2.02219C0.619832 3.42919 0.184832 5.13019 0.0918317 7.05019C-0.00116826 8.70619 0.0138318 10.3472 0.0138318 12.0002C0.0138318 13.6532 -0.00116826 15.2972 0.0918317 16.9502C0.184832 18.8702 0.622832 20.5742 2.02683 21.9782C3.43383 23.3852 5.13483 23.8202 7.05483 23.9132C8.71083 24.0062 10.3518 23.9912 12.0048 23.9912C13.6608 23.9912 15.3018 24.0062 16.9548 23.9132C18.8748 23.8202 20.5788 23.3822 21.9828 21.9782C23.3898 20.5712 23.8248 18.8702 23.9178 16.9502C24.0138 15.2972 23.9958 13.6562 23.9958 12.0002ZM21.3558 19.0742C21.1368 19.6202 20.8728 20.0282 20.4498 20.4482C20.0268 20.8712 19.6218 21.1352 19.0758 21.3542C17.4978 21.9812 13.7508 21.8402 12.0018 21.8402C10.2528 21.8402 6.50283 21.9812 4.92483 21.3572C4.37883 21.1382 3.97083 20.8742 3.55083 20.4512C3.12783 20.0282 2.86383 19.6232 2.64483 19.0772C2.02083 17.4962 2.16183 13.7492 2.16183 12.0002C2.16183 10.2512 2.02083 6.50119 2.64483 4.92319C2.86383 4.37719 3.12783 3.96919 3.55083 3.54919C3.97383 3.12919 4.37883 2.86219 4.92483 2.64319C6.50283 2.01919 10.2528 2.16019 12.0018 2.16019C13.7508 2.16019 17.5008 2.01919 19.0788 2.64319C19.6248 2.86219 20.0328 3.12619 20.4528 3.54919C20.8758 3.97219 21.1398 4.37719 21.3588 4.92319C21.9828 6.50119 21.8418 10.2512 21.8418 12.0002C21.8418 13.7492 21.9828 17.4962 21.3558 19.0742Z"
                    fill = "#E61F5A"
                  />
                </g>
                <defs>
                  <clipPath id    = "clip0_964_12976">
                  <rect     width = "24" height = "24" fill = "white" />
                  </clipPath>
                </defs>
              </svg>
            </a>
          </li>
          <li>
            <a href = "#"
              ><svg
                width   = "24"
                height  = "20"
                viewBox = "0 0 24 20"
                fill    = "none"
                xmlns   = "http://www.w3.org/2000/svg"
              >
                <g clip-path = "url(#clip0_964_12978)">
                  <path
                    d    = "M24.0004 2.46548C23.1188 2.85141 22.1594 3.12917 21.1711 3.23735C22.1971 2.61879 22.9655 1.64156 23.332 0.489007C22.3692 1.07022 21.3145 1.47778 20.2146 1.6936C19.7549 1.19488 19.1989 0.797581 18.5813 0.526453C17.9636 0.255325 17.2976 0.116179 16.6247 0.117688C13.902 0.117688 11.7123 2.3573 11.7123 5.10564C11.7123 5.49158 11.7584 5.87752 11.8333 6.24884C7.7565 6.03248 4.12048 4.05601 1.7032 1.0299C1.26274 1.79335 1.03193 2.66261 1.03477 3.54727C1.03477 5.27814 1.902 6.80435 3.22444 7.70195C2.44511 7.6708 1.68402 7.45342 1.00308 7.06749V7.12889C1.00308 9.5527 2.69143 11.5613 4.94161 12.0233C4.51912 12.1347 4.08449 12.1916 3.64797 12.1929C3.32817 12.1929 3.02565 12.1607 2.72024 12.1168C3.34257 14.0933 5.15482 15.5289 7.3128 15.5757C5.62444 16.9177 3.50968 17.7071 1.2134 17.7071C0.801397 17.7071 0.421085 17.6925 0.0263672 17.6457C2.20452 19.0637 4.78891 19.8824 7.5721 19.8824C16.6074 19.8824 21.5514 12.2864 21.5514 5.69332C21.5514 5.47696 21.5514 5.2606 21.537 5.04424C22.4936 4.33377 23.332 3.45371 24.0004 2.46548Z"
                    fill = "#21A6DF"
                  />
                </g>
                <defs>
                  <clipPath id = "clip0_964_12978">
                    <rect
                      width     = "24"
                      height    = "19.7647"
                      fill      = "white"
                      transform = "translate(0 0.117676)"
                    />
                  </clipPath>
                </defs>
              </svg>
            </a>
          </li>
          <li>
            <a href = "#"
              ><svg
                width   = "24"
                height  = "18"
                viewBox = "0 0 24 18"
                fill    = "none"
                xmlns   = "http://www.w3.org/2000/svg"
              >
                <g clip-path = "url(#clip0_964_12980)">
                  <path
                    d    = "M23.4699 2.9313C23.3335 2.39833 23.0663 1.9124 22.6951 1.52212C22.324 1.13185 21.8619 0.850924 21.355 0.707468C19.4884 0.17627 11.9879 0.17627 11.9879 0.17627C11.9879 0.17627 4.48729 0.17627 2.62071 0.707468C2.11385 0.850924 1.65172 1.13185 1.28057 1.52212C0.90941 1.9124 0.642248 2.39833 0.50582 2.9313C0.157288 4.93298 -0.0118455 6.96464 0.000644257 8.99956C-0.0118455 11.0345 0.157288 13.0661 0.50582 15.0678C0.642248 15.6008 0.90941 16.0867 1.28057 16.477C1.65172 16.8673 2.11385 17.1482 2.62071 17.2917C4.48729 17.8229 11.9879 17.8229 11.9879 17.8229C11.9879 17.8229 19.4884 17.8229 21.355 17.2917C21.8619 17.1482 22.324 16.8673 22.6951 16.477C23.0663 16.0867 23.3335 15.6008 23.4699 15.0678C23.8184 13.0661 23.9876 11.0345 23.9751 8.99956C23.9876 6.96464 23.8184 4.93298 23.4699 2.9313ZM9.59041 12.781V5.21815L15.8152 8.99956L9.59041 12.781Z"
                    fill = "#E42F08"
                  />
                </g>
                <defs>
                  <clipPath id = "clip0_964_12980">
                    <rect
                      width     = "24"
                      height    = "17.6842"
                      fill      = "white"
                      transform = "translate(0 0.157715)"
                    />
                  </clipPath>
                </defs>
              </svg>
            </a>
          </li>
        </ul>
      </section>
    </footer>
    <a class = "gotopbtn" href = "#"> <i class = "fas fa-arrow-up"></i> </a>

    <script src  = "https://unpkg.com/scrollreveal"></script>
    <script type = "text/javascript" src = "main.js"></script>
    
  </body>
</html>



