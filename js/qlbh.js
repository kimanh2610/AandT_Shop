// create an array of image sources;
let images = [
    '../img/sliderShow/img6.jpg',
    '../img/sliderShow/img02.jpg', 
    '../img/sliderShow/img2.jpg',
    '../img/sliderShow/img04.jpg',
    '../img/sliderShow/img05.jpg'
]


let i = 0;

//add initial image to canvas
let canvas = document.getElementById('canvas');
canvas.style.background = `url(./img/${images[0]})`

//add eventListeners to arrows
let arrows = document.querySelectorAll('.arrow'); //[arrows[0],zzz]

arrows.forEach(function(arrow){
    arrow.addEventListener('click', function(e){
        if (e.target.id === "left"){
            //check to see if at beginning of array
            i--;
            if (i < 0){
                i = images.length -1;
            }                                       //hoi nnay cua e sai e de images[0]
            canvas.style.background = `url(./img/${images[i]})`;
        } else if (e.target.id === "right") {
            i++;
            if (i >= images.length ){
                i = 0;
            }
            canvas.style.background = `url(./img/${images[i]})`;
        }
    })
});
    
 
/*

/*sildershow*/

// #canvas{
//     position: relative; 
//     height: 300px;
//     width: 40%;
//     border: 1px solid black;
//     margin: auto;
//     display: flex;
//     justify-content: space-between;
//     align-items: center;
// }

