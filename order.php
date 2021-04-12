
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>住所登録</title>
    <link rel="stylesheet" href="./css/oder.css">
    </head>
    <body>
        <section class="container">
        <h1 class="title">注文フォーム</h1>
        <form action="oder_submit.php" method="post">
            <ul>
                <li>
                    <label for="name">名前:</label>
                    <input type="text" placeholder="例：注文　太郎" id="name" name="name" tabindex="1"/>
                </li>
                <li>
                    <label for="email">メールアドレス:</label>
                    <input type="email" placeholder="例：eat.shop@email.com" id="email" name="email" tabindex="2"/>
                </li>
                <li>
                    <label for="tel">電話番号:</label>
                    <input placeholder="例：09012345678" id="tel" name="tel" tabindex="3" />
                </li>
                <li>
                    <label for="postcode">郵便番号:</label>
                    <input type="text" name="zip_code" id="zip_code"　maxlength="8" placeholder="例：162-0825">
                    <!-- 住所検索（外部API） -->
                    <button type="button" id="search_address_btn">住所検索</button>
                    <button type="button" id="search_clear_btn">クリア</button>
                </li>
                <li>
                    <label for="address1">都道府県:</label>
                    <input type="text" name="address1" id="address1">
                </li>
                <li>
                    <label for="address2">市区町村:</label>
                    <input type="text" name="address2" id="address2">
                </li>
                <li>
                    <label for="address3">番地:</label>
                    <input type="text" name="address3" id="address3">
                </li>
                <li>
                    <label for="home4">建物名・部屋番号:</label>
                    <input id="address" name="home4" tabindex="8" type="text">
                </li>
            </ul>
            <input type="submit" value="Send Message" id="submit"/>
        </form>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="./js/index.js"></script>
    </body>
</html>
