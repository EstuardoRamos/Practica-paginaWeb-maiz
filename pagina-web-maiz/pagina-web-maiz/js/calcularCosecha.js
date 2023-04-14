function calcularCosecha(fechaSiembra) {
  // Convertir la fecha de siembra a milisegundos
  var fechaSiembraMs = Date.parse(fechaSiembra);

  // Calcular la fecha de cosecha sumando 100 días (86400000 milisegundos por día)
  var fechaCosechaMs = fechaSiembraMs + 100 * 86400000;

  // Convertir la fecha de cosecha de milisegundos a objeto Date
  var fechaCosecha = new Date(fechaCosechaMs);

  // Devolver la fecha de cosecha en formato legible para el usuario
  return fechaCosecha.toLocaleDateString();
}

function calcularFechaCosecha() {
  // Obtener la fecha de siembra ingresada por el usuario
  var fechaSiembra = document.getElementById("fecha-siembra").value;

  // Calcular la fecha de cosecha usando la función calcularCosecha
  var fechaCosecha = calcularCosecha(fechaSiembra);

  // Mostrar la fecha de cosecha en el resultado
  document.getElementById("resultado").textContent =
    "La fecha de cosecha estimada es " + fechaCosecha + ".";
}

// Ejemplo de uso:
var fechaSiembra = "2023-04-09"; // Fecha de siembra en formato "YYYY-MM-DD"
var fechaCosecha = calcularFechaCosecha(fechaSiembra); // Fecha estimada de cosecha
console.log("La fecha estimada de cosecha es:", fechaCosecha);
