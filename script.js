const arrow = document.querySelector(".update-data > div i");

arrow.addEventListener("click", function() {
    if(arrow.classList.contains("non-active")) {
        arrow.style.transform = "rotate(0deg)";
        arrow.style.transitionDuration = "300ms";
        document.querySelector('.form-update').style.display = "block";
    } else {
        arrow.style.transform = "rotate(-90deg)";
        document.querySelector('.form-update').style.display = "none";
    }
    arrow.classList.toggle("non-active");
});