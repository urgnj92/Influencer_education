$(function(){
    slideShow();
});

let index = 0;

const slideShow = ()=>{
    const images = $('.banner-image img');
    for(image of images){
        image.style.display = 'none';
        image.style.textAlign = "center";
    }

    images[index].style.display = 'inline-block';

    index++;

    if(index >= images.length){
        index = 0;
    }

    console.log("実行されました");

    setTimeout(slideShow, 3000);
}