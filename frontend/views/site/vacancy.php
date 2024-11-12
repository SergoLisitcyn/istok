<section class="vacancy-heading heading">
    <div class="container">
        <div class="heading__row">
            <h1 class="heading__title">Вакансии</h1>
        </div>
    </div>
</section>

<section class="vacancy">
    <div class="container">
        <div class="vacancy__row section-row">
            <p class="vacancy__descr section-descr">Команда опытных и квалифицированных сотрудников – это фундамент успеха компании «Исток».</p>
            <div class="vacancy__columns uni-columns uni-columns-margin">
                <div class="uni-columns__columns">
                    <div class="uni-columns__col">
                        <div class="uni-columns__title">Мы расширяем штат специалистов, приглашая на работу:</div>
                        <ul class="uni-columns__list uni-list">
                            <li class="uni-list__item">
                                <div class="uni-list__image">
                                    <img src="img/check.svg" alt="Check">
                                </div>
                                <p class="uni-list__text">каменщиков;</p>
                            </li>
                            <li class="uni-list__item">
                                <div class="uni-list__image">
                                    <img src="img/check.svg" alt="Check">
                                </div>
                                <p class="uni-list__text">облицовщиков, плиточников;</p>
                            </li>
                            <li class="uni-list__item">
                                <div class="uni-list__image">
                                    <img src="img/check.svg" alt="Check">
                                </div>
                                <p class="uni-list__text">сварщиков;</p>
                            </li>
                            <li class="uni-list__item">
                                <div class="uni-list__image">
                                    <img src="img/check.svg" alt="Check">
                                </div>
                                <p class="uni-list__text">электромонтажников и электриков;</p>
                            </li>
                            <li class="uni-list__item">
                                <div class="uni-list__image">
                                    <img src="img/check.svg" alt="Check">
                                </div>
                                <p class="uni-list__text">маляров, штукатуров, шпатлевщиков;</p>
                            </li>
                            <li class="uni-list__item">
                                <div class="uni-list__image">
                                    <img src="img/check.svg" alt="Check">
                                </div>
                                <p class="uni-list__text">сантехников.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="uni-columns__col uni-columns__col--image">
                        <img class="uni-columns__image" src="img/vacancy.jpg" alt="Vacancy">
                    </div>
                </div>
                <div class="uni-image--mobile"></div>
            </div>
            <p class="vacancy__postscript uni-postscript uni-postscript-margin">Компания гарантирует легальное трудоустройство, безопасные условия работы и конкурентную зарплату. Полный перечень актуальных вакансий, а также точные требования к соискателям можно узнать, связавшись с отделом персонала по телефону, указанному в «Контактах».</p>
        </div>
    </div>
</section>

<section class="registration">
    <div class="container">
        <div class="registration__row section-row">
            <h2 class="registration__title">Присоединяйтесь к нашей команде, <br>
                зарабатывайте и стройте свое будущее вместе с нами!</h2>
            <p class="registration__caption">Расскажите нам о себе, и мы обязательно свяжемся с вами.</p>
            <form class="registration__form registration-form">
                <div class="registration-form__fields">
                    <div class="registration-form__field">
                        <input type="text" name="name" id="name" class="registration-form__elem name" required="" autocomplete="off" minlength="2" placeholder="Введите ваше имя">
                    </div>
                    <div class="registration-form__field">
                        <input type="tel" name="phone" id="phone" class="registration-form__elem phone" required="" autocomplete="off" placeholder="Введите ваш телефон">
                    </div>
                    <div class="registration-form__field">
                        <input type="email" name="email" id="email" class="registration-form__elem email" required="" autocomplete="off" placeholder="Введите ваш email">
                    </div>
                    <div class="registration-form__field">
                        <div class="registration-form-select registration-form__elem">
                            <div class="registration-form-select__select">
                                <i class="registration-form-select__icon" aria-hidden="true"></i>
                                <span class="registration-form-select__span">Физическое лицо</span>
                            </div>
                            <input class="registration-form-select__input" type="hidden">
                            <ul class="registration-form-select__options">
                                <li class="registration-form-select__option">Физическое лицо</li>
                                <li class="registration-form-select__option">Юридическое лицо</li>
                            </ul>
                        </div>
                        <i class="registration-form__icon"></i>
                    </div>
                    <div class="registration-form__field">
                        <textarea class="registration-form__elem" rows="1" name="textarea" placeholder="Комментарий" autocomplete="off"></textarea>
                    </div>
                    <div class="registration-form__field">
                        <div class="registration-form__dropzone registration-form-dropzone">
                            <div class="registration-form-dropzone__body">
                                <div class="registration-form-dropzone__row">
                                    <div class="registration-form-dropzone__input">
                                        <input type="file" name="file" class="file-upload-input"
                                               onchange="readURL(this);" accept=".pdf,.docx,.doc">
                                    </div>
                                    <div class="registration-form-dropzone__title">
                                        Прикрепить резюме (pdf, doc)
                                    </div>
                                </div>
                                <div class="vacancy__dropzone-upload registration-form-dropzone__upload">
                                    <div class="registration-form-dropzone__message">
                                        <img class="registration-form-dropzone__image" src="img/form-check.svg" alt="Ваше резюме">
                                        <div class="registration-form-dropzone__text">Ваше резюме загружено</div>
                                    </div>
                                    <div class="registration-form-dropzone__remove-wrap">
                                        <button type="button" onclick="removeUpload()"
                                                class="registration-form-dropzone__remove">Удалить <span class="registration-form-dropzone__remove-title">Uploaded Image</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="registration-form__columns">
                        <p class="registration-form__descr">Нажимая на кнопку «Отправить заявку» Вы даете согласие на обработку своих персональных данных.</p>
                        <button type="submit" class="registration-form__button">Отправить заявку</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>