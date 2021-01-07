import $ from 'jquery'
import slick from 'slick-carousel'
import LazyLoad from "vanilla-lazyload"
import { Power2, TimelineLite, Linear } from "gsap"
import { ScrollToPlugin } from 'gsap/all'
import ScrollMagic from 'scrollmagic'
import ModalVideo from 'modal-video'

/* SETUP SLICK
  ----------------------------- */
export const setupSlideshow = (el, type = 'basic') => {
  const $el = $(el);
  const opts = {
    basic: {
      autoplay: true,
      dots: true,
      infinite: true,
    }
  }

  $el.slick(opts[type])
}

/* LAZY LOAD
  ----------------------------- */
export const lazyLoad = () => {
  const lazyLoadInstance = new LazyLoad({
    elements_selector: ".lazy",
    data_src: "lazy",
  })
}

/* SMOOTH SCROLL
  ----------------------------- */
export const smoothScroll = () => {
  $('a[href*="#"]:not([href="#"]):not([href="#top"]):not(.preview__link)').click(function(e) {
    e.preventDefault()
    const target = $(this.hash)
    TweenLite.to(window, 1, { scrollTo: target.offset().top-100 })
  })

  $("a[href='#top']").click(function(e) {
    e.preventDefault()
    TweenLite.to(window, .8, { scrollTo: 0 })
  })
}

/* HEADER ANIMATION
  ----------------------------- */
export const menuOverlay = () => {
  const toggle = $('.header__toggle')
  const bar = $('.header__toggle .bar')
  const overlay = $('.header--offcanvas, .header__inner, .content-area, body')
  const link = $('.header--offcanvas a');
  const header = $('.header--main');

  toggle.on('click', function () {
    overlay.toggleClass('open')
    bar.toggleClass('animate')
    toggle.toggleClass('open')
  })

  link.on('click', function () {
    overlay.removeClass('open')
    bar.removeClass('animate')
    toggle.removeClass('open')
  })

  window.onresize = () => {
    overlay.removeClass('open')
    bar.removeClass('animate')
    toggle.removeClass('open')
  }

  $(window).scroll(function(e) {
    $(document).scrollTop() > 200 ?
      header.addClass('sticky') :
      header.removeClass('sticky')

    this.oldScroll > this.scrollY ?
      header.addClass('sticky-show').removeClass('sticky-hide') :
      header.addClass('sticky-hide').removeClass('sticky-show')
    this.oldScroll = this.scrollY
  })
}

/* SETUP MODALVIDEO
  ----------------------------- */
export const setupModalVideo = () => {
  if ($('.js-modal-btn').length > 0 || $('.js-modal-btn-vimeo').length > 0) {
    new ModalVideo('.js-modal-btn')
    new ModalVideo('.js-modal-btn-vimeo', { channel: 'vimeo' })
  }
}