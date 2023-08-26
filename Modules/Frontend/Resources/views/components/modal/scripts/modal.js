$('.btn-close-modal').click(function(){
    $(this).next().find('iframe').attr('src', $(this).next().find('iframe').attr('src'))
})