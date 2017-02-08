<?php

class SiteController {
    
    public function actionIndex(){
        
        // Получаем список категорий для главной страницы сайта (index.html)
        $siteCategory = Category::getCategoriesList();
        
        // Список последних товаров
        $latestProducts = Product::getLatestProducts(6);
        
        // Получаем количество записей в таблице product
        $countLine = Count::getCountLineInTable();
        
        require_once (ROOT.'/views/site/index.php');
        return true;
    }
}
