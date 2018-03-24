<template>
	<div id="calendar"></div>
</template>

<script>
	require('fullcalendar');
	export default {
		props: ["user", "sessions"],

		data () {
			return {
				//
			}
		},

		mounted () {
			var self = this;

			self.$on('loadSessions', function(start, end, timezone, callback) {
				this.loadEvents(start, end, timezone, callback);
			});

			self.$on('dayClick', function(date) {
				this.calendarEvent(date);
			});

			$('#calendar').fullCalendar({
				// put your options and callbacks here
				themeSystem: 'bootstrap4',
				header: {
                        left: 'today prev,next title',
                        right: 'month,agendaWeek,agendaDay,listWeek'
                },
                listDayFormat: 'dddd',
                listDayAltFormat: 'MMMM Do YYYY',
                fixedWeekCount: false,
                height: 'auto',
                contentHeight: 'auto',
                slotMinutes: 15,
                slotDuration: '00:15:00',
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                nowIndicator: true,
                googleCalendarApiKey: '814348602272-no3mhsqeci1p9r6cntenn3n3hugqom31.apps.googleusercontent.com',

                eventSources: [
					{
						googleCalendarId: 'en.usa#holiday@group.v.calendar.google.com'
					},
					{
						googleCalendarId: 'stofferstudios.com_fh5v0jrtmukft9rs6l642umt6c@group.calendar.google.com'
					},
                	{
						events: function(start, end, timezone, callback) {
							self.$emit('loadSessions', start, end, timezone, callback);
						},
						color: 'yellow',
						textColor: 'black',
                	},
                ],

				eventClick: function(calEvent, jsEvent, view) {
					alert('Event: ' + calEvent.title);
					alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
					alert('View: ' + view.name);
				},

				dayClick: function(date, jsEvent, view) {
					self.$emit('dayClick', date);
				},

				eventLimitClick: function(cellInfo, jsEvent) {
					console.log(cellInfo, jsEvent);
				}
			});
		},

		methods: {
			loadEvents(start, end, timezone, callback) {
				var events = [
					{
						title: "This is my first test event.",
						start: "2018-03-28"
					},
					{
						title: "Dad's Birthday",
						start: "2018-03-30"
					}
				];
				callback(events);
			},

			calendarEvent(date) {
				console.log(date.format('LLL')+' has been clicked!');
				alert(date.format('LLL')+' has been clicked!');
			}
		}
	}
</script>
