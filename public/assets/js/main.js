(function($) {
  "use strict";
  

  // finalPoster


    // Uploading data on the loaclStore of browser
    function uploadDataInStorage() { 
      
      // Map Styles
      let forTheMap = [
        { backgroundColor:'#fff',mapBorder:'#969595',mapBorderSize:1, mapZoomLabel: 1},
        { constellations:true,lineColor:'#969595',lineWidth:1.5},
        { stars:true,starColors:'#2d2d2d'},
        { milkway:false,milkwayColor:'#969595',opacity: 0.1},
        { gridLine:true,gridLineColor:'#969595',gridLineWidth: 0.6},
      ]
      localStorage.setItem('mapdata', JSON.stringify(forTheMap)); 

      // Orientations
      let posterSizeStoring =  {orientation: 'sizePortrait', width:590.6, height:826.8, scaling: 1, posterStyle: 'cicrleLayout'}
      localStorage.setItem('posterSize',JSON.stringify(posterSizeStoring))

      // Cart
      let posterIsReady =  {
        place: "NEW YORK,UNITED STATES",
        message:'Hellow world',
        date: 'JULY 13TH 2021',
        latlon:"40.777°N / -73.873°N",
        posterStyle: 'Circle',
        posterTheme: 'Modern',
        Constellations: 'Yes',
        Enablegrid: 'Yes',
        Milkyway: 'no',
        posterSize: '70x100cm',
        orientation: 'Portrait',
        price: 120,
        cartActivat: 'no',
        posterImage: "",
        posterMap: ""
      }
      localStorage.setItem('finalPoster',JSON.stringify(posterIsReady))
 

    }
    uploadDataInStorage()
   
    // Editor Js
    let FindElement = document.querySelector('.editor-area');
    if (FindElement) EditorFunc();

    // Editor Functions
    function EditorFunc() {
 
      // Map
      function TheMainMap() {

        let dFromLocalStorage = JSON.parse(localStorage.getItem('mapdata'))
        // editor Config
        var config = {
          width:450,
          projection: "airy",  
          form: true, 
          zoomlevel: dFromLocalStorage[0].mapZoomLabel,
          background: { fill: dFromLocalStorage[0].backgroundColor, stroke: dFromLocalStorage[0].mapBorder, width: dFromLocalStorage[0].mapBorderSize, opacity: 1 },
          formFields: { location: true, general: !1, stars: !1, dsos: !1, constellations: !1, lines: !1, other: !1,planets: !1 },
          culture: "en",
          container: "celestial-map", 
          datapath: "https://ofrohn.github.io/data/", 
          constellations: {
              show: false,    //Show constellations 
              names: false,   //Show constellation names   
              lines: dFromLocalStorage[1].constellations,   //Show constellation lines   
              lineStyle: { stroke: dFromLocalStorage[1].lineColor, width: dFromLocalStorage[1].lineWidth, opacity: 0.6 },
              bounds: !1,  
          },
          stars: {
              show: dFromLocalStorage[2].stars,
              colors: false,
              style: { fill: dFromLocalStorage[2].starColors, opacity: 1 },
              limit: 6,
              size: 5,
              propername: false, 
              propernameLimit: 2,
              designation: false, 
              designationLimit: 1,
          },
          dsos: { 
              show: false
          },
          mw: {
              show: dFromLocalStorage[3].milkway, 
              style: { fill:dFromLocalStorage[3].milkwayColor, opacity: dFromLocalStorage[3].opacity } 
          },
          planets: false,
          lines: {
              graticule: {
                  show: dFromLocalStorage[4].gridLine,
                  stroke: dFromLocalStorage[4].gridLineColor,
                  width: dFromLocalStorage[4].gridLineWidth,
                  opacity: 1, 
              },
              equatorial: false ,
              ecliptic:  false,
              galactic:false,
              supergalactic: false,
          },

        };

        
        Celestial.display(config); 
      }
      TheMainMap()
 

      // CheckSizes
      function CheckSizes() {
        let outout         = document.querySelector('.outout')
        let thePoster      = document.querySelector('.thePoster')
        let TheThemes      = document.querySelectorAll('.mapthestyles ul input[type=radio]')
        let ThemeStyle     = document.querySelectorAll('.poster-layout ul input[type=radio]')
        let sizesInInchess = document.querySelectorAll('.sizesIncenti input[type=radio]')
        let orientation    = document.querySelectorAll('.orientation input[type=radio]')
        // Change the Theme
        TheThemes.forEach(ckIb => {
          ckIb.addEventListener('change', (e) => {
            if (e.target.checked) {
              // This is for the Final poster SIze
              let upThemeName   = JSON.parse(localStorage.getItem('finalPoster'))
              upThemeName.posterTheme = e.target.value;
              localStorage.setItem('finalPoster',JSON.stringify(upThemeName))

              thePoster.id = e.target.value
            }
          })
        }) 
        // Sizes in Inche
        sizesInInchess.forEach(ckIb => {
          ckIb.addEventListener('change', (e) => { 
            if (e.target.checked) {
              let datas   = JSON.parse(localStorage.getItem('posterSize'))
              datas.width = parseInt(e.target.dataset.width);
              datas.height = parseInt(e.target.dataset.height);
              datas.scaling = e.target.dataset.scaling;
              thePoster.dataset.ppss = e.target.value;
              localStorage.setItem('posterSize',JSON.stringify(datas))
              
              // This is for the Final poster SIze
              let upThis   = JSON.parse(localStorage.getItem('finalPoster'))
              upThis.posterSize = e.target.value;
              localStorage.setItem('finalPoster',JSON.stringify(upThis))

              posterSizeing()
            }
          })
        })
        // Sizes Orientation
        ThemeStyle.forEach(ckIb => {
          ckIb.addEventListener('change', (e) => {
            if (e.target.checked) {
              let datas             = JSON.parse(localStorage.getItem('posterSize'))
              datas.posterStyle     = e.target.value;
 
              let dFromLocalStorage = JSON.parse(localStorage.getItem('mapdata'))
              dFromLocalStorage[0].mapZoomLabel = e.target.dataset.mapscale;

              localStorage.setItem('posterSize',JSON.stringify(datas))
              localStorage.setItem('mapdata',JSON.stringify(dFromLocalStorage))
              
              // This is for the Final poster SIze
              let upThis          = JSON.parse(localStorage.getItem('finalPoster'))
              upThis.posterStyle  = e.target.value;
              localStorage.setItem('finalPoster',JSON.stringify(upThis))

              posterSizeing();
              TheMainMap()
            } 


          })
        })
        // Sizes Orientation
        orientation.forEach(ckIb => {
          ckIb.addEventListener('change', (e) => { 
            if (e.target.checked) {
              let datas   = JSON.parse(localStorage.getItem('posterSize'))
              datas.orientation = e.target.value;
              thePoster.dataset.orientation = e.target.value
              localStorage.setItem('posterSize',JSON.stringify(datas))
              posterSizeing()
              let svl = JSON.parse(localStorage.getItem('posterSize')) 
              if (svl.orientation === 'sizeLandscape') { 
                outout.classList.add('sizeLandscape')
              }else{ 
                outout.classList.remove('sizeLandscape')
              }
              
              
              // This is for the Final poster SIze
              let upThis          = JSON.parse(localStorage.getItem('finalPoster'))
              upThis.orientation  = e.target.value;
              localStorage.setItem('finalPoster',JSON.stringify(upThis))

            }
          })
        })
         
      }
      CheckSizes()
  
      // Change the sizes view
      function  ChangesTheView(){ 
        let czIT = document.querySelectorAll('.theSSZZ')
        let czEl = document.querySelectorAll('.cngIt span')
        czEl.forEach(cIt => {
          cIt.addEventListener('click', (e) => {
            czIT.forEach(iic => {
              iic.classList.remove('active')
            })
            czEl.forEach(iie => {
              iie.classList.remove('active')
            })
  
            let trG = e.target.classList[0]
            czIT.forEach(tEl => {
              if (trG === tEl.dataset.class) { 
                tEl.classList.add('active')
                cIt.classList.add('active')
              }
            })
          })
        }) 
      }
      ChangesTheView()


      // Stored citys info from the API
      let shouldFilter = []
      let theCityInfo = []
      
      // Fetching Data
      const AutoComplete = async () => { 
          const dls = await fetch(`https://raw.githubusercontent.com/algolia/datasets/master/airports/airports.json`)
          .then(response => response.json())
          .then(data => {
            shouldFilter = [...data];
            data.forEach(gdt => {
              let ds = gdt.city+" ,"+gdt.country
              theCityInfo.push(ds); 
            });
          })
          return dls;
      }
      
      // AutoComplete data showing
      const dhow = () => {

        const suggestBlk = document.querySelector('.autoSuggestions')
        const input      = document.querySelector('.autoSuggest')
        const Headline   = document.querySelector('#HeadLine')
        const Devider    = document.querySelector('#Devider')
        const TagLine    = document.querySelector('#TagLine')
        const SubLine    = document.querySelector('#SubLine')
        const pMsg       = document.querySelector('#pMsg')

        let alatAt = document.querySelector('#lat')
        let alonAt = document.querySelector('#lon')
        let now    = document.querySelector('#now') 
  
        // Poster
        const HeadlineText   = document.querySelector('.posterWrp h4 span')
        const msgText        = document.querySelector('.posterWrpBoxes h4')
        const msgText2       = document.querySelector('.thisisMessageLine')
        // First Posters
        const DeviderText    = document.querySelector('.posterWrp p.divider')
        const TagLineText    = document.querySelector('.posterWrp p.tagline')
        const SubLineText    = document.querySelector('.posterWrp p.subline')
        // Boxes poster
        const DeviderText2    = document.querySelector('.posterWrpBoxes .divider') // City
        const SubLineText2    = document.querySelector('.posterWrpBoxes .subline') // country
        const TagLineText2    = document.querySelector('.posterWrpBoxes .taglines') // Date


        // While user will type in the inputs then in poster contents will be changes
        function updatePerType() {
            
          Headline.addEventListener('keyup', (e) => {
            HeadlineText.innerHTML = e.target.value.toLowerCase()
            DeviderText2.innerHTML = e.target.value.toLowerCase()  
          })
          Devider.addEventListener('keyup', (e) => {
            DeviderText.innerHTML = e.target.value.toLowerCase()
            SubLineText2.innerHTML = e.target.value.toLowerCase()
          })
          TagLine.addEventListener('keyup', (e) => {
            TagLineText.innerHTML = e.target.value.toLowerCase()
            TagLineText2.innerHTML = e.target.value.toLowerCase()
          })
          SubLine.addEventListener('keyup', (e) => {
            SubLineText.innerHTML = e.target.value.toLowerCase()
          }) 
          pMsg.addEventListener('keyup', (e) => { 
            msgText.innerHTML = e.target.value.toLowerCase()
            msgText2.innerHTML = e.target.value.toLowerCase()
          }) 

        } 
        updatePerType()

        // While user will type on the location input
        input.addEventListener('keyup', (e) => {
          let typed         = e.target.value;
        // Show hide the autoComplete
          if (typed.length >= 1) {
            suggestBlk.classList.add('active')
          } else {
            suggestBlk.classList.remove('active')
          }
          suggestBlk.innerHTML = " "

          // Filtering
          let filtaring     = theCityInfo.filter(filterElement => {
            let serachKey   = typed;
            let regEx       = new RegExp(serachKey,'gi'); 
            let getIt       = filterElement.match(regEx);
            if (getIt) {
                return filterElement;
            }
          }) 

          // showingData 
          for (let i = 0; i < filtaring.length; i++) {
            const li = document.createElement('LI') 
            li.innerHTML = '<i class="fas fa-map-marker-alt"></i>'+filtaring[i]
            suggestBlk.appendChild(li)

            if (i >= 3) {
              break
            }
            
          }
          // filtaring.forEach(list => {
          //   const li = document.createElement('LI') 
          //   li.textContent = list
          //   suggestBlk.appendChild(li)
          // })

          // Click on the list
          const suggestLst  = suggestBlk.querySelectorAll('li')
          suggestLst.forEach(alc => {
            alc.addEventListener('click', (e) => {
              input.value = e.target.textContent;
              shouldFilter.forEach(flEl => { 
                if(e.target.innerHTML.includes(flEl.city)){ 
                  input.dataset.country = flEl.country;
                  input.dataset.city    = flEl.city;
                  input.dataset.lat     = flEl._geoloc.lat;
                  input.dataset.lon     = flEl._geoloc.lng; 

                  Headline.value = flEl.city.toLowerCase();
                  Devider.value = flEl.country.toLowerCase(); 

                  HeadlineText.textContent = flEl.city.toLowerCase();
                  DeviderText.textContent = flEl.country.toLowerCase(); 

                  alatAt.value = flEl._geoloc.lat;
                  alonAt.value = flEl._geoloc.lng;
                  now.click();

                  
                  SubLineText2.textContent = flEl.country.toLowerCase();
                  DeviderText2.textContent = flEl.city.toLowerCase(); 

                  SubLineText.textContent  = flEl._geoloc.lat.toFixed(3)+"°N / "+flEl._geoloc.lng.toFixed(3)+"°N"; 
                  SubLine.value            = flEl._geoloc.lat.toFixed(3)+"°N / "+flEl._geoloc.lng.toFixed(3)+"°N"



                }
              });
              suggestBlk.innerHTML = " ";
            })
          })


          // clear auto suggest
          if (typed.length <= 0) { 
            suggestBlk.innerHTML = " "
          }



        })
    
  
      }
      const workingSync = AutoComplete()
      workingSync.then(d => dhow())


      // Mao enable-disable options
      function EnableDisableing() { 
        let constel   = document.querySelector('.constelles')
        let enableGrd = document.querySelector('.enGrd')
        let milkway   = document.querySelector('.mlkw')
    
        constel.addEventListener('change', (e) => {
          if (e.target.checked == false) {
            const ldt = JSON.parse(localStorage.getItem('mapdata'))
            ldt[1].constellations = false; 
    
            localStorage.setItem('mapdata', JSON.stringify(ldt))  
            TheMainMap()
 
            // This is for the Final poster SIze
            let upThis             = JSON.parse(localStorage.getItem('finalPoster'))
            upThis.Constellations  = 'no';
            localStorage.setItem('finalPoster',JSON.stringify(upThis))


          } else {
            const ldt = JSON.parse(localStorage.getItem('mapdata'))
            ldt[1].constellations = true; 
            localStorage.setItem('mapdata', JSON.stringify(ldt))
            TheMainMap()

            // This is for the Final poster SIze
            let upThis             = JSON.parse(localStorage.getItem('finalPoster'))
            upThis.Constellations  = 'true';
            localStorage.setItem('finalPoster',JSON.stringify(upThis))
          }
        })
        enableGrd.addEventListener('change', (e) => {
          if (e.target.checked == false) {
            const ldt = JSON.parse(localStorage.getItem('mapdata'))
            ldt[4].gridLine = false; 
            localStorage.setItem('mapdata', JSON.stringify(ldt))
            TheMainMap()

            // This is for the Final poster SIze
            let upThis             = JSON.parse(localStorage.getItem('finalPoster'))
            upThis.Enablegrid      = 'no';
            localStorage.setItem('finalPoster',JSON.stringify(upThis))

          } else {
            const ldt = JSON.parse(localStorage.getItem('mapdata'))
            ldt[4].gridLine = true; 
            localStorage.setItem('mapdata', JSON.stringify(ldt))
            TheMainMap()

            // This is for the Final poster SIze
            let upThis             = JSON.parse(localStorage.getItem('finalPoster'))
            upThis.Enablegrid      = 'yes';
            localStorage.setItem('finalPoster',JSON.stringify(upThis))
          }
        })
        milkway.addEventListener('change', (e) => {
          if (e.target.checked == false) {
            const ldt = JSON.parse(localStorage.getItem('mapdata'))
            ldt[3].milkway = false;
            localStorage.setItem('mapdata', JSON.stringify(ldt)) 
            TheMainMap()

            // This is for the Final poster SIze
            let upThis           = JSON.parse(localStorage.getItem('finalPoster'))
            upThis.Milkyway      = 'no';
            localStorage.setItem('finalPoster',JSON.stringify(upThis))
          } else {
            const ldt = JSON.parse(localStorage.getItem('mapdata'))
            ldt[3].milkway = true; 
            localStorage.setItem('mapdata', JSON.stringify(ldt)) 
            TheMainMap()

            // This is for the Final poster SIze
            let upThis           = JSON.parse(localStorage.getItem('finalPoster'))
            upThis.Milkyway      = 'yes';
            localStorage.setItem('finalPoster',JSON.stringify(upThis))
          }
        })
      }
      EnableDisableing()

      //Theme Changing  
      function ThemeChanging() {
        let Modern    = document.querySelector('.mapthestyles #n1')
        let Asphalt   = document.querySelector('.mapthestyles #n2')
        let Nautical  = document.querySelector('.mapthestyles #n3')
        let Retro     = document.querySelector('.mapthestyles #n4')
        let Dark      = document.querySelector('.mapthestyles #n5')
        let Bright    = document.querySelector('.mapthestyles #n6')
        let Nisshoki  = document.querySelector('.mapthestyles #n7')
        let Gaia      = document.querySelector('.mapthestyles #n8') 
        
        Modern.addEventListener('change', (e) => {
          if (e.target.checked) {
            let gDatas = JSON.parse(localStorage.getItem('mapdata'));
            gDatas[0].backgroundColor = '#fff'
            gDatas[0].mapBorder       = '#969595'
            gDatas[1].lineColor       = '#969595'
            gDatas[2].starColors      = '#2d2d2d'
            gDatas[3].milkwayColor    = '#969595'
            gDatas[4].gridLineColor   = '#969595'

            localStorage.setItem('mapdata', JSON.stringify(gDatas))
            TheMainMap()
          }
        }) 
        Asphalt.addEventListener('change', (e) => {
          if (e.target.checked) {
            let gDatas = JSON.parse(localStorage.getItem('mapdata'));
            gDatas[0].backgroundColor = '#2c404b'
            gDatas[0].mapBorder       = '#0000'
            gDatas[1].lineColor       = '#fff'
            gDatas[2].starColors      = '#fff'
            gDatas[3].milkwayColor    = '#fff'
            gDatas[4].gridLineColor   = '#fff'

            localStorage.setItem('mapdata', JSON.stringify(gDatas))
            TheMainMap()
          }
        })
        Nautical.addEventListener('change', (e) => {
          if (e.target.checked) {
            let gDatas = JSON.parse(localStorage.getItem('mapdata'));
            gDatas[0].backgroundColor = '#B9DCCD'
            gDatas[0].mapBorder       = '#B9DCCD'
            gDatas[1].lineColor       = '#a55f43b8'
            gDatas[2].starColors      = '#335E61'
            gDatas[3].milkwayColor    = '#969595'
            gDatas[4].gridLineColor   = '#fff'

            localStorage.setItem('mapdata', JSON.stringify(gDatas))
            TheMainMap()
          }
        })
        Retro.addEventListener('change', (e) => {
          if (e.target.checked) {
            let gDatas = JSON.parse(localStorage.getItem('mapdata'));
            gDatas[0].backgroundColor = '#F6FAE5'
            gDatas[0].mapBorder       = '#F6FAE5'
            gDatas[1].lineColor       = '#f0d4ad'
            gDatas[2].starColors      = '#DF2828'
            gDatas[3].milkwayColor    = '#969595'
            gDatas[4].gridLineColor   = '#f0d4ad'

            localStorage.setItem('mapdata', JSON.stringify(gDatas))
            TheMainMap()
          }
        })
        Dark.addEventListener('change', (e) => {
          if (e.target.checked) {
            let gDatas = JSON.parse(localStorage.getItem('mapdata'));
            gDatas[0].backgroundColor = '#333333'
            gDatas[0].mapBorder       = '#969595'
            gDatas[1].lineColor       = '#969595'
            gDatas[2].starColors      = '#969595'
            gDatas[3].milkwayColor    = '#969595'
            gDatas[4].gridLineColor   = '#969595'

            localStorage.setItem('mapdata', JSON.stringify(gDatas))
            TheMainMap()
          }
        })
        Bright.addEventListener('change', (e) => {
          if (e.target.checked) {
            let gDatas = JSON.parse(localStorage.getItem('mapdata'));
            gDatas[0].backgroundColor = '#333333'
            gDatas[0].mapBorder       = '#969595'
            gDatas[1].lineColor       = '#969595'
            gDatas[2].starColors      = '#969595'
            gDatas[3].milkwayColor    = '#969595'
            gDatas[4].gridLineColor   = '#969595'

            localStorage.setItem('mapdata', JSON.stringify(gDatas))
            TheMainMap()
          }
        })
        Nisshoki.addEventListener('change', (e) => {
          if (e.target.checked) {
            let gDatas = JSON.parse(localStorage.getItem('mapdata'));
            gDatas[0].backgroundColor = '#BE0029'
            gDatas[0].mapBorder       = '#BE0029'
            gDatas[1].lineColor       = '#ffffffb5'
            gDatas[2].starColors      = '#ffffffb5'
            gDatas[3].milkwayColor    = '#ffffffb5'
            gDatas[4].gridLineColor   = '#ffffffb5'

            localStorage.setItem('mapdata', JSON.stringify(gDatas))
            TheMainMap()
          }
        })
        Gaia.addEventListener('change', (e) => {
          if (e.target.checked) {
            let gDatas = JSON.parse(localStorage.getItem('mapdata'));
            gDatas[0].backgroundColor = '#AA5C14'
            gDatas[0].mapBorder       = '#AA5C14'
            gDatas[1].lineColor       = '#ffffffb5'
            gDatas[2].starColors      = '#ffffffb5'
            gDatas[3].milkwayColor    = '#ffffffb5'
            gDatas[4].gridLineColor   = '#ffffffb5'

            localStorage.setItem('mapdata', JSON.stringify(gDatas))
            TheMainMap()
          }
        })



      }
      ThemeChanging()

      // Poster Sizeing
      function posterSizeing() {
        let rootCss   = document.documentElement;
        let posterDiv = document.querySelector('.thePoster')
        let datas     = JSON.parse(localStorage.getItem('posterSize')) 
        rootCss.style.setProperty('--posterScaling', datas.scaling)
        if (datas.orientation === "sizePortrait") {
          rootCss.style.setProperty('--posterWidth', datas.width+"px")
          rootCss.style.setProperty('--posterheight', datas.height+"px")
        } else {
          rootCss.style.setProperty('--posterWidth', datas.height+"px")
          rootCss.style.setProperty('--posterheight', datas.width+"px")
        }


        if (datas.posterStyle === "boxLayout") { 
          posterDiv.classList.add('boxLayoutPoster')
        }else{  
          posterDiv.classList.remove('boxLayoutPoster')
        }



      }
      posterSizeing()

      
 
 


    } 
     
    

    // Theme JQuery
    function ThemeJQuerys() {

      // sticky nav
      $(window).scroll(function(){
          if($(this).scrollTop()>400){
              $('.sticky-header').addClass("sticky")  /*Where you wanto make sticky just add that neme in "haeder-area"       after that go to style css edit some thing in there*/    
          }
          else{
              $('.sticky-header').removeClass("sticky")
          }
      });

      // preloader 
      $(window).bind("load", function () {
        jQuery("#loader").fadeOut("slow");
        jQuery("#preloader").delay(0).fadeOut();
      }); 
    
      // Mobile nenu
      $('.humg-btn').click(function(){
        $('.humg-btn').toggleClass('humgbMenu')
      });
      $('.humg-btn').click(function(){
        $('.mobile-menu').toggleClass('menuActivve')
      }); 
    
      // mainSlider
      $('.slider-active').slick({
        slidesToShow: 3,
        slidesToScroll: 1, 
        autoplaySpeed: 2000,
        centerPadding: '60px',
        responsive: [ 
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480, 
          centerPadding: '0px',
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      }); 

      // owlCarousel 
      $(".hero-slider").owlCarousel({
        loop: true, 
        items: 1,  
        nav: false,
        dots: true,  
        autoplay:true, 
      });
      $(".stp-slider").owlCarousel({
        loop: true, 
        items: 1,  
        nav: false,
        dots: true, 
        margin:20,
      });
      $(".designed-wrp").owlCarousel({
        loop: true, 
        items: 3,   
        margin:50,
        center:true,
        responsive:{
          0:{
              items:1, 
          },
          600:{
              items:3, 
          },
          1000:{
              items:3 
          }
      } 
      });
    
      // Nice-select
      $('select').niceSelect();

      // Nice-number
      $('input[type="number"]').niceNumber();
  
    }
    ThemeJQuerys()
  




})(jQuery);
