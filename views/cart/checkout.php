<?php include ROOT.'/views/layouts/header.php'; ?>

	<!-- Main -->
	<div id="main">
		<div class="cl">&nbsp;</div>
		
		<!-- Content -->
		<div id="content">
                    <h2 class="last-product">КОРЗИНА</h2>
                    <?php if ($result): ?>
                        <p>Заказ оформлен. Мы Вам перезвоним.</p>
                    <?php else: ?>

                        <p>Выбрано товаров: <?php echo $totalQuantity; ?>, на сумму: <?php echo $totalPrice; ?>, грн</p><br/>

                        <?php if (!$result): ?>                        

                            <div class="col-sm-4">
                                <?php if (isset($errors) && is_array($errors)): ?>
                                    <ul>
                                        <?php foreach ($errors as $error): ?>
                                            <li> - <?php echo $error; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <p>Для оформления заказа заполните форму. Наш менеджер свяжется с Вами.</p>

                                <div class="login-form">
                                    <form action="#" method="post">

                                        <p>Ваша имя</p>
                                        <input type="text" name="userName" placeholder="" value="<?php echo $userName; ?>"/>

                                        <p>Номер телефона</p>
                                        <input type="text" name="userPhone" placeholder="" value="<?php echo $userPhone; ?>"/>

                                        <p>Комментарий к заказу</p>
                                        <input type="text" name="userComment" placeholder="Сообщение" value="<?php echo $userComment; ?>"/>

                                        <br/>
                                        <br/>
                                        <input type="submit" name="submit" class="btn btn-default" value="Оформить" />
                                    </form>
                                </div>
                            </div>

                        <?php endif; ?>

                    <?php endif; ?>

			
		</div>
		<!-- End Content -->
		
		<!-- Sidebar -->
		<div id="sidebar">

                    <!-- Categories -->
                    <div class="box categories">
                            <h2>Категории <span></span></h2>
                            <div class="box-content">
                                <ul>
                                    <!--
                                    Для определения последней записи в категории
                                    введен счетчик $count. На каждой итерации
                                    в цикле $count увеличивается на 1. По
                                    достижении $count == count($siteCategory)
                                    для <li> подключается класс last
                                    -->
                                    <?php $count = 1; ?>
                                    <?php foreach($categories as $nameCategory): ?>
                                        <?php if($count < $countLine): ?>
                                            <li>
                                        <?php else: ?>
                                            <li class="last">
                                        <?php endif; ?>
                                        <?php $count++ ;?>
                                            <a href="/category/<?php echo $nameCategory['id']; ?>">
                                                <?php echo $nameCategory['name']; ?>
                                            </a>
                                            </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                    </div>
                    <!-- End Categories -->
			
		</div>
		<!-- End Sidebar -->
		
		<div class="cl">&nbsp;</div>
	</div>
	<!-- End Main -->

<?php include ROOT.'/views/layouts/footer.php'; ?>