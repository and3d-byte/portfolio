<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php' ?>
</head>

<body>
    <style>
        .col-lg-6 {
            padding: 0px 5px;
        }
    </style>
    <?php include 'header.php' ?>
    <div class="site-container mt-2">
        <div class="site-content">
            <main>
                <div class="container">
                    <section>
                        <h3>Lorem ipsum dolor sit amet</h3>
                        <div class="project-modules">
                            <div id="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut animi odio illo sed vero voluptates laboriosam amet maxime maiores saepe quia quaerat quibusdam incidunt officiis labore corrupti, dolore magnam nihil.</div>
                            <div class="container-fluid py-4">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6 mb-1">
                                        <a href="#modal-center" uk-toggle>
                                            <figure><img src="./assets/img/teste1.jpg" alt="" class="w-100 h-100"></figure>
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6 mb-1">
                                        <figure><img src="./assets/img/teste2.jpg" alt="" class="w-100 h-100"></figure>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6 mb-1">
                                        <figure><img src="./assets/img/teste3.jpg" alt="" class="w-100 h-100"></figure>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6 mb-1">
                                        <figure><img src="./assets/img/teste4.jpg" alt="" class="w-100 h-100"></figure>
                                    </div>
                                </div>
                            </div>
                            <div id="modal-center" class="uk-flex-top" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical" style="background: transparent !important;">

                                    <button class="uk-modal-close-default" type="button" uk-close></button>

                                    <img src="./assets/img/teste1.jpg" alt="" class="w-100 h-100">
                                </div>
                            </div>
                        </div>
                </div>
                </section>
        </div>
        </main>
    </div>
    </div>
</body>

</html>