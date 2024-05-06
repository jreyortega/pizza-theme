(function(){

    // 'use strict';
    document.addEventListener('DOMContentLoaded', function() {
        var dropdown = document.querySelector('.pizza-sidebar-dropdown');
        var sidebar = document.querySelector('.sidebar-pizzasmenu');
        var containerwithsidebar = document.querySelector('.container.withsidebar-pizza');
        var footer = document.querySelector('.site-footer');

        dropdown.addEventListener('click', function() {
            if (sidebar.classList.contains('active')) {
                sidebar.classList.remove('active');
                dropdown.classList.remove('active');
                containerwithsidebar.classList.remove('active');
                footer.classList.remove('active');
            } else {
                sidebar.classList.add('active');
                dropdown.classList.add('active');
                containerwithsidebar.classList.add('active');
                footer.classList.add('active');
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function() {

        console.log('DOMContentLoaded event fired');

        var dropdown = document.querySelector('.employee-sidebar-dropdown');
        var sidebar = document.querySelector('.sidebar-employee');
        var containerwithsidebar = document.querySelector('.container.withsidebar-employee');
        var footer = document.querySelector('.site-footer');

        dropdown.addEventListener('click', function() {
            if (sidebar.classList.contains('active')) {
                sidebar.classList.remove('active');
                dropdown.classList.remove('active');
                containerwithsidebar.classList.remove('active');
                footer.classList.remove('active');
            } else {
                sidebar.classList.add('active');
                dropdown.classList.add('active');
                containerwithsidebar.classList.add('active');
                footer.classList.add('active');
            }
        });
    });

})();

(function(){

    

})();

