import $ from 'jquery'
// import { renderMap } from './components/renderMap'
import * as project from './functions'
import './polyfill'

window.onload = () => {
  project.lazyLoad()
  project.smoothScroll()
  project.menuOverlay()
  project.setupModalVideo()

  const bodyClasses = $('body').attr("class").split(/\s+/)
  
  $.each(bodyClasses, function(key, value) {
    switch(value) {
      case "home":
        break
      default:
        $('#loader').fadeOut(500)
    }
  })
}
