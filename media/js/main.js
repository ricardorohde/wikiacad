$(function() {
    $('.animate-panel').animatePanel();

    $('.search').bootstrapValidator({live: 'enabled',group: '.boxInput'});
    $('.login').bootstrapValidator({live: 'enabled',group: '.boxInput'});

    $('.cadastrofresh').bootstrapValidator({
        live: 'submitted',
        group: '.boxInput',
        trigger: null,
        fields: {
            password: {
                validators: {
                    identical: {
                        field: 'confirmPassword'
                    }
                }
            },
            confirmPassword: {
                validators: {
                    identical: {
                        field: 'password'
                    }
                }
            }
        }
    });

    // $( window ).resize(function() {
    //     $('#page-top').height( $(window).height() );
    // }).trigger('resize');

});


// Animate panel function
$.fn['animatePanel'] = function() {

    var element = $(this);
    var effect = $(this).data('effect');
    var delay = $(this).data('delay');
    var child = $(this).data('child');

    // Set default values for attrs
    if(!effect) { effect = 'zoomIn'};
    if(!delay) { delay = 0.06 } else { delay = delay / 10 };
    if(!child) { child = '.row > div'} else {child = "." + child};

    //Set defaul values for start animation and delay
    var startAnimation = 0;
    var start = Math.abs(delay) + startAnimation;

    // Get all visible element and set opactiy to 0
    var panel = element.find(child);
    panel.addClass('opacity-0');

    // Get all elements and add effect class
    panel = element.find(child);
    panel.addClass('animated-panel').addClass(effect);

    // Add delay for each child elements
    panel.each(function (i, elm) {
        start += delay;
        var rounded = Math.round(start * 10) / 10;
        $(elm).css('animation-delay', rounded + 's')
        // Remove opacity 0 after finish
        $(elm).removeClass('opacity-0');
    });
}