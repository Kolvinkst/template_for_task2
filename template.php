<?php
/**
 * @var array $arResult
 */

?>
<!DOCTYPE html>
<html lang="ru">
<head><title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/favicon.604825ed.ico" type="image/x-icon">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="contact-form">
    <div class="contact-form__head">
        <?php
        echo "<div class='contact-form__head-title'>" . $arResult["FORM_TITLE"] . "</div>";
        ?>
        <?php
        echo "<div class='contact-form__head-text'>" . $arResult["FORM_DESCRIPTION"] . "</div>";
        ?>
    </div>
    <?=$arResult["FORM_HEADER"]?>
    <div class="contact-form__form">
        <div class="contact-form__form-inputs">
            <?php
            foreach ($arResult["QUESTIONS"] as $arQuestion) {
                $q_type=$arQuestion['STRUCTURE'][0]['FIELD_TYPE'];
                switch($q_type) {
                    case 'text':
                        echo  "<div class='input contact-form__input'>" . "<label class='input__label'>"
                               . "<div class='input__label-text'>" . $arQuestion['CAPTION'] . "</div>"
                                . "<input class='input__input' type='text'>"
                                . "<div class='input__notification'>" . "Поле должно содержать не менее 3-х символов"
                                . "</div>" . "</label>" . "</div>";
                    case 'email':
                        echo  "<div class='input contact-form__input'>" . "<label class='input__label'>"
                        . "<div class='input__label-text'>" . $arQuestion['CAPTION'] . "</div>"
                . "<input class='input__input' type='email'>"
                . "<div class='input__notification'>" . "Неверный формат почты" . "</div>" . "</label>" . "</div>";
                    case 'textarea':
                        echo  "<div class='contact-form__form-message'>"
                            . "<div class='input'>" . "<label class='input__label'>"
                            . "<div class='input__label-text'>" . $arQuestion['CAPTION'] . "</div>"
                            . "<textarea class='input__input' type='text'>" . "</textarea>"
                            . "<div class='input__notification'>" . "</div>"
                            . "</label>" . "</div>"
                            . "</div>";

                }
            }
                ?>

        <div class="contact-form__bottom">
            <div class="contact-form__bottom-policy">Нажимая &laquo;Отправить&raquo;, Вы&nbsp;подтверждаете, что
                ознакомлены, полностью согласны и&nbsp;принимаете условия &laquo;Согласия на&nbsp;обработку персональных
                данных&raquo;.
            </div>
            <button class="form-button contact-form__bottom-button" data-success="Отправлено"
                    data-error="Ошибка отправки">
                <div class="form-button__title">Оставить заявку</div>
            </button>
        </div>
</div>
<?=$arResult["FORM_FOOTER"]?>
</div>
</body>
</html>
