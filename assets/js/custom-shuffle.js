	// shuffleInstance.addFilterButtons();
	// $('#category-Photography').on('click', function () {
     //    shuffleInstance.shuffle('shuffle', function ($el, shuffle) {
	// 	return $el.data('group') == 'Photography';
	// 	});
	// });



//     'use strict';
//
//     var Shuffle = window.Shuffle;
//
//     var Alo = function (element) {
//         this.element = element;
//         this.shuffle = new Shuffle(element, {
//             itemSelector: '.fw-portfolio',
//             sizer: element.querySelector('.st-masonry-sizer'),
//         });
// // Log events.
//         this.addShuffleEventListeners();
//
//         this._activeFilters = [];
//
//         this.addFilterButtons();
//
//         this.mode = 'exclusive';
//     };

    // Alo.prototype.toggleMode = function () {
    //     if (this.mode === 'additive') {
    //         this.mode = 'exclusive';
    //     } else {
    //         this.mode = 'additive';
    //     }
    // };

    /**
     * Shuffle uses the CustomEvent constructor to dispatch events. You can listen
     * for them like you normally would (with jQuery for example).
//      */
//     Alo.prototype.addShuffleEventListeners = function () {
//         this.shuffle.on(Shuffle.EventType.LAYOUT, function (data) {
//             console.log('layout. data:', data);
//         });
//
//         this.shuffle.on(Shuffle.EventType.REMOVED, function (data) {
//             console.log('removed. data:', data);
//         });
//     };
// var shuffleInstance = new Shuffle(element, {
// 	itemSelector: 'article',
// 	sizer: sizer, // could also be a selector: '.my-sizer-element'
// 	speed: 500,
// 	easing: 'ease-out'
// });
// shuffleInstance.addFilterButtons();
// shuffleInstance.filter('Photography');
// $('#category-Photography').on('click', function () {
// holder.shuffle('shuffle', function ($el, shuffle) {
// 	return $el.data('group') == 'Photography';
//     });
// });
    /**
     * Shuffle uses the CustomEvent constructor to dispatch events. You can listen
     * for them like you normally would (with jQuery for example).
     */
    // Alo.prototype.addFilterButtons = function () {
    //     var options = document.querySelector('.filter-options');
    //
    //     if (!options) {
    //         return;
    //     }
    //
    //     var filterButtons = Array.from(options.children);
    //
    //     filterButtons.forEach(function (button) {
    //         button.addEventListener('click', this._handleFilterClick.bind(this), false);
    //     }, this);
    // };

    // Alo.prototype._handleFilterClick = function (evt) {
    //     var btn = evt.currentTarget;
    //     var isActive = btn.classList.contains('active');
    //     var btnGroup = btn.getAttribute('data-group');
    //
    //     // You don't need _both_ of these modes. This is only for the Alo.
    //
    //     // For this custom 'additive' mode in the Alo, clicking on filter buttons
    //     // doesn't remove any other filters.
    //     if (this.mode === 'additive') {
    //         // If this button is already active, remove it from the list of filters.
    //         if (isActive) {
    //             this._activeFilters.splice(this._activeFilters.indexOf(btnGroup));
    //         } else {
    //             this._activeFilters.push(btnGroup);
    //         }
    //
    //         btn.classList.toggle('active');
    //
    //         // Filter elements
    //         this.shuffle.filter(this._activeFilters);
    //
    //         // 'exclusive' mode lets only one filter button be active at a time.
    //     } else {
    //         this._removeActiveClassFromChildren(btn.parentNode);
    //
    //         var filterGroup;
    //         if (isActive) {
    //             btn.classList.remove('active');
    //             filterGroup = Shuffle.ALL_ITEMS;
    //         } else {
    //             btn.classList.add('active');
    //             filterGroup = btnGroup;
    //         }
    //
    //         this.shuffle.filter(filterGroup);
    //     }
    // };

    // Alo.prototype._removeActiveClassFromChildren = function (parent) {
    //     var children = parent.children;
    //     for (var i = children.length - 1; i >= 0; i--) {
    //         children[i].classList.remove('active');
    //     }
    // };

    // document.addEventListener('DOMContentLoaded', function () {
    //     window.alo = new Alo(document.getElementById('st-blog-holder'));
    // });