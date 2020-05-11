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





<?php 
 date_default_timezone_set('UTC');
 $fecha_actual = date("Y-m-d");
 ?>
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
        defaultDate: '<?php echo $fecha_actual;?>',
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: [
          <?php

         /* $titulo = "title:" . "'$leyenda', ";
          $url = "url:" . "'$url_factura', ";
          $fecha = "start:" . "'$factura->fecha_pago',";

          $color = "color:" . "'" . $datos_decision->color . "'";*/



          $leyenda="Demo";
          foreach ($datos_reloj as $registro) :
            
          $titulo = "title:" . "'$leyenda', ";
           $fecha_inicio = "start:" . "'$registro->fechainicial',";
           $fecha_fin = "end:" . "'$registro->fechafinal',";

            echo "{" . $titulo .  $fecha_inicio .$fecha_fin. "},";

          endforeach;
          ?>
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