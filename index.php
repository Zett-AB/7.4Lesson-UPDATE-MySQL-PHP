<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 7.4. Обновление данных в таблице MySQL. Оператор UPDATE</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
</head>

<body>
    <main>
        <header>
            <h1>
                Урок 7.4. Обновление данных в таблице MySQL. Оператор UPDATE
            </h1>
            <h4 class="subtitle">
                Узнаем как обновить данные в таблице MySQL с помощью языка SQL и PHP
            </h4>
        </header>
        <section class="code_php">
            <?php
            $nickname = "Александр!";
            $hello = "Привет ";
            $offer = "Продолжаем изучать PHP<br>
                        На уроке узнаем как обновлять данные в таблице MySQL, что такое оператор UPDATE.";
            echo   "<h2 class='nkname'>" . $hello . $nickname . "<br>" . "<br>" . $offer . "</h2>";
            ?>
        </section>
    </main>

</body>

</html>