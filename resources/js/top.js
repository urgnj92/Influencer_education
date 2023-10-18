$(function(){

    $('.slide').first().addClass('active');
    
    chengeActive();

    //slideShow();
});


const chengeActive = ()=>{
    
    $('.bannersBtn').click(function() {

        let banner = null;

        $(this).each(function(){
            banner = $(this).attr('value');
            console.log(banner);

            $('.slide').each(function(){
                let slides = $(this);
                let imageValue = slides.attr('value');
                let dataCount = slides.attr('data-count');
    
                console.log(imageValue);
                console.log(dataCount);
    
                if(imageValue == banner){
                    slides.addClass('active');
                }else{
                    slides.removeClass('active');
                }
            })
        });

        console.log("クリックされました");        
    });
}

const slideShow = ()=>{
    const slides = $(".slide");
    let currentSlide = 0;

    function showSlide(index) {
        // すべてのスライドから"active"クラスを削除
        slides.removeClass("active");

        // 指定したスライドに"active"クラスを追加
        slides.eq(index).addClass("active");
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
        console.log(currentSlide);
    }

    // 最初のスライドを表示
    showSlide(currentSlide);

    // 一定の間隔で次のスライドを表示
    setInterval(nextSlide, 3000);// 3秒ごとに切り替え
}