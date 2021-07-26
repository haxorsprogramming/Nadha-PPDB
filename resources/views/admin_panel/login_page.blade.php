
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Nadha School (PPDB) - Login Admin Panel</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="{{ asset('/ladun/alpha') }}/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{ asset('/ladun/alpha') }}/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">        

        	
        <!-- Theme Styles -->
        <link href="{{ asset('/ladun/alpha') }}/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/ladun/alpha') }}/css/custom.css" rel="stylesheet" type="text/css"/>
        
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body class="signin-page">
        <div class="loader-bg"></div>
        <div class="loader">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
            </div>
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
                                                   <a href="javascript:void(0)" class="waves-effect waves-light btn teal" @click="masukAtc()">Masuk</a>
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
        
        <!-- Javascripts -->
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js" integrity="sha512-DZqqY3PiOvTP9HkjIWgjO6ouCbq+dxqWoJZ/Q+zPYNHmlnI2dQnbJ5bxAHpAMw+LXRm4D72EIRXzvcHQtE8/VQ==" crossorigin="anonymous"></script>
        <script src="{{ asset('/ladun/alpha') }}/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="{{ asset('/ladun/alpha') }}/plugins/materialize/js/materialize.min.js"></script>
        <script src="{{ asset('/ladun/alpha') }}/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="{{ asset('/ladun/alpha') }}/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="{{ asset('/ladun/alpha') }}/js/alpha.min.js"></script>
        <script> const server = "{{ url('/') }}/"; </script>
        <script src="{{ asset('/') }}ladun/nadha_asset/admin_panel/login_page.js"></script>
    </body>
</html>