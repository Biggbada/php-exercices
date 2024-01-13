let inputs = document.querySelectorAll(".required-input");
const submitBtn = document.querySelector("#submit-btn");
const cardCheckBox = document.querySelector('input[type="checkbox"]');
const cardNumber = document.querySelector('input[type="number"]');

function checkInputs(inputs) {
  console.log("test", inputs);
  let errors = 0;
  for (let i = 0; i < inputs.length; i++) {
    inputs[i].classList.remove("border-danger");
    if (inputs[i].value === "") {
      console.log(inputs[i]);
      inputs[i].classList.add("border-danger");
      console.log("L'input " + inputs[i].name + " est vide");
      errors++;
    } else {
      inputs[i].classList.add("border-success");
      console.log("L'input " + inputs[i].name + " n'est pas vide");
    }
  }
  return errors;
}

submitBtn.addEventListener("click", (event) => {
  checkInputs(inputs) > 0 ? event.preventDefault() : console.log("ok");
});

cardCheckBox.addEventListener("click", (event) => {
  console.log(inputs);

  event.preventDefault;
  console.log(cardNumber.ariaValueText);
  cardNumber.disabled === true
    ? (cardNumber.disabled = false)
    : (cardNumber.disabled = true);
  cardNumber.ariaValueText === "Disabled readonly input"
    ? (cardNumber.ariaValueText = "")
    : cardNumber.ariaValueText === "Disabled readonly input";
  cardCheckBox.value === 1
    ? (cardNumber.value = null)
    : console.log("cardNumber not nul");

  cardNumber.classList.toggle("form-control-plaintext");
  cardNumber.classList.toggle("form-control");
});
// console.log(checkInputs (inputs));
// submitBtn.addEventListener('click', event => {
//     if (checkInputs(inputs) === false) {
//         event.preventDefault();
//     }
// })
