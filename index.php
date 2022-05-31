<html>
    <head>
    <title> Revisao PW amo love muito  <?php echo $_GET['op']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="container">
      <div class="row">
        <div class="col">
          <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
              <img src="img/fish.png" width="30" height="30" class="d-inline-block align-top" alt="">
              BacanaFish
           </a>
          </nav>
        </div>
        </div>
        </div>
    <div class="container">
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">     
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Peixes Suculentos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="index.php?op=1">Piores Peixes</a>
                <a class="dropdown-item" href="index.php?op=2">Peixes estragados</a>
                  <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?op=3">Peixes vivos</a>
             </div>
              <li class="nav-item active">
                <a class="nav-link" href="https://www.delegaciaeletronica.policiacivil.sp.gov.br/ssp-de-cidadao/home"target="_blank">Reclame Conosco<span class="sr-only"></span></a>
              </li>

            </li>
            </ul>
          </div>
        </nav>
     </div>
     </div>
     </div>
     <?php if(!isset($_GET['op'])) { ?>
        <div class="container">
    <div class="row">
    <div class="col">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/um.gif" alt="First slide">
          </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/um.gif" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/um.gif" alt="Third slide">
            </div>
            </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
              </a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
              &nbsp;
           </div>
          </div> 
        <div class="row">
          <div class="col">
            <figure class="figure">
              <a href="index.php?op=1"><img src="img/bocao.jpg" class="figure-img img-fluid rounded"></a>
              <figcaption class="figure-caption text-right">Piores peixes</figcaption>
            </figure>    
          </div>
          <div class="col">
            <figure class="figure">
              <a href="index.php?op=2"><img src="img/teste.jpg" class="figure-img img-fluid rounded"></a>
              <figcaption class="figure-caption text-right">Peixes estragados</figcaption>
            </figure>    
          </div>
          <div class="col">
            <figure class="figure">
              <a href="index.php?op=3"><img src="img/memes.png" class="figure-img img-fluid rounded"></a>
              <figcaption class="figure-caption text-right">Peixes vivos</figcaption>
            </figure>    
          </div>
    </div>
   </div>
  </div>
  <?php }else{ ?>
 <?php if($_GET['op'] == 2) { ?>
    <div class="container">
        <div class="row">
          <div class="col">
              &nbsp;
           </div>
          </div> 

        <div class="row">

       
          <div class="col">
            <figure class="figure">
              <a href="_dois.html"><img src="img/peixoto.jpg" width="1000px" class="figure-img img-fluid rounded"></a>
              <figcaption class="figure-caption text-right"></figcaption>
            </figure>
            <div class="row">
              &nbsp;
            </div>
            <h1> Piores peixes</h1>
            <h4> Os peixes gozam da fama de carne mais saudável no menu da dieta. Mas, apesar da fama, existem alguns peixes que você não pode comer de jeito nenhum.</h4>    
          </div>

          <div class="col">
            <h1> Existem tipos de peixe que você não pode comer de jeito nenhum?</h1>
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    #1 Atum:
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">O atum, sobretudo o preto e o azul, pode conter uma grande quantidade de mercúrio. Além disso, é quase impossível encontrar atum que tenha se desenvolvido em seu habitat natural, porque está em perigo de extinção. Todos os peixes que vemos nos mercados vêm de criadouros especiais, onde são alimentados com antibióticos e hormônios.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    #2 Enguia
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Um peixe pouco comum, mas, se for comer, fique atento. Por causa do alto nível de gordura, as enguias absorvem facilmente todos os resíduos de produção encontrados na água. O nível de intoxicação das espécies americanas é especialmente elevado. As enguias europeias, por sua vez, contêm altas doses de mercúrio.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    #3 Pangasius
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">A maioria dos pangasius é produzido no Vietnã, no Rio Mekong, que é considerado uma das fontes de água mais poluídas do mundo. Além do mercúrio, esse peixe contém um elevado nível de nitrofurazona e polifosfatos (cancerígenos).

                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    #4 Peixes arrecifes
                  </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Diversas espécie de peixes de arrecifes têm elevados níveis de contaminação por mercúrio. Além disso, as regras básicas de pesca muitas vezes não são respeitadas, portanto o risco de se intoxicar é muito alto.</div>
                </div>
              </div>
            </div>
            </div>

          </div>
    </div>
   </div>
  </div>
  
  <?php } else if($_GET['op'] == 3) { ?>
    <div class="container">
        <div class="row">
          <div class="col">
              &nbsp;
           </div>
          </div> 

        <div class="row">

       
          <div class="col">
            <figure class="figure">
              <a href="_dois.html"><img src="img/peixao.jpg" width="1000px" class="figure-img img-fluid rounded"></a>
              <figcaption class="figure-caption text-right"></figcaption>
            </figure>
            <div class="row">
              &nbsp;
            </div>
            <h1> Piores peixes</h1>
            <h4> Os peixes gozam da fama de carne mais saudável no menu da dieta. Mas, apesar da fama, existem alguns peixes que você não pode comer de jeito nenhum.</h4>    
          </div>

          <div class="col">
            <h1> Existem tipos de peixe que você não pode comer de jeito nenhum?</h1>
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    #1 Atum:
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">O atum, sobretudo o preto e o azul, pode conter uma grande quantidade de mercúrio. Além disso, é quase impossível encontrar atum que tenha se desenvolvido em seu habitat natural, porque está em perigo de extinção. Todos os peixes que vemos nos mercados vêm de criadouros especiais, onde são alimentados com antibióticos e hormônios.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    #2 Enguia
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Um peixe pouco comum, mas, se for comer, fique atento. Por causa do alto nível de gordura, as enguias absorvem facilmente todos os resíduos de produção encontrados na água. O nível de intoxicação das espécies americanas é especialmente elevado. As enguias europeias, por sua vez, contêm altas doses de mercúrio.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    #3 Pangasius
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">A maioria dos pangasius é produzido no Vietnã, no Rio Mekong, que é considerado uma das fontes de água mais poluídas do mundo. Além do mercúrio, esse peixe contém um elevado nível de nitrofurazona e polifosfatos (cancerígenos).

                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    #4 Peixes arrecifes
                  </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Diversas espécie de peixes de arrecifes têm elevados níveis de contaminação por mercúrio. Além disso, as regras básicas de pesca muitas vezes não são respeitadas, portanto o risco de se intoxicar é muito alto.</div>
                </div>
              </div>
            </div>
            </div>

          </div>
    </div>
   </div>
  </div>
  <?php } else{ ?>
    <div class="container">
        <div class="row">
          <div class="col">
              &nbsp;
           </div>
          </div> 

        <div class="row">

       
          <div class="col">
            <figure class="figure">
              <a href="_dois.html"><img src="img/eitaaaa.jpg" width="1000px" class="figure-img img-fluid rounded"></a>
              <figcaption class="figure-caption text-right"></figcaption>
            </figure>
            <div class="row">
              &nbsp;
            </div>
            <h1> Piores peixes</h1>
            <h4> Os peixes gozam da fama de carne mais saudável no menu da dieta. Mas, apesar da fama, existem alguns peixes que você não pode comer de jeito nenhum.</h4>    
          </div>

          <div class="col">
            <h1> Existem tipos de peixe que você não pode comer de jeito nenhum?</h1>
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    #1 Atum:
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">O atum, sobretudo o preto e o azul, pode conter uma grande quantidade de mercúrio. Além disso, é quase impossível encontrar atum que tenha se desenvolvido em seu habitat natural, porque está em perigo de extinção. Todos os peixes que vemos nos mercados vêm de criadouros especiais, onde são alimentados com antibióticos e hormônios.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    #2 Enguia
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Um peixe pouco comum, mas, se for comer, fique atento. Por causa do alto nível de gordura, as enguias absorvem facilmente todos os resíduos de produção encontrados na água. O nível de intoxicação das espécies americanas é especialmente elevado. As enguias europeias, por sua vez, contêm altas doses de mercúrio.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    #3 Pangasius
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">A maioria dos pangasius é produzido no Vietnã, no Rio Mekong, que é considerado uma das fontes de água mais poluídas do mundo. Além do mercúrio, esse peixe contém um elevado nível de nitrofurazona e polifosfatos (cancerígenos).

                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    #4 Peixes arrecifes
                  </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Diversas espécie de peixes de arrecifes têm elevados níveis de contaminação por mercúrio. Além disso, as regras básicas de pesca muitas vezes não são respeitadas, portanto o risco de se intoxicar é muito alto.</div>
                </div>
              </div>
            </div>
            </div>

          </div>
    </div>
   </div>
  </div>
  <?php } ?>
            <?php } ?>
</body>
</html>