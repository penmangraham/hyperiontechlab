// Ensure the DOM content is fully loaded before executing scripts
document.addEventListener('DOMContentLoaded', function() {
    switchThemePreference(); // Call your existing function to handle theme switching
    
    // Function to set dark mode as default
    function setDarkModeDefault() {
        let htmlElement = document.documentElement;
        htmlElement.classList.add('dark'); // Add 'dark' class to set dark mode
        // Optionally, you can also add specific dark mode styles or classes to other elements here
    }

    setDarkModeDefault(); // Call the function to set dark mode as default
});
document.addEventListener('DOMContentLoaded', function() {
    let htmlElement = document.documentElement;
    htmlElement.classList.add('dark'); // Add 'dark' class to set dark mode
});