
$(function(){
    
    $('div[data-video-id]').each(function(){
        
        var videoEl = this;
        
        var videoThumbUrl = 'https://img.youtube.com/vi/'+$(this).data('video-id')+'/maxresdefault.jpg';
        
        function noImg() {
            console.log('Нет картинки');
        };
        
        
        
        var imgEl = new Image();

        imgEl.onerror = function() {
            noImg();
        };

        imgEl.onload = function() {
            // Мне кажется это можно сделать как то по другому, но я так и не понял как...
            if (this.width == 120) { 
                noImg();
            } else {
                // Т.к. манипуляции с DOM ресурсозатратны, сделаем через стили.
                $(videoEl).css({
                    width:this.width,
                    height:this.height,
                    backgroundImage:'url('+this.src+')'
                });
            }
        };

        imgEl.src = videoThumbUrl;
    });
});