// DECLARATION DES VARIABLES
let preferenceForm = document.querySelector("#preferenceForm");
let checkboxes = document.querySelectorAll(".form-check");
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

// DARK OU LIGHT MODE
// btnSubmit.addEventListener("click", function (e) {
//     let selectedMode = "";
  
//     if (darkModeRadio.checked) {
//       selectedMode = "dark";
//       document.body.classList.add("dark-theme");
//       document.body.classList.remove("light-theme");
//     } else if (lightModeRadio.checked) {
//       selectedMode = "light";
//       document.body.classList.remove("dark-theme");
//       document.body.classList.add("light-theme");
//     }
  
//     // On save le choix dans un localStorage
//     localStorage.setItem("colorMode", selectedMode);
//   });
  
//   document.addEventListener("DOMContentLoaded", function () {
//     // Vérification du local Storage et adaptation du thème
//     const colorMode = localStorage.getItem("colorMode");
  
//     if (colorMode === "dark") {
//       darkModeRadio.checked = true;
//       document.body.classList.add("dark-theme");
//     } else if (colorMode === "light") {
//       lightModeRadio.checked = true;
//       document.body.classList.add("light-theme");
//     }
//   });

