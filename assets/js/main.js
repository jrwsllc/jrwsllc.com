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

  /**
   * Product link popups: any [data-dialog-open] button opens the
   * <dialog> whose id matches its value. Works for any number of
   * links inside that dialog — one or several — with no JS changes.
   */
  function initLinkDialogs() {
    document.querySelectorAll("[data-dialog-open]").forEach(function (trigger) {
      trigger.addEventListener("click", function () {
        var dialog = document.getElementById(trigger.getAttribute("data-dialog-open"));
        if (dialog && typeof dialog.showModal === "function") {
          dialog.showModal();
        }
      });
    });

    document.querySelectorAll("dialog.link-dialog").forEach(function (dialog) {
      dialog.querySelectorAll("[data-dialog-close]").forEach(function (closeBtn) {
        closeBtn.addEventListener("click", function () {
          dialog.close();
        });
      });

      // Click on the backdrop (the dialog element itself, outside
      // .dialog-inner) closes it.
      dialog.addEventListener("click", function (event) {
        if (event.target === dialog) {
          dialog.close();
        }
      });
    });
  }

  document.addEventListener("DOMContentLoaded", function () {
    initScrollReveal();
    initLinkDialogs();
  });
})();
