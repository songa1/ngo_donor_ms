let userModal = document.getElementById("addUser");

// Get the button that opens the modal
let userModalBtn = document.getElementById("add-new");


// When the user clicks on the button, open the modal
userModalBtn.onclick = function() {
  userModal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  userModal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == userModal) {
    userModal.style.display = "none";
  }
}