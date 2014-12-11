setInterval(function() {
  $.getJSON( "http://status.laboratoriohacker.org/status/json" )
		.done(function( json ) {
			if (json['state']['open'] == true) {
        $('header.row .col-sm-4 h3').html('<span class="label label-success">Hackerspace Aberto</span>') 
      } else if (json['state']['open'] == false) {
        $('header.row .col-sm-4 h3').html('<span class="label label-danger">Hackerspace Fechado</span>') 
      } else {
        $('header.row .col-sm-4 h3').html('<span class="label label-default">Status Desconhecido</span>') 
      }
		})
		.fail(function( jqxhr, textStatus, error ) {
			//fail
	});
}, 5000);