// DECLARATION DES VARIABLES
let preferenceForm = document.querySelector("#preferenceForm");
let checkboxes = document.querySelectorAll(".input-checkbox");
let darkModeRadio = document.getElementById("darkMode");
let lightModeRadio = document.getElementById("lightMode");
let btnSubmit = document.getElementById("btnSubmit");

// NOMBRE DE CASES
let checkboxCount = 0;

// FONCTIONS
checkboxes.forEach(function (checkbox) {
  checkbox.addEventListener("change", function () {
    if (this.checked) {
      checkboxCount++;
      if (checkboxCount >= 3) {
        // Désactiver les cases après trois sélections
        checkboxes.forEach(function (checkbox) {
          if (!checkbox.checked) {
            checkbox.disabled = true;
          }
        });
      }
    } else {
      checkboxCount--;
      // Réactiver les cases lorsque l'utilisateur retire son troisième choix
      checkboxes.forEach(function (checkbox) {
        checkbox.disabled = false;
      });
    }
  });
});

// BACKGROUND
document.addEventListener("DOMContentLoaded", function () {
  darkModeRadio.addEventListener("change", function () {
    document.body.classList.remove("light-theme");
  });

  lightModeRadio.addEventListener("change", function () {
    document.body.classList.add('light-theme');
  });
});
