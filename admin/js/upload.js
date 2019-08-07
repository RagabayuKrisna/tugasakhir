$(document).ready(function () {
    $('#tambah_foto').click(function (e) {
        e.preventDefault();
        var formData = new FormData();
        var filedata = $('#file')[0].files[0];
        formData.append('file', filedata);
        console.log(formData);
        $.ajax({
            type: "post",
            url: "upload.php",
            data: "data",
            dataType: "text",
            cache: false,
            processData: false,
            contentType: false,
            xhr: function () {
                var myXhr = $.ajaxSettings.xhr();
                return myXhr;
            },
            success: function (data) {
                console.log(data);
                $('.column').append(`<img src="../media/galery/` + data.response + `" alt="" srcset="" style="margin-top: 8px;vertical-align: middle;width: 30%;">`);
            }
        });
        // $.ajax({
        //     type: "post",
        //     url: "upload.php",
        //     data: formData,
        //     dataType: "json",
        //     cache: false,
        //     processData: false,
        //     xhr: function () {
        //         var myXhr = $.ajaxSettings.xhr();
        //         return myXhr;
        //     },
        //     success: function (data) {
        //         console.log(data);
        //         $('.column').append(`<img src="../media/galery/` + data.response + `" alt="" srcset="" style="margin-top: 8px;vertical-align: middle;width: 30%;">`);
        //     }
        // });
    });
});