    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>

    {{-- font awsome --}}
    <script src="https://kit.fontawesome.com/75ad900f1b.js" crossorigin="anonymous"></script>



<script>
            // Get reference to HTML elements
let inputImage = document.getElementById("formFileSm");
let imgView = document.getElementById("img-id");

// Add event listener to the file input
inputImage.addEventListener('change', function () {
    const selectedFile = inputImage.files[0];

    if (selectedFile) {
        // Create FileReader
        const reader = new FileReader();

        // Define a callback function to execute when the reader has loaded the image
        reader.onload = function (event) {
            imgView.src = event.target.result;
        };

        // Read the selected image as a data URL
        reader.readAsDataURL(selectedFile);
    }
});


/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}


// data table
$(document).ready(function(){
        $('#example').DataTable();
       });

// Main Navigation

$('#menu-toggle').click(function(){
        $(this).toggleClass('open'),
        $('.main-nav').toggleClass('show-it');
      });

    </script>

