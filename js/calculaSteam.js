 function calculo1() {
  let op1 = parseFloat(document.getElementById("op1").value);
  let op2 = parseFloat(document.getElementById("op2").value);
  let op3 = parseFloat(document.getElementById("op3").value);
  let x = document.getElementById("resultado1");

  x.innerHTML = (op1 * op2)*op3*op3+"kg⋅m^2⋅rad/s";
}

function calculo2() {
  let op4 = parseFloat(document.getElementById("op4").value);
  let op5 = parseFloat(document.getElementById("op5").value);
  let op6 = parseFloat(document.getElementById("op6").value);
  let x = document.getElementById("resultado2");

  x.innerHTML = ((op4 * op5)*2)*3+"N*m";
}