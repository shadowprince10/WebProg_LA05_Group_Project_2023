import './bootstrap';

$('heart-button').click(function() {
    $(this).toggleClass('active');
});

$(document).ready(function() {
    $('.heart-button').click(function () {
        var button = $(this);
        var productID = button.data('productID');
        var wishFlag = button.data('wish-flag') || 0;
        // default wishFlag value is 0

        if (wishFlag === 0) {
            button.addClass('active');
            wishFlag = 1;
        } else {
            button.removeClass('active');
            wishFlag = 0;
        }
        
        button.data('wish-flag', wishFlag);
        
        $.ajax({
            method: 'POST',
            url: '/product/{productID}/wishlist/add',
            data: {
                itemID: itemID,
                wishFlag: wishFlag
            },
            success: function(response) {
                button.toggleClass('active');
                button.data('wish-flag', wishFlag === 0 ? 1 : 0);
            },
            error: function(xhr) {
                
            }
        })
    });
});