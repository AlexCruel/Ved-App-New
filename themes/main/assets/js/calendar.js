document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'listWeek',
        // initialView: 'dayGridMonth',
        themeSystem: 'bootstrap5',
        locale: 'ru',
        buttonText: {
            today: 'Сегодня'
        },
        customButtons: {
            enrollButton: {
                text: 'Записаться',
                click: () => {
                    alert('modal')
                }
            }
        },
        headerToolbar: {
            center: 'enrollButton'
        },
        events: [
            {
                title: 'Первое событие',
                start: '2023-10-11'
            },
            {
                title: 'Второе событие',
                start: '2023-10-11'
            },
            {
                title: 'Третье событие',
                start: '2023-10-11'
            }
        ]
    });
    calendar.render();
});
