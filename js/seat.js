function selectSeat(seat){


let seats=document.querySelectorAll(".seat");


seats.forEach(function(item){

if(!item.classList.contains("booked")){

item.classList.remove("selected");

}

});



event.target.classList.add("selected");



document.getElementById("seat").value=seat;


}