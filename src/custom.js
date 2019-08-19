$(function() {
    'use strict';

    if (location.pathname === '/login') {
        location.href = $('a.btn-service--oauth').attr('href');
    }
});