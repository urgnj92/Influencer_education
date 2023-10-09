$(function(){
    console.log("test");
    errorMessage();
});


const errorMessage = () => {
    $('.btn-primary').click(function(event) {
        let minlength = $('.passwordInput').attr('minlength');
        let currentLength = $('.passwordInput').val().length;

        if (currentLength <= minlength) {
            $('.password-length').show();
            console.log("文字数が足りません");
        } else {
            $('.password-length').hide();
        }
    });
}
