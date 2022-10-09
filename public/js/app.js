const faqs = document.querySelectorAll(".faq")

faqs.forEach(faq => {
  faq.addEventListener("click", () => {
    faq.classList.toggle("active");
  })
})

document.getElementById("openComment").addEventListener('click',
function() {
  document.querySelector('.cpop-container').style.display = 'flex';
});

document.getElementById("closeComment").addEventListener('click',
function() {
  document.querySelector('.cpop-container').style.display = 'none';
});


document.getElementById("openPost").addEventListener('click',
function() {
  document.querySelector('.pstp-container').style.display = 'flex';
});

document.getElementById("closePost").addEventListener('click',
function() {
  document.querySelector('.pstp-container').style.display = 'none';
});