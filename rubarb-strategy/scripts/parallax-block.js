;(function ( $ ) {
    //Make your content a heroe
    $.fn.transformHeroes = function() {
        //Variables
        var perspective = '25px',
            delta = 20,
            width = this.width(),
            height = this.height(),
            midWidth = width / 2,
            midHeight = height / 2;
        //Events
        this.on({
            mousemove: function(e) {
                var pos = $(this).offset(),
                    cursPosX = e.pageX - pos.left,
                    cursPosY = e.pageY - pos.top,
                    cursCenterX = midHeight - cursPosY,
                    cursCenterY = midWidth - cursPosX;

                $(this).css('transform','perspective(' + perspective + ') rotateX('+ (cursCenterY / delta) +'deg) rotateY('+ -(cursCenterX / delta) +'deg) scale3d(1,1,1)');
                $(this).removeClass('is-out');
            },
            mouseleave: function() {
                $(this).addClass('is-out');
            }
        });
        //Return
        return this;
    };
}( jQuery ));
