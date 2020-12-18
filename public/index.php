<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Sala de Chat</title>
</head>

<body>
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Cargando Chat...</p>
        </div>
    </div>
    <section>
        <div style="background-image:url(../assets/images/background/login-register.jpg);">
            <div>
                <div>
                    <form class="form-horizontal form-material" id="loginform" action="chat.html">
                        <h3 class="box-title m-b-20">Ingresar al Chat</h3>
                        <div>
                            <div>
                                <input class="form-control" type="text" required="" placeholder="Nombre de usuario" name="nombre"> </div>
                        </div>
                        <div>
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Sala de chat" name="sala"> </div>
                        </div>

                        <div>
                            <div>
                                <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Ingresar al chat</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>

</body>

</html>