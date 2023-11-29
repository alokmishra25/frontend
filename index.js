// Your existing code...

// New JavaScript code
document.addEventListener('DOMContentLoaded', function() {
    // Add an event listener for a button click
    var myButton = document.getElementById('myButton');

    if (myButton) {
        myButton.addEventListener('click', function() {
            alert('Button clicked!'); // Display an alert when the button is clicked
        });
    }

    // Add functionality to change background color on hover
    var changeColorDiv = document.getElementById('changeColorDiv');

    if (changeColorDiv) {
        changeColorDiv.addEventListener('mouseover', function() {
            changeColorDiv.style.backgroundColor = '#ffcccb'; // Change background color on mouseover
        });

        changeColorDiv.addEventListener('mouseout', function() {
            changeColorDiv.style.backgroundColor = ''; // Reset background color on mouseout
        });
    }

    // Add more functionality as needed...
});
