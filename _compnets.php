<!DOCTYPE html>
<html>
    <head>
                                        <?php
                                            include 'head.php';
                                            ?>
         <style>
            a.bottom {
              color: #000; 
              text-decoration: none; 
              user-select: none;
              background-color: #DCDBDB; 
              padding: ; 
              outline: none;
                        } 
            a.bottom:hover { background-color: #D0CFCF; } 
            a.bottom:active { background: #BDBCBC; } 
        </style>
    </head>
    <body>
        <div class = "container mt-5" > <!--style = "background-color:#C6C7CD;"-->
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
                    <a class = "btn btn-light p-3 m-2 text-muted font-weight-lighter" >Компьютерные сети</a>
                    <a class = "btn btn-light p-3 m-2" href = "_algoritm.php">Основы алгоритмизации</a>
                     <a class = "btn btn-light p-3 m-2" href = "_o-razrabot.php">О разработчике</a>
                </nav>
            </div>
                                        <?php
                                            include 'Carusel.php';
                                            ?>
    <jumbotron class = "display-4"><p class = "ml-5 my-4 text-right text-muted font-weight-lighter">Протоколы</p></jumbotron>
            <div class = "row">
                <div class = "col-4">
                    <div class="card" >
                           <h3 class = "card-header ">TCP/IP</h3>
                            <div class="card-body">   
                                <h5 class="card-title">Модел передачи данных</h5>
                                <span class="card-text">Стек протоколов TCP/IP, уровни передачи данных, прикладной, транспортный, межсетевой и кнальный уровни.</span><br>
                                <div class = "mt-3"><a class = "bottom p-2 rounded-lg mt-3" href="c_tcp.php">Go somewhere</a></div>

                            </div>
                    </div>
                </div>
                <div class = "col-4">
                    <div class="card">
                            <h3 class = "card-header ">Lorem ipsum</h3>
                            <div class="card-body">
                                <h5 class="card-title">Mauris tincidunt</h5>
                                <span class="card-text">ante ut ante blandit, id commodo quam pharetra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</span><br>
                                 <div class = "mt-3"><a class = "bottom p-2 rounded-lg mt-3" href="#">Go somewhere</a></div>
                            </div>
                    </div>
                </div>   
                <div class = "col-4">
                    <div class="card" >
                            <h3 class = "card-header ">Post</h3>
                            <div class="card-body">
                                <h5 class="card-title">Mauris tincidunt</h5>
                                <span class="card-text">ante ut ante blandit, id commodo quam pharetra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</span><br>
                                 <div class = "mt-3"><a class = "bottom p-2 rounded-lg mt-3" href="a_osnov.php">Go somewhere</a></div>
                            </div>
                    </div>
                 </div>
                </div>
    <jumbotron class = "display-4"><p class = "ml-5 my-4 text-right text-muted font-weight-lighter">Компоненты сети</p></jumbotron>
                <div class = "row">
                    <div class = "col-4">
                        <div class="card" >
                               <h3 class = "card-header ">Lorem ipsum</h3>
                                <div class="card-body">   
                                    <h5 class="card-title">Mauris tincidunt</h5>
                                    <span class="card-text"> ante ut ante blandit, id commodo quam pharetra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</span><br>
                                    <div class = "mt-3"><a class = "bottom p-2 rounded-lg mt-3" href="$#">Go somewhere</a></div>
                                </div>
                        </div>
                    </div>
                    <div class = "col-4">
                        <div class="card">
                                <h3 class = "card-header ">Кабели</h3>
                                <div class="card-body">
                                    <h5 class="card-title">Среда передачи данных</h5>
                                    <span class="card-text">Осноовные типы кабелей, их конструкция, характеристики и способы функционирования.</span><br>
                                     <div class = "mt-3"><a class = "bottom p-2 rounded-lg mt-3" href="c_cable.php">Go somewhere</a></div>
                                </div>
                        </div>
                    </div>   
                    <div class = "col-4">
                        <div class="card" >
                                <h3 class = "card-header ">Post</h3>
                                <div class="card-body">
                                    <h5 class="card-title">Mauris tincidunt</h5>
                                    <span class="card-text">ante ut ante blandit, id commodo quam pharetra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</span><br>
                                     <div class = "mt-3"><a class = "bottom p-2 rounded-lg mt-3" href="#">Go somewhere</a></div>
                                </div>
                        </div>
                     </div>
                </div>
             <div>
                                        <?php 
                                            include 'Articles.php';
                                            ?>
                                        <?php 
                                            include 'Articles.php';
                                            ?>
                                        <?php 
                                            include 'Articles.php';
                                            ?>
            </div>
                                            <?php
                                            include 'Footer.php';
                                            ?>
        </div>
    </body>    
</html>