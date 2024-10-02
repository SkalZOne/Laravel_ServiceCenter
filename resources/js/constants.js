const getDate = new Date();

export const currentDate = {
    Month: getDate.getMonth() + 1,
    Year: getDate.getFullYear(),
    Day: getDate.getDate(),
    Hours: getDate.getHours(),
    Minutes: getDate.getMinutes(),
};