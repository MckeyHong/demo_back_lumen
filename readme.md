# Lumen 研究實作

* PHP版本：5.6.4
* 框架版本：5.3.x



## 專案目錄說明

* app/
	* Http / Controllers : 接收 HTTP request 及 驗證傳遞參數(validate)
	* Entities : Eloquent class
	* Repositories : 處理資料庫邏輯
	* Services : 處理商業邏輯
* routes/
	* web.php : 路由設定(移除原本 app/Http/routes.php)。  


## 專案使用套件說明

### require

* [arubacao/http-basic-auth-guard](https://packagist.org/packages/arubacao/http-basic-auth-guard) : HTTP 身份驗證
	* 版本 : 1.0
* [flipbox/lumen-generator](https://packagist.org/packages/flipbox/lumen-generator) : 使用 Laravel 有內建但 Lumen 未內建的 generator command (Ex. php artisan key:generate)
	* 版本 : 5.3 
* [illuminate/routing](https://packagist.org/packages/illuminate/routing) : 路由
	* 版本 : 5.3
* [tymon/jwt-auth](https://packagist.org/packages/tymon/jwt-auth) : Json Web Token (Authentication)
	* 版本 : 0.5.6 


### require-dev

* [basicit/lumen-vendor-publish](https://packagist.org/packages/basicit/lumen-vendor-publish) : 可使用 php artisan vendor:publish
	* 版本 : 5.3