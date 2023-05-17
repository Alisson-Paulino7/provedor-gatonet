<?php
include 'Conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE GATO NET</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
    
<header class="header">

    <a href="#" class="logo">
        <img src="images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#planos">planos</a>       
        <a href="#projetos">Produtos</a>
        <a href="#review">review</a>
        <a href="#contato">contato</a>
        <a href="#blogs">Links Úteis</a>
    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>


</header>

<section class="home" id="home">

    <div class="content">
        <h3>GATO NET</h3>
        <p>INTERNET DE QUALIDADE E ACESSIVEL PARA TODOS</p>
        <a href="#" class="btn">Saiba mais...</a>
    </div>

</section>

<section class="planos" id="planos">

    <h1 class="heading"> <span>planos</span></h1>

    <div class="row">

        <div class="image">
            <img src="images/about-img.jpeg" alt="">
        </div>

        <div class="content">
            <h3>Nossos planos!</h3>
            <p>ESCOLHA UM DE NOSSOS PLANOS E SINTA O QUE HÁ DE MELHOR EM TECNOLOGIAS COMO INTERNET SEM FIO, 68 CANAIS LIBERADOS E UM FIXO PARA RECEBER COBRANÇAS</p>
                     <a href="#" class="btn">FALE COM UM CONSULTOR</a>
        </div>

    </div>

</section>

<section class="projetos" id="projetos">

    
    <h1 class="heading"> nossos <span>produtos</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <!--  <a href="#" class="fas fa-shopping-cart"></a>  -->
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product-1.png" alt="">
            </div>
            <div class="content">
                <h3>Roteador</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
              <div class="price">R$389,90 <span>R$499,90</span></div> 
            </div>
        </div>

        <div class="box">
            <div class="icons">
              <!--  <a href="#" class="fas fa-shopping-cart"></a>  -->
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product-2.png" alt="">
            </div>
            <div class="content">
                <h3>Telefone Fixo com Ramal</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
              <div class="price">R$89,90 <span>R$129,99</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product-3.png" alt="">
            </div>
            <div class="content">
                <h3>Tv Por Assinatura</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
              <div class="price">R$89,90 <span>R$99,99</span></div>
            </div>
        </div>

    </div>

</section>


<section class="review" id="review">

    <h1 class="heading"> NOSSOS <span>CLIENTES</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Ehhhh internet rápida da boba serena.</p>
            <p>   </p>
            <p>   </p>
            <img src="images/pic-1.png" class="user" alt="">
            <h3>Tiringa</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p> Olá Meus amigos, pode apostar que essa internet é muito boa, os técnicos colocaram muito rápido (lá ele). .</p>
            <p>   </p>
            <img src="images/pic-2.png" class="user" alt="">
            <h3>Manuel Gomes</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Não Gostuai...</p>
            <p>... Asmei</p>
            <img src="images/pic-3.png" class="user" alt="">
            <h3>Rei do Kuduairo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>

</section>


<section class="contato" id="contato">

    <h1 class="heading"> <span>SOLICITE</span> CONTATO </h1>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.3031299674503!2d-39.31377462584139!3d-7.206216792799318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7a178ad71080c59%3A0x5b2a22386c2711fd!2sCentro%20Universit%C3%A1rio%20Para%C3%ADso%20-%20UniFAP!5e0!3m2!1spt-BR!2sbr!4v1683835516014!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" ></iframe>

        <form action="">
            <h3>PREENCHA SEUS DADOS</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="NOME">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="EMAIL">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="NUMERO">
            </div>
            <input type="submit" value="SOLICITAR CONTATO" class="btn">
        </form>

    </div>

</section>



<section class="blogs" id="blogs">

<h1 class="heading"> Links <span>Úteis</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="image">
            <img src="images/blog-1.jpeg" alt="">
        </div>
        <div class="content">
            <a href="suporte.php" class="title">Suporte Técnico</a>
            <span>Solicite aqui o Suporte</span>
            <p>Solicite aqui o suporte ou reinicie o roteador para tentar sozinho!</p>
            <button><a href="suporte.php" class="btn">Suporte</a> </a></button>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/blog-2.jpeg" alt="">
        </div>
        <div class="content">
            <a href="financeiro.php" class="title">Financeiro</a>
            <span>Acesse suas faturas</span>
            <p>Tenha o controle financeiro e não nos faça perder tempo cancelando seus beneficios!</p>
            <button><a href="financeiro.php" class="btn">Financeiro</a> </a></button>
        </div>
    </div>
</div>
</section>


<section class="footer">

    <div class="share">
        <a href="https://www.facebook.com/eduardo.rocha.3557/" class="fab fa-facebook-f"></a>
        <a href="https://www.linkedin.com/in/eduardo-sampaio-05b4ab247/" class="fab fa-github"></a>
        <a href="https://www.instagram.com/du_sampaio/" class="fab fa-instagram"></a>
        <a href="https://www.linkedin.com/in/eduardo-sampaio-05b4ab247/" class="fab fa-linkedin"></a>
    </div>

    <div class="links">
        <a href="#home">home</a>
        <a href="#planos">planos</a>       
        <a href="#projetos">Produtos</a>
        <a href="#review">review</a>
        <a href="#contato">contato</a>
        <a href="#blogs">Links Úteis</a>
    </div>

    <div class="credit">created by <span>Eduardo Sampaio</span> | all rights reserved</div>

</section>





<script src="js/script.js"></script>

</body>
</html>
