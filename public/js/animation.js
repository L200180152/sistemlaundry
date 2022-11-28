$("#menu-checkbox").click(function() {
    if ($('#menu-checkbox:checked').length) {
        $('.sidebar').css('width', '80px');
        $('.sidebar .main .list-item').css({
            'position': 'relative',
            'right': '20px',
            'width': '70%'
        });
        $('.sidebar .main .list-item .description').css({
            'display': 'none'
        });
        $('.sidebar .main .list-item .icon').css({
            'margin-left': '3px',
            'font-size': '20px'
        });
        $('.sidebar .description-header').css({
            'font-size': '10px',
        });
        $(' .sidebar .header').css({
            'padding': '13px'
        });
       
        
    } else {
        $('.sidebar').css('width', '260px');
        $('.sidebar .main .list-item').css({
            'position': 'relative',
            'right': '0px',
            'width': '80%'
        });
        $('.sidebar .main .list-item .description').css({
            'display': ''
        });
        $('.sidebar .main .list-item .icon').css({
            'margin-right': '10px'
        });
        $('.sidebar .main .list-item .icon').css({
            'margin-left': '',
            'font-size': ''
        });
        $('.sidebar .description-header').css({
            'font-size': '18px'
        });
        $(' .sidebar .header').css({
            'padding': '24px'
        });
    }
});