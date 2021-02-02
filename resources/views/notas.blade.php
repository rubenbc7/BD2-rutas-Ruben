<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notas</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    <div class="wrap">
        <header class="head">
            <a href="#" class="logo"></a>

            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li class="main-nav-item active">
                        <a href="/notas" class="main-nav-link">
                            <i class="icon icon-th-list"></i>
                            <span>Ver notas</span>
                        </a>
                    </li>
                    <li class="main-nav-item ">
                        <a href="/agregar" class="main-nav-link">
                            <i class="icon icon-pen"></i>
                            <span>Nueva nota</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="content">
            <div class="cards">
                <div class="card card-small">
                    <div class="card-body">
                        <h4>¿Para qué sirve Composer?</h4>

                        <p>
                            Con Composer podemos instalar y actualizar frameworks como Laravel o Symfony,
                            así como componentes para generar PDF, procesar pagos con tarjetas, manipular imágenes y mucho más.
                        </p>
                    </div>

                    <footer class="card-footer">
                        <a class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a>
                        <a class="action-link action-delete">
                            <i class="icon icon-trash"></i>
                        </a>
                    </footer>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>Instalación de Laravel</h4>

                        <p>
                            Hay 2 formas de instalar Laravel: la primera es a través con Composer,
                            la cual te permite instalar una versión específica de Laravel:
                        </p>

                        <pre>composer create-project laravel/laravel ClaseLaravel"</pre>

                        <p>La segunda es con el instalador de Laravel, la cual instalará la versión actual del framework:</p>

                        <pre>laravel new ClaseLaravel</pre>
                    </div>

                    <footer class="card-footer">
                        <a class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a>
                        <a class="action-link action-delete">
                            <i class="icon icon-trash"></i>
                        </a>
                    </footer>
                </div>
                <div class="card card-big">
                    <div class="card-body">
                        <h4>Rutas y JSON</h4>

                        <p>
                            Recuerda que si retornas un arreglo en una ruta, Laravel lo va a convertir en JSON automáticamente:
                        </p>

                        <pre>
    &lt;?php

    Route::get('/', function () {
        return [
            'Cursos' => [
                'Primeros pasos con Laravel',
                'Crea un panel de control con Laravel',
            ]
        ];
    });
</pre>

                        <p>Producirá el siguiente resultado:</p>

                        <code>{"Cursos":["Primeros pasos con Laravel","Crea un panel de control con Laravel"]}</code>
                    </div>

                    <footer class="card-footer">
                        <a class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a>
                        <a class="action-link action-delete">
                            <i class="icon icon-trash"></i>
                        </a>
                    </footer>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>Front Controller</h4>
                        <p>
                            Front Controller es un patrón de arquitectura donde un controlador
                            maneja todas las solicitudes o peticiones a un sitio web.
                        </p>
                    </div>

                    <footer class="card-footer">
                        <a class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a>
                        <a class="action-link action-delete">
                            <i class="icon icon-trash"></i>
                        </a>
                    </footer>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>Cambia el formato de parámetros dinámicos</h4>
                        <p>
                            Puedes colocar el siguiente código en el método <code>boot</code>
                            de <code>app/Providers/RouteServiceProvider.php</code>
                            para restringir cualquier parámetro de las rutas a un formato numérico:
                        </p>

                        <pre>Route::pattern('nombre-del-parametro', '\d+');</pre>

                        <p>Puedes por supuesto usar otras expresiones regulares para restringir a otros formatos.</p>
                    </div>

                    <footer class="card-footer">
                        <a class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a>
                        <a class="action-link action-delete">
                            <i class="icon icon-trash"></i>
                        </a>
                    </footer>
                </div>
            </div>
        </main>
        <footer class="foot">
            <div class="ad">
                <p>
                    Esta aplicación es desarrollada en el cursos de IPM
                    <a href="https://mawe.mx">Primeros pasos con Laravel </a>.
                </p>
            </div>
            <div class="license">
                <p>© 2021 Derechos Reservados - MAWE TECNOLOGIAS</p>
            </div>
        </footer>
    </div>
</body>
</html>

