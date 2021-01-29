
         let dropDownText = document.querySelectorAll(".faq__question");

         let dropDownContent = document.querySelectorAll(".faq__answer");
        
        //  let arrowIcon = document.querySelectorAll(".faq__plus");

        
        
        for (let i = 0; i <dropDownText.length; i++) {
            
        
            dropDownText[i].addEventListener("click", function(){
        
                dropDownContent[i].classList.toggle("faq__display");        
                
                
                
        
            })
        
   
    
    }



