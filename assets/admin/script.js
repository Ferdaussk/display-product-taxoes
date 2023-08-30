document.addEventListener("DOMContentLoaded", function () {
  const popupContainers = document.querySelectorAll(".popup-container");
  const popupCloses = document.querySelectorAll(".popup-close");
  const popupBtns = document.querySelectorAll(".popup-btn");

  popupBtns.forEach((btn, index) => {
      btn.addEventListener("click", () => {
          const popupId = btn.getAttribute("data-popup-id");
          const popupContainer = document.getElementById(popupId);
          if (popupContainer) {
              popupContainer.style.display = "block";
          }
      });
  });

  popupCloses.forEach((close) => {
      close.addEventListener("click", () => {
          const popupContainer = close.closest(".popup-container");
          if (popupContainer) {
              popupContainer.style.display = "none";
          }
      });
  });

  window.addEventListener("click", (event) => {
      popupContainers.forEach((popup) => {
          if (event.target === popup) {
              popup.style.display = "none";
          }
      });
  });
});