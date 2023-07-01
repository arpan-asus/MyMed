function toggleFileInput() {
    // Get the file input element
    const fileInput = document.getElementById("file-input");
    const DRNInput = document.getElementById("DRN");
  
    // Get the selected role from the dropdown
    const roleSelect = document.getElementById("role");
    const selectedRole = roleSelect.value;
  
    // Show or hide the file input based on the selected role
    if (selectedRole === "Doctor") {
      fileInput.style.display = "block";
      DRNInput.style.display = "block";
    } else {
      fileInput.style.display = "none";
      DRNInput.style.display = "none";
    }
  }