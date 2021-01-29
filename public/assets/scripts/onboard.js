let tabItems = document.querySelectorAll(".onboard__tab--menu-link");

let tabContents = document.querySelectorAll(".onboard__tab--content-pane");

let tabIndicators = document.querySelectorAll(".onboard__tab--indicator");

for (let i = 0; i < tabItems.length; i++) {
    
    tabItems[i].addEventListener("click", function () {

        for (let x = 0; x < tabContents.length; x++) {

            for (let m = 0; m < tabContents.length; m++) {
                
                tabItems[m].classList.remove("onboard__tab--menu-current");

                tabIndicators[m].classList.remove("onboard__tab--indicator-active");
                
                tabContents[m].classList.remove("onboard__tab--content-active");
                
            }
            
            tabItems[i].classList.add("onboard__tab--menu-current");

            tabIndicators[i].classList.add("onboard__tab--indicator-active");

            tabContents[i].classList.add("onboard__tab--content-active");
            
        }

    })
    
}