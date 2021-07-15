
    function ValidePage() { 
        let rmBtn = document.querySelector('.removeThisProduct') 
        let upThis        = JSON.parse(localStorage.getItem('finalPosterSend'))
        if (upThis.cartActivat === 'no') {
            window.location.replace(window.location.origin+"/editor");
        }
        rmBtn.addEventListener("click", () => {
            localStorage.removeItem("finalPosterSend");
            window.location.replace(window.location.origin+"/editor");
        })
    }
    ValidePage()

    function postRend() {
 
        let upThis        = JSON.parse(localStorage.getItem('finalPosterSend'))

        let thatImg     = document.querySelector('.myProductHere img');
        let thatH4      = document.querySelector('.myProductHere h4');
        let addrr       = document.querySelector('.addrr'); 
        let ttdate      = document.querySelector('.ttdate'); 
        let ltdate      = document.querySelector('.ltdate'); 
        let price       = document.querySelector('.price b'); 

        let pName       = upThis.posterSize+" - "+upThis.orientation+ "  (Starmap)"

        thatH4.innerHTML = pName
        addrr.innerHTML  = upThis.place
        ttdate.innerHTML = upThis.date
        ltdate.innerHTML = upThis.latlon
        price.innerHTML  = "1 × "+upThis.price
        thatImg.setAttribute('src',upThis.posterImage) 
 

    } 
    postRend()
