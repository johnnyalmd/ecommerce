<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Importação do Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <!-- Importação do Slick Theme CSS (opcional) -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <style>
        .color-header{
            background: #189AB4;
        }
        .color-header-2{
            background: #D4F1F4;;
        }
        .space-margin-right-5{
            margin-right:50px;
        }
        .space-margin-right-4{
            margin-right:40px;
        }
        .space-margin-left-5{
            margin-right:50px;
        }
        .space-margin-right-9{
            margin-right:300px;
        }
        .space-margin-right-1{
            margin-right: 10px;
        }
        .text-header-login{
            font-size: 14px;
            text-align: right;
            color: white;
        }
        .container-href-login{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .a-href-login {
            color: #FFFFFF;
            font-weight: bold;
        }
        .a-href-bem-vindo {
            color: #FFFFFF;
            font-weight: normal;
            text-decoration: none;
        }
        .a-href-card {
            color: #36C5C4;
            font-weight: normal;
            text-decoration: none;
        }
        .price-card{
            color:#36C5C4;
            font-size: 23px;
        }
        .title-card{
            color:#201F1F;
            font-size: 16px;
        }
        .discount-card{
            color:#201F1F;
            font-size: 12px;
        }
        .height-footer {
            height: auto;
        }
        .width-coments {
            max-width: 200px;
        }
        body {
            overflow-x: hidden;
            background-color: #F3F6F4;
        }
        .card-img-top {
        width: 100%;
        height: auto;
        }   
    </style>
</head>
<body>
<header>
<div class="px-3 py-2 color-header">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <!-- Logo -->
        <a href="/home"><img src="https://i.ibb.co/cbhjFyD/LOGO-BAIXA-RESOLU-O.png" alt="LOGO-BAIXA-RESOLU-O" border="0" width="256" height="85"></a>
      </div>
      <div class="col-12 col-lg-auto mb-2 mb-lg-0 text-center">
        <form class="d-flex input-group">
          <!-- Input de Pesquisa -->
          <input class="form-control me-2 rounded-pill" type="search" placeholder="Digite o que você procura" aria-label="Search">
        </form>
      </div>
      <div class="d-flex align-items-center">
        <!-- Ícones -->
        <!-- dropdown favoritos -->
        <div class="dropdown">
        <a class="dropdown-toggle space-margin-right-5 text-header-login" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000000" class="bi bi-heart-fill space-margin-right-1" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/></svg>Favoritos</a>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
        </div>
        <!-- fim dropdown -->
        <!-- ir para pagina de login ou cadastro -->
        <div class="container-href-login">
        <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000000" class="bi bi-person-circle space-margin-right-1" viewBox="0 0 16 16"><path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/></svg>
        </div>
        <div class="text-header-login">
           <a href="/home" class="a-href-bem-vindo space-margin-right-4">Bem-vindo(a)</a>  <br><a href="pagina-de-login"class="a-href-login">entrar</a> ou <a href="pagina-de-cadastro" class="a-href-login">cadastrar</a>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <div class="container-fluid p-0"><!-- submenu com lista de categorias de produtos -->
    <div class=" border-bottom color-header-2">
        <div class="text-end">
        <ul class="nav col-12 col-lg-auto my-2 justify-content-end my-md-0 text-small space-margin-right-9">
            <li>
              <a href="#" class="nav-link text-black">
             <img src="https://i.ibb.co/1fRLnpH/2316a681fa6fab7e7a6099f0bb194665.png" alt="2316a681fa6fab7e7a6099f0bb194665" width="40" height="40" border="0">
                Luminárias
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-black">
              <img src="https://i.ibb.co/f2Zg8ZW/3133e4cd4c88a55f18f7093f9d2fed89.png" alt="3133e4cd4c88a55f18f7093f9d2fed89" width="40" height="40" border="0">
                Mosaicos
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-black">
              <img src="https://i.ibb.co/pjj8J40/1cdfb6f3429d1c702cd1ad5c9a15474c.png" alt="1cdfb6f3429d1c702cd1ad5c9a15474c" width="40" height="40" border="0">
                Quadros
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-black">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-bookmark-star-fill" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zM8.16 4.1a.178.178 0 0 0-.32 0l-.634 1.285a.178.178 0 0 1-.134.098l-1.42.206a.178.178 0 0 0-.098.303L6.58 6.993c.042.041.061.1.051.158L6.39 8.565a.178.178 0 0 0 .258.187l1.27-.668a.178.178 0 0 1 .165 0l1.27.668a.178.178 0 0 0 .257-.187L9.368 7.15a.178.178 0 0 1 .05-.158l1.028-1.001a.178.178 0 0 0-.098-.303l-1.42-.206a.178.178 0 0 1-.134-.098L8.16 4.1z"/></svg>
                Destaque
              </a>
            </li>
          </ul>
      </div>
      </div>
    </div> 
  </header><!--final do header--> 
    <div id="carouselInterval" class="carousel slide" data-bs-ride="carousel"><!-- inicio do carrousel -->
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
    <img src="https://sat02pap005files.storage.live.com/y4mYC5wXAboTYT_65yOpr7H5tsnumkJfpOiR3wJU36F_j1GcgTLy9vQfBtulRpmU1sO944ytiLZ66QAg0n-V4mP4XgKVALoZCXDsMId_-9mMXtxW-NI0QSA71LCNSE4yKdJJyLzNdSfOPx7QZr-GuWjPU8Mr6OohNO0e8MuP1d7r4teT6zeOuDhp_OX7BxELXcq?width=1920&height=430&cropmode=none" class="d-block w-100" alt="d96a1d82b1449fd148e9890ec74ea813" border="0">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
    <img src="https://sat02pap005files.storage.live.com/y4mNkJd0XjuFOBIYXN-ypjmXdzIPKaIqb39R77Wl3wt7xu1k-o4hN5ouhOYSRuaZgFoEg4zHDt_e0c4e12LGU33XAcT3My63RPvZVt98NpBBedY0mI9OPg8Oa4ErlGmUXbL8Esc0sqvdGR0AYn3H0WcWRYkR9I-Vp-XT42HTtReidZlUWDmgpem_AtUeXU9Wu5h?width=1920&height=430&cropmode=none" class="d-block w-100" alt="d96a1d82b1449fd148e9890ec74ea813" border="0">
    </div>
    <div class="carousel-item">
    <img src="https://sat02pap005files.storage.live.com/y4mTsm8OsfdycBwmt0X-ndEqsPLpeVpe7by1KIGMq9k64_YEFWvkxA5kurqldYIeBITC7KM-P2wM3NbqEhJ200Vic0WMbIdJKBSm6aBv6nrjiui8TGG8UXPUOYghWjvleLm-3jlvUJ_WHFZBB4Pz5r701TwDadOIAz4gSpu-75bBKWStNUlVXcsJB4IZp3yrnDq?width=1920&height=430&cropmode=none" class="d-block w-100" alt="d96a1d82b1449fd148e9890ec74ea813" border="0">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Próximo</span>
  </button>
    </div><!-- final do carrousel -->
    <div class="container-fluid p-0"><!-- inicio do submenu com as informações e caracteristicas do site -->
    <div class="px-3 py-2 border-bottom color-header-2">
        <div class="text-end">
        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small ">
            <li>
              <a href="#" class="nav-link text-black space-margin-right-5 border-end">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#000C66" class="bi bi-globe-americas space-margin-right-1" viewBox="0 0 16 16"><path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0ZM2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484-.08.08-.162.158-.242.234-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z"/></svg>
                Enviamos para todo Brasil
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-black space-margin-right-5 border-end">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#000C66" class="bi bi-credit-card space-margin-right-1" viewBox="0 0 16 16"><path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/><path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/></svg>
                Parcelamento em até 4x sem juros
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-black border-end">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#000C66" class="bi bi-qr-code space-margin-right-1" viewBox="0 0 16 16"><path d="M2 2h2v2H2V2Z"/><path d="M6 0v6H0V0h6ZM5 1H1v4h4V1ZM4 12H2v2h2v-2Z"/><path d="M6 10v6H0v-6h6Zm-5 1v4h4v-4H1Zm11-9h2v2h-2V2Z"/><path d="M10 0v6h6V0h-6Zm5 1v4h-4V1h4ZM8 1V0h1v2H8v2H7V1h1Zm0 5V4h1v2H8ZM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8H6Zm0 0v1H2V8H1v1H0V7h3v1h3Zm10 1h-1V7h1v2Zm-1 0h-1v2h2v-1h-1V9Zm-4 0h2v1h-1v1h-1V9Zm2 3v-1h-1v1h-1v1H9v1h3v-2h1Zm0 0h3v1h-2v1h-1v-2Zm-4-1v1h1v-2H7v1h2Z"/><path d="M7 12h1v3h4v1H7v-4Zm9 2v2h-3v-1h2v-1h1Z"/></svg>
                Pagamento á vista
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-black">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#000C66" class="bi bi-shield-lock-fill space-margin-right-1" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z"/></svg>
                Loja com SSL de proteção
              </a>
            </li>
          </ul>
      </div>
      </div><!-- final do submenu com as informações e caracteristicas do site -->
     
    
     <section class="py-5 text-center container-fluid bg-image" style="background-image: url('https://static.vecteezy.com/system/resources/previews/002/037/924/original/abstract-blue-background-with-beautiful-fluid-shapes-free-vector.jpg')"> <!-- inicio do jumbotrom -->
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Personalize o seu quadro</h1>
        <p class="lead text-black">Personalize o seu quadro da forma que voce quiser, usando suas imagens e sua imaginação com nossos variados modelos de tamanho, molduras e mosaicos</p>
        <p>
          <a href="#" class="btn btn-primary ">Criar meu quadro!</a>
        </p>
      </div>
    </div>
  </section><!-- final do jumbotrom -->
    
    <div class="container-fluid p-0"><!-- inicio da div de carrousel de produtos -->
    <div class="d-flex align-items-center justify-content-center">
    <h2 class="text-center mt-5">Mais vendidos</h2>
    </div>
    <div class="slick-carousel mt-5 p-3"><!-- inicio do slick -->
    @foreach($bestSeller as $bestSellers)
    <div class="card space-margin-left-5  shadow mb-5 bg-body rounded-4" style="width: 18rem;"><!-- inicio do card --> 
    <img src="{{$bestSellers->image_product_1}}" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title text-center title-card">{{$bestSellers->name}}</h5>
    <p class="card-text text-center price-card">R$ {{$bestSellers->price}} <a href="#" class="a-href-card">no pix</a></p>
    <h5 class="card-text text-center discount-card">Com 3% de desconto</h5>
    <h5 class="card-text text-center discount-card">A partir de R$ 74,90</h5>
    <h5 class="card-text text-center discount-card">até 4x de R$ 18,72 sem juros</h5>
    <a href="{{ route('showProductClient', ['id' => $bestSellers->id]) }}" class="btn btn-primary d-flex justify-content-center">Ver mais...</a>
    </div>
    </div><!-- final do card -->
    @endforeach
    </div><!-- final do slick -->
    </div><!-- final da div de carrousel de produtos -->
    

    
    <div class="container-fluid p-0"><!-- inicio da div de carousel de lançamentos -->
    <div class="d-flex align-items-center justify-content-center">
    <h2 class="text-center mt-5">Lançamentos</h2>
    </div>
    <div class="slick-carousel mt-5 p-3"><!-- inicio do slick -->
    @foreach($launch as $launchs)
    <div class="card space-margin-left-5  shadow mb-5 bg-body rounded-4" style="width: 18rem;"><!-- inicio do card -->
    <img src="{{$launchs->image_product_1}}" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title text-center title-card">{{$launchs->name}}</h5>
    <p class="card-text text-center price-card">R$ {{$launchs->price}} <a href="#" class="a-href-card">no pix</a></p>
    <h5 class="card-text text-center discount-card">Com 3% de desconto</h5>
    <h5 class="card-text text-center discount-card">A partir de R$ 74,90</h5>
    <h5 class="card-text text-center discount-card">até 4x de R$ 18,72 sem juros</h5>
    <a href="{{ route('showProductClient', ['id' => $launchs->id]) }}" class="btn btn-primary d-flex justify-content-center">Ver mais...</a>
    </div>
    </div><!-- final do card -->
    @endforeach
    </div><!-- final do slick -->
    </div><!-- inicio da div de carousel de lançamentos -->

    <div class="container-fluid p-0"><!-- inicio da div de carousel de lançamentos -->
    <div class="d-flex align-items-center justify-content-center">
    <h2 class="text-center mt-5">Destaques</h2>
    </div>
    <div class="slick-carousel mt-5 p-3"><!-- inicio do slick -->
    @foreach($highlight as $highlights)
    <div class="card space-margin-left-5  shadow mb-5 bg-body rounded-4" style="width: 18rem;"><!-- inicio do card -->
    <img src="{{$highlights->image_product_1}}" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title text-center title-card">{{$highlights->name}}</h5>
    <p class="card-text text-center price-card">R$ {{$highlights->price}} <a href="#" class="a-href-card">no pix</a></p>
    <h5 class="card-text text-center discount-card">Com 3% de desconto</h5>
    <h5 class="card-text text-center discount-card">A partir de R$ 74,90</h5>
    <h5 class="card-text text-center discount-card">até 4x de R$ 18,72 sem juros</h5>
    <a href="{{ route('showProductClient', ['id' => $highlights->id]) }}" class="btn btn-primary d-flex justify-content-center">Ver mais...</a>
    </div>
    </div><!-- final do card -->
    @endforeach
    </div><!-- final do slick -->
    </div><!-- inicio da div de carousel de lançamentos -->

    <div class="container-fluid p-0"><!-- inicio da div de carousel de lançamentos -->
    <div class="d-flex align-items-center justify-content-center">
    <h2 class="text-center mt-5">Mosaicos</h2>
    </div>
    <div class="slick-carousel mt-5 p-3"><!-- inicio do slick -->
    @foreach($mosaic as $mosaics)
    <div class="card space-margin-left-5  shadow mb-5 bg-body rounded-4" style="width: 18rem;"><!-- inicio do card -->
    <img src="{{$mosaics->image_product_1}}" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title text-center title-card">{{$mosaics->name}}</h5>
    <p class="card-text text-center price-card">R$ {{$mosaics->price}} <a href="#" class="a-href-card">no pix</a></p>
    <h5 class="card-text text-center discount-card">Com 3% de desconto</h5>
    <h5 class="card-text text-center discount-card">A partir de R$ 74,90</h5>
    <h5 class="card-text text-center discount-card">até 4x de R$ 18,72 sem juros</h5>
    <a href="{{ route('showProductClient', ['id' => $mosaics->id]) }}" class="btn btn-primary d-flex justify-content-center">Ver mais...</a>
    </div>
    </div><!-- final do card -->
    @endforeach
    </div><!-- final do slick -->
    </div><!-- inicio da div de carousel de lançamentos -->

    <div class="container-fluid p-0"><!-- inicio da div de carousel de lançamentos -->
    <div class="d-flex align-items-center justify-content-center">
    <h2 class="text-center mt-5">Luminárias</h2>
    </div>
    <div class="slick-carousel mt-5 p-3"><!-- inicio do slick -->
    @foreach($lighting as $lightings)
    <div class="card space-margin-left-5  shadow mb-5 bg-body rounded-4" style="width: 18rem;"><!-- inicio do card -->
    <img src="{{$lightings->image_product_1}}" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title text-center title-card">{{$lightings->name}}</h5>
    <p class="card-text text-center price-card">R$ {{$lightings->price}} <a href="#" class="a-href-card">no pix</a></p>
    <h5 class="card-text text-center discount-card">Com 3% de desconto</h5>
    <h5 class="card-text text-center discount-card">A partir de R$ 74,90</h5>
    <h5 class="card-text text-center discount-card">até 4x de R$ 18,72 sem juros</h5>
    <a href="{{ route('showProductClient', ['id' => $lightings->id]) }}" class="btn btn-primary d-flex justify-content-center">Ver mais...</a>
    </div>
    </div><!-- final do card -->
    @endforeach
    </div><!-- final do slick -->
    </div><!-- inicio da div de carousel de lançamentos -->


    <div class="container-fluid bg-white mt-5"><!-- inicio do footer -->
  <footer class="py-5">
    <div class="row">
      <div class="col-6 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
        </ul>
      </div>

      <div class="col-md-5 offset-md-1 mb-3">
        <form>
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-primary" type="button">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
      <p>© 2023 Walmeida</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
      </ul>
    </div>
    </footer>
    </div><!-- final do footer -->
    

     <!-- Importação do jQuery (necessário para o Slick) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Importação do Slick JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>        
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    <script>
        $('.slick-carousel').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
    {
        breakpoint: 1024,
        settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
    </script>
</body>
</html>