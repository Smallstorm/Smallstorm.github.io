<!DOCTYPE html>
<html>
    <head>
                                        <?php
                                            include 'head.php';
                                            ?>
    </head>
    <body >
        <div class = "container mt-5">
            <header class = "blog-header py-3">
                <div class = "row flex-nowrap justify-content-between align-items-center">
                    <div class = "col text-center">
                       <h1>Компьютерные сети</h1>
                    </div>
                </div>
            </header>
            <hr> 
            <div class = "nav-scoller py-1 md-2">
                <nav class ="nav d-flex">
                     <a class = "btn btn-light p-3 m-2" href = "index.php">Главная</a>
                    <a class = "btn btn-light p-3 m-2" href = "_compnets.php">Компьютерные сети</a>
                    <a class = "btn btn-light p-3 m-2" href = "_algoritm.php">Основы алгоритмизации</a>
                     <a class = "btn btn-light p-3 m-2" href = "_o-razrabot.php">О разработчике</a>
                </nav>
            </div>
            <hr>
            <jumbotron class = "display-1">Типы кабелей</jumbotron><br>
            <p>На сегодняшний день подавляющая часть компьютерных сетей использует для соединения провода или кабели. Они выступают в качестве среды передачи сигналов между компьютерами. Типов кабелей огромное количество, но чаще всего применяют три основных типа:</p>
            <ul>
                <li>Коаксиальный (Coaxial cable) </li>
                	<li>Витая пара (Twisted pair)</li>
                <ul>
                    <li>Неэкранированная (Unshielded)</li>
                    <li>Экранированная (Shielded)</li>
                </ul>
                	<li>Оптоволоконный (Fiber optic)</li>
            </ul>
            Подробней разберемся с каждым типом.

            <jumbotron><h3 class = "display-4">Коаксиальный кабель </h3></jumbotron>   
                <p> В центре коаксиального кабеля расположена проводящая жила(core). Она представляет собой один провод или пучок проводов, сделанных, как правило, из меди. Жила окружена изоляционным слоем, который отделяет ее от металлической оплетки. Жила и оплетка не должны соприкасаться, иначе произойдет короткое замыкание, помехи проникнут в жилу, и данные разрушаться. Металлическая оплетка – это, по сути, экран, состоящий из медных проводов или алюминиевого кожуха, и, защищающий жилу от электрических шумов и перекрестных помех. Последний слой – непроводящий, сделан, как правило, из резины, тефлона или пластика. </p>
            <jumbotron><h3 class = "display-4">Витая пара</h3></jumbotron>
                <p>Представляет собой две перевитых вокруг друг друга изолированных медных провода. Завивка проводов позволяет избавиться от электрических помех, наводимых соседними парами и другими источниками. 
                <b>Неэкранированная</b> витая пара (Unshielded Twisted Pair) состоит из двух изолированных медных проводов. ЕЕ использует большинство телефонных систем Это одна из причин ее популярности. 
                <b>Экранированная</b> витая пара( Shielded Twisted Pair) имеет медную оплетку, которая обеспечивает большую защиту. Кроме того, пары проводов STP обмотаны фольгой. В результате экранированная витая пара обладает прекрасной изоляцией, защищающей передаваемые данные от внешних помех. </p>
            <jumbotron><h3 class = "display-4">Оптоволоконный кабель </h3></jumbotron>
                <p>В оптоволоконном кабеле цифровые данные распространяются по оптическим волокнам в виде модулированных световых импульсов. Это относительно надежный (защищенный) способ передачи, поскольку электрические сигналы при этом не передаются. Следовательно, оптоволоконный кабель нельзя вскрыть и перехватить данные, от чего не застрахован любой кабель, проводящий электрические сигналы. 
                Такой кабель состоит из двух стеклянных волокон с отдельными коннекторами. Одно из них служит для передачи , другое для приема. Жесткость волокон увеличена покрытием из пластика, а прочность – волокнами из кевлара.
                Передача по оптоволоконному кабелю не подвержена электрическим помехам и ведется на чрезвычайно высокой скорости.  </p>
                                             <?php
                                                include 'Footer.php';
                                                ?>
        </div>
    </body>
</html>
