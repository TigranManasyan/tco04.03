$(document).ready(function ($) {
    var ids = [] 
    // ajaxa ejy load lineluc petqa ashxati. gna url nery beri dranc vra for fras imagnerd tpes

    $('#upload_file').click(function () {
        let fd = new FormData();

        let file = $('#photoUpload')[0].files[0];
        let inputValue = $('#photoUpload').val()

        if (!file) {
            alert('Nothing selected');
            return false
        }
        fd.append('file', file);
        fd.append('inputValue', inputValue);
        fd.append('methodName', 'uploadImage');


        $.ajax({
            url: "../controller/photoController.php",
            type: "POST",
            data: fd,
            contentType: false,
            processData: false,
            success: function (res) {
                file = ''
                let msg = 'your photo created';
                $('#msg').html(msg);
            }

        })
    })
    $("#show_btn").on("click", function () {
        $.ajax({
            url: '../controller/photoController.php',
            type: "POST",
            dataType: "JSON",
            data: {
                methodName: "show"
            },
            success: function (res) {
                let photoTable = '';
                res.forEach(element => {
                    photoTable += `
                    <div id="image-${element.id}">
                        <img src="../controller/${element.photo_url}" class="figure-img img-fluid rounded" alt="img">
                        <figcaption class="figure-caption text-end"><button class="form-control mb-3 delete_btn" data-id='${element.id}'>Delete</button><input type="checkbox" class="check" data-id='${element.id}'></figcaption>
                     </div>
                    `
                });
                $('#phototable').html(photoTable);
            }
        })
    })

    $(document).on('click', '.delete_btn', function () {
        debugger
        let id = $(this).data("id");
        const self = $(this)
        $.ajax({
            url: '../controller/photoController.php',
            type: 'POST',
            data: {
                id,
                methodName: "delete"
            },
            success: function (res) {
                self.parent().parent().remove()
            }

        })
    })

    $(document).on('change', '.check', function () {
        let id = $(this).data('id')
        id = parseInt(id)
        const checkedIndex = ids.findIndex((existId) => {
            return existId === id
        })

        if (checkedIndex === -1) {
            ids.push(id)
        } else {
            ids.splice(checkedIndex, 1)
        }

        console.log(ids)
    })

    $(document).on('click','#delete_checked',function(){
        $.ajax({
            url:"../controller/photoController.php",
            type: "POST",
            data:{
                ids,
                methodName:"deleteCheck"
            },
            success: function(res) {
                ids.map((id) => {
                    $(`#image-${id}`).remove()
                })

                ids = []
            }
        })
    })
})