import { currentDate } from "../constants";

let days;

function getMonthDays(year, month) {
    switch (true) {
        case month == 1:
        case month == 3:
        case month == 5:
        case month == 7:
        case month == 8:
        case month == 10:
        case month == 12:
            return 31;
        case month == 4:
        case month == 6:
        case month == 9:
        case month == 11:
            return 30;
        case month == 2:
            // Проверка на високосный год
            if (year % 400 == 0) return 29;
            else if (year % 100 == 0) return 28;
            else if (year % 4 == 0) return 29;
            else return 28;
            break;
    }
}

// Года
for (let i = currentDate.Year; i <= currentDate.Year + 3; i++) {
    yearSelect.insertAdjacentHTML(
        "beforeend",
        `<option value="${i}">${i}</option>`
    );
}

// Месяца и дни
for (let i = 1; i <= 12; i++) {
    if (i == currentDate.Month) {
        monthSelect.insertAdjacentHTML(
            "beforeend",
            `<option value="${i}" selected>${i}</option>`
        );

        days = getMonthDays(yearSelect.value, monthSelect.value);

        for (days; days > 0; days--) {
            if (days == currentDate.Day) {
                daySelect.insertAdjacentHTML(
                    "beforeend",
                    `<option value="${days}" selected>${days}</option>`
                );
            } else {
                daySelect.insertAdjacentHTML(
                    "beforeend",
                    `<option value="${days}">${days}</option>`
                );
            }
        }
    } else {
        monthSelect.insertAdjacentHTML(
            "beforeend",
            `<option value="${i}">${i}</option>`
        );
    }
}

// Добавление события на селектор месяцов
monthSelect.addEventListener("change", function () {
    days = getMonthDays(yearSelect.value, monthSelect.value);

    while (daySelect.children.length > 0) {
        daySelect.children[0].remove();
    }

    for (days; days > 0; days--) {
        daySelect.insertAdjacentHTML(
            "beforeend",
            `<option value="${days}">${days}</option>`
        );
    }
});

// Добавление события на селектор лет
yearSelect.addEventListener("change", function () {
    days = getMonthDays(yearSelect.value, monthSelect.value);

    while (daySelect.children.length > 0) {
        daySelect.children[0].remove();
    }

    for (days; days > 0; days--) {
        daySelect.insertAdjacentHTML(
            "beforeend",
            `<option value="${days}">${days}</option>`
        );
    }
});
