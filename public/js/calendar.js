$(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
        // put your options and callbacks here
        header:
            {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },

        defaultView: 'agendaDay',

        businessHours: {
            // days of week. an array of zero-based day of week integers (0=Sunday)
            dow: [ 0, 1, 2, 3, 4, 5, 6 ], // Monday - Thursday

            start: '6:00',
            end: '20:00'
        },

        selectable: true,
        selectHelper: true


    })

});

function getTimes(){
    var url = window.location.pathname;
    var pieces = url.split('/');
    var id = pieces[pieces.length - 1];

    // $.get(url + '/getTimes', function (data) {
    //     $("#times").html(data);
    // });

    $.ajax({
        type: 'POST',
        //url: '/' + id + '/getTimes',
        url: url + '/getTimes',
        success:function(data) {
            var json = JSON.parse(data)
            $("#times").html(json.id);
        }
    });
}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});