var width = $(window).width();
var height = $(window).height();

if (width > 768 && height > 650) {
    $.scrollify({
    section : ".scroll-area",
    sectionName: "página",
    scrollbars: true,
    setHeights: false,
    before: function(index, sections) {
        if (index > 1) {
            $('.header').addClass('shrunk');
        } else {
            $('.header').removeClass('shrunk');
        }
    }
    });
}