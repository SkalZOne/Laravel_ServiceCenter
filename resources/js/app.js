import "./bootstrap";

function displayOrNot(block) {
    return block.style.display;
}

profileBtn.addEventListener("click", function () {
    if (displayOrNot(profileMenu) == 'flex') {
        profileMenu.style.display = "none";
    } else {
        profileMenu.style.display = "flex";
    }
});

profileCross.addEventListener('click', function() {
    profileMenu.style.display = "none";
})
