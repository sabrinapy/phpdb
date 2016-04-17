第三組 訂餐系統使用教學

【使用者】
1. 請先安裝php5、phpmyadmin、PHPMailer、mysql。

2. 到http://140.127.218.250:49006/phpmyadmin ，將localhost.sql匯入到自己的資料庫中。
   (以下操作都在http://140.127.218.250:49006/ 下，將省略。)

3. 將include.php打開會看到下面這行，請把裡面的帳密改成自己資料庫的。
>> $link=mysqli_connect("(appserver名稱，通常預設為localhost)","(帳號)","(密碼)","phpdbwork");

4. 初次使用請先到register1.php註冊用戶。

5. 到login1.php登入。

6. 登入後會跳轉至food.php，可以開始選擇餐點。

7. 餐點送出後會跳轉至food3.php，請輸入各餐點數量。

8. 數量送出後會跳轉至food4.php，請確認本次的完整訂單。

9. 訂單送出後會跳轉至food5.php，請寄出本次的訂單至管理員的信箱。
   (如果要更改管理員信箱可以在food5.php中更改)

【管理者】
1. 到usrlogin.php登入後，可以更改訂單。
   (使用者的帳號密碼需先在資料庫建好(phpdbwork→manlogin)。)

2. 到phpmyadmin，在資料庫中更改訂單以及用戶個人資料。