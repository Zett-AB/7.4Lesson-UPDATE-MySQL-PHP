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
        <section class="begin">
            <p>
                На данном уроке рассмотрим как вносить обновления в БД MySQL с помощью оператора UPDATE.<br>
                Всегда наступает момент/время когда некоторые данные в БД необходимо обновить или подкорректировать, например изменить дату, время, цену продукта и т.д.<br>
                Для внесения таких изменений/обновлений и используется оператор UPDATE.<br>
                Если коротко и по простому, то оператор UPDATE применятся для обновления уже имеющихся строк.
            </p>
            <p>
                Оператор UPDATE имеет следующий синтаксис:<br>
                UPDATE имя_таблицы<br>
                SET столбец1 = значение1, столбец2 = значение2, ... столбецN = значениеN<br>
                WHERE условия обновления или где нужно обновить(в какой строке)<br>
            </p>
            <p>
                Теперь чтобы от слов перейти к практике нам потребуется снова подключиться к нашей таблице movie, т.е. снова пишем код подключения к нашей БД.<br>
                ?php<br>
                $mysqi = new mysqli('localhost', 'root', '', 'study7.2lesson');<br>
                if (mysqli_connect_errno()) {<br>
                printf("Соединение не установлено", mysqli_connect_error());<br>
                exit();<br>
                }<br>
                $mysqi->set_charset('utf8');<br>

                $mysqi->close();<br>
                ?>
            </p>
            <p>
                Все после поключения переходим непосредственно к работе с оператором UPDATE.
            </p>
        </section>
        <section class="main_part">
            <p>
                Снова создаем переменную - $query и далее пишем её значение, а именно:<br>
                пишем команду UPDATE;<br>
                далее указываем имя нашей таблицы - movie;<br>
                затем команду SET;<br>
                после этого указываем ячейки где или куда надо внести изменения/обновления, в нашем случаи это будет year = 1999;<br>
                далее пишем команду WHERE(т.е. указываем/даем команду где именно вносить обновления/изменения);<br>
                теперь указываем в нашем случаи id=3;<br>
                все готово.
            </p>
            <p>
                Теперь вот так в итоге должен выглядеть наш код в нашем случаи с нашей таблице:<br>
                $query="UPDATE movie SET year=1999 WHERE id=3";
            </p>
            <p>
                Теперь напишем как наш код должен выглядеть в полном виде:<br>
                ?php<br>
                $mysqi = new mysqli('localhost', 'root', '', 'study7.2lesson');<br>
                if (mysqli_connect_errno()) {<br>
                printf("Соединение не установлено", mysqli_connect_error());<br>
                exit();<br>
                }<br>
                $mysqi->set_charset('utf8');<br>

                $query = "UPDATE movie SET year = 1999 WHERE id=3";

                $mysqi->query($query);

                $mysqi->close();<br>
                ?>
            </p>
            <p>
                Все готово. Обновленияем нашу таблицу и видим как в строке про Безумного Макса изменилась дата с 2015 на 1999.<br>
                При этом в браузере у нас ничего не отображается, но если хотим то повторяем код из предыдущих уроков.<br>
                Ниже пишем код на PHP.
            </p>
        </section>
        <section class="code_php">
            <?php
            $mysqi = new mysqli('localhost', 'root', '', 'study7.2lesson');
            if (mysqli_connect_errno()) {
                printf("Соединение не установлено", mysqli_connect_error());
                exit();
            }
            $mysqi->set_charset('utf8');

            $query = "UPDATE movie SET year = 1999 WHERE id=3";

            $mysqi->query($query);

            $mysqi->close();
            ?>
        </section>
    </main>

</body>

</html>