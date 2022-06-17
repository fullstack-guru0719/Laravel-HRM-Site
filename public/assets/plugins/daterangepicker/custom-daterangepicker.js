$(function(e) {
	
	//Daterangepicker with Callback
	$('input[name="daterange"]').daterangepicker({
		opens: 'left'
	  }, function(start, end, label) {
		console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
	});
	
	//Daterangepicker with Times
	$('input[name="datetimes"]').daterangepicker({
		timePicker: true,
		startDate: moment().startOf('hour'),
		endDate: moment().startOf('hour').add(32, 'hour'),
		locale: {
		  format: 'M/DD hh:mm A'
		}
	});
	
	//singledatepicker
	$('input[name="singledatepicker"]').daterangepicker({
		singleDatePicker: true,
		showDropdowns: true,
		minYear: 1901,
		maxYear: parseInt(moment().format('YYYY'),10)
	  }, function(start, end, label) {
		var years = moment().diff(start, 'years');
		alert("You are " + years + " years old!");
	});
	
	//Date Ranges
	var start = moment().subtract(29, 'days');
    var end = moment();
    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);
    cb(start, end);
	
});