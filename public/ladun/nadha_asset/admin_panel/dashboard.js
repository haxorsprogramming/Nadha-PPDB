// route 
var r_beranda = server + 'panel-admin/beranda';
var r_tahun_ajaran = server + 'panel-admin/tahun-ajaran';
// vue object 
var div_utama = new Vue({
    el : '#div_utama',
    data : {

    },
    methods : {

    }
});

var footer_app = new Vue({
    el : '#footer_app',
    data : {
        page_title : 'Dashboard'
    },
    methods : {

    }
})

var div_menu = new Vue({
    el : '#slide-out',
    data : {

    },
    methods : {
        dashboarc_atc : function()
        {
            load_page(r_beranda, 'Dashboard');
        },
        tahun_ajaran_atc : async function()
        {
            load_page(r_tahun_ajaran, 'Data Tahun Ajaran');
        }
    }
});
// inisialisasi 
NProgress.configure({ showSpinner: false });
load_page(r_beranda, 'Dashboard');
var fig_page_loading = "<div class='col s12 m4 center'><div class='preloader-wrapper big active'><div class='spinner-layer spinner-red-only'><div class='circle-clipper left'><div class='circle'></div></div><div class='gap-patch'><div class='circle'></div></div><div class='circle-clipper right'><div class='circle'></div></div></div></div></div>";
var loader_2 = "<div class='col s12 m4' style='margin-left:38%;'><lottie-player src='"+file_loader_lottie+"' background='transparent' speed='1' style='width: 300px; height: 300px;' loop autoplay></lottie-player><br/><h3>Memuat halaman ...</h3></div>";
async function load_page(page, page_title)
{
    footer_app.page_title = page_title;
    NProgress.start();
    document.querySelector("#div_utama").innerHTML = loader_2;
    await tidur_bentar(1000);
    $("#div_utama").load(page);
    NProgress.done();
}

function tidur_bentar(ms){
    return new Promise(resolve => { setTimeout(resolve, ms) });
}
