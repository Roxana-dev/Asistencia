<head>
<link href='<?php echo base_url(); ?>dist/calendario/core/main.css' rel='stylesheet' />
<link href='<?php echo base_url(); ?>dist/calendario/daygrid/main.css' rel='stylesheet' />
<link href='<?php echo base_url(); ?>dist/calendario/timegrid/main.css' rel='stylesheet' />
<link href='<?php echo base_url(); ?>dist/calendario/list/main.css' rel='stylesheet' />
<script src='<?php echo base_url(); ?>dist/calendario/core/main.js'></script>
<script src='<?php echo base_url(); ?>dist/calendario/interaction/main.js'></script>
<script src='<?php echo base_url(); ?>dist/calendario/daygrid/main.js'></script>
<script src='<?php echo base_url(); ?>dist/calendario/timegrid/main.js'></script>
<script src='<?php echo base_url(); ?>dist/calendario/list/main.js'></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: ['interaction', 'dayGrid', 'timeGrid', 'list'],
      height: 'parent',
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      defaultView: 'dayGridMonth',
      defaultDate: '2020-02-12',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [{
          title: 'All Day Event',
          start: '2020-02-01',
        },
        {
          title: 'Long Event',
          start: '2020-02-07',
          end: '2020-02-10'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2020-02-09T16:00:00'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2020-02-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2020-02-11',
          end: '2020-02-13'
        },
        {
          title: 'Meeting',
          start: '2020-02-12T10:30:00',
          end: '2020-02-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2020-02-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2020-02-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2020-02-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2020-02-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2020-02-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2020-02-28'
        }
      ]
    });

    calendar.render();
  });
</script>


<style>
  html,
  body {
    overflow: hidden;
    /* don't do scrollbars */
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #calendar-container {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
  }

  .fc-header-toolbar {
    /*
    the calendar will be butting up against the edges,
    but let's scoot in the header's buttons
    */
    padding-top: 5em;
    padding-left: 1em;
    padding-right: 1em;
  }
</style>
</head> 

    <div id='calendar-container'>
      <div id='calendar'></div>
    </div>


