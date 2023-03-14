let donorModal = document.getElementById("addDonor");

// Get the button that opens the modal
let donorModalBtn = document.getElementById("add-new-donor");

// Get the <span> element that closes the modal
let span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
donorModalBtn.onclick = function() {
    donorModal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    donorModal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == donorModal) {
    donorModal.style.display = "none";
  }
}