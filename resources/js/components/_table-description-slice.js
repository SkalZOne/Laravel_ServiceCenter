for (let description of tableDescription) {

    if (description.textContent.length >= 250) {
        let text = description.children[0].children[0]
        let button = description.children[0].children[1]

        button.style.display = 'inline-block'

        button.addEventListener("click", function() {
            if (text.classList.contains('text-hidden')) {
                text.classList.remove('text-hidden')
                button.style.transform = 'rotate(180deg)'
            } else {
                text.classList.add('text-hidden')
                button.style.transform = 'rotate(0deg)'
            }
        })
    }
}


