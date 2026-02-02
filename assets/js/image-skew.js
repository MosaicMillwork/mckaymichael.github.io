document.addEventListener("DOMContentLoaded", () => { 
    // Image Skew Effect
    const imageContainers = document.querySelectorAll(".image-container");
    
    imageContainers.forEach((container) => {
      const wrapper = container.querySelector(".image-wrapper");
    
      container.addEventListener("mousemove", (event) => {
        const rect = container.getBoundingClientRect();
        const x = event.clientX - rect.left; // Mouse X position relative to the container
        const y = event.clientY - rect.top; // Mouse Y position relative to the container
        const width = rect.width;
        const height = rect.height;
    
        // Calculate rotation values
        const rotateX = (y / height - 0.5) * 15; // Rotate around X-axis
        const rotateY = (x / width - 0.5) * -15; // Rotate around Y-axis (negative for correct direction)
    
        // Apply the transform to the wrapper
        wrapper.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
      });
    
      container.addEventListener("mouseleave", () => {
        // Reset the transform when the mouse leaves
        wrapper.style.transform = "";
      });
    });
})