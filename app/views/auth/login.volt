 <html>
<head>




</head>
<body>
<div class="app no-padding no-footer layout-static">
    <div class="session-panel">
        <div class="session">
            <div class="session-content">
                <div class="card card-block form-layout">
                    <form role="form" action="{{ url('auth/loginproses') }}" method="post" id="validate">
                        <div class="text-xs-center m-b-3">
                            <img src="images/1.jpg" height="80" alt="" class="m-b-1"/>
                            Selamat Datang !
                            </h5>
                            <p class="text-muted">
                                Silakan Anda Login Terlebih Dahulu
                            </p>
                        </div>
                        <?php $this->flashSession->output() ?>
                        <fieldset class="form-group">
                            <label for="username">
                                Silakan Inputkan nik/iduser
                            </label>
                            <input type="text" name="nik" class="form-control form-control-lg" id="username" placeholder="Nomor Induk Kepegawaian"/>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="password">
                                Masukan Password anda
                            </label>
                            <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password Anda "/>
                        </fieldset>
                        <label class="custom-control custom-checkbox m-b-1">
                            <input type="checkbox" class="custom-control-input">

                        </label>
                        <button class="btn btn-primary btn-block btn-lg" type="submit">
                            Login
                        </button>


                    </form>
                </div>
            </div>

        </div>

    </div>
</div>
</body>
</html>