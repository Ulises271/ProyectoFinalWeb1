/*!
 * Materialize JS (Personalizado)
 */

document.addEventListener("DOMContentLoaded", function() {
  // Aplicar una sombra dinámica a los botones al hacer clic
  const buttons = document.querySelectorAll(".btn");
  buttons.forEach(button => {
      button.addEventListener("mousedown", function() {
          this.style.boxShadow = "0 6px 12px rgba(0, 0, 0, 0.3)";
      });
      button.addEventListener("mouseup", function() {
          this.style.boxShadow = "0 4px 8px rgba(0, 0, 0, 0.2)";
      });
  });
});
