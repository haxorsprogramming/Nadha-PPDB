// vue object 
var app_tahun_ajaran = new Vue({
    el : '#app_tahun_ajaran',
    data : {

    },
    methods : {
        add_tahun_ajaran_atc : function()
        {
            console.log("haloo");
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
