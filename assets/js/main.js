/**
 * JRWS LLC — main.js
 * Minimal vanilla JS: smooth-scroll for in-page anchor links, and a
 * reusable "View All" expand/collapse toggle used by the Apps/Books/Games
 * item-grid pattern. No frameworks, no build step.
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
   * Reusable "View All [Category]" toggle.
   *
   * Markup contract:
   *   <button class="view-all-box" data-target="#books-extra"
   *           aria-expanded="false" data-label-more="View All Books"
   *           data-label-less="Show Less">
   *     <span class="view-all-label">View All Books</span>
   *     <span class="chevron-down" aria-hidden="true"></span>
   *   </button>
   *   <div id="books-extra">
   *     <a class="item-box extra-item">...</a>
   *     <a class="item-box extra-item">...</a>  (any number of items)
   *   </div>
   *
   * Works for any number of additional items revealed under the toggle,
   * so adding a 4th/5th product later needs no JS changes.
   */
  function initViewAllToggles() {
    var toggles = document.querySelectorAll(".view-all-box[data-target]");

    toggles.forEach(function (toggle) {
      toggle.addEventListener("click", function () {
        var targetSelector = toggle.getAttribute("data-target");
        var wrapper = document.querySelector(targetSelector);
        if (!wrapper) return;

        var items = wrapper.querySelectorAll(".extra-item");
        var isExpanded = toggle.getAttribute("aria-expanded") === "true";
        var nowExpanded = !isExpanded;

        toggle.setAttribute("aria-expanded", String(nowExpanded));

        var label = toggle.querySelector(".view-all-label");
        if (label) {
          var moreText = toggle.getAttribute("data-label-more") || label.textContent;
          var lessText = toggle.getAttribute("data-label-less") || "Show Less";
          label.textContent = nowExpanded ? lessText : moreText;
        }

        items.forEach(function (item) {
          item.classList.toggle("is-visible", nowExpanded);
          item.setAttribute("aria-hidden", String(!nowExpanded));
          if (nowExpanded) {
            item.removeAttribute("tabindex");
          } else {
            item.setAttribute("tabindex", "-1");
          }
        });
      });
    });
  }

  document.addEventListener("DOMContentLoaded", initViewAllToggles);
})();
