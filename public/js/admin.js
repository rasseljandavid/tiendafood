$(document).ready(function() {
	//branch
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".branches_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_branch_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input type="text" name="branches[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })

    //schedule
    var max_fields2       = 10; //maximum input boxes allowed
    var wrapper2         = $(".schedules_fields_wrap"); //Fields wrapper
    var add_button2      = $(".add_schedule_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button2).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields2){ //max input box allowed
            x++; //text box increment
            $(wrapper2).append('<div><input type="text" name="schedules[]" class="time" /><a href="#" class="remove_field">Remove</a></div>'); //add input box
        	$('.time').timepicker({ 'timeFormat': 'h:i A', 'step': 60 });
        }
    });
    
    $(wrapper2).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })

    $('.time').timepicker({ 'timeFormat': 'h:i A', 'step': 60 });

    $('.areyousure').click(function () {
    	var c = confirm("Are you sure you want to delete this item?");
    	return c;
    })
});