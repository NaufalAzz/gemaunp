// Add interactivity here (e.g., carousel navigation)
document.querySelectorAll('.arrow').forEach(arrow => {
    arrow.addEventListener('click', () => {
      alert('Arrow clicked! Add functionality here.');
    });
  });
  
  // Get current URL path
const currentPage = window.location.pathname;

// Select all menu links
const menuLinks = document.querySelectorAll('.navbar');

// Loop through links and add 'active' class to the current page
menuLinks.forEach(link => {
  if (link.getAttribute('href') === currentPage) {
    link.classList.add('active');
  } else {
    link.classList.remove('active');
  }
});
