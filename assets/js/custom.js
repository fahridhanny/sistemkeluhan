$(function () {
    
    $("#sel1").val("default");
    $('#sel1').change(function () {
        var jenisKeluhan = this.value;
        var appendMore = "<div class='form-group keluhan'><label for='keluhan'>Pilih Keluhan</label><select name='keluhan' class='form-control' id='sel1'>";
        jQuery.get();
        jQuery.get("http://localhost/sistemkeluhan/home/KeluhanPelanggan/" + jenisKeluhan, function (data, status) {
            $('.keluhan').remove();
            for (var k in data) {
                appendMore += "<option value= " + data[k]['id_keluhanplgn'] + ">";
                appendMore += data[k]['nama_keluhanplgn'] + "</option>";
            }
            appendMore += " </select ></div >";
            appendMore += "<div class='form-group keluhan' id='pesan'><label for='pesan' class='col-form-label'>Pesan</label>    <textarea class='form-control' name='pesan'></textarea></div>";
            $('.form').append(appendMore);
        })


    });

    var message = $('#message').val();
    var isTrue = $('#istrue').val();
    if (message) {
        console.log(isTrue);
        swal({
            title: isTrue == "Sukses" ? "Berhasil" : "Gagal",
            text: message,
            icon: isTrue == "Sukses" ? "success" : "error",
        });

    }
    $("#sendreport").click(function () {
        $("#form1").trigger('submit');
    });
});










