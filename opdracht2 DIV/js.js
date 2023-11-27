document.addEventListener("DOMContentLoaded", function() {
    const movingDiv = document.querySelector('.moving-div');
    const screenWidth = window.innerWidth;
    const divWidth = movingDiv.clientWidth;
    const speed = 2; // Adjust the speed as needed
  
    function moveDiv() {
      let currentLeft = parseInt(getComputedStyle(movingDiv).left, 10);
  
      if (currentLeft + divWidth <= 0) {
        // Move the div to the right side of the screen when it goes out of the left side
        movingDiv.style.left = screenWidth + "px";
      } else {
        // Move the div to the left
        movingDiv.style.left = (currentLeft - speed) + "px";
      }
  
      requestAnimationFrame(moveDiv);
    }
  
    moveDiv(); // Start the animation
  });