let fundsModal = document.getElementById("addFunds");

// Get the button that opens the modal
let fundModalBtn = document.getElementById("add-new-fund");

// Get the <span> element that closes the modal
let span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
fundModalBtn.onclick = function() {
    fundsModal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    fundsModal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == fundsModal) {
    fundsModal.style.display = "none";
  }
}