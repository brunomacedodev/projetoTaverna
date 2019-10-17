<html>
    <?php $pageTitle = "Taverna";?>
    <?php include_once('utils\head.php');?>
    <body>
        <?php include_once('utils/header.php');?>
        <?php include_once('utils/produtosPaginaProduto.php');?>

        <main class="container mt-3">
            <div class="row">
                <div class="col-12 col-md-6 justify-content-center">
                <img src="<?php echo $imgControleZelda[0]; ?>" class="col-md col-12 produtoModalTrigger" data-toggle="modal" data-target="#modalCarousel" alt="<?php echo $produtoFichaTecnica[0]; ?>">
            
                    <div class="modal fade" id="modalCarousel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content bg-dark">
                            <div class="modal-header">
                                <h5 class="modal-title text-white" id="exampleModalLabel"><?php echo $produtoFichaTecnica[0]; ?></h5>
                                <button class="close btn-lg border-0" data-dismiss="modal"><i class="fas fa-times"></i></button>    
                            </div>
                            <div class="modal-body">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="<?php echo $imgControleZelda[0]; ?>" class="d-block w-100" alt="...">
                                        </div>
                                        <?php for ($i=1 ; $i < count($imgControleZelda); $i++) { ?>
                                            <div class="carousel-item">
                                                <img src="<?php echo $imgControleZelda[$i]; ?>" class="d-block w-100" alt="...">
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class=
                                        "carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btnPadrao" data-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                </div>

                <div class="col-12 col-md">
                    <div class="row text-center border-bottom">
                        <h2 class="text-white"><?php echo $produtoFichaTecnica[0]; ?></h2>
                    </div>
                    <div class="row my-3 border-bottom justify-content-center justify-content-md-start">
                        <p class="text-white p-0">(Cód.<?php echo $produtoFichaTecnica[4]; ?>)</p>
                    </div>
                    <div class="row justify-content-center my-3 border-bottom">
                        <p class="text-white">Vendido por <img src="<?php echo $produtoFichaTecnica[12]; ?>" class="thumbnail" width="48px"> <a href="<?php echo $produtoFichaTecnica[13]; ?>"><?php echo $produtoFichaTecnica[3]; ?></a></p>
                    </div>
                    <div class="row mt-3 justify-content-center justify-content-md-end">
                        <h2 class="text-white">R$ <?php echo $produtoFichaTecnica[1]; ?></h2>
                    </div>
                    <div class="row mb-3 border-bottom justify-content-center justify-content-md-end">
                        <p class="text-white"><?php echo $produtoFichaTecnica[2]; ?></p>
                    </div>
                    <div class="row text-center my-3">
                        <p class="col-12 col-md-6 text-white btn btnPadrao border-0 efeitoLink" data-toggle="modal" data-target="#modalParcelamento">.formas de parcelamento</p>

                        <div class="modal fade" id="modalParcelamento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content bg-dark">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-white" id="exampleModalLabel">Formas de parcelamento</h5>
                                        <button class="close btn-lg border-0" data-dismiss="modal"><i class="fas fa-times"></i></button>    
                                    </div>
                                    <div class="modal-body">
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#parcelasCartao" class="nav-link active" role="tab" data-toggle="tab">Cartão de crédito <i class="fas fa-credit-card"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#parcelasBoleto" class="nav-link" role="tab" data-toggle="tab">Boleto <i class="fas fa-money-check"></i></a>
                                            </li>
                                        </ul>

                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="parcelasCartao">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <th class="text-white" class="text-white" scope="row">1x</th>
                                                            <td class="text-white">de R$ 379,99</td>
                                                            <td class="text-white">sem juros</td>
                                                            <td class="text-white">total R$ 379,99</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-white" scope="row">2x</th>
                                                            <td class="text-white">de R$ 189,99</td>
                                                            <td class="text-white">sem juros</td>
                                                            <td class="text-white">total R$ 379,99</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-white" scope="row">3x</th>
                                                            <td class="text-white">de R$ 126,99</td>
                                                            <td class="text-white">sem juros</td>
                                                            <td class="text-white">total R$ 379,99</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-white" scope="row">4x</th>
                                                            <td class="text-white">de R$ 94,99</td>
                                                            <td class="text-white">sem juros</td>
                                                            <td class="text-white">total R$ 379,99</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-white" scope="row">5x</th>
                                                            <td class="text-white">de R$ 81,29</td>
                                                            <td class="text-white">com juros de 2,29 % a.m.</td>
                                                            <td class="text-white">total R$ 406,48</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-white" scope="row">6x</th>
                                                            <td class="text-white">de R$ 68,50</td>
                                                            <td class="text-white">com juros de 2,29 % a.m.</td>
                                                            <td class="text-white">total R$ 411,02</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-white" scope="row">7x</th>
                                                            <td class="text-white">de R$ 59,36</td>
                                                            <td class="text-white">com juros de 2,29 % a.m.</td>
                                                            <td class="text-white">total R$ 415,58</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-white" scope="row">8x</th>
                                                            <td class="text-white">de R$ 52,52</td>
                                                            <td class="text-white">com juros de 2,29 % a.m.</td>
                                                            <td class="text-white">total R$ 420,18</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-white" scope="row">9x</th>
                                                            <td class="text-white">de R$ 47,20</td>
                                                            <td class="text-white">com juros de 2,29 % a.m.</td>
                                                            <td class="text-white">total R$ 424,81</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-white" scope="row">10x</th>
                                                            <td class="text-white">de R$ 42,94</td>
                                                            <td class="text-white">com juros de 2,29 % a.m.</td>
                                                            <td class="text-white">total R$ 429,47</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-white" scope="row">11x</th>
                                                            <td class="text-white">de R$ 39,46</td>
                                                            <td class="text-white">com juros de 2,29 % a.m.</td>
                                                            <td class="text-white">total R$ 434,16</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-white" scope="row">12x</th>
                                                            <td class="text-white">de R$ 36,57</td>
                                                            <td class="text-white">com juros de 2,29 % a.m.</td>
                                                            <td class="text-white">total R$ 438,89</td>
                                                        </tr>
                                            
                                                    </tbody>
        
                                                </table>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="parcelasBoleto">
                                                <div class="row justify-content-center">
                                                    <p class="text-white">R$ <?php echo $produtoFichaTecnica[1]; ?> no boleto bancário</p>
                                                </div>
                                                <div class="row">
                                                    <p class="text-white">O boleto será gerado após a finalização de sua compra. Imprima e pague no banco ou pague pela internet utilizando o código de barras do boleto.</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btnPadrao" data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="col-12 col-md-6 btn col-6 btn-lg btn-outline-light">Comprar <i class="fas fa-shopping-cart"></i></button>
                    </div>
                    <div class="row justify-content-center border-bottom">

                        <form class="form-inline my-3">
                            <input class="form-control mr-sm-2" type="search" placeholder="Calcular frete e prazo" aria-label="Search">
                            <button class="col-12 col-md btn btn-lg btn-outline-light my-2 my-sm-0" type="submit">OK <i class="fas fa-truck"></i></button>
                        </form>
                    </div>
                </div>
            </div>


            <div class="accordion mt-5 border rounded" id="infoProduto">
                <div class="card border-0">
                    <div class="card-header produtoAccordion" id="headingOne">
                    <h5 class="mb-0 ">
                        <button class="btn btnPadrao btn-block border-0 collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Informações do Produto <i class="fas fa-chevron-circle-down"></i>
                        </button>
                    </h5>
                    </div>

                    <div id="collapseOne" class="collapse show " aria-labelledby="headingOne" data-parent="#infoProduto">
                    <div class="card-body text-white produtoAccordion">
                        Este controle da PowerA conta com um desempenho ótimo, possui alças de toque suave para maior conforto e 6
                        tampas analógicas intercambiáveis para preferência pessoal. Conta com um design incrível com animação do
                        Zelda: Breath of The Wild. Garanta já o seu na nossa loja.
                    </div>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-header produtoAccordion" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btnPadrao btn-block border-0 collapsed" type="button"
                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Ficha Técnica <i class="fas fa-chevron-circle-down"></i>
                        </button>
                    </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#infoProduto">
                    <div class="card-body produtoAccordion">
                        <table class="table mt-4 tableFicha text-white">
                        <tbody>
                            <tr>
                            <th scope="row">Código</th>
                            <td>86144985</td>
                            </tr>
                            <tr>
                            <th scope="row">Modelo</th>
                            <td>Zelda: Breath of The Wild</td>
                            </tr>
                            <tr>
                            <th scope="row">Plataforma</th>
                            <td>Nintendo Switch</td>
                            </tr>
                            <tr>
                            <th scope="row">Conexão</th>
                            <td>Wired</td>
                            </tr>
                            <tr>
                            <th scope="row">Fabricante</th>
                            <td>PowerA</td>
                            </tr>
                            <tr>
                            <th scope="row">Entrada</th>
                            <td>USB</td>
                            </tr>
                            <tr>
                            <th scope="row">Peso</th>
                            <td>50.5</td>
                            </tr>
                            <tr>
                            <th scope="row">Cor</th>
                            <td>Preto</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>

    

     











        </main>






    </body>
    <?php include_once('utils/footer.php');?>
</html>