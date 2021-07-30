// vue object 
var div_utama = new Vue({
    el : '#div_utama',
    data : {

    },
    methods : {

    }
});

var div_menu = new Vue({
    el : '#slide-out',
    data : {

    },
    methods : {
        dashboarc_atc : async function()
        {
            NProgress.start();
            await tidur_bentar(3000);
            NProgress.done();
        }
    }
});

// inisialisasi 
NProgress.configure({ showSpinner: false });

function tidur_bentar(ms){
    return new Promise(resolve => { setTimeout(resolve, ms) });
}
