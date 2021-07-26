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
            let username = document.querySelector("#txt_username").value;
            let password = document.querySelector("#txt_password").value;
            let ds = { 'username':username, 'password':password }
            axios.post(rToLogin, ds).then(function(res){
                let dr = res.data;
                console.log(dr);
            });
        }
    }
});

// inisialisasi 
document.querySelector("#txt_username").focus();
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
