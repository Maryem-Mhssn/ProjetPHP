
var img = document.querySelector('.carousel_track');
var buttonC = document.querySelectorAll('.carousel_button');
var nb_img = document.querySelectorAll('.carousel_image').length;
var indice_slide = 1;
var translateX = 0;

buttonC.forEach(button => {
    button.addEventListener('click', (event)=>{
        if(event.target.id === 'carousel_button-left')
        {
            if(indice_slide !== 1)
            {
                image_slide--;
                translateX +=1000;
            }else{
                if(indice_slide !== nb_img)
                {
                    indice_slide++;
                    translateX -=600;
                }
            }
        }

        img.style.transform = 'translateX(${translateX}px)';
    })
})