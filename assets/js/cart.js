const deletCartRow = document.querySelectorAll(".trash-tbn");
// console.log(deletCartRow)

deletCartRow.forEach(function(item){
    item.addEventListener('click', function(e){
        e.preventDefault();
        item.parentElement.parentElement.parentElement.remove()
    })
});

$('#credit').click(function(){
    $('.none-payment-flieds').addClass('active').fadeIn()
})
$('#cash').click(function(){
    $('.none-payment-flieds').removeClass('active').fadeIn()
})