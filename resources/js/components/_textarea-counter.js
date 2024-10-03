import { url } from "../constants";

if (url[4] != null) {
    textareaCounter.textContent = textarea.value.length;
}

textarea.addEventListener("input", function () {
    textareaCounter.textContent = textarea.value.length;
});
