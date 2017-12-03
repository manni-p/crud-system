 function loadMore()
 {

  $.ajax({
    url: 'loadmore',
    type: 'GET',
    data: {
      page:$('.results-container').data('page'),
    },
    success: function(response){
     if(response){
       // var page = $('.results-container').data('page')
       // $('.results-container').attr('data-page',page+1);

       $.each(response, function(i, item) {
        $(".results-container").append('<div class="result-inside"><div class="row"><div class="col-lg-4 col-sm-12"><img src="http://via.placeholder.com/350x250"></div> <div class="col-lg-8 col-sm-12"><div class="information"><div class="name"><p>Name: '+item.name+'</p><p>Description: '+item.description+'</p><p>Price: '+item.price+'</p></div></div></div></div></div>');
      });


     }
   }
 });

}

function bindScroll(){
 if($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
   var page = $('.results-container').data('page')
   $('.results-container').data('page',page+1);
   loadMore();
 }
}

$(window).scroll(bindScroll);