<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Free CSS template by ChocoTemplates.com</title>
	<link rel="stylesheet" href="/template/css/style.css" type="text/css" media="all" />
	<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
	
	<meta name="keywwords" content="Shop Around - Great free html template for on-line shop. Use it as a start point for your on line business. The template can be easily implemented in many open source E-commerce platforms" />
	<meta name="description" content="Shop Around - Great free html template for on-line shop. Use it as a start point for your on line business. The template can be easily implemented in many open source E-commerce platforms" />
	
	<!-- JS -->
	<script src="/template/js/jquery-1.4.1.min.js" type="text/javascript"></script>	
	<script src="/template/js/jquery.jcarousel.pack.js" type="text/javascript"></script>	
	<script src="/template/js/jquery-func.js" type="text/javascript"></script>	
	<!-- End JS -->
	
</head>
<body>
	
<!-- Shell -->	
<div class="shell">
	
	<!-- Header -->	
	<div id="header">
		<h1 id="logo"><a href="#">shoparound</a></h1>
		
		<!-- Cart -->
		<div id="cart">
			<a href="/cart/" class="cart-link">Корзина покупок</a>
			<div class="cl">&nbsp;</div>
			<span>Товаров: <strong><?php echo Cart::countItems(); ?></strong></span>
			&nbsp;&nbsp;
		</div>
		<!-- End Cart -->
		
		<!-- Navigation -->
		<div id="navigation">
			<ul>
			    <li><a href="/index.php/">Главная</a></li>
                            <li><a href="/catalog/index/">Каталог</a></li>
			    <!--<li><a href="#">Контакты</a></li>-->
                            <!--<li><a href="#">О магазине</a></li>-->
                            <?php if(User::isGuest()): ?>
                                <li><a href="/user/login/">Вход</a></li>
                            <?php else: ?>
                                <li><a href="/cabinet/">Аккаунт</a></li>
                                <li><a href="/user/logout/">Выход</a></li>
                            <?php endif; ?>
			</ul>
		</div>
		<!-- End Navigation -->
	</div>
	<!-- End Header -->
