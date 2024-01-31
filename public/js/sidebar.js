$(document).ready(function() {
    var currentUrl = window.location.href;
    var sidebarLinks = $('.nav-sidebar a');

    sidebarLinks.each(function() {
        var linkUrl = $(this).attr('href');

        if (currentUrl.includes(linkUrl)) {
            $(this).addClass('active');
            $(this).closest('.nav-treeview').siblings('.nav-link').addClass('active');
            $(this).closest('.has-treeview').addClass('menu-open');
            return false; // Stop iteration once a matching link is found
        }
    });
});
