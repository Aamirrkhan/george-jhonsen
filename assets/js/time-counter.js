var countDownDate = new Date("Jun 30, 2024 0:00:25").getTime();

var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  // Select all elements with the class and update their innerHTML
  document.querySelectorAll(".days").forEach(function(element) {
    element.innerHTML = days;
  });
  document.querySelectorAll(".hours").forEach(function(element) {
    element.innerHTML = hours;
  });
  document.querySelectorAll(".minutes").forEach(function(element) {
    element.innerHTML = minutes;
  });
  document.querySelectorAll(".seconds").forEach(function(element) {
    element.innerHTML = seconds;
  });

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timecounter").innerHTML = "EXPIRED";
  }
}, 1000);





const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');

togglePassword.addEventListener('click', () => {
    // Toggle the type attribute using getAttribute() method
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);

    // Toggle the eye and bi-eye icon
    togglePassword.classList.toggle('bi-eye');
    togglePassword.classList.toggle('bi-eye-slash');
});