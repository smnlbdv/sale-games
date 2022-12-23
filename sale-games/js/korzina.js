$(function()
{
    $('.add-cart').on('click', function(e){
        e.preventDefault();
        let user = $(this).data('id');
        console.log(user);
        $.ajax({
                url:'cart.php',
                type: 'GET',
                data: {cart: 'add', id:user},
                dataType: 'json',
                success:function(res)
                {
                    if (res.code =='ok')
                    {
                        alert('Товар добавлене в корзину')
                    }else{
                        alert(res.answer);
                    }
                },
                error: function()
                {
                    alert('Произошла ошибка, обратитесь в тех. поддержку');
                }

            });
    });

    


});


$(function()
{
    $('.img-info').on('click', function(){
        let idd = $(this).data('id');
        console.log(idd);

        document.cookie ="info="+idd;

    });

    


});