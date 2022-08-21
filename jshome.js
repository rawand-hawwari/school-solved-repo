    $(document).ready(function() {
        $('html').on('DOMMouseScroll mousewheel', function (e) {
            if(e.originalEvent.detail > 0 || e.originalEvent.wheelDelta < 0) { //alternative options for wheelData: wheelDeltaX & wheelDeltaY
                //scroll down
                console.log('Down');
                $( ".header" ).addClass( "hide-nav-bar" );
            } else {
                //scroll up
                console.log('Up');
                $( ".header" ).removeClass( "hide-nav-bar" );
            }
            //prevent page fom scrolling
            //return false;
        });
    });


    //heart button
    function changeicon(id){
        if(id.innerHTML =='<i class="far fa-heart"></i>')
            id.innerHTML = '<i class="fas fa-heart text-danger"></i>';
        else
            id.innerHTML= '<i class="far fa-heart"></i>';
    }


    //video popup
    $(function(){
        var $modal = $('.modal');
        var HIDE_CLASS = 'is-hide';
        
        $('#play').on('click',function(){
          $modal.removeClass(HIDE_CLASS);
        });
        
        $('.js-modal-close').on('click',function(){
          $modal.addClass(HIDE_CLASS);
        });
      });

    //confirm email
    const validateEmail = (email) => {
        return email.match(
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        );
    };

    $('.search').submit(function(e){
        console.log('suvmit form');
        e.preventDefault();
        const email = $('#email').val();
        
        if (validateEmail(email)) {
        console.log('email is valid');
        $('#valid').removeClass('d-none');
        $('.popup').removeClass('d-none');
        } else {
            $('#warning').removeClass('d-none');
            $('.popup').removeClass('d-none');
        }
    })


    // close the confirm
    $('.ok').on("click",function(){
        console.log("entered");

        $('#valid').addClass('d-none');
        $('#warning').addClass('d-none');
        $('.popup').addClass('d-none');

    });

    
    // check for modal in login
      $('.show-error').click();