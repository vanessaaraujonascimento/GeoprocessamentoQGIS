<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Apresentacao';
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>

        <div class="main-content container-fluid" id="#Apresentacao">
            <!-- Begin main-content -->
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title Texto">


                        <h2 class="Titulo">Apresentação</h2>
                        <hr>

                        <!-- Início Banner -->
                        <div class="text-center">
                            <a href="imagens/banner.jpg" data-bs-toggle="modal" data-bs-target="banner">
                                <img class="img-fluid wow fadeInLeft" src="imagens/banner.jpg" alt="Banner">
                            </a>
                        </div>
                        <!-- Fim Banner -->
                        <br>

                        <p><strong class="TextoBold">Bem-vindo(a) ao Módulo 04 do Curso de Cartografia Básica e Introdução ao Geoprocessamento com QGIS!</strong></p>
                        <p>Esperamos que você se dedique ao curso e tenha um bom aproveitamento!</p>
                        <br>

                        <br><br><br>

                        <!-- SCRIPT LIGHTBOX -->
                        <script>
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            });

                            $(function() {
                                $('[data-toggle="tooltip"]').tooltip()
                            });

                            $(function() {
                                $('.example-popover').popover({
                                    container: 'body'
                                })
                            });
                        </script>

                    </div> <!-- End page-title -->
                </div> <!-- End page-title -->

                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <br>
            <br>

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- End main-content -->


        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>