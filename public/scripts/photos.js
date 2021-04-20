imgBlocks = [
    {title: 'Изображение 1', path: '../img/backgrounds/1.png'},
    {title: 'Изображение 2', path: '../img/backgrounds/2.jpg'},
    {title: 'Изображение 3', path: '../img/backgrounds/3.png'},
    {title: 'Изображение 4', path: '../img/backgrounds/4.png'},
    {title: 'Изображение 5', path: '../img/backgrounds/5.png'},

    {title: 'Изображение 6', path: '../img/backgrounds/6.jfif'},
    {title: 'Изображение 7', path: '../img/backgrounds/7.jfif'},
    {title: 'Изображение 8', path: '../img/backgrounds/8.jfif'},
    {title: 'Изображение 9', path: '../img/backgrounds/9.jfif'},
    {title: 'Изображение 10', path: '../img/backgrounds/10.jfif'},

    {title: 'Изображение 11', path: '../img/backgrounds/11.jfif'},
    {title: 'Изображение 12', path: '../img/backgrounds/12.jfif'},
    {title: 'Изображение 13', path: '../img/backgrounds/13.jfif'},
    {title: 'Изображение 14', path: '../img/backgrounds/14.jfif'},
    {title: 'Изображение 15', path: '../img/backgrounds/15.jfif'},
];
globalIndex = 0;




function addImgBlock(index) {
    $('#img-container').append('<div class="flex-item" id="' +globalIndex++ + '"><img src="'
                +imgBlocks[index].path + '" width="200" title="'
                +imgBlocks[index].title + '"><p class="image-title">'
                +imgBlocks[index].title +'</p></div>');
}

$(document).ready( () => {
    $('#gallery-div').hide();

    $('#add-photos').click( () => {
        let count = $('#img-count').val();
        for (let i = 0; i < count; i++)
            addImgBlock(i)

        $('#img-container img').click(function() {
            $(this).toggleClass('enlarged');
        });
        let localIndex = 0;
        $('#gallery-div img').attr('src', $('#img-container #0 img').attr('src'));
        $('#gallery-div p').text($('#img-container #0 p').text());
        $('#gallery-div').show();

        $('#next-img').click(function() {
            let query = "#img-container #";
            query += (localIndex+1 < $('#img-container > *').length)? ++localIndex : localIndex;

            $(this).parent().find('img')
                .attr('src', $(query).find('img').attr('src'));
            $(this).parent().find('p').text($(query).find('p').text());
        });


        $('#prev-img').click(function() {
            let query = "#img-container #";
            query+= (localIndex-1 >= 0)? --localIndex : localIndex;
            $(this).parent().find('img')
                .attr('src', $(query).find('img').attr('src'));
            $(this).parent().find('p').text($(query).find('p').text());
        });
    });

    $('#del-photos').click( () => {
        globalIndex = 0;
        $('#img-container').empty();
        $('#gallery-div').hide();
    });
    $(this).blur();
})

