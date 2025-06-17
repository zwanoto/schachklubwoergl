document.addEventListener('DOMContentLoaded', function() {
    loadHTML('includes/header.html', 'header');
    loadHTML('includes/footer.html', 'footer');
});

function loadHTML(url, elementId) {
    fetch(url)
        .then(response => response.text())
        .then(data => {
            document.getElementById(elementId).innerHTML = data;
        })
        .catch(error => console.error('Error loading the HTML file:', error));
}
