/**
 * JRWS LLC — main.js
 * Minimal vanilla JS: smooth-scroll for in-page anchor links, and a
 * scroll-triggered reveal animation for `.reveal` elements. No
 * frameworks, no build step.
 */

(function () {
  "use strict";

  /* Smooth scroll for any in-page anchor link (hero scroll cue, etc). */
  document.addEventListener("click", function (event) {
    var link = event.target.closest('a[href^="#"]');
    if (!link) return;

    var targetId = link.getAttribute("href").slice(1);
    if (!targetId) return;

    var target = document.getElementById(targetId);
    if (!target) return;

    event.preventDefault();
    target.scrollIntoView({ behavior: "smooth", block: "start" });
  });

  /**
   * Reveal-on-scroll: any element with class "reveal" fades/slides in
   * once it enters the viewport. Falls back to showing everything
   * immediately if IntersectionObserver isn't available.
   */
  function initScrollReveal() {
    var targets = document.querySelectorAll(".reveal");
    if (!targets.length) return;

    if (!("IntersectionObserver" in window)) {
      targets.forEach(function (el) {
        el.classList.add("in-view");
      });
      return;
    }

    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add("in-view");
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.15, rootMargin: "0px 0px -40px 0px" }
    );

    targets.forEach(function (el) {
      observer.observe(el);
    });
  }

  document.addEventListener("DOMContentLoaded", initScrollReveal);
})();
