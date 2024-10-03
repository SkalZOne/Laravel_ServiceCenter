import { currentDate } from "../constants";

let i = currentDate.Hours + 1;

for (i; i < 21; i++) {
    let nextHour = i + 1;
    let formatingHour = i + ":" + "00" + "-" + nextHour + ":" + "00";

    timeSelect.insertAdjacentHTML(
        "beforeend",
        `<option value="${formatingHour}">${formatingHour}</option>`
    );
}

[ daySelect, monthSelect, yearSelect ].forEach(function(element) {
    element.addEventListener("change", function () {
        if (
            !(
                daySelect.value == currentDate.Day &&
                monthSelect.value == currentDate.Month &&
                yearSelect.value == currentDate.Year
            )
        ) {
            i = 8;
        } else {
            i = currentDate.Hours;
        }
    
        while (timeSelect.children.length > 0) {
            timeSelect.children[0].remove();
        }
    
        for (i; i < 21; i++) {
            let nextHour = i + 1;
            let formatingHour = i + ":" + "00" + "-" + nextHour + ":" + "00";
    
            timeSelect.insertAdjacentHTML(
                "beforeend",
                `<option value="${formatingHour}">${formatingHour}</option>`
            );
        }
    });
})
