let benefModal = document.getElementById("addBeneficiary");

// Get the button that opens the modal
let benefModalBtn = document.getElementById("add-new-beneficiary");

// Get the <span> element that closes the modal
let span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
benefModalBtn.onclick = function() {
    benefModal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    benefModal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == benefModal) {
    benefModal.style.display = "none";
  }
}