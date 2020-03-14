<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PLUSБОНУС</title>
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main style File -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Media Queries File -->
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/style-form.css">
    <!-- Bootstrap4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <header class="header">
        <div class="container">
            <div class="header__title">PLUS<span class="header__title--bold">БОНУС</span></div>
            <div class="header__subtitle">купил - бонус получил</div>
            <div class="header__place"></div>
        </div>
        <!-- /.container -->
    </header>
    <!-- /.header -->

    <main class="main">
        <div class="container">
            <div class="open-authorization__btn open-btn">
                Активировать бонус
            </div>

            <!-- registration form -->
            <form action="reg.php" method="post" class="reg__form data-form hide">
                <div class="form__title">Авторизация</div>

                <input type="text" name="phone" placeholder="Телефон..." />

                <input type="text" name="email" placeholder="E-mail..." /> <br>

                <input type="checkbox" id="checkbox" />
                <label for="checkbox"><span class="ui"></span></label><label for="">согласие с условиями</label>

                <div class="come-in__wrap">
                    <input type="submit" value="Выслать sms-код подтверждения" class="confirm-phone__btn">
                </div>
            </form>
            <!-- end registration form -->

            <!-- promocode form -->
            <form action="reg.php" method="post" class="promocode__form data-form hide">
                <div class="form__title">Активация бонуса</div>

                <input type="text" name="phone" placeholder="Промокод..." />

                <div class="come-in__wrap">
                    <input type="submit" value="Открыть приз" class="confirm-phone__btn">
                </div>
            </form>
            <!-- end promocode form -->
        </div>
        <!-- /.container -->
    </main>
    <!-- /.main -->

    <footer class="footer">
        <div class="container">
            <div class="open-partner__btn open-btn">
                Стать партнёром
            </div>
            <!-- feedback form -->
            <form action="reg.php" method="post" class="feedback__form data-form hide">
                <div class="form__title">Стать партнёром</div>

                <input type="text" name="phone" placeholder="Ваше имя..." />

                <input type="text" name="email" placeholder="Телефон..." />

                <input type="text" name="email" placeholder="E-mail..." />

                <textarea type="text" name="message" placeholder="Сообщение..." class="feedback__textarea"></textarea>

                <div class="come-in__wrap">
                    <input type="submit" value="Отправить предложение" class="confirm-phone__btn">
                </div>
            </form>
            <!-- end feedback form -->
        </div>
        <!-- /.container -->
    </footer>
    <!-- /.footer -->

    <!-- JQuery connection -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <!-- Bootstrap4 connection -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!-- Other scripts -->
    <script>
        var btnToRegForm = document.querySelector('.open-authorization__btn'),
            btnToFeedbackForm = document.querySelector('.open-partner__btn'),
            regForm = document.querySelector('.reg__form'),
            feedbackForm = document.querySelector('.feedback__form');

        btnToRegForm.addEventListener('click', openRegForm);
        btnToFeedbackForm.addEventListener('click', openFeedbackForm);

        function openRegForm() {
            regForm.classList.remove('hide');
            btnToRegForm.classList.add('hide');
            feedbackForm.classList.add('hide');
            btnToFeedbackForm.classList.remove('hide');
        }

        function openFeedbackForm() {
            feedbackForm.classList.remove('hide');
            btnToFeedbackForm.classList.add('hide');
            regForm.classList.add('hide');
            btnToRegForm.classList.remove('hide');
        }
    </script>

</body>

</html>