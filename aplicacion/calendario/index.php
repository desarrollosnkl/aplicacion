
<!doctype html>
<html lang="es">

<head>
  <title>DESARROLOS°NKL°</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

</head>
<body>

<?php include("../template/header.php"); ?>


<div class="container">
   <div class="col-md-10 offset-md-1">  
  <div id='calendar'></div>
</div>

</div>



<script>

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',

   locale:"es",
   headerToolbar:{
      left:'prev,next today',
      center:'title',
      right:'dayGridMonth,timeGridWeek,timeGridDay'
   },

   dateClick: function(info) {
    alert('Clicked on: ' + info.dateStr);
    alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
    alert('Current view: ' + info.view.type);
    // change the day's background color just for fun
    info.dayEl.style.backgroundColor = 'red';
    $("#exampleModal").modal();
  },



  events: [
    {
      id:1,
      height: 580,
      title  : 'Cliente, especial',
      start  : '2023-09-07',
      url:"http://www.seniat.gob.ve",
      displayEventTime: "false",
      color: "navy",
      editable: "true",
      selectable: "true",
      selectHelper: "true"
    },
    {
      title  : 'Cliente, ordinario',
      start  : '2023-09-10',
     // end    : '2023-09-12',
      url:"http://www.seniat.gob.ve",
      color: "crimson",
      editable: "true",
      selectable: "true",
      selectHelper: "true"
    },
    {
      title  : 'event3',
     
      allDay : false, // will make the time show
      color: "crimson"
    }
  ]




  });
  calendar.render();
});

</script>





<?php include("../template/footer.php"); ?>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>




