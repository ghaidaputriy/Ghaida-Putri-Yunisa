document.addEventListener('DOMContentLoaded', (event) => {
    const toggleButton = document.getElementById('toggleButton');
    const container = document.querySelector('.container');
    
    toggleButton.addEventListener('click', () => {
        if (container.style.backgroundColor === 'lightblue') {
            container.style.backgroundColor = 'lightgreen';
        } else {
            container.style.backgroundColor = 'lightblue';
        }
    });
});
