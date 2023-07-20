<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Omie</title>

    <link rel="stylesheet" type="text/css" href="./asset/css/styles.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="./asset/css/omiebox.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="./asset/css/pme.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="./asset/css/planning.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="./asset/css/media.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="./asset/css/specialist.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="./asset/css/intelligence.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="./asset/css/footer.css" media="screen" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
   
   
</head>

<body>
    <main class="text-white bg-custom">
        <header class="custom-head">
            <div class="header-live">
                <img src="./asset/imagens/ico-live.svg" alt="" id="live" />
                <h2 class="fs-6 fw-bold mt-3">
                    LIVE - Fala, Economia!
                </h2>
            </div>
            <p class="fs-6 text-center w-75 custom-color ">O que o cenário econômico tem a dizer para o empreendedor.</p>
            <div class="header-link">
                <a class="fs-6 fw-bolder text-decoration-none text-dark cursor">
                    CLIQUE E SE INSCREVA
                </a>
                <img src="./asset/imagens/arrow-right.svg" alt="" />
            </div>
        </header>
          
        <x-omiebox></x-omiebox>
        <x-pme></x-pme>
        <x-planning></x-planning>
        <x-media></x-media>
        <x-specialist></x-specialist>
        <x-intelligence></x-intelligence>
          
       
    </main>
   <x-footer></x-footer>
</body>

</html>