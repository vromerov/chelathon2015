	var catalogData;
	

	$(document).ready(function () {

	var navListItems = $('div.setup-panel div a'),
			allWells = $('.setup-content'),
			allNextBtn = $('.nextBtn');

	allWells.hide();

	navListItems.click(function (e) {
		e.preventDefault();
		var $target = $($(this).attr('href')),
				$item = $(this);

		if (!$item.hasClass('disabled')) {
			navListItems.removeClass('btn-primary').addClass('btn-default');
			$item.addClass('btn-primary');
			allWells.hide();
			$target.show();
			$target.find('input:eq(0)').focus();
		}
	});

	allNextBtn.click(function(){
		var curStep = $(this).closest(".setup-content"),
			curStepBtn = curStep.attr("id");
			nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
			curInputs = curStep.find("input[type='text'],input[type='url']"),
			isValid = true;

		$(".form-group").removeClass("has-error");
		for(var i=0; i<curInputs.length; i++){
			if (!curInputs[i].validity.valid){
				isValid = false;
				$(curInputs[i]).closest(".form-group").addClass("has-error");
			}
		}

		if (isValid) {
			nextStepWizard.removeAttr('disabled').trigger('click');
			$("#"+curStepBtn+"-btn").removeClass("btn-default").addClass("btn-success");
		}
		return false;
	});

	$('div.setup-panel div a.btn-primary').trigger('click');

	$.getJSON("../producto", function(data) {
		function BeerViewModel() {
		    var self = this;
		    self.catalogo = ko.observableArray(data);
		console.log(data);
		    self.beetCatalog = ko.computed(function() {
		        var beers = new Array();
		        var catalogArray = self.catalogo();
		        console.log(catalogArray);
		        for (var i = 0; i < catalogArray.length; i++) {
		            if (beers.indexOf(catalogArray[i].genre) < 0) {
		                beers.push(catalogArray[i].genre);
		            }
		        }
		        return beers;
		    });  
		};
		ko.applyBindings(new BeerViewModel());
	});


});
