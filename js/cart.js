$(document).ready(function(){
    $('#add').click(function(){
        $('#result').val()
    })


    $('.remover').click(function(){
        $(this).parentsUntil("div.wrapper").remove( )
    })
})
// jQuery(function($) {
//     $(document).on('click', '.add', function(e) {
  
//       var $parent = $(this).closest('.vote');
//       var _vote = parseInt($parent.find('#_vote').val());
//       console.log(_vote);
//       $parent.find('#_vote').val( _vote + 1 ); //this line has been added
//     });
  
//   });
  