$(function() { // document ready


                $('#cp2').colorpicker();   

                $(document).on('click', "#savEvent", function(){
                    $.ajax({
                        url: 'calendario/guardarHorario',
                        dataType: 'json',
                        'type': 'POST',  
                        data: $("#frm-event").serialize(),
                        success: function(data) {

                            $('#calendar').fullCalendar('unselect');

                            $('#calendar').fullCalendar('renderEvent',
                                {
                                    id: data.id,
                                    title: data.descripcionCita,
                                    start: new Date(data.startDate),
                                    end: new Date(data.enDate),
                                    color: data.color
                                  //  allDay: allDay
                                },
                                true // make the event "stick"
                            );
                            $('#modalCitaNueva').modal('hide');
                        },
                        error:function(respuesta) {
                            console.log(respuesta);
                        }
                    });
                });

                $('#modalCitaNueva').on('hidden.bs.modal', function () {
                    $('#calendar').fullCalendar('unselect');
                });

                $('#modalCitaNueva').on('show.bs.modal', function () {
                });

                $('#calendar').fullCalendar({
                    schedulerLicenseKey: 'GPL-My-Project-Is-Open-Source',
                    now: '2016-01-07',
                    lang: 'es',
                    selectable: true,
                    selectHelper: true,
                    editable: false, // enable draggable events
                    unselectAuto: false,
                    aspectRatio: 1.5,
                    scrollTime: '00:00', // undo default 6am scrollTime
                    selectOverlap: false,
                    slotEventOverlap: false,
                    eventOverlap: function(stillEvent, movingEvent){
                        console.log("@@@@@");
                        return false;
                    },
                    header: {
                        left: 'today prev,next',
                        center: 'Candario oscar',
                        right: 'timelineDay,timelineThreeDays,agendaWeek,month'
                    },
                    defaultView: 'agendaWeek',
                    views: {
                        timelineThreeDays: {
                            type: 'timeline',
                            duration: { days: 3 }
                        }
                    },
                    resourceLabelText: 'Rooms',
                    resources: [
                        { id: 'a', title: 'Auditorium A' },
                        { id: 'b', title: 'Auditorium B', eventColor: 'green' },
                        { id: 'c', title: 'Auditorium C', eventColor: 'orange' },
                        { id: 'd', title: 'Auditorium D', children: [
                            { id: 'd1', title: 'Room D1' },
                            { id: 'd2', title: 'Room D2' }
                        ] },
                        { id: 'e', title: 'Auditorium E' },
                        { id: 'f', title: 'Auditorium F', eventColor: 'red' },
                        { id: 'g', title: 'Auditorium G' },
                        { id: 'h', title: 'Auditorium H' },
                        { id: 'i', title: 'Auditorium I' },
                        { id: 'j', title: 'Auditorium J' },
                        { id: 'k', title: 'Auditorium K' },
                        { id: 'l', title: 'Auditorium L' },
                        { id: 'm', title: 'Auditorium M' },
                        { id: 'n', title: 'Auditorium N' },
                        { id: 'o', title: 'Auditorium O' },
                        { id: 'p', title: 'Auditorium P' },
                        { id: 'q', title: 'Auditorium Q' },
                        { id: 'r', title: 'Auditorium R' },
                        { id: 's', title: 'Auditorium S' },
                        { id: 't', title: 'Auditorium T' },
                        { id: 'u', title: 'Auditorium U' },
                        { id: 'v', title: 'Auditorium V' },
                        { id: 'w', title: 'Auditorium W' },
                        { id: 'x', title: 'Auditorium X' },
                        { id: 'y', title: 'Auditorium Y' },
                        { id: 'z', title: 'Auditorium Z' }
                    ],
                    events: function(start, end, timezone, callback){

                        $.ajax({
                            url: 'calendario/cargarHorarios',
                            dataType: 'json',
                            data: {
                                // our hypothetical feed requires UNIX timestamps
                                start: start.unix(),
                                end: end.unix()
                            },
                            success: function(events) {
                                callback(events);
                            }
                        });



                    },
                    select: function(start, end, jsEvent, view, resource) {
                    
                        $("#startDate").html(start.format("YYYY-MM-DD  hh:mm"));
                        $("#enDate").html(end.format("YYYY-MM-DD  hh:mm"));
                        $("#EventStartDate").val(start.format("YYYY-MM-DD  hh:mm"));
                        $("#EventEnDate").val(end.format("YYYY-MM-DD  hh:mm"));

                        $("#modalCitaNueva").modal("show");
                    },
                    eventResize: function(event, delta, revertFunc, jsEvent, ui, view){
                        bootbox.confirm({
                            message: "Esta seguro de realizar el cambio de cita?", 
                            locale: 'es', 
                            callback: function(result) {                
                                if (!result) {                                             
                                    revertFunc();  
                                }                                
                            },
                            buttons: {
                                confirm: {
                                    label: 'Aceptar',
                                },
                                cancel: {
                                    label: 'Cancelar',
                                }
                            },
                        });
                    },
                    eventDrop : function(event, delta, revertFunc, jsEvent, ui, view ){
                        bootbox.confirm({
                            message: "Esta seguro de realizar el cambio de cita?", 
                            locale: 'es', 
                            callback: function(result) {                
                                if (!result) {                                             
                                    revertFunc();  
                                }                                
                            },
                            buttons: {
                                confirm: {
                                    label: 'Aceptar',
                                },
                                cancel: {
                                    label: 'Cancelar',
                                }
                            },
                        });
                    },
                    eventRender: function(event, element) {
                        e  = $("<a id='removEvent"+event._id+"' class='closeon'>X</a>");
                        element.append( e );
                        $(document).on("click", "#removEvent"+event._id, function() {
                            $('#calendar').fullCalendar('removeEvents',event._id);
                        });

                        element.on("dblclick",function(){
                                $("#descripcionCita").val(event.title);
                                $("#startDate").html(event.start.format("YYYY-MM-DD  hh:mm"));
                                $("#enDate").html(event.end.format("YYYY-MM-DD  hh:mm"));
                                $("#color").val(event.color);
                                $('#modalCitaNueva').modal('show');
                        });  
//
                    },
                    /*dayClick: function(date, jsEvent, view, resource) {
                        console.log(
                            'dayClick',
                            date.format(),
                            resource ? resource.id : '(no resource)'
                        );
                    }*/
                });
            
            });