(function(){
  'use strict';
  document.addEventListener('DOMContentLoaded', function() {
    var image = document.querySelector('.header-menu-image');
    var menu = document.querySelector('.header-menu');
    var bodymain = document.querySelector('.body-page-main');
    var footer = document.querySelector('.site-footer');
    var menucontainer = document.querySelector('.menu-container');

    if (image && menu){
      image.addEventListener('click', function() {
          if (menu.classList.contains('droped')) {
              menu.classList.remove('droped');
              image.classList.remove('droped');
              footer.classList.remove('droped');
              bodymain.classList.remove('droped');
              menucontainer.classList.remove('droped');
          } else {
              menu.classList.add('droped');
              image.classList.add('droped');
              bodymain.classList.add('droped');
              footer.classList.add('droped');
              menucontainer.classList.add('droped');
          }
      });
    }else{
      console.error('No se encontró el elemento menu o image.');
    }

    
  });
})();