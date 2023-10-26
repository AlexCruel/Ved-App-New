document.addEventListener('render', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'listMonth',
        // initialView: 'dayGridMonth',
        themeSystem: 'bootstrap5',
        locale: 'ru',
        buttonText: {
            today: 'Сегодня'
        },
        // customButtons: {
        //     enrollButton: {
        //         text: 'Записаться',
        //         click: () => {
        //             alert('modal')
        //         }
        //     }
        // },
        // headerToolbar: {
        //     center: 'enrollButton'
        // },
        events: [
            {
                title: 'Первое событие',
                start: '2023-10-23'
            },
            {
                title: 'Второе событие',
                start: '2023-10-24'
            },
            {
                title: 'Третье событие',
                start: '2023-10-25'
            }
        ],
        contentHeight: 400,
    });
    calendar.render();
});
