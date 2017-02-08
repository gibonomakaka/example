<?php include ROOT.'/views/layouts/header.php'; ?>

	<!-- Main -->
	<div id="main">
		<div class="cl">&nbsp;</div>
		
		<!-- Content -->
		<div id="content">
                    <h2 class="last-product">КОРЗИНА</h2>
                    <?php if($productsInCart): ?>
                    <p>Вы выбрали следующие товары:</p>
                        <table class="table-bordered">
                            <tr>
                                <th>Код товара</th>
                                <th>Название</th>
                                <th>Стомость, грн</th>
                                <th>Количество, шт</th>
                                <th>Удалить</th>
                            </tr>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td><?php echo $product['code'];?></td>
                                    <td>
                                        <a href="/product/<?php echo $product['id'];?>">
                                            <?php echo $product['name'];?>
                                        </a>
                                    </td>
                                    <td><?php echo $product['price'];?></td>
                                    <td><?php echo $productsInCart[$product['id']];?></td> 
                                    <td>
                                        <a href="/cart/delete/<?php echo $product['id'];?>">
                                            удалить
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                <tr>
                                    <td colspan="4">Общая стоимость, грн:</td>
                                    <td><?php echo $totalPrice;?></td>
                                </tr>
                            
                        </table>
                        <a class="btn btn-default checkout" href="/cart/checkout"><i class="fa fa-shopping-cart"></i> Оформить заказ</a>
                        
                    <?php else: ?>
                        <p>Корзина пустая</p>
                        <a class="" href="/" >Вернуться к покупкам</a>
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