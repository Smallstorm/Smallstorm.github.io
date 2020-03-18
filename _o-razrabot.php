<!DOCTYPE html>
<html>
    <head>
                            <?php
                                include 'head.php';
                                ?>
        <meta charset="utf-8">
    </head>
    <body>
        <div class = "container mt-5" > <!--style = "background-color:#C6C7CD;"-->
              <header class = "blog-header py-3">
                <div class = "row flex-nowrap justify-content-between align-items-center">
                    <div class = "col text-center">
                        <h1>О разработчике</h1>
                    </div>
                </div>
            </header>
            <hr>
            <div class = "nav-scoller py-1 md-2">
                <nav class ="nav d-flex">
                     <a class = "btn btn-light p-3 m-2" href = "index.php">Главная</a>
                    <a class = "btn btn-light p-3 m-2" href = "_compnets.php">Компьютерные сети</a>
                    <a class = "btn btn-light p-3 m-2" href = "_algoritm.php">Основы алгоритмизации</a>
                     <a class = "btn btn-light p-3 m-2 text-muted font-weight-lighter">О разработчике</a>
                </nav>
            </div>
                            <?php
                                include 'Carusel.php';
                                ?>
           <div class = "my-5 w-75 display: block mx-auto">
                <div class = "mb-3"><jumbotron class = "display-1">Немного о себе</jumbotron></div> 
            <p>Меня зовут Анна. Я с огромным преувеличением называю себя web-дизайнером. В течении двух лет я посещала курсы по web-программированию.  И, должна признать, чему-то научилась. Нам преподали базовый язык разметки HTML, затем CSS, далее Java Script и PHP. Мельком прошли MySQL - язык для работы с базами данных. Имею определенный опыт в создании сайтов. Этот не первый. Год назад открыла для себя библиотеку инструментов Bootstrap. В перспективе думаю изучить библиотеку инструментов Jekylle и с ее помощью создать новый сайт.  </p>
            </div>
           
                            <?php
                                include 'Footer.php';
                                ?>
        </div>
    </body>    
</html>