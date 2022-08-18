const modal = document.querySelector(".mymodal");
const overlay = document.querySelector(".overlay");
const btnCloseModal = document.querySelector(".close-modal");
const btnShowModal = document.querySelectorAll(".show-modal");

const removeHidden = function () {
  modal.classList.remove("hidden");
  overlay.classList.remove("hidden");
};

const addHidden = function () {
  modal.classList.add("hidden");
  overlay.classList.add("hidden");
};

for (let i = 0; i < btnShowModal.length; i++) {
  btnShowModal[i].addEventListener("click", removeHidden);
  btnCloseModal.addEventListener("click", addHidden);
  overlay.addEventListener("click", addHidden);
}

document.addEventListener("keydown", function (event) {
  console.log(event.key);

  if (event.key == "Escape" && !modal.classList.contains("hidden")) {
    addHidden();
  }
});
