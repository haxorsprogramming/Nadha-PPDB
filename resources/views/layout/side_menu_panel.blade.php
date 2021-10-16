<aside id="slide-out" class="side-nav white fixed">
    <div class="side-nav-wrapper">
        <div class="sidebar-profile">
            <div class="sidebar-profile-image">
                <img src="{{ asset('/ladun/alpha') }}/images/profile-image.png" class="circle" alt="">
            </div>
            <div class="sidebar-profile-info">
                <a href="javascript:void(0);" class="account-settings-link">
                    <p>David Doe</p>
                   
                </a>
            </div>
        </div>
       
        <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
            <li class="no-padding active"><a class="waves-effect waves-grey active" href="javascript:void(0)" @click="dashboarc_atc()"><i class="material-icons">dashboard</i>Dashboard</a></li>
            <li class="no-padding"><a class="waves-effect waves-grey" href="javascript:void(0)"><i class="material-icons">analytics</i>Monitoring PPDB</a></li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>Data Master<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="javascript:void(0)">Periode PPDB</a></li>
                        <li><a href="javascript:void(0)">Jalur Pendaftaran</a></li> 
                        <li><a href="javascript:void(0)" @click="tahun_ajaran_atc()">Tahun Ajaran</a></li>
                        <li><a href="javascript:void(0)">Jurusan</a></li>
                        <li><a href="javascript:void(0)">Mapel Seleksi</a></li>
                        <li><a href="javascript:void(0)">Bobot Sertifikat</a></li>
                    </ul>
                </div>
            </li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">school</i>Data PPDB<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="javascript:void(0)">Data Registrasi</a></li>
                        <li><a href="javascript:void(0)">Data Verifikasi</a></li> 
                        <li><a href="javascript:void(0)">Hasil PPDB</a></li>
                    </ul>
                </div>
            </li>
            <li class="no-padding"><a class="waves-effect waves-grey" href="javascript:void(0)"><i class="material-icons">settings</i>Setting Aplikasi</a></li>
            <li class="no-padding"><a class="waves-effect waves-grey" href="javascript:void(0)"><i class="material-icons">help_outline</i>Bantuan</a></li>
            <li class="no-padding"><a class="waves-effect waves-grey" href="javascript:void(0)"><i class="material-icons">favorite</i>Tentang Aplikasi</a></li>
            <li class="no-padding"><a class="waves-effect waves-grey" href="javascript:void(0)"><i class="material-icons">logout</i>Log Out</a></li>
        </ul>
        <div class="footer">
            <p class="copyright">Nadha School © </p>
            <a href="#!">NadhaMedia</a>
        </div>
    </div>

</aside>