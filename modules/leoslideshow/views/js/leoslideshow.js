/**
 * @copyright Commercial License By LeoTheme.Com 
 * @email leotheme.com
 * @visit http://www.leotheme.com
 */
/**
 * List functions will run when document.ready()
 */
$(document).ready(function()
{
    var runSlide = 0;
    if(typeof (leoslideshow_list_functions) != 'undefined')
    {
        for (var i = 0; i < leoslideshow_list_functions.length; i++)
        {
            leoslideshow_list_functions[i]();
        }
        runSlide = 1;
    }
    var slideInterval = setInterval(function(){
        if(typeof (leoslideshow_list_functions) != 'undefined' && !runSlide)
        {
            for (var i = 0; i < leoslideshow_list_functions.length; i++)
            {
                leoslideshow_list_functions[i]();
            }
            runSlide = 1;
        }
        if(runSlide){
            clearInterval(slideInterval);
        }
    }, 200);
});
