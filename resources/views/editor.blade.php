@extends('content-layout.layout')
@section('thecontents') 

    <div class="editor-header">
        <div class="header-top text-center">
            <p><b>Summer Sale!</b> Get 50% off your second poster + FREE shipping</p>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-end">
                    <div class="HeaderEditorContent">
                        <a class="editorHeaderLogo" href="/">
                            <img src="{{ asset('/') }}assets/img/logo.png" alt="">
                        </a>
                        <div class="eHeadertext">
                            <h5>Customize your design</h5>
                            <p>Change location, labels and appearance</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="celestial-form"></div>

    <!-- editor-area START -->
    <form id="bythis">
        <div class="editor-area">
            <div class="outout">
                <div class="tps" id="capture"> 
                    <div class="thePoster" data-orientation="sizePortrait" data-ppss="size50x70cm" id="theModern">
                        <div class="poster-body">
                            <div id="celestial-map"></div>
                            <h3 class="thisisMessageLine">Hello world</h3>
                            <div class="posterWrp">
                                <p class="tagline">JULY 13TH 2021</p>
                                <h4><span>NEW YORK</span>,<p class="divider">UNITED STATES</p></h4> 
                                <p class="subline">40.777°N / -73.873°N</p>
                            </div>
                            <div class="posterWrpBoxes">
                                <h4>Hello world</h4>
                                <p><span class="divider">dhaka</span>, <span class="subline">BANGLADESH</span> / <span class="taglines">September 10th 2019</span></p> 
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="editor">  
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne"> 
                            <button class="btn btn-link btn-block collapsed text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span><i class="fal fa-angle-down"></i></span> Location and date 
                            </button> 
                        </div> 
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="location"> 
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label for=""> 
                                                <div class="lc">
                                                    <input class="autoSuggest" type="text" placeholder="Start typing the name of a place" data-country="" data-city="" data-lat="" data-lon="">  <i class="fal fa-search"></i> 
                                                    <ul class="autoSuggestions"></ul>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="l-dats">   
                                                <span class="bdircts">Enter your specific date</span>
                                                <label for="" class="SelectionsHere"> 
                                                    <div class="dateSelects"> 
                                                        <select name="day" id="sDay">
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                            <option value="06">06</option>
                                                            <option value="07">07</option>
                                                            <option value="08">08</option>
                                                            <option value="09">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                        </select>
                                                        <select name="month" id="sMonth">
                                                            <option value="Jan">Jan</option>
                                                            <option value="Fab">Fab</option>
                                                            <option value="Mar">Mar</option>
                                                            <option value="Apr">Apr</option>
                                                            <option value="May">May</option>
                                                            <option value="Jun">Jun</option>
                                                            <option value="Jul">Jul</option>
                                                            <option value="Aug">Aug</option>
                                                            <option value="Sep">Sep</option>
                                                            <option value="Oct">Oct</option>
                                                            <option value="Nov">Nov</option>
                                                            <option value="Dec">Dec</option>
                                                        </select>
                                                        <select name="year" id="sYear">
                                                            <option value="2021">2021</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option> 
                                                        </select>
                                                    </div>
                                                    <div class="timesSelects"> 
                                                        <select name="hour" id="sHour">
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                            <option value="06">06</option>
                                                            <option value="07">07</option>
                                                            <option value="08">08</option>
                                                            <option value="09">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                        </select> 
                                                        <small>:</small>
                                                        <select name="minute" id="sMinute">
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                            <option value="06">06</option>
                                                            <option value="07">07</option>
                                                            <option value="08">08</option>
                                                            <option value="09">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                            <option value="32">32</option>
                                                            <option value="33">33</option>
                                                            <option value="34">34</option>
                                                            <option value="35">35</option>
                                                            <option value="36">36</option>
                                                            <option value="37">37</option>
                                                            <option value="38">38</option>
                                                            <option value="39">39</option>
                                                            <option value="40">40</option>
                                                            <option value="41">41</option>
                                                            <option value="42">42</option>
                                                            <option value="43">43</option>
                                                            <option value="44">44</option>
                                                            <option value="45">45</option>
                                                            <option value="46">46</option>
                                                            <option value="47">47</option>
                                                            <option value="48">48</option>
                                                            <option value="49">49</option>
                                                            <option value="50">50</option>
                                                            <option value="51">51</option>
                                                            <option value="52">52</option>
                                                            <option value="53">53</option>
                                                            <option value="54">54</option>
                                                            <option value="55">55</option>
                                                            <option value="56">56</option>
                                                            <option value="57">57</option>
                                                            <option value="58">58</option>
                                                            <option value="59">59</option>
                                                            <option value="60">60</option>
                                                        </select>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>  
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="card">
                        <div class="card-header" id="headingOnet"> 
                            <button class="btn btn-link btn-block collapsed text-left" type="button" data-toggle="collapse" data-target="#collapseOnet" aria-expanded="true" aria-controls="collapseOnet">
                                <span><i class="fal fa-angle-down"></i></span> <ab>Customize the</ab> style 
                            </button> 
                        </div> 
                        <div id="collapseOnet" class="collapse" aria-labelledby="headingOnet" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="style">
                                    <div class="poster-layout">
                                        <fieldset id="layOuts">
                                            <ul>
                                                <li> 
                                                    <input type="radio" value="cicrleLayout" data-mapScale="1" id="layout1" name="layOuts" checked>
                                                    <label for="layout1"> <div class="layBox cicrcle"></div> Circle Layout</label>
                                                </li>
                                                <li>
                                                    <input type="radio" value="boxLayout" data-mapScale="1.5" id="layout2" name="layOuts">
                                                    <label for="layout2"> <div class="layBox"></div> Box Layout</label>
                                                </li> 
                                            </ul>
                                        </fieldset>
                                    </div>
                                    <div class="mapthestyles">
                                        <fieldset id="themeGroup">
                                            <ul>
                                                <li> 
                                                    <input type="radio" value="theModern" id="n1" name="themeGroup" checked>
                                                    <label for="n1"><img src="{{ asset('/') }}assets/img/themes/1.jpg" alt=""> Modern</label>
                                                </li>
                                                <li>
                                                    <input type="radio" value="Asphalt" id="n2" name="themeGroup">
                                                    <label for="n2"><img src="{{ asset('/') }}assets/img/themes/2.jpg" alt=""> Asphalt</label>
                                                </li>
                                                <li>
                                                    <input type="radio" value="Nautical" name="themeGroup" id="n3">
                                                    <label for="n3"><img src="{{ asset('/') }}assets/img/themes/3.jpg" alt=""> Nautical</label>
                                                </li>
                                                <li>
                                                    <input type="radio" value="Retro" name="themeGroup" id="n4">
                                                    <label for="n4"><img src="{{ asset('/') }}assets/img/themes/4.jpg" alt=""> Retro</label>
                                                </li>
                                                <li>
                                                    <input type="radio" value="Dark" name="themeGroup" id="n5">
                                                    <label for="n5"><img src="{{ asset('/') }}assets/img/themes/5.jpg" alt=""> Dark</label>
                                                </li>
                                                <li>
                                                    <input type="radio" value="Bright" name="themeGroup" id="n6">
                                                    <label for="n6"><img src="{{ asset('/') }}assets/img/themes/6.jpg" alt=""> Bright</label>
                                                </li>
                                                <li>
                                                    <input type="radio" value="Nisshoki" name="themeGroup" id="n7">
                                                    <label for="n7"><img src="{{ asset('/') }}assets/img/themes/7.jpg" alt=""> Nisshoki</label>
                                                </li>
                                                <li>
                                                    <input type="radio" value="Gaia" name="themeGroup" id="n8">
                                                    <label for="n8"><img src="{{ asset('/') }}assets/img/themes/8.jpg" alt=""> <span class="gtc">Collab!</span> Gaia</label>
                                                </li>
                                            </ul>
                                        </fieldset>
                                    </div>
                                    <div class="elements ckukblk"> 
                                        <ul>
                                            <li><span>Constellations</span> 
                                                <div class="checkboxes-and-radios">  
                                                    <input type="checkbox" name="checkbox-cats[]" id="checkbox" class="constelles" value="1" checked>
                                                    <label for="checkbox"> </label>  
                                                </div>
                                            </li>
                                            <li><span>Enable grid</span> 
                                                <div class="checkboxes-and-radios">  
                                                    <input type="checkbox" name="checkbox-cats[]" id="checkbox-2" class="enGrd" value="1" checked>
                                                    <label for="checkbox-2"> </label>  
                                                </div>
                                            </li> 
                                            <li><span>Milkyway</span> 
                                                <div class="checkboxes-and-radios">  
                                                    <input type="checkbox" name="checkbox-cats[]" id="checkbox-5" class="mlkw" value="1">
                                                    <label for="checkbox-5"> </label>  
                                                </div>
                                            </li> 
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="card">
                        <div class="card-header" id="headingOneth"> 
                            <button class="btn btn-link btn-block collapsed text-left" type="button" data-toggle="collapse" data-target="#collapseOneth" aria-expanded="true" aria-controls="collapseOneth">
                                <span><i class="fal fa-angle-down"></i></span> <ab>Customize the</ab> text 
                            </button> 
                        </div> 
                        <div id="collapseOneth" class="collapse" aria-labelledby="headingOneth" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="themetext">
                                    <label for="">
                                        <span>Headline</span>
                                        <input type="text" value="Paris" name="" id="HeadLine" max="40">
                                    </label>
                                    <label for="">
                                        <span>Divider</span>
                                        <input type="text" value="France" name="" id="Devider">
                                    </label>
                                    <label for="">
                                        <span>Tagline</span>
                                        <input type="text" value="September 10th 2019" name="" id="TagLine" max="40">
                                    </label>
                                    <label for="">
                                        <span>Subline</span>
                                        <input type="text" value="48.856°N / 2.3522°E" name="" id="SubLine">
                                    </label>
                                    <label for="" class="theMessageField">
                                        <span>Mesage</span>
                                        <textarea name="" id="pMsg" placeholder="type your message">Hello world</textarea>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="card">
                        <div class="card-header" id="headingOnef"> 
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOnef" aria-expanded="true" aria-controls="collapseOnef">
                                <span><i class="fal fa-angle-down"></i></span> <ab>Change the</ab> size 
                            </button> 
                        </div> 
                        <div id="collapseOnef" class="collapse show" aria-labelledby="headingOnef" data-parent="#accordionExample">
                            <div class="card-body"> 
                                <div class="ppsizes">
                                    <div class="poster-size sizesIncenti">
                                        <p>Select poster size</p>
                                        <div class="theSSZZ active" data-class="centimiterAction"> 
                                            <input type="radio" data-height="826.8" data-width="590.6" data-scaling=".7" value="size30x40cm" name="radio-group" id="fsz">
                                            <label for="fsz">30x40cm</label>
                                            <input type="radio" data-height="826.8" data-width="590.6" data-scaling=".85" value="size50x70cm" name="radio-group" id="ssz">
                                            <label for="ssz">50x70cm</label>
                                            <input type="radio" data-height="826.8" data-width="590.6" data-scaling="1" value="size70x100cm" name="radio-group" id="tsz" checked>
                                            <label for="tsz">70x100cm</label> 
                                        </div>
                                        <div class="theSSZZ" data-class="inchAction"> 
                                            <input type="radio" data-height="826.8" data-width="590.6" data-scaling=".65" value='sInche11x17' name="radio-group" id="fsz1">
                                            <label for="fsz1">11x17"</label>
                                            <input type="radio" data-height="826.8" data-width="590.6" data-scaling=".75" value='sInche18x24' name="radio-group" id="ssz2">
                                            <label for="ssz2">18x24"</label>
                                            <input type="radio" data-height="826.8" data-width="590.6" data-scaling=".9" value='sInche24x36' name="radio-group" id="tsz3">
                                            <label for="tsz3">24x36"</label>
                                        </div>
                                        <div class="theSSZZ" data-class="ALabelAction"> 
                                            <input type="radio" data-height="826.8" data-width="590.6" data-scaling=".55" value='sInche11x17' name="radio-group" id="fsz001">
                                            <label for="fsz001">A4</label>
                                            <input type="radio" data-height="826.8" data-width="590.6" data-scaling=".75" value='sInche18x24' name="radio-group" id="ssz002">
                                            <label for="ssz002">A3</label>
                                            <input type="radio" data-height="826.8" data-width="590.6" data-scaling=".88" value='sInche24x36' name="radio-group" id="tsz003">
                                            <label for="tsz003">A2</label>
                                            <input type="radio" data-height="826.8" data-width="590.6" data-scaling=".95" value='sInche24x36' name="radio-group" id="tsz004">
                                            <label for="tsz004">A1</label>
                                        </div>
                                    </div>
                                    <div class="cngIt">Switch size standards <span class="centimiterAction active">CM (EU)</span> <span class="inchAction">Inch (US)</span> <span class="ALabelAction">A4-A1</span></div>
                                    <div class="orientation">
                                        <p>Select orientation</p>
                                        <input type="radio" value="sizePortrait" checked name="radio-grouptt" id="Portrait">
                                        <label for="Portrait">Portrait</label>
                                        <input type="radio" value="sizeLandscape" name="radio-grouptt" id="landscape">
                                        <label for="landscape">Landscape</label> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>  
                <button type="button" class="save-design-text"  data-toggle="modal" data-target="#reminderModal"><i class="fal fa-envelope"></i> Save design and remind me later</button> 
                <div class="prices">
                    <button type="submit"><span class="thisistheposterPrice"><i class="fas fa-cart-plus"></i> USD 120.00</span> <div >ADD TO CART <i class="fas fa-long-arrow-right"></i></div> </button>
                </div>
                <img src="{{asset('/')}}assets/img/Reload-Image-Gif-1.gif" class="prel" alt="">
            </div> 
        </div>
    </form>
    <!-- editor-area END -->
    <script src="{{ asset('/') }}assets/js/mobiscroll.javascript.min.js"></script>

    <script> 

        window.addEventListener('load',() => {
        
            let form             = document.querySelector('#bythis')
            let posterMessage    = document.querySelector('.thisisMessageLine')
            let posterPrice      = document.querySelector('.thisistheposterPrice')
            let place            = document.querySelector('.posterWrp h4')
            let TagLine          = document.querySelector('#TagLine')
            let TagLineTx        = document.querySelector('.tagline')
            let TagLineTx2       = document.querySelector('.taglines')
            let subline          = document.querySelector('.posterWrp .subline')
            let adtime           = document.querySelector('#datetime')
            let here             = document.querySelector('#here')

            let dass      = document.querySelector('#demo-datetime-day')
            let AllSc     = document.querySelectorAll('.SelectionsHere select')
            let sDay      = document.querySelector('#sDay')
            let sMonth    = document.querySelector('#sMonth')
            let sYear     = document.querySelector('#sYear')
            let sHour     = document.querySelector('#sHour')
            let sMinute   = document.querySelector('#sMinute')
            let AllMonths = ['','Jan',"Fab","Mar", "Apr", 'May', "Jun", "Jul",'Aug',"Sep","Oct","Nov",'Dec']; 


            function Sm(sDay,sMonth,sYear,sHour,sMinute) { 
                let monthIndex;
                AllMonths.forEach(lMnt => {
                    if (lMnt === sMonth.value) {
                        monthIndex = AllMonths.indexOf(lMnt);
                    }
                }); 
                const cStr1 = sMonth.value+" "+sDay.value+"th "+sYear.value;
                const cStr2 = sYear.value+"-"+monthIndex+"-"+sDay.value+" "+sHour.value+":"+sMinute.value;

                TagLine.value           = cStr1
                TagLineTx.innerHTML     = cStr1
                TagLineTx2.innerHTML    = cStr1 


                adtime.value = cStr2+":00 +0600";
                here.click();
    
            }
            AllSc.forEach(aItc => {
                aItc.addEventListener('change', () => {
                    Sm(sDay,sMonth,sYear,sHour,sMinute)
                })
            }); 

 
            form.addEventListener('submit', (e) => {
                e.preventDefault();   
                const myPromise = new Promise(function(myResolve, myReject) { 
                
                    // This is for the Final poster SIze
                    let upThis        = JSON.parse(localStorage.getItem('finalPoster'))
                    upThis.message    = posterMessage.textContent;
                    upThis.date       = TagLineTx.textContent;
                    upThis.latlon     = subline.textContent;
                    upThis.place      = place.textContent;
                    upThis.cartActivat= 'yes';
                    upThis.price      = posterPrice.textContent;  
                    localStorage.setItem('finalPoster',JSON.stringify(upThis))
                    
                    let gettingData   = JSON.parse(localStorage.getItem('finalPoster'))
                    let posterIsReady =  {
                        place: gettingData.place,
                        message:gettingData.message,
                        date: gettingData.date,
                        latlon: gettingData.latlon,
                        posterStyle: gettingData.posterStyle,
                        posterTheme: gettingData.posterTheme,
                        Constellations: gettingData.Constellations,
                        Enablegrid: gettingData.Enablegrid,
                        Milkyway: gettingData.Milkyway,
                        posterSize: gettingData.posterSize,
                        orientation: gettingData.orientation,
                        price: gettingData.price,
                        cartActivat: gettingData.cartActivat,
                        posterImage: "",
                        posterMap: ""
                    }
                    localStorage.setItem('finalPosterSend',JSON.stringify(posterIsReady))

  
                    window.scrollTo(0, 0);   
                    html2canvas(document.getElementById("capture")).then(function (canvas) { 
                        let upThis        = JSON.parse(localStorage.getItem('finalPosterSend'))
                        upThis.posterImage= canvas.toDataURL("image/jpeg", 0.9)
                        localStorage.setItem('finalPosterSend',JSON.stringify(upThis))
                    });
                    html2canvas(document.getElementById("celestial-map")).then(function (canvas) { 
                        let upThis        = JSON.parse(localStorage.getItem('finalPosterSend')) 
                        upThis.posterMap  = canvas.toDataURL("image/jpeg", 0.9)
                        localStorage.setItem('finalPosterSend',JSON.stringify(upThis))
 
                        myResolve("done")

                        localStorage.removeItem("finalPoster");

                    }); 
                    form.classList.add('loading')
 
                });
                const lastRun   = () => { 
                    window.location.replace(window.location.origin+"/checkout");
                }
                myPromise.then(function() {
                    lastRun()
                }); 

            })


        }) 



 
    </script>  





@endsection