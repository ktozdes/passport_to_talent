var total_photos_counter = 0;
Dropzone.options.myDropzone = {
    uploadMultiple: true,
    parallelUploads: 2,
    maxFilesize: 16,
    addRemoveLinks: true,
    dictRemoveFile: 'Remove file',
    dictFileTooBig: 'Image is larger than 16MB',
    timeout: 10000,
 
    init: function () {
        this.on("removedfile", function (file) {
            $.post({
                url: url.image_destroy,
                data: {id: file.name, _token: $('[name="_token"]').val()},
                dataType: 'json',
                success: function (data) {
                    total_photos_counter--;
                    $("#counter").text("# " + total_photos_counter);
                }
            });
        });
    },
    success: function (file, done) {
        total_photos_counter++;
        $("#counter").text("# " + total_photos_counter);
    }
};