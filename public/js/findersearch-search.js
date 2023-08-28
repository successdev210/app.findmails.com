$(document).ready(function(){
    $('.findersearch-search').on('click',function(e){
        e.preventDefault();
        console.log($('.name').val());
        console.log($('.company').val());

    });
});