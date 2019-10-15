<html>
    <?php $pageTitle = "Taverna";?>
    <?php include_once('utils\head.php');?>
    <body>
        <?php include_once('utils/header.php');?>
        <?php include_once('utils/produtosPaginaProduto.php');?>

        <main class="container">
            <div class="row">
                <div class="col-12 col-md-6 justify-content-center">
                <img src="<?php echo $imgControleZelda[0]; ?>" class="col-md col-12 rounded produtoModalTrigger" data-toggle="modal" data-target="#modalCarousel" alt="<?php echo $produtoFichaTecnica[0]; ?>">
            
                    <div class="modal fade" id="modalCarousel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $produtoFichaTecnica[0]; ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
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
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
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
                        <p class="text-white">Vendido por <img src="assets\img\loja_exemplo_logo_fundo.jpg" class="thumbnail" width="48px"> <?php echo $produtoFichaTecnica[3]; ?></p>
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
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Formas de parcelamento</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a href="" class="nav-link active" href="#">Cartão de crédito</a>
                                            </li>
                                        
                                        </ul>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1x</th>
                                                    <td>de R$ 379,99</td>
                                                    <td>sem juros</td>
                                                    <td>total R$ 379,99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2x</th>
                                                    <td>de R$ 189,99</td>
                                                    <td>sem juros</td>
                                                    <td>total R$ 379,99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3x</th>
                                                    <td>de R$ 126,99</td>
                                                    <td>sem juros</td>
                                                    <td>total R$ 379,99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4x</th>
                                                    <td>de R$ 94,99</td>
                                                    <td>sem juros</td>
                                                    <td>total R$ 379,99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5x</th>
                                                    <td>de R$ 81,29</td>
                                                    <td>com juros de 2,29 % a.m.</td>
                                                    <td>total R$ 406,48</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">6x</th>
                                                    <td>de R$ 68,50</td>
                                                    <td>com juros de 2,29 % a.m.</td>
                                                    <td>total R$ 411,02</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">7x</th>
                                                    <td>de R$ 59,36</td>
                                                    <td>com juros de 2,29 % a.m.</td>
                                                    <td>total R$ 415,58</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">8x</th>
                                                    <td>de R$ 52,52</td>
                                                    <td>com juros de 2,29 % a.m.</td>
                                                    <td>total R$ 420,18</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">9x</th>
                                                    <td>de R$ 47,20</td>
                                                    <td>com juros de 2,29 % a.m.</td>
                                                    <td>total R$ 424,81</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">10x</th>
                                                    <td>de R$ 42,94</td>
                                                    <td>com juros de 2,29 % a.m.</td>
                                                    <td>total R$ 429,47</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">11x</th>
                                                    <td>de R$ 39,46</td>
                                                    <td>com juros de 2,29 % a.m.</td>
                                                    <td>total R$ 434,16</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">12x</th>
                                                    <td>de R$ 36,57</td>
                                                    <td>com juros de 2,29 % a.m.</td>
                                                    <td>total R$ 438,89</td>
                                                </tr>
                                    
                                            </tbody>

                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
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
    

     











        </main>






    </body>
    <?php include_once('utils/footer.php');?>
</html>