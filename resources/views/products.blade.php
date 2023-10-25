<html>
    <head>
        <title>
            這是我的標題
        </title>
    </head>

    <body>
        <h1>標題1</h1>
        這是我的網頁內容:</br>
        <a href="http://localhost:8000/about">關於(about) - 使用HTML A標籤</a></br>
        <a href="<?php echo route('demo.about'); ?>">關於(about) - 使用Laravel 的路由名稱</a></br>
        <a href="<?php echo route('demo.products', ['id'=>20]); ?>">產品資訊 - 使用Laravel 的路由名稱，且夾帶參數</a></br>
    </body>
</html>