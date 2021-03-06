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
                       <h1>Основы алгоритмизации</h1>
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
            <jumbotron class = "display-1 mb-2">Основные понятия</jumbotron><br>
                <p>В основе работы компьютера лежит умение оперировать только с одним видом данных – с отдельными битами, или двоичными цифрами. Независимо от содержания и сложности любые данные в памяти ЭВМ представляются последовательностью двоичных разрядов, или битов, а их значениями являются соответствующие двоичные числа. Данные, рассматриваемые в виде последовательности битов, имеют очень простую организацию или, другими словами, слабо структурированы. Для человека описывать и исследовать сложные данные в терминах последовательностей битов весьма неудобно.  Поэтому задачи, которые решаются с помощью компьютера, редко выражаются на языке битов. Как правило данные имеют форму чисел, литер, текстов, символов и более сложных структур типа последовательностей, списков и деревьев.</p>
                <p> Прежде чем приступать к изучению конкретных структур(типов) данных, должно сказать, что каждая такая структура в свою очередь имеет два вида. Понятие <b>физический</b> вид (структура) данных отражает способ физического представления данных в памяти машины и называется также структурой хранения, внутренней структурой или структурой памяти. Рассмотрение структуры данных без учета ее представления в машинной памяти называется <b>абстрактный</b> или <b>логический</b> вид.  В общем случае между логической и соответствующей ей физической структурами существует различие, зависящее от самой структуры и особенностей той среды, в которой она должна быть отражена. Вследствие этого различия существуют процедуры, осуществляющие отображение логической структуры в физическую и обратно. Эти процедуры обеспечивают, кроме того, доступ к физическим структурам и выполнение над ними различных операций, причем каждая операция рассматривается применительно к логической и физической структуре данных.  </p>
                                        <?php
                                            include 'Footer.php';
                                            ?>
        </div>
    </body>
</html>
