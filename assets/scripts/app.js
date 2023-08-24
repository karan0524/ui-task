$( document ).ready(function() {

    $(function() {
        var Accordion = function(el, multiple) {
            this.el = el || {};
            this.multiple = multiple || false;
    
            // Variables privadas
            var links = this.el.find('.nav-link');
            // Evento
            links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
        }
    
        Accordion.prototype.dropdown = function(e) {
            var $el = e.data.el;
                $this = $(this),
                $next = $this.next();
    
            $next.slideToggle();
            $this.parent().toggleClass('open');
    
            if (!e.data.multiple) {
                $el.find('.subMenu').not($next).slideUp().parent().removeClass('open');
            };
        }	
    
        var accordion = new Accordion($('#accordion'), false);
    });
   
$('.hamburger').on('click' , () =>{
    $('.sidebar').toggleClass('active')
})

$('.collapseSidebar').on('click' , () =>{
    $('.sidebar').toggleClass('active')
})


$('select:not(.ignore)').niceSelect();   


var rangeSlider = document.getElementById('slider');

noUiSlider.create(rangeSlider, {
    start: [4000],
    range: {
        'min': [2000],
        'max': [10000]
    }
});

});



