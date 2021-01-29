let tabItemsResp = document.querySelectorAll(".onboard__tab--menu-link.responsive");

let tabContentsResp = document.querySelectorAll(".onboard__tab--content-pane.responsive");

let tabIndicatorsResp = document.querySelectorAll(".onboard__tab--indicator.responsive");

for (let i = 0; i < tabItems.length; i++) {
    
    tabItems[i].addEventListener("click", function () {

        for (let x = 0; x < tabContents.length; x++) {

            for (let m = 0; m < tabContents.length; m++) {
                
                tabItemsResp[m].classList.remove("onboard__tab--menu-current");

                tabIndicatorsResp[m].classList.remove("onboard__tab--indicator-active");
                
                tabContentsResp[m].classList.remove("onboard__tab--content-active");
                
            }
            
            tabItemsResp[i].classList.add("onboard__tab--menu-current");

            tabIndicatorsResp[i].classList.add("onboard__tab--indicator-active");

            tabContentsResp[i].classList.add("onboard__tab--content-active");
            
        }

    })
    
}