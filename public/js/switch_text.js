$(() => {
    let count = 0;
    let arr = ['Start your conversation with eloquence', 
    'Magnify your expertise', 
    'Show off the wingspan of your business'];

    setInterval(() => {
        count++;
        $('#quote').fadeOut(750, function() {
            $(this).text(arr[count]).fadeIn(750);
        });

        if (count == arr.length) {
            count = 0;
        }
    }, 4000);
});