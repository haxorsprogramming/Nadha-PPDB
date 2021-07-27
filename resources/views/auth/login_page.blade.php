@include('layout.header_login_panel')

<body class="signin-page">
    <div class="loader-bg"></div>
    <div class="loader">
    @include('layout.loader_panel')
    </div>
    <div class="mn-content valign-wrapper" id="mainDiv">
        <main class="mn-inner container">
            <div class="valign">
                <div class="row">
                    <div class="col s12 m6 l4 offset-l4 offset-m3">
                        <div class="card white darken-1">
                            <div class="card-content">
                                <span class="card-title">Masuk ke admin panel</span>
                                <div class="row">
                                    <form class="col s12">
                                        <div class="input-field col s12">
                                            <input id="txt_username" type="text" class="validate">
                                            <label for="txt_username">Username</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="txt_password" type="password" class="validate">
                                            <label for="txt_password">Kata Sandi</label>
                                        </div>
                                        <div class="col s12 right-align m-t-sm">
                                            <a href="javascript:void(0)" class="waves-effect waves-light btn teal" @click="masukAtc()" id="btn_atc_masuk">Masuk</a>

                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    @include('layout.footer_login_panel')