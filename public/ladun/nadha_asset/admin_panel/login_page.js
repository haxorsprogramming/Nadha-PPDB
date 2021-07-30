// route 
var rToLogin = server + "panel-admin/login/proses";
var rToDashboard = server + "panel-admin/dashboard";
// vue object 
var mainDiv = new Vue({
    el : '#mainDiv',
    data : {
        state_login : false
    },
    methods : {
        masukAtc : function()
        {
            let username = document.querySelector("#txt_username").value;
            let password = document.querySelector("#txt_password").value;
            let ds = { 'username':username, 'password':password }
            if(this.state_login === false){
                document.querySelector("#txt_username").setAttribute('disabled','disabled');
                document.querySelector("#btn_atc_masuk").classList.add('disabled');
                document.querySelector("#btn_atc_masuk").innerHTML = "Memeriksa ...";
                if(username === '' || password  === ''){
                    let $toastHTML = "Isi username / password !!!";
                    Materialize.toast($toastHTML, 3000);
                }else{
                    axios.post(rToLogin, ds).then(function(res){
                        let dr = res.data;
                        console.log(dr);
                        if(dr.status === 'no_user'){
                            let $toastHTML = "Username tidak terdaftar !!!";
                            Materialize.toast($toastHTML, 3000);
                            document.querySelector("#txt_username").removeAttribute('disabled');;
                            document.querySelector("#btn_atc_masuk").classList.remove('disabled');
                            document.querySelector("#btn_atc_masuk").innerHTML = "Masuk";
                            document.querySelector("#txt_password").value = "";
                            document.querySelector("#txt_username").focus();
                            this.state_login = false;
                        }else if(dr.status === 'wrong_password'){
                            let $toastHTML = "Username / password salah !!!";
                            Materialize.toast($toastHTML, 3000);
                            document.querySelector("#txt_username").removeAttribute('disabled');;
                            document.querySelector("#btn_atc_masuk").classList.remove('disabled');
                            document.querySelector("#btn_atc_masuk").innerHTML = "Masuk";
                            document.querySelector("#txt_password").value = "";
                            document.querySelector("#txt_username").focus();
                            this.state_login = false;
                        }else{
                            window.location.assign(rToDashboard);
                        }
                    });
                }
            }else{

            }
            
        }
    }
});

// inisialisasi 
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function pesan_toast(tipe, judul, message) {
    if (tipe === "info") {
  
    } else if (tipe === "success") {
        
    } else if (tipe === "warning") {
      iziToast.error({
          title: judul,
          message: message,
          position: "bottomCenter",
          timeout: 1000,
          pauseOnHover: false,
          onClosed: function () {},
        });
    } else if (tipe === "error") {
      iziToast.error({
        title: judul,
        message: message,
        position: "bottomCenter",
        timeout: 1000,
        pauseOnHover: false,
        onClosed: function () {},
      });
    }
  }