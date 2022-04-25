jQuery(document).ready(function () {
	var values = {};

	mapPins.forEach(function(e) {
			values[e.code] = 1;
	})

	jQuery('#vmap').vectorMap({
		map: 'world_en',
		backgroundColor: '#fff',
		color: '#eee',
		enableZoom: false,
		showTooltip: true,
		showLabels: true,
		selectedColor: '#0041c2',
		values: values,
		hoverColor: "#0041c2",
		scaleColors: ['#0041c2'],
		onRegionOver: function(event, code, region)
		{
			if(findPin(code) == false) {
				event.preventDefault();
			}
		},
		onLabelShow: function(event, label, code)
		{
			if(pin = findPin(code)) {
				label.html('<b>' + pin.title + '</b> <p>' + pin.message);
			} else {
				event.preventDefault();
			}
		},
		onResize: function (element, width, height) {
			console.log('Map Size: ' +  width + 'x' +  height);
		}
	});

	function findPin(code) {
		var pin = false;
		mapPins.forEach(function(e) {
			if(code === e.code) {
				pin = e;
			}
		});

		return pin;
	}
});