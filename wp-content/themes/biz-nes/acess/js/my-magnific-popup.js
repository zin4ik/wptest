jQuery(document).ready(function($) {
    $('.popup-with-form').magnificPopup({
        type: 'inline',
        preloader: false,
        callbacks: {
            beforeOpen: function() {
                if($(window).width() < 700) {
                    this.st.focus = false;
                } else {
                    this.st.focus = '#name';
                }
            }
        }
    });
});