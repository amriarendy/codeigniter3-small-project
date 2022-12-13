const flashMassage = $('.flashdata').data('flashdata');
if (flashMassage) {
    swal({
        title: "Success!",
        text: flashMassage,
        icon: "success",
        button: "Ok!",
    })
}