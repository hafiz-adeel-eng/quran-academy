/* ==========================================================================
   QuranlyHub — Brand JS (vanilla, no dependencies, lightweight)
   1. Stat counters: animate once when the stats band scrolls into view.
      Markup: <span class="qly-stat-value" data-target="5000">0</span>
   2. Free fallback carousel autoplay for the scroll-snap testimonial track.
   3. Header CTA: inject a "Free Trial" button into the site header.
   ========================================================================== */

(function () {
  'use strict';

  var ran = false;

  function animateCount(el) {
    var target = parseInt(el.getAttribute('data-target'), 10);
    if (isNaN(target)) return;
    var duration = 1600;
    var start = null;

    function step(ts) {
      if (!start) start = ts;
      var p = Math.min((ts - start) / duration, 1);
      var eased = 1 - Math.pow(1 - p, 3);
      el.textContent = Math.round(target * eased).toLocaleString();
      if (p < 1) {
        requestAnimationFrame(step);
      } else {
        el.textContent = target.toLocaleString();
      }
    }
    requestAnimationFrame(step);
  }

  function onStatVisible() {
    if (ran) return;
    ran = true;
    var nums = document.querySelectorAll('.qly-stat-value');
    for (var i = 0; i < nums.length; i++) {
      animateCount(nums[i]);
    }
  }

  if ('IntersectionObserver' in window) {
    var band = document.querySelector('.qly-stats-band');
    if (band) {
      var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            onStatVisible();
            io.disconnect();
          }
        });
      }, { threshold: 0.3 });
      io.observe(band);
    } else {
      window.addEventListener('scroll', function () {
        if (!ran && (window.scrollY + window.innerHeight) > 300) onStatVisible();
      }, { passive: true });
    }
  } else {
    onStatVisible();
  }

  /* Free fallback carousel autoplay — drives the scroll-snap track. */
  var track = document.querySelector('.qly-scroll-carousel');
  if (track && !('ElementorCarousel' in window)) {
    var cards = track.children.length;
    var index = 0;
    var timer = setInterval(function () {
      if (cards < 2) return;
      index = (index + 1) % cards;
      var card = track.children[index];
      if (card) {
        track.scrollTo({ left: card.offsetLeft - track.offsetLeft, behavior: 'smooth' });
      }
    }, 6000);
    track.addEventListener('touchstart', function () {
      clearInterval(timer);
    }, { passive: true });
  }

  /* Header CTA button */
  var headerInner = document.querySelector('.site-header .header-inner');
  if (headerInner && !document.querySelector('.qly-header-cta')) {
    var cta = document.createElement('div');
    cta.className = 'qly-header-cta';
    cta.innerHTML = '<a href="/free-trial/">Free Trial</a>';
    headerInner.appendChild(cta);
  }
})();
