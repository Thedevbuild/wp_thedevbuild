const $ = (value) => document.querySelector(value);

window.onload = function () {
  $('#loader-grid').classList.add('d-none');
  $('.main-body').classList.remove('d-none');
  $('.main-body').classList.add('animate__slideInUp');

  function mobileNavFunction() {
    $('body').classList.toggle('overflow-hidden');
    $('.mobileNav').classList.toggle('h-100');
    $('.mobileNav .toggleNav').classList.toggle('d-flex');
  }

  function scrollFunction() {
    if (document.body.scrollTop > 70 || document.documentElement.scrollTop > 70) {
      $('.navbar').classList.add('py-3');
      $('.navbar').classList.remove('py-4');
      $('.navbar').classList.add('shadow-lg-o');
    } else {
      $('.navbar').classList.add('py-4');
      $('.navbar').classList.remove('py-3');
      $('.navbar').classList.remove('shadow-lg-o');
    }
  }

  function resizeFunction() {
    if (document.body.clientWidth > 768 || document.documentElement.clientWidth > 768) {
      $('body').classList.remove('overflow-hidden');
      $('.mobileNav').classList.remove('h-100');
      $('.mobileNav .toggleNav').classList.remove('d-flex');
    }
  }

  document.querySelectorAll('.nvb-toggler').forEach(function (item) {
    item.onclick = function () {
      mobileNavFunction();
    };
  });

  window.onscroll = function () {
    scrollFunction();
  };

  window.onresize = function () {
    resizeFunction();
  };
};
