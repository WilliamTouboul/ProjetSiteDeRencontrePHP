var divArray = document.querySelectorAll('#btnlike');
console.log(divArray);
var click = false;
divArray.forEach(element => {
    element.addEventListener('click', function () {

        if (click == false) {
            element.innerHTML = "<svg xmlns='http://www.w3.org/2000/svg' fill='white' width='23' height='23' viewBox='0 0 24 24'><path d='M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z'/></svg>";
            click = true;
        } else {
            element.innerHTML = "Like";
            click = false;
        }
    })
});
window.onload = function() 
{
var audio = new Audio('son.mp3');
audio.play();
}