<?php include ROOT.'/views/layouts/header.php'; ?>

	<!-- Main -->
	<div id="main">
		<div class="cl">&nbsp;</div>
		
		<!-- Content -->
		<div id="content">
			
			<!-- Content Slider -->
			<div id="slider" class="box">
				<div id="slider-holder">
					<ul>
					    <li><a href="#"><img src="/template/css/images/slide1.jpg" alt="" /></a></li>
					    <li><a href="#"><img src="/template/css/images/slide1.jpg" alt="" /></a></li>
					    <li><a href="#"><img src="/template/css/images/slide1.jpg" alt="" /></a></li>
					    <li><a href="#"><img src="/template/css/images/slide1.jpg" alt="" /></a></li>
					</ul>
				</div>
				<div id="slider-nav">
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
				</div>
			</div>
			<!-- End Content Slider -->
			
			<!-- Products -->
			<div class="products">
				<div class="cl">&nbsp;</div>
                                <h2 class="last-product">Последние товары</h2>
				<ul>
                                    <?php $count = 0;
                                    foreach ($latestProducts as $product): ?>
                                        <?php if ($count % 3 == 0 || $count >= Product::SHOW_BY_DEFAULT): ?>
                                            <li class="last">
                                        <?php else: ?>
                                              <li>
                                        <?php endif; ?>
                                                <a href="/product/<?php echo $product['id']; ?>"><img src="/template<?php echo $product['image']; ?>" alt="" /></a>
                                                <div class="product-info">
                                                    <h3><?php echo $product['name']; ?></h3>
                                                    <div class="product-desc">
                                                                <h4>Тип одежды: <?php echo $product['sex']; ?></h4>
                                                                <p>Бренд: <?php echo $product['brand']; ?> </p>
                                                                <p>Артикул: <?php echo $product['code']; ?> </p>
                                                                <strong class="price"><?php echo $product['price']; ?> грн.</strong>
                                                        </div>
                                                        <p class="btn"><a href="/cart/add/<?php echo $product['id']; ?>" class="add-to-cart" data-id="<?php echo $product['id']; ?>">В корзину</a></p>
                                                </div>
                                            </li>
                                    <?php $count++;
                                    endforeach; ?>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Products -->
			
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
                                    <?php foreach($siteCategory as $nameCategory): ?>
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
	
	<!-- Side Full -->
	<div class="side-full">
		
		<!-- More Products -->
		<div class="more-products">
			<div class="more-products-holder">
				<ul>
				    <li><a href="#"><img src="/template/css/images/small1.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="/template/css/images/small2.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="/template/css/images/small3.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="/template/css/images/small4.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="/template/css/images/small5.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="/template/css/images/small6.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="/template/css/images/small7.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="/template/css/images/small1.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="/template/css/images/small2.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="/template/css/images/small3.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="/template/css/images/small4.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="/template/css/images/small5.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="/template/css/images/small6.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="/template/css/images/small7.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="/template/css/images/small1.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="/template/css/images/small2.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="/template/css/images/small3.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="/template/css/images/small4.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="/template/css/images/small5.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="/template/css/images/small6.jpg" alt="" /></a></li>
				    <li class="last"><a href="#"><img src="/template/css/images/small7.jpg" alt="" /></a></li>
				</ul>
			</div>
			<div class="more-nav">
				<a href="#" class="prev">previous</a>
				<a href="#" class="next">next</a>
			</div>
		</div>
		<!-- End More Products -->
		
		<!-- Text Cols -->
		<div class="cols">
			<div class="cl">&nbsp;</div>
			<div class="col">
				<h3 class="ico ico1">Donec imperdiet</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
				<p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
			</div>
			<div class="col">
				<h3 class="ico ico2">Donec imperdiet</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
				<p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
			</div>
			<div class="col">
				<h3 class="ico ico3">Donec imperdiet</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
				<p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
			</div>
			<div class="col col-last">
				<h3 class="ico ico4">Donec imperdiet</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
				<p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
			</div>
			<div class="cl">&nbsp;</div>
		</div>
		<!-- End Text Cols -->
		
	</div>
	<!-- End Side Full -->
	
	
<?php include ROOT.'/views/layouts/footer.php'; ?>