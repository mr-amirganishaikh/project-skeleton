/*To set menu item active on page load*/
var activeMenuItem = function (customConfig) {
    var localConfig = {
        selector: undefined,
        pagePrefix: '#page_',
        className: 'active',
        conditionType: 'url',
        defaultActive: 'index',
        onInit: function (data) {}
    };
    this.config = $.extend(localConfig, customConfig);
    var context = this.config;

    this.init = function () {
        if (context.conditionType.toLowerCase() == 'url') {
            var path = window.location.pathname,
                page = path.substring(path.lastIndexOf("/") + 1).split(".")[0];
            if(page){
                $(context.pagePrefix + page).addClass(context.className);
            }else{
                $(context.pagePrefix + context.defaultActive).addClass(context.className);
            }
        } else if (context.conditionType.toLocaleLowerCase() == 'custom') {
            if (!context.selector) {console.error('Invalid selector : activeMenuItem'); return;}
            $(context.selector).addClass(context.className);
        }
        context.onInit();
    }
};
var activeMenu = new activeMenuItem();

/*Gototop functionality*/
var gototop = function (customConfig) {
    var localConfig = {
        offset: '100px',
        offsetType: 'custom',
        delay: 1000,
        selector: '[data-gototop]',
        target: undefined,
        inClass: 'active',
        onInit: function (data) {}
    };
    this.config = $.extend(localConfig, customConfig);
    var context = this.config;

    this.init = function () {
        if (!context.selector) {console.error('Invalid selector : gototop'); return;}
        
        if (context.offsetType.toLowerCase() == 'element') {
            if (!context.target) {console.error('Invalid target : gototop'); return;}
            context.offset = $(context.target).outerHeight();
        }
        
        $(window).scroll(function () {
            if (($(window).scrollTop() > context.offset)) {
                $(context.selector).addClass(context.inClass);
            } else {
                $(context.selector).removeClass(context.inClass);
            }
        });
        
        $(context.selector, 'body').off();
        $(context.selector, 'body').on('click', function(e){
            e.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, context.delay);
        });
        context.onInit();
    }
};
var toTop = new gototop();
