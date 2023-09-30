<head>

    @section('calender-style')
           <link rel="stylesheet" type="text/css" href="/css/calender-style.css">

    @endsection
</head>
<style>
    #calendar-container {
        /*position: fixed;*/
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }
    #calendar {
        margin: 10px auto;
        padding: 10px;
        max-width: 1100px;
        height: 700px;
    }

</style>

<div>
    <div id='calendar-container' class="calendar-container " wire:ignore>
        <div id='calendar'></div>
    </div>
</div>

@push('scripts')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js'></script>

    <script>
        document.addEventListener('livewire:load', function () {
            const Calendar = FullCalendar.Calendar;
            const calendarEl = document.getElementById('calendar');
            const events = @json($events);

            const calendar = new Calendar(calendarEl, {
                events: events.map(event => ({
                    ...event,
                    backgroundColor: event.color,
                    borderColor: event.color,
                    textColor: 'white',
                })),
                eventClick: function(info) {
                    const eventId = info.event.id;

                    window.location.href = `/events/${eventId}`;
                },
            });

            calendar.render();
        });
    </script>

    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.css' rel='stylesheet' />
@endpush
