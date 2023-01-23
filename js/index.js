$(document).ready(function(){

    function maketime(){
        var endTime = new Date ("17 Jan 2023 00:00:00")
        endTime = (Date.parse(endTime)/1000)
    
        var now = new Date()
        now = (Date .parse(now)/1000)
    
        var timeLeft = endTime - now
    
        var days = Math.floor(timeLeft/86400)
        var hours = Math.floor((timeLeft-(days * 86400)) / 3600)
        var minutes = Math.floor((timeLeft-(days * 86400) - (hours * 3600))/60)
        var seconds = Math.floor((timeLeft-(days * 86400) - (hours * 3600) - (minutes * 60)))

        if (timeLeft <= 0 ){
            $('#time').html('Expired')
        }
        if (hours < 10){
            hours = '0' + hours
        }
        if(minutes < 10){
            minutes = '0' + minutes
        }
        if (seconds < 10){
            seconds = '0' + seconds
        }

        if(days <= 0){
            $('#days').remove()
        }
        if(hours <= 0){
            $('#hours').remove()
        }
        if(minutes <= 0){
            $('#minutes').remove()
        }

        $('#days').html(days + 'd :')
        $('#hours').html(hours + 'h :')
        $('#minutes').html(minutes + 'm :')
        $('#seconds').html(seconds + 's ')
    
    }
    setInterval(() => {
        maketime();
    }, 1000);



    $('.card').css({
        'border':'none', 
        // 'transition':'transform .2s' 
    })
    


    $('.card').hover(function(){
        $(this).css({
            'transform': 'scale(1.01)',
            // 'box-shadow':'1px 1px 3px rgb(0 0 0 / 0.9)',
            // 'box-shadow': '-1px -1px 0 10px #777',
            'border': '1px solid #c4c4c4'
        })
    }, function(){
        $(this).css({
            'transform':'scale(1)',
            'box-shadow':'none',
            'border':'none',
        })
    })
    
    
    $('.overflow-scroll').hover(function(){
        $('.btn-secondary').fadeIn(1000)
    },function(){
        $('.btn-secondary').hide()
    })

    $('.btn-secondary').mouseover(function(){
        $(this).show()
    })

    $('.fa-chevron-up').click(function(){
        window.scrollTo(0, 0)
    })
    
    var up = window.scrollTo(0,0)


    // $('#leftControl').click(function(){
    //     $(this).siblings().css({'transform': 'translateX(-20%)',})
    // })

})