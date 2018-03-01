jQuery(function ($) {
    var optionTypeClass = '.fw-option-type-icon';

    fwEvents.on('fw:options:init', function (data) {

        var $options = data.$elements.find(optionTypeClass);

        // handle click on an icon
        $options.find('.js-option-type-icon-item').on('click', function () {
            var $this = $(this),
                $classIcon = $this.attr('class'),
                $splitedClass = $classIcon.split(' '),
                $nameIcon = $splitedClass[0].replace('socicon-','');
            if ($this.hasClass('active')) {
                if ( $nameIcon === 'youtube' ) {
                    $nameIcon = 'YouTube';
                } else if ( $nameIcon === 'vkontakte' ) {
                    $nameIcon = 'VK';
                } else {
                    $nameIcon = $nameIcon.charAt(0).toUpperCase() + $nameIcon.slice(1);
                }
                $this.closest('.fw-multi-inline-group').find('[data-fw-option-id="name"]').children().val($nameIcon);
            } else {
                $this.closest('.fw-multi-inline-group').find('[data-fw-option-id="name"]').children().val();
            }

        });


    });

});
