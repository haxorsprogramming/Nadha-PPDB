// route 
var rToLogin = server + "panel-admin/login/proses";

// vue object 
var mainDiv = new Vue({
    el : '#mainDiv',
    data : {

    },
    methods : {
        masukAtc : function()
        {
            console.log("haloo");
        }
    }
});

// inisialisasi 
document.querySelector("#txt_username").focus();