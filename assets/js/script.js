const icon = document.getElementById('icon');
const liens = document.getElementById('liens');

icon.addEventListener('click', () => {
  liens.classList.toggle('active');
});