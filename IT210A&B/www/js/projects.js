function loadProject(argument) 
{
    //This function was found at the following website. 
    //http://stackoverflow.com/questions/34539058/linking-to-a-certain-bootstrap-carousel-slide-from-another-page
    (function() {
        function getSlideParameter(key) {
            key = key.replace(/[*+?^$.\[\]{}()|\\\/]/g, "\\$&"); // escape RegEx meta chars
            var match = location.search.match(new RegExp("[?&]" + key + "=([^&]+)(&|$)"));
            var slide = match && decodeURIComponent(match[1].replace(/\+/g, " "));
            if (Math.floor(slide) == slide && $.isNumeric(slide))
                return parseInt(slide);
            else
                return 0; //if 'slide' parameter is not present or doesn't have correct values load 0th slide
        }
        $('#carousel-id').carousel(getSlideParameter('start'));
    })();
}
