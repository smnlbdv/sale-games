$(function()
{
    $('.img-info').on('click', function(e){
        e.preventDefaul();
        let user = $(this).data('id');

        console.log(user);
    });

});

function setCookie ()
{
    document.cookie = "info=user";
}