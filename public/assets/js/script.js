// ===== Déclaration des variables ===== //
const checkboxes = document.querySelectorAll(".fluxChoice input[type='checkbox']");
const maxChoice = 3;

// ===== Fonction pour empêcher la sélection de plus de trois éléments ===== //
document.addEventListener("DOMContentLoaded", function () {
  checkboxes.forEach(function (checkbox) {
    checkbox.addEventListener("change", function () {
      const selectedCheckboxes = document.querySelectorAll(
        ".fluxChoice input[type='checkbox']:checked"
      );

      if (selectedCheckboxes.length >= maxChoice) {
        checkboxes.forEach(function (sportChoice) {
          if (!sportChoice.checked) {
            sportChoice.disabled = true;
            sportChoice.parentElement.classList.add("disabled-checkbox");
          }
        });
      } else {
        checkboxes.forEach(function (sportChoice) {
          sportChoice.disabled = false;
          sportChoice.parentElement.classList.remove("disabled-checkbox");
        });
      }
    });
  });
});
