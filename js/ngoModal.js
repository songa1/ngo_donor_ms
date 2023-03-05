let ngoModal = document.getElementById("addNgo");

// Get the button that opens the modal
let ngoModalBtn = document.getElementById("add-new-ngo");

// Get the <span> element that closes the modal
let span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
ngoModalBtn.onclick = function() {
    ngoModal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    ngoModal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == ngoModal) {
    ngoModal.style.display = "none";
  }
}