$(() => {
    var selOption = $('#company-selection').val();

    $('#company-selection').change(function() {    
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if (optionValue == "All") {
                $(".portfolio-projects-list").children().show();
            }
            else if (optionValue) {
                $(".option-item").not("." + optionValue).hide();
                $("." + optionValue).show();
            }
        });
    });
});