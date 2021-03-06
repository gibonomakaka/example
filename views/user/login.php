<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">

                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <div class="signup-form"><!--sign up form-->
                    <h2>Вход на сайт</h2>
                    <form action="#" method="post">
                        <p><input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/></p>
                        <p><input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/></p>
                        <p><input type="submit" name="submit" class="btn btn-default" value="Вход" /></p>
                    </form>
                    <a href="/user/register/">Регистрация</a>
                </div><!--/sign up form-->


                <br/>
                <br/>
            </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>