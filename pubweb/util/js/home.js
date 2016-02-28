    /*$(document).ready(function() {
      	$('#rootwizard').bootstrapWizard({onNext: function(tab, navigation, index) {
    			if(index==2) {
    				// Make sure we entered the name
    				if(!$('#name').val()) {
    					alert('You must enter your name');
    					$('#name').focus();
    					return false;
    				}
    			}
    			
    			// Set the name for the next tab
    			$('#tab3').html('Hello, ' + $('#name').val());
    			
    		}, onTabShow: function(tab, navigation, index) {
    			var $total = navigation.find('li').length;
    			var $current = index+1;
    			var $percent = ($current/$total) * 100;
    			$('#rootwizard').find('.bar').css({width:$percent+'%'});
    		}});
    });
    */



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
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});