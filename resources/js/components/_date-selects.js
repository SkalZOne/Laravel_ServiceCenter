import { currentDate, url } from "../constants";

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

function getMaximumMonth(year) {
    if (year == currentDate.Year) {
        return currentDate.Month;
    } else {
        return 1;
    }
}

if (url[4] !== undefined) {
    let cachedDay = daySelect.value;
    let cachedMonth = monthSelect.value;
    let cachedYear = yearSelect.value;
    daySelect.children[0].remove();
    monthSelect.children[0].remove();
    yearSelect.children[0].remove();

    // Месяца и дни
    for (let i = 1; i <= 12; i++) {
        if (cachedMonth == i) {
            monthSelect.insertAdjacentHTML(
                "beforeend",
                `<option value="${cachedMonth}" selected>${cachedMonth}</option>`
            );

            days = getMonthDays(cachedYear, cachedMonth);

            for (let i = 1; i <= days; i++) {
                if (cachedDay == i) {
                    daySelect.insertAdjacentHTML(
                        "beforeend",
                        `<option value="${cachedDay}" selected>${cachedDay}</option>`
                    );
                } else {
                    daySelect.insertAdjacentHTML(
                        "beforeend",
                        `<option value="${i}">${i}</option>`
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

    // Года
    for (let i = currentDate.Year; i <= currentDate.Year + 3; i++) {
        if (i == cachedYear) {
            yearSelect.insertAdjacentHTML(
                "beforeend",
                `<option value="${cachedYear}" selected>${cachedYear}</option>`
            );
        } else {
            yearSelect.insertAdjacentHTML(
                "beforeend",
                `<option value="${i}">${i}</option>`
            );
        }
    }
} else {
    for (let i = currentDate.Year; i <= currentDate.Year + 3; i++) {
        yearSelect.insertAdjacentHTML(
            "beforeend",
            `<option value="${i}">${i}</option>`
        );
    }

    for (let i = getMaximumMonth(yearSelect.value); i <= 12; i++) {
        if (i == currentDate.Month) {
            monthSelect.insertAdjacentHTML(
                "beforeend",
                `<option value="${i}" selected>${i}</option>`
            );

            days = getMonthDays(yearSelect.value, monthSelect.value);

            for (let i = currentDate.Day; i <= days; i++) {
                if (i == currentDate.Day) {
                    daySelect.insertAdjacentHTML(
                        "beforeend",
                        `<option value="${i}" selected>${i}</option>`
                    );
                } else {
                    daySelect.insertAdjacentHTML(
                        "beforeend",
                        `<option value="${i}">${i}</option>`
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
}

// Добавление события на селектор месяцов
monthSelect.addEventListener("change", function () {
    days = getMonthDays(yearSelect.value, monthSelect.value);

    while (daySelect.children.length > 0) {
        daySelect.children[0].remove();
    }

    if (monthSelect.value == currentDate.Month) {
        for (let i = currentDate.Day; i <= days; i++) {
            daySelect.insertAdjacentHTML(
                "beforeend",
                `<option value="${i}">${i}</option>`
            );
        }
    } else {
        for (let i = 1; i <= days; i++) {
            daySelect.insertAdjacentHTML(
                "beforeend",
                `<option value="${i}">${i}</option>`
            );
        }
    }

    
});

// Добавление события на селектор лет
yearSelect.addEventListener("change", function () {
    days = getMonthDays(yearSelect.value, monthSelect.value);

    while (daySelect.children.length > 0) {
        daySelect.children[0].remove();
    }

    for (let i = 1; i <= days; i++) {
        daySelect.insertAdjacentHTML(
            "beforeend",
            `<option value="${i}">${i}</option>`
        );
    }

    while (monthSelect.children.length > 0) {
        monthSelect.children[0].remove()
    }

    if (yearSelect.value == currentDate.Year) {
        for (let i = currentDate.Month; i <= 12; i++) {
            monthSelect.insertAdjacentHTML(
                "beforeend",
                `<option value="${i}">${i}</option>`
            );
        }
    } else {
        for (let i = 1; i <= 12; i++) {
            monthSelect.insertAdjacentHTML(
                "beforeend",
                `<option value="${i}">${i}</option>`
            );
        }
    }

    
});
