<p align="center"><img src="https://i.imgur.com/CAd3MkH.png</p>
https://i.imgur.com/v4pzFru.jpg
https://i.imgur.com/Y2uc3Mm.jpg
https://i.imgur.com/GjnYcKn.jpg

## Go Travel
我們這個旅遊網站的核心是由管理者提供旅遊景點，會員透過系統可以選擇他喜愛的旅遊地點，進行預約。
## 系統的主要功能

•	前端
判斷是客戶還是管理者(Route::get('/check'))3A432055 陳冠豪
判斷登入後才能進入預約畫面(Route::get('/check2'))3A432055 陳冠豪
查看可預約旅遊方案(Route::get('about'))3A632076 林明穎
選擇預約的旅遊方案(Route::post('posts')) 3A632076 林明穎
完成預約(Route::get('finish')) 3A632076 林明穎
•	後端
旅遊方案管理
新增旅遊方案Route::get('posts/create'))  3A632076 林明穎
修改旅遊方案Route::patch('posts/{id}')) 3A632076 林明穎
刪除旅遊方案Route::delete('posts/{id}')) 3A632076 林明穎


## 初始專案與DB負責的同學
初始專案 3A432055陳冠豪
資料庫及資料表建立、資料表關連 3A632076林明穎

## 額外使用的套件或樣板
•	前台樣板-Clean Blog
-畫面供使用者使用，且使用起來方便且舒適。
•	後台樣板
-簡易操作的畫面，供管理者使用。


## 系統復原步驟
複製https://github.com/WISD-2019/final12.git 本系統在GitHub的專案，打開Source tree，點選clone後，輸入以下資料

Source Path:https://github.com/WISD-2019/final12.git
Destination Path:C:\wagon\uwamp\www\final12
打開cmder，切換至專案所在資料夾，cd final12

在cmder輸入以下命令，以復原此系統：

composer install
composer run‐script post‐root‐package‐install
composer run‐script post‐create‐project‐cmd
將專案打開 在.env檔案內輸入資料庫主機IP、Port、名稱、與帳密如下：

DB_HOST=127.0.0.1
DB_PORT=33060
DB_DATABASE=final12
DB_USERNAME=root
DB_PASSWORD=root
在cmder輸入以下命令，將所有資料表產生至final12資料庫內

php artisan migrate
開啟UwAmp，點選PHPMyAdmin，輸入以下資料後並點擊登入，進入MySQL後，建立新資料庫，名稱為final12，將final12.sql(C:\wagon\uwamp\www\final12\database\final12.sql)匯入

資料庫系統:MYSQL
伺服器:localhost:33060
帳號:root
密碼:root
在UwAmp下，點選Apache config，選擇port 8000 ，並在Document Root 輸入{DOCUMENTPATH}/final12/public

## 系統使用帳號
前台-會員
後台-管理者
都可自行註冊，自己選管理者或會員

## 系統開發人員

•	3A432055 陳冠豪
•	3A632076 林明穎
