<?php $this->load->view('frontend/cuestionarios/template/test-header') ?>
<?php $this->load->view('frontend/cuestionarios/template/style-test') ?>
<?php
$bg = ['0', '2', '3', '4', '5'];
$lenght = 100 / (count($listar));
?>
<!-- <php echo '<pre>';
    print_r($listar);
    echo '</pre>';
    exit();
    ?> -->


<div class="wrapper position-relative overflow-hidden">
    <div class="container-md-fluid p-3 p-lg-0">
        <div class="row">
            <div class="col-xl-4">
                <div class="form_logo position-absolute">
                    <a href="index-2.html">
                        <img src="<?= base_url('assets/plantilla-test/') ?>assets/images/logo/logo-main.png" alt="image-not-found">
                    </a>
                </div>
                <div class="steps_area step_area_fixed d-none d-xl-block">
                    <div class="image_holder">
                        <img class="overflow-hidden" src="<?= base_url('assets/plantilla-test/') . 'assets/images/background/bg_' . $bg[array_rand($bg)] . '.png' ?>" alt="image-not-found">
                    </div>
                    <div class="progress_bar step_items position-absolute" style="display: none;">
                        <div class="step d-block text-center bg-white position-relative active current">1</div>
                        <div class="step d-block text-center bg-white position-relative">2
                        </div>
                        <div class="step d-block text-center bg-white position-relative">3
                        </div>
                        <div class="step d-block text-center bg-white position-relative last">4
                        </div>
                        <div class="step d-block text-center bg-white position-relative active current">1</div>
                        <div class="step d-block text-center bg-white position-relative">2
                        </div>
                        <div class="step d-block text-center bg-white position-relative">3
                        </div>
                        <div class="step d-block text-center bg-white position-relative last">4
                        </div>
                    </div>
                    <div class="count_box d-flex flex-row mt-5 rounded-pill position-absolute">
                        <div class="count_clock ps-3">
                            <img src="<?= base_url('assets/plantilla-test/') ?>assets/images/clock/clock.png" alt="image-not-fops-5 pt-5und">
                        </div>
                        <div class="count_title px-2">
                            <h4 class="text-white pe-5">Test</h4>
                            <span class="text-white">Tiempo</span>
                        </div>
                        <div class="count_number p-3 d-flex justify-content-around align-items-center position-relative overflow-hidden bg-white rounded-pill timer countdown_timer" data-countdown="2022/10/24">
                            <div class="count_hours">
                                <h3>%H</h3><span class="text-uppercase">hrs</span>
                            </div>
                            <div class="count_min">
                                <h3>%M</h3><span class="text-uppercase">min</span>
                            </div>
                            <div class="count_sec">
                                <h3>%S</h3><span class="text-uppercase">sec</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 ">
                <form class="multisteps_form" id="wizard" method="POST" action="<?= base_url(Hasher::make(33)) ?>">
                    <button type="submit" class="btn btn-primary">Button</button>
                    <div class="multisteps_form_panel active">
                        <div class="form_content">
                            <div class="step_content d-block pt-5 pb-2">
                                <h4 class="text-center">TEST DE ORIENTACIÓN VOCACIONAL</h4>
                                <div class="question_title d-block justify-content-center">
                                    <img class="d-flex m-auto img-test-logo" src="<?= base_url('assets/plantilla-test/' . 'assets/images/item-img/test.gif') ?>" alt="">
                                    <h2 class="d-flex m-auto">
                                        <!-- <h5 style="width:80%;margin:auto;max-width:800px;"><br> I) <br> II) <br> </h5> -->
                                        <ol>
                                            <li>Lee atentamente cada pregunta. </li>
                                            <li>Seleciona "SI" si tu respuesta es afirmativa, caso contrario selecciona "NO". </li>
                                            <li>Responde a todas las preguntas sin omitir ninguna.</li>
                                        </ol>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <!-- Form-btn -->
                        <div class="form_btn d-flex justify-content-center">
                            <button type="button" class="js-btn-next next_btn  text-uppercase text-white" id="iniciar">Iniciar test<span> <i class="fas fa-arrow-right"></i></span></button>
                        </div>
                    </div>
                    <?php foreach ($listar as $key =>  $item) : ?>
                        <input type="hidden" name="idest" value="<?= $idest; ?>">
                        <input type="hidden" name="idpreg[]" value="<?= $item->idpreguntas; ?>">
                        <div class="multisteps_form_panel active undefined d-block <?= $key == 0 ? '' : '' ?>">
                            <div class="form_content">
                                <div class="step_content d-flex justify-content-between pt-5 pb-2">
                                    <h4>TEST DE ORIENTACIÓN VOCACIONAL</h4>
                                    <span class="text-end text-uppercase"><?= 'pregunta ' . ($key + 1) . ' de ' . count($listar) ?></span>
                                </div>
                                <div class="step_progress_bar">
                                    <div class="progress rounded-pill">
                                        <div class="progress-bar" style="width:<?= ($lenght * ($key + 1)) . '%' ?>"></div>
                                    </div>
                                </div>
                                <div class="question_title py-4">
                                    <h2 class="text-capitalize"><?= $item->nom_pregunta ?></h2>
                                </div>
                                <div class="row">
                                    <div class="az-time count_box flex-row rounded-pill">
                                        <div class="count_clock ps-3">
                                            <img src="<?= base_url('assets/plantilla-test/') ?>assets/images/clock/clock.png" alt="image-not-fops-5 pt-5und">
                                        </div>
                                        <div class="count_title px-2">
                                            <span class="text-white">Tiempo</span>
                                        </div>
                                        <div class="count_number p-3 d-flex justify-content-around align-items-center position-relative overflow-hidden bg-white rounded-pill timer countdown_timer" data-countdown="2022/10/24">
                                            <div class="count_hours">
                                                <h3>%H</h3><span class="text-uppercase">hrs</span>
                                            </div>
                                            <div class="count_min">
                                                <h3>%M</h3><span class="text-uppercase">min</span>
                                            </div>
                                            <div class="count_sec">
                                                <h3>%S</h3><span class="text-uppercase">sec</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 form_items radio-list justify-content-center mt-3">
                                    <div class="col-6">
                                        <label id="opt_1" class="step_1 d-flex flex-column bg-white text-center animate__animated animate__fadeInRight animate_25ms">
                                            <div class="step_box_icon">
                                                <img src="<?= base_url('assets/plantilla-test/') ?>assets/images/item-img/item_4.png" alt="image-not-found">
                                            </div>
                                            <span class="step_box_text pt-2">Si</span>
                                            <p class="step_box_desc">Si, estaría dispuesto</p>
                                            <input for="opt_1" type="radio" class="required" name="respuesta<?= $item->idpreguntas; ?>" value="1">
                                        </label>
                                    </div>
                                    <div class="col-6">
                                        <label id="opt_2" class="step_1 d-flex flex-column bg-white text-center animate__animated animate__fadeInRight animate_50ms">
                                            <div class="step_box_icon"><img src="<?= base_url('assets/plantilla-test/') ?>assets/images/item-img/item_0.png" alt="image-not-found">
                                            </div>
                                            <span class="step_box_text pt-2">No</span>
                                            <p class="step_box_desc">No, no me interesa</p>
                                            <input for="opt_2" type="radio" name="respuesta<?= $item->idpreguntas; ?>" value="0">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Form-btn -->
                            <!-- <div class="form_btn pt-5 d-flex justify-content-between">
                                <button type="button" class="js-btn-next next_btn text-uppercase text-white" id="nextBtn">Next
                                    Question <span><i class="fas fa-arrow-right"></i></span></button>
                            </div> -->
                            <div class="form_btn pt-5 d-flex justify-content-between">
                                <?php if ($item !== reset($listar)) : ?>
                                    <button type="button" class="js-btn-prev prev_btn text-uppercase bg-white" id="prevBtn"><i class="fas fa-arrow-left"></i> anterior <span>pregunta</span></button>
                                <?php endif ?>
                                <button type="<?= $item == end($listar) ? 'submit' : 'button' ?>" class="js-btn-next next_btn text-uppercase text-white" id="nextBtn">Siguiente
                                    <span>pregunta</span> <i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    <?php endforeach ?>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('frontend/cuestionarios/template/test-footer') ?>