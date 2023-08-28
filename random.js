function randomIPK() {
  const randomNumber = Math.random() * 3 + 1;
  var a = "";
  a = randomNumber.toFixed(2);

  const pilihanBeasiswa = document.getElementById("pilihanbeasiswa");
  const file = document.getElementById("file");
  const button = document.getElementById("button");
  var errormsg = document.getElementById("error");

  if (a < 3) {
    pilihanBeasiswa.disabled = true;
    file.disabled = true;
    button.disabled = true;
    errormsg.textContent = "Maaf IPK anda lebih kecil dari 3";
  } else {
    pilihanBeasiswa.disabled = false;
    file.disabled = false;
    button.disabled = false;
    errormsg.textContent = "";
  }

  return a;
}

document.getElementById("ipk").value = randomIPK();
