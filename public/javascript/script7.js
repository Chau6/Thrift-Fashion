$(document).ready(function() {
    $('.sub-menu-container').each(function() {
        var total_cols = 0;
        $(this).find('.sub-item2-content').each(function() {
            var cols = parseFloat($(this).data('cols'));
            if (total_cols == 0) {
                $(this).css('clear', 'left')
            }
            total_cols += cols;
            if (total_cols > 12) {
                $(this).css('clear', 'left');
                total_cols = cols
            }
            if (total_cols == 12) {
                total_cols = 0
            }
        })
    });
    $('.vertical-menu .tt-menu-bar').click(function() {
        var effect = $(this).closest('.tt-menu').find('.menu-effect').val();
        if (effect == "none") {
            $('.vertical-menu .ul-top-items').toggle()
        }
        if (effect == "fade") {
            $('.vertical-menu .ul-top-items').fadeToggle()
        }
        if (effect == "slide") {
            $('.vertical-menu .ul-top-items').slideToggle()
        }
    });
    $('.a-plus').click(function() {
        var effect = $(this).closest('.tt-menu').find('.menu-effect').val();
        if (effect == "none") {
            $('.li-plus').hide();
            $('.over').show()
        }
        if (effect == "fade") {
            $('.li-plus').fadeOut();
            $('.over').fadeIn()
        }
        if (effect == "slide") {
            $('.li-plus').slideUp();
            $('.over').slideDown()
        }
    });
    $('.a-minus').click(function() {
        var effect = $(this).closest('.tt-menu').find('.menu-effect').val();
        if (effect == "none") {
            $('.over').hide();
            $('.li-plus').show()
        }
        if (effect == "fade") {
            $('.over').fadeOut();
            $('.li-plus').fadeIn()
        }
        if (effect == "slide") {
            $('.over').slideUp();
            $('.li-plus').slideDown()
        }
    });
    jQuery("body .main-category-list .tt-menu-bar .ul-top-items >li").hover(function() {
        jQuery("body").addClass("menu_hover")
    }, function() {
        jQuery("body").removeClass("menu_hover")
    });
    $('.tt-menu .sub-menu-container').each(function() {
        var menu = $('.tt-menu').offset();
        var dropdown = $(this).parent().offset();
        var i = (dropdown.left + $(this).outerWidth()) - (menu.left + $('.tt-menu').outerWidth());
        if (i > 0) {
            $(this).css('margin-left', '-' + (i + 10) + 'px')
        }
    })
});

function menuMore() {
    var max_items = 4;
    var liItems = $('header .header .tt-menu-bar > ul.ul-top-items > li');
    var remainItems = liItems.slice(max_items, liItems.length);
    remainItems.wrapAll('<li class="li-top-item more-menu"><div class="flyout-menu-container sub-menu-container"><ul class="ul-second-items"></ul></div></li>');
    $('.more-menu').prepend('<a class="a-top-link" href="#"><span>More</span></a>')
}

function menuToggle() {
    if ($(window).width() < 992) {
        //$(".main-category-list .horizontal-menu ul.ul-top-items").css('display', 'none');
        $(".main-category-list ul.ul-top-items li.mega-menu > i").remove();
        $(".main-category-list ul.ul-top-items li.more-menu > i").remove();
        $(".main-category-list .TT-panel-heading").unbind("click");
        $('.main-category-list .TT-panel-heading').click(function() {
            $(this).parent().toggleClass('TTactive').find('ul.ul-top-items').slideToggle("fast")
        });
        $(".main-category-list ul.ul-top-items > li.mega-menu > a").after("<i class='material-icons'></i>");
        $(".main-category-list ul.ul-top-items > li.more-menu > a").after("<i class='material-icons'></i>");
        $(".main-category-list ul.ul-top-items > li.li-top-item > i").unbind("click");
        $(".main-category-list ul.ul-top-items > li.li-top-item > i").click(function() {
            $(this).parent().toggleClass("active").find(".sub-menu-container").first().slideToggle()
        })
    } else {
        //$(".main-category-list .horizontal-menu ul.ul-top-items").css('display', 'block');
        $(".main-category-list ul.ul-top-items li.li-top-item > i").unbind("click");
        $(".main-category-list ul.ul-top-items li.li-top-item > i").removeClass("active")
    }
}
$(document).ready(function() {
    menuToggle()
});
$(window).resize(function() {
    menuToggle()
})