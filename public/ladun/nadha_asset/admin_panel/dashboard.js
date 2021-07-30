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
var fig_page_loading = "";

async function load_page(page, page_title)
{
    footer_app.page_title = page_title;
    NProgress.start();
    $('#div_utama').hide();
    $('#div_loading').show();
    await tidur_bentar(3200);
    $("#div_utama").load(page);
    $("#div_utama").show();
    $('#div_loading').hide();
    NProgress.done();
}

function tidur_bentar(ms){
    return new Promise(resolve => { setTimeout(resolve, ms) });
}
