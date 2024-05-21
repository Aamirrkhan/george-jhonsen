$('.open-filter').click(function(){
    $('.filteractive').toggleClass('active');
    $('.open-filter').toggleClass('active');
});

// Accordion Icons

const items = document.querySelectorAll(".item-at");

function toggleAccordion(event) {
  const itemToggle = event.currentTarget.querySelector(".title-at");
  const itemtap = event.currentTarget.querySelector(".tab-at");
  itemToggle.classList.toggle("active");
  if (itemToggle.classList.contains("active")) {
    itemtap.style.display = "block";
    itemtap.classList.add('active')
  } else {
    itemtap.style.display = "none";
  }
}

items.forEach((item) => item.addEventListener("click", toggleAccordion));


// Price Range

let min = 0;
let max = 1000;

const calcLeftPosition = (value) => (100 / (100 - 10)) * (value - 10);

$("#rangeMin").on("input", function (e) {
  const newValue = parseInt(e.target.value);
  if (newValue > max) return;
  min = newValue;
  $("#thumbMin").css("left", calcLeftPosition(newValue) + "%");
  $("#min").html(newValue);
  $("#line").css({
    left: calcLeftPosition(newValue) + "%",
    right: 100 - calcLeftPosition(max) + "%",
  });
});

$("#rangeMax").on("input", function (e) {
  const newValue = parseInt(e.target.value);
  if (newValue < min) return;
  max = newValue;
  $("#thumbMax").css("left", calcLeftPosition(newValue) + "%");
  $("#max").html(newValue);
  $("#line").css({
    left: calcLeftPosition(min) + "%",
    right: 100 - calcLeftPosition(newValue) + "%",
  });
});


let checkboxes = document.querySelectorAll('.checkbox input[type="radio"]');

checkboxes.forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        checkboxes.forEach(function(otherCheckbox) {
            // Check if the checkbox is checked
            if (otherCheckbox.checked) {
                // Add 'active' class to the parent element of the checked checkbox
                otherCheckbox.parentElement.classList.add('active');
            } else {
                // Remove 'active' class from unchecked checkbox's parent element
                otherCheckbox.parentElement.classList.remove('active');
            }
        });
    });
});
