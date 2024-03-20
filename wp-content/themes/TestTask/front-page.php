<?php get_header(); ?>
<div class="container" style="padding-top: 15px; padding-bottom: 15px">
    <div class="row vh-100 align-content-xl-center align-items-xl-center justify-content-center">
        <div class="col-xl-7 col-sm-12 col-md-9 d-flex align-items-center innovation-promo" style="position: relative;">
            <div class="d-none d-xl-block">
                <img class="innovation-promo__image-container" src="<?= get_field('innovation-promo__image-container'); ?>" alt="Background Image">
                <img class="innovation-promo__avatar-1" src="<?= get_field('innovation-promo__avatar-1'); ?>" alt="avatar">
                <img class="innovation-promo__avatar-2" src="<?= get_field('innovation-promo__avatar-2'); ?>" alt="avatar">
            </div>
            <h1 class="custom-title fw-semibold col-xl-12">Ми завжди готові запропонувати інноваційні та альтернативні
                шляхи лікування зубів</h1>
        </div>

        <div class="col-xl-4 col-sm-12 col-md-9">
            <div class="feedback-form rounded py-4">
                <div class="container">
                    <h6 class="custom-text-22 text-center">Заповніть форму та отримайте професійну консультацію</h6>
                    <form action="" id="form" class="container">
                        <div class="mb-2 form-item">
                            <label for="name" class="col-form-label">Ваше ім'я</label>
                            <input type="text" id="name" name="name" class="form-input" placeholder="Вкажіть Ваше ім’я" required>
                            <span id="name-error" class="text-danger">Вкажіть Ваше ім’я</span>
                        </div>
                        <div class="mb-2 form-item">
                            <label for="phone" class="col-form-label">Ваш телефон</label>
                            <input type="tel" id="phone" name="phone" class="form-input" placeholder="" required>
                            <span id="phone-error" class="text-danger">Вкажіть номер телефону</span>
                        </div>
                        <div class="mb-4 form-item">
                            <label for="email" class="col-form-label">Ваш e-mail</label>
                            <input type="email" id="email" name="email" class="form-input" placeholder="email@gmail.com">
                            <span id="email-error" class="text-danger">Введіть коректну електронну адресу</span>
                        </div>
                        <textarea id="issue" name="issue" class="form-textarea mb-4" rows="5" placeholder="Коротко опишіть проблему,
яку хочете вирішити"></textarea>

                        <button id="submitBtn" class="form-submit mb-2" type="submit">
                            <div class="spinner-border d-none" role="status">
                                <span class="sr-only"></span>
                            </div>
                            <span class="btn-text">Надіслати</span>
                        </button>
                        <p class="form-consent-text">Натискаючи на кнопку, я даю згоду <br/>на
                            <ins>обробку персональних даних</ins>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span class="modal-close-span">Закрити</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-rocket mb-2">
                    <img class="modal-rocket-img" src="<?= get_field('modal-rocket'); ?>" alt="rocket">
                </div>
                <p class="modal-request-sent mb-4">Ваш запит надіслано</p>
                <h5 class="modal-title" id="exampleModalLabel">Дякуємо, </br>
                    що довіряєте!</h5>
            </div>
        </div>
    </div>
</div>
