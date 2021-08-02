// route 
var r_proses_tambah_tahun_ajaran = server + "panel-admin/tahun-ajaran/proses-tambah";

// vue object 
var app_tahun_ajaran = new Vue({
    el : '#app_tahun_ajaran',
    data : {

    },
    methods : {
        add_tahun_ajaran_atc : function()
        {
            $("#d_form_tambah_tahun_ajaran").show();
            $("#d_data_tahun_ajaran").hide();
            document.querySelector("#txt_nama_tahun_ajaran").focus();
        },
        proses_simpan_atc : function ()
        {
            let nama_tahun_ajaran = document.querySelector("#txt_nama_tahun_ajaran").value;
            let tanggal_mulai = document.querySelector("#txt_tanggal_mulai").value;
            let tanggal_selesai = document.querySelector("#txt_tanggal_selesai").value;
            if(nama_tahun_ajaran === null || nama_tahun_ajaran === ''){
                pesan_toast('Harap isi semua field!!!');
            }else{
                let ds = {'nama':nama_tahun_ajaran, 'mulai':tanggal_mulai, 'selesai':tanggal_selesai}
                axios.post(r_proses_tambah_tahun_ajaran, ds).then(function(res){
                    let dr = res.data;
                    console.log(dr);
                });
            }
        }
    }
});
// inisialisasi

$(document).ready(function () {
    $("#example").DataTable({
        language: {
            searchPlaceholder: "Search records",
            sSearch: "",
            sLengthMenu: "Show _MENU_",
            sLength: "dataTables_length",
            oPaginate: {
                sFirst: '<i class="material-icons">chevron_left</i>',
                sPrevious: '<i class="material-icons">chevron_left</i>',
                sNext: '<i class="material-icons">chevron_right</i>',
                sLast: '<i class="material-icons">chevron_right</i>',
            },
        },
    });
    $(".dataTables_length select").addClass("browser-default");
});
