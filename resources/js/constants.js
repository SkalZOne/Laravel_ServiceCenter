const getDate = new Date();

export let currentDate = {
    Month: getDate.getMonth() + 1,
    Year: getDate.getFullYear(),
    Day: getDate.getDate(),
    Hours: getDate.getHours(),
    Minutes: getDate.getMinutes(),
};

if (currentDate.Hours >= 21) {
    currentDate.Day = currentDate.Day += 1;
    currentDate.Hours = 8;
} else {
    for (let i = 0; i < 8; i++) {
        if (currentDate.Hours == i) {
            currentDate.Day = currentDate.Day += 1;
            currentDate.Hours = 8;
        }
    }
}
