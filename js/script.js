document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll effect for internal links
    document.querySelectorAll('a.scroll-btn').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
    console.log("Welcome to the luxurious world of Ceylon Golden Bee Products");
});
