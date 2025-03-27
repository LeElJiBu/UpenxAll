


//tilin
$(document).ready(function() {
    const today = new Date();

    function generateCalendar(year, month) {
        const calendar = $("#calendar");
        calendar.empty();

        const monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        const firstDay = new Date(year, month, 1).getDay();

        let calendarHTML = `<h4>${monthNames[month]} ${year}</h4>`;
        calendarHTML += "<table>";
        calendarHTML += "<tr><th>Dom</th><th>Lun</th><th>Mar</th><th>Mié</th><th>Jue</th><th>Vie</th><th>Sáb</th></tr>";
        calendarHTML += "<tr>";

        for (let i = 0; i < firstDay; i++) {
            calendarHTML += "<td></td>";
        }

        for (let day = 1; day <= daysInMonth; day++) {
            if ((firstDay + day - 1) % 7 === 0) {
                calendarHTML += "</tr><tr>";
            }

            const isToday = day === today.getDate() && month === today.getMonth() && year === today.getFullYear();
            calendarHTML += `<td class="${isToday ? 'today' : ''}" data-date="${year}-${month + 1}-${day}">${day}</td>`;
        }

        calendarHTML += "</tr></table>";
        calendar.html(calendarHTML);
    }

    generateCalendar(today.getFullYear(), today.getMonth());
});
