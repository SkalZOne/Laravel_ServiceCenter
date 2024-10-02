let thDescription = document.getElementById('tableDescription');

if (thDescription !== null) {
    if (thDescription.length > 1) {
        for (let description of thDescription) {
            if (description.textContent.length >= 250) {
                let text = description.children[0].children[0];
                let button = description.children[0].children[1];

                button.style.display = "inline-block";

                button.addEventListener("click", function () {
                    if (text.classList.contains("text-hidden")) {
                        text.classList.remove("text-hidden");
                        button.style.transform = "rotate(180deg)";
                    } else {
                        text.classList.add("text-hidden");
                        button.style.transform = "rotate(0deg)";
                    }
                });
            }
        }
    } else {
        if (thDescription.textContent.length >= 250) {
            let text = thDescription.children[0].children[0];
            let button = thDescription.children[0].children[1];

            button.style.display = "inline-block";

            button.addEventListener("click", function () {
                if (text.classList.contains("text-hidden")) {
                    text.classList.remove("text-hidden");
                    button.style.transform = "rotate(180deg)";
                } else {
                    text.classList.add("text-hidden");
                    button.style.transform = "rotate(0deg)";
                }
            });
        }
    }
}
