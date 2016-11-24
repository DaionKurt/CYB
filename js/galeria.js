var elementos_por_slide;
$(document).ready(
    function(){
            $(".muestra_galeria").click(function(e) {
                e.preventDefault();
                pagina=$(this).attr("href");
                $.ajax({
                    url : pagina,
                    success: function(data){
                        $('#muestra_platillos').stop().html(data).hide(0).slideDown("slow","linear");
                        configure_carousels();
                    }
                });
            });
            configure_carousels();
        });
function configure_carousels(){
    //Handles the carousel thumbnails
    $('[id^=carousel-selector-]').click(function (e) {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#carousel_big').carousel(parseInt(id));
        } catch (e) {
            Console.log('Regex failed!', e);
        }
    });
    $("#carousel_big").on("slid.bs.carousel",function () { /**TODO terminar **/
       i= Math.floor($(this).find('.active').index()/elementos_por_slide);
        console.log("Hola");
        console.log(i,elementos_por_slide,$(this).find('.active').index());
       $("#carousel_thumbs").carousel(i);
    });
    $('[id^=carousel-selector-]').hover(

            function () {
                $(this).find('.caption').slideDown(250);
            },

            function () {
                $(this).find('.caption').slideUp(250);
            }
    );
}