<?

$connect = new mysqli('localhost', 'root', '', 'brazil');
$query=mysqli_query($connect, "SELECT * FROM `pred`");

if (isset($_POST['name']) != $_SESSION['name'] ) {


    $name = $_POST["name"];
    $number = $_POST["number"];
    $predl = $_POST["predl"];

    $query=$connect->query("INSERT INTO `pred` (`id`,`name`,`number`,`predl` )
    VALUES (NULL, '$name', '$number', '$predl' )");
      header('Location');
    
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="page1" id="page1">
        <header>
            <ul>
                <a href="#page1">
                    <li>Главная</li>
                </a>
                <a href="#page2">
                    <li>О Бразилии</li>
                </a>
                <a href="#page3">
                    <li>Туры</li>
                </a>
                <a href="#page4">
                    <li>Предложения</li>
                </a>
                <a href="./d.html">
                    <li>Достопримечательности</li>
                </a>
                <a href="#page5">
                    <li>Галерея</li>
                </a>
            </ul>
        </header>
        <div class="textbox1">
            <h1 class="h">Открой чудеса Бразилии!</h1>
            <h1>Исследуй, путешествуй и наслаждайся вместе с нами!</h1>
            <a href="./d.html"><button class="button1">В путешествие</button></a>
        </div>
    </div>
    <div class="page2" id="page2">
        <div class="content-p2">
            <div class="o"></div>
            <div class="textbox2">
                <h3>О Бразилии</h3>
                <p>Бразилия – большая и невероятно многогранная страна, объединяющая сразу несколько национальных
                    традиций:
                    европейские, индейские, африканские. По этой причине путешествие в Бразилию понравится тем туристам,
                    которые предпочитают открывать для себя новые культуры и тяготеют к колоритной экзотике Латинской
                    Америки. В Бразилию летят ради знаменитого Карнавала, ретритов в тропических джунглях Амазонии,
                    пляжного
                    отдыха на Копакабане и Ипанеме. В разных частях страны можно увидеть невероятно красивую природу, а
                    современное искусство Бразилии завораживает. Кроме того, в стране есть отличные возможности для
                    активного отдыха, включая серфинг, дайвинг и дельтапланеризм. А еще Бразилия – это всегда праздник,
                    и
                    сюда просто приятно прилететь на пару недель в любое время года.</p>
                <a href="https://blog.ostrovok.ru/gid-po-brazilii/?ysclid=lv512ktbpr97861922">
                    <p class="p-str">Узнать подробнее....</p>
                </a>

            </div>
        </div>
    </div>
    <div class="page3" id="page3">
        <h3>Туры</h3>
        <div class="card-card">
            <div class="card">
                <img src="./img/card1.png" alt="">
                <div class="textbox-card">
                    <p class="bold">БРАЗИЛИЯ: затерянный мир</p>
                    <p class="light">Окунитесь в незабываемое путешествие по природе Бразилии!</p>
                    <button class="button-card">В путь!</button>
                </div>
            </div>
            <div class="card">
                <img src="./img/card2.png" alt="">
                <div class="textbox-card">
                    <p class="bold">ВМЕСТЕ НА КАРНАВАЛ</p>
                    <p class="light">Добро пожаловать на самый большой праздник в Бразилии!</p>
                    <button class="button-card">В путь!</button>
                </div>
            </div>
            <div class="card">
                <img src="./img/card3.png" alt="">
                <div class="textbox-card">
                    <p class="bold">В гости в индейское племя</p>
                    <p class="light">Познакомьтесь  с настоящими индейцами!</p>
                    <button class="button-card">В путь!</button>
                </div>
            </div>
            <div class="card">
                <img src="./img/card4.png" alt="">
                <div class="textbox-card">
                    <p class="bold">Рио-де-Жанейро</p>
                    <p class="light">Окунитесь в прекрасное путешествие по “Городу Бога”</p>
                    <button class="button-card">В путь!</button>
                </div>
            </div>
        </div>
    </div>
    <div class="page4" id="page4">
        <form method="POST">
            <div class="pg4">
            <div class="o"></div>
            <div class="textbox3">
                    <h3>Предложения по улучшению</h3>
                        <div class="input">
                        <input type="text" placeholder="ФИО" class="textt" name="name"><br>
                        <input type="text" placeholder="Номер телефона" class="textt" name="number"><br>
                        <textarea name="predl" id="" cols="30" rows="10"  placeholder="Предложение"></textarea>
                    </div>
                    <button class="button-p4">Отправить</button>
                </form>
            </div>
        </div>
    </div>
    <div class="page5" id="page5">
        <div class="zg">
            <h3>Галерея</h3>
            <p>Смотреть все</p>
        </div>
        <div class="foto">
            <div class="f1">
                <img src="./img/f1.png" alt="" class="f1">
                <img src="./img/f2.png" alt="">
            </div>
            <div class="f2"><img src="./img/f3.png" alt=""></div>
            <div class="f3">
                <img src="./img/f4.png" alt="" class="f4">
                <img src="./img/f5.png" alt="">
            </div>
        </div>
    </div>
    <div class="line"></div>
    <footer>
        <ul>
            <a href="#page1">
                <li>Главная</li>
            </a>
            <a href="#page2">
                <li>О Бразилии</li>
            </a>
            <a href="#page3">
                <li>Туры</li>
            </a>
            <a href="./d.html">
                <li>Достопримечательности</li>
            </a>
            <a href="#page5">
                <li>Галерея</li>
            </a>
        </ul>
        <div class="f-textbox">
            <div class="txt1">
                <div class="t">
                    <img src="./img/icon1.png" alt="" width="19" height="19">
                    <p>+7 999 947 38 84</p>
                </div>
                <div class="t">
                    <img src="./img/icon2.png" alt="" width="19" height="19">
                    <p>+7 917 977 95 68</p>
                </div>
                <div class="t">
                    <img src="./img/icon2.png" alt="" width="19" height="19">
                    <p>Телеграм-канал TravelBrazil</p>
                </div>
            </div>
            <div class="txt2">
                <div class="t2">
                    <img src="./img/mail 1.png" alt="" width="19" height="19">
                    <p>travelbrazil@mail.ru</p>
                </div>

            </div>
        </div>
    </footer>
</body>

</html>