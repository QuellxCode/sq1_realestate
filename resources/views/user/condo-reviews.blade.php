@extends('user.layout.app')
@section('content')

    <script>
        $(document).ready(function () {
            $('#example').DataTable();
            $('#example2').DataTable();
        });
    </script>
    <style>
        input[type=checkbox]
        {
            height:15px;
        }
        </style>

    <div class="breadcrumbs overlay-black" style="background:url('user-assets/img/banner.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs-inner">
                        <div class="breadcrumbs-title text-center">
                            <h1>CONDO REVIEWS</h1>
                        </div>
                        <div class="breadcrumbs-menu">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="feature-property pt-130">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="mb-30">Pre-Construction Square One Condos</h5>

                    <table id="example" class="display" style="width:100%">
                        <thead>
                        <tr>
                            <th>Completion</th>
                            <th>Name</th>
                            <th>Address/General Location</th>
                            <th>Aprx Start Price Price for 1 Bed in 2017</th>
                            <th>Estimated Maintenance in 2017</th>
                            <th># of Units</th>
                            <th># of Floors</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>2021</td>
                            <td><a href="#">M
                                    City</a></td>
                            <td>400 Burnhamthorpe Road West</td>
                            <td>$300,000+</td>
                            <td>Est. $0.53+ PSF</td>
                            <td>Aprox 700 + 700</td>
                            <td>60 and 61</td>
                            <td>New selling - 80% sold out.</td>
                        </tr>
                        <tr>
                            <td>2021</td>
                            <td><a
                                        href="#">Pinnacle
                                    Uptown</a></td>
                            <td>5044 Huronatrio St</td>
                            <td>$300,000+</td>
                            <td>Est. $0.50+ PSF</td>
                            <td>TBA</td>
                            <td>TBA</td>
                            <td>Now selling - 40% sold out</td>
                        </tr>
                        <tr>
                            <td>2020</td>
                            <td><a href="#">Edge
                                    Condos</a></td>
                            <td>Elm Drive and Hurontario</td>
                            <td>$300,000+</td>
                            <td>Est. $0.53+ PSF</td>
                            <td>Approx 350</td>
                            <td>35</td>
                            <td>Pre-Construction Pre-registration</td>
                        </tr>
                        <tr>
                            <td>2020</td>
                            <td><a
                                        href="#">Daniels
                                    New City Centre</a></td>
                            <td>329 Burnhamthorpe Road West</td>
                            <td>$300,000+</td>
                            <td>Est. $0.50+ PSF</td>
                            <td>TBA</td>
                            <td>TBA</td>
                            <td>Now selling - 30% sold out.</td>
                        </tr>
                        <tr>
                            <td>Late 2018</td>
                            <td><a href="#">Grande
                                    Mirage Condos</a></td>
                            <td>355 Rathburn West (by appointment only)</td>
                            <td>$300,000+</td>
                            <td>Est. $0.49+ PSF</td>
                            <td>344</td>
                            <td>22</td>
                            <td>95% sold out. Call now.<br>
                                647-989-7517<br></td>
                        </tr>
                        <tr>
                            <td>Late 2018</td>
                            <td><a href="#">Block Nine
                                    Condos</a></td>
                            <td>Burnhamthorpe &amp;<br>
                                Grand Park (by appointment only)
                            </td>
                            <td>$300,000+</td>
                            <td>Est. $0.49+ PSF</td>
                            <td>TBA</td>
                            <td>32 &amp; 26</td>
                            <td>Sold Out<br></td>
                        </tr>
                        <tr>
                            <td>Late 2017</td>
                            <td><a href="#">Amber
                                    Condos</a></td>
                            <td>Hurontario and Eglinton (by appointment only)<br></td>
                            <td>$300,000+</td>
                            <td>Est. $0.50+ PSF</td>
                            <td>TBA</td>
                            <td>24 and 26</td>
                            <td>Sold out</td>
                        </tr>
                        <tr>
                            <td>Mid 2017</td>
                            <td><a
                                        href="#">Pinnacle
                                    Grand Park 2</a></td>
                            <td>Burnhamthorpe &amp;<br>
                                Grand Park (by appointment only)
                            </td>
                            <td>$300,000+</td>
                            <td>Est. $0.43+ PSF</td>
                            <td>TBA</td>
                            <td>48</td>
                            <td>Sold out<br></td>
                        </tr>
                        <tr>
                            <td>Mid 2017</td>
                            <td><a href="#">PSV Condos
                                    - 1 &amp; 2</a></td>
                            <td>Burnhamthorpe &amp;<br>
                                Confederation (by appointment only)<br></td>
                            <td>$280,000+</td>
                            <td>Est. $0.49+ PSF</td>
                            <td>TBA</td>
                            <td>48 &amp; 42</td>
                            <td>Sold out<br></td>
                        </tr>
                        <tr>
                            <td>Now occupied</td>
                            <td><a href="#">Mirage
                                    Condos</a></td>
                            <td>349 Rathburn West (by appointment only)</td>
                            <td>$280,000+</td>
                            <td>Est. $0.43+ PSF</td>
                            <td>352</td>
                            <td>22</td>
                            <td>Sold out</td>
                        </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="feature-property pt-130">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="mb-30">Existing Square One Condos</h5>

                    <table id="example2" class="display" style="width:100%">
                        <thead>
                        <tr>
                            <th>Completion</th>
                            <th>Name</th>
                            <th>Address/General Location</th>
                            <th>Aprx Start Price Price for 1 Bed in 2017</th>
                            <th>Estimated Maintenance in 2017</th>
                            <th># of Units</th>
                            <th># of Floors</th>
                            <th>Status</th>
                            <th>Units of Sales</th>
                            <th>Sales History Camparison</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr >
                            <td>2015</td>
                            <td ><a href="#">Pinnacle
                                    Uptown Crystal Condos</a></td>
                            <td >55, 75 Eglinton Ave</td>
                            <td >$310,000+</td>
                            <td >$0.49+ PSF</td>
                            <td >N</td>
                            <td >572</td>
                            <td>24 &amp; 28</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="1857"><a class="comparelink" href="#"
                                                                                        onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>2014</td>
                            <td ><a
                                        href="#">Pinnacle
                                    Grand Park</a></td>
                            <td >3985 Grand Park Dr</td>
                            <td >$300,000+</td>
                            <td >$0.49+ PSF</td>
                            <td >N</td>
                            <td >N/A</td>
                            <td >29</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="1108"><a class="comparelink" href="#"
                                                                                        onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2013</td>
                            <td ><a
                                        href="#">Park
                                    Residences
                                    <br>
                                    <br></a></td>
                            <td >4099 BrickStone Mews</td>
                            <td >$300,000+</td>
                            <td >$0.52+ PSF</td>
                            <td >N</td>
                            <td >n/a</td>
                            <td >n/a</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="1073"><a class="comparelink" href="#"
                                                                                        onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>2013</td>
                            <td ><a
                                        href="#">Grand
                                    Residences
                                    <br>
                                    <br></a></td>
                            <td >4070 Confederation Pkwy</td>
                            <td >$300,000+</td>
                            <td >$0.52+ PSF</td>
                            <td >N</td>
                            <td >402</td>
                            <td >45</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td><input type="checkbox" name="1080"><a class="comparelink" href="#"
                                                                                        onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>2013</td>
                            <td ><a href="#">Residences
                                    Condo
                                    <br>
                                    <br></a></td>
                            <td >4065 Brickstone Mews</td>
                            <td >$300,000+</td>
                            <td >$0.52+ PSF</td>
                            <td >N</td>
                            <td >288</td>
                            <td >36</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="1067"><a class="comparelink" href="#"
                                                                                        onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>2012</td>
                            <td ><a href="#">LimeLight
                                    Condo</a></td>
                            <td >365 Prince of Wales &amp; 360 Square One Drive</td>
                            <td >$300,000+</td>
                            <td >$0.43-$0.49+ PSF</td>
                            <td >N</td>
                            <td >589</td>
                            <td >22 &amp; 32</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox"  name="713"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>2011</td>
                            <td ><a
                                        href="#"
                                    Monroe Condo
                                    <br>
                                    <br></a></td>
                            <td >50, 60 Absolute Ave</td>
                            <td >$280,000+</td>
                            <td >$0.50+ PSF</td>
                            <td >N</td>
                            <td >453</td>
                            <td >56</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="718"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>2011</td>
                            <td ><a href="#">WideSuite
                                    Condo
                                    <br></a></td>
                            <td >208 Enfield Place</td>
                            <td >$300,000+</td>
                            <td >$0.45+ PSF</td>
                            <td >N</td>
                            <td >278</td>
                            <td >37</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="805"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>2010</td>
                            <td ><a href="#"="http://mysquareonecondo.ca/Mississauga/chicago-condos/">Chicago
                                    Condo
                                    <br>
                                    <br></a></td>
                            <td >385 Prince of Wales</td>
                            <td >$300,000+</td>
                            <td >$0.47+ PSF</td>
                            <td >N</td>
                            <td >417</td>
                            <td >35</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="678"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>2010</td>
                            <td ><a href="#">Onyx
                                    Condo
                                    <br>
                                    <br></a></td>
                            <td >223 Webb Drive</td>
                            <td >$310,000+</td>
                            <td >$0.55+ PSF</td>
                            <td >N<br>
                                <br>
                                <br></td>
                            <td >353</td>
                            <td >36</td>
                            <td ><a href="#">FOR SALE</a>
                            </td>
                            <td ><input type="checkbox" name="729"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>2010</td>
                            <td ><a href="#">Elle
                                    Condo
                                    <br>
                                    <br></a></td>
                            <td >3525 Kariya Drive</td>
                            <td >$280,000+</td>
                            <td >$0.48+ PSF</td>
                            <td >N</td>
                            <td >328</td>
                            <td >31</td>
                            <td ><a href="#">FOR SALE</a>
                            </td>
                            <td ><input type="checkbox" name="703"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2009</td>
                            <td ><a href="#">Ultra
                                    Ovation Condo
                                    <br>
                                    <br></a></td>
                            <td >330 Burnhamthorpe Rd. W.</td>
                            <td >$280,000+</td>
                            <td >$0.44+ PSF</td>
                            <td >N</td>
                            <td >297</td>
                            <td >32</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="797"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>2009</td>
                            <td ><a href="#">Eve Condo
                                    <br>
                                    <br></a></td>
                            <td >3515 Kariya Drive</td>
                            <td >$280,000+</td>
                            <td >$0.51+ PSF</td>
                            <td >N<br>
                                <br>
                                <br></td>
                            <td >276</td>
                            <td >32</td>
                            <td ><a href="#">FOR SALE</a>
                            </td>
                            <td ><input type="checkbox" name="706"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>2009</td>
                            <td ><a href="#">One
                                    Park Tower Condo
                                    <br>
                                    <br></a></td>
                            <td >388 Prince of Wales Drive</td>
                            <td >$300,000+</td>
                            <td >$0.49+ PSF</td>
                            <td >N</td>
                            <td >407</td>
                            <td >38</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="726"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>2008</td>
                            <td ><a href="#">Solstice
                                    Condo &amp; Loft
                                    <br>
                                    <br></a></td>
                            <td >225 Webb Drive</td>
                            <td >$310,000+</td>
                            <td >$0.55+ PSF</td>
                            <td >N</td>
                            <td >375</td>
                            <td >38</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="749"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>2008</td>
                            <td ><a href="#">Tuscany
                                    Gates Condo
                                    <br>
                                    <br></a></td>
                            <td >220 Forum Drive</td>
                            <td >$270,000+</td>
                            <td >$0.37+ PSF</td>
                            <td >N</td>
                            <td >236</td>
                            <td >20</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="794"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>2008</td>
                            <td ><a href="#">Universal
                                    Condo
                                    <br>
                                    <br></a></td>
                            <td >335 Rathburn Rd. West</td>
                            <td >$290,000+</td>
                            <td >$0.46+ PSF</td>
                            <td >N</td>
                            <td >296</td>
                            <td >22</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="802"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>2008</td>
                            <td ><a href="#">Grand
                                    Ovation Condo
                                    <br>
                                    <br></a></td>
                            <td >310 Burnhamthorpe Rd. W</td>
                            <td >$300,000+</td>
                            <td >$0.52+ PSF</td>
                            <td >N</td>
                            <td >458</td>
                            <td >34</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="709"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>2007</td>
                            <td ><a href="#">Absolute
                                    Condo
                                    <br>
                                    <br></a></td>
                            <td >70, 80, 90 Absolute Ave</td>
                            <td >$290,000+</td>
                            <td >$0.55+ PSF</td>
                            <td >Y/N *</td>
                            <td >n/a</td>
                            <td >31 &amp; 35</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="659"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>2006</td>
                            <td ><a href="#">City
                                    Gate Condo
                                    <br>
                                    <br></a></td>
                            <td >3939 Duke of York Blvd &amp; 220 Burnhamthorpe</td>
                            <td >$300,000+</td>
                            <td >$0.57+ PSF</td>
                            <td >Y</td>
                            <td >335</td>
                            <td >24</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="681"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2005</td>
                            <td ><a
                                        href="#">Capital
                                    Tower Condo
                                    <br>
                                    <br></a></td>
                            <td >4080, 4090 Living Arts Dr</td>
                            <td >$300,000+</td>
                            <td >$0.56+ PSF</td>
                            <td >N</td>
                            <td >n/a</td>
                            <td >30 &amp; 31</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="669"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>2004</td>
                            <td ><a href="#">Tridel
                                    Ovation Condo
                                    <br>
                                    <br></a></td>
                            <td >3880 &amp; 3888 Duke of York Blvd</td>
                            <td >$300,000+</td>
                            <td >$0.52+ PSF</td>
                            <td >Y</td>
                            <td >471</td>
                            <td >32</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="788"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>2004</td>
                            <td ><a href="#">Eden
                                    Park Condo
                                    <br>
                                    <br></a></td>
                            <td >3504 Hurontario St.</td>
                            <td >$280,000+</td>
                            <td >$380+ 1bed</td>
                            <td >Y</td>
                            <td >289</td>
                            <td >33</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="700"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>2004</td>
                            <td ><a href="#">City
                                    One Condo
                                    <br>
                                    <br></a></td>
                            <td >1 &amp; 33 Elm Drive</td>
                            <td >$280,000+</td>
                            <td >$320-$370 1bed</td>
                            <td >N</td>
                            <td >359</td>
                            <td >31</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="686"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>2003</td>
                            <td ><a href="#">The
                                    Tiara Condo
                                    <br>
                                    <br></a></td>
                            <td >156 Enfield Place</td>
                            <td >$280,000+</td>
                            <td >$0.48+ PSF</td>
                            <td >N</td>
                            <td >285</td>
                            <td >25</td>
                            <td ><a href="#">FOR SALE</a>
                            </td>
                            <td ><input type="checkbox" name="784"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>2002</td>
                            <td ><a href="#">Compass
                                    Creek Condo
                                    <br>
                                    <br></a></td>
                            <td >200 Burnhamthorpe Road East</td>
                            <td >$280,000+</td>
                            <td >$240-$300 1bed</td>
                            <td >Y</td>
                            <td >n/a</td>
                            <td >17</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="697"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>2000</td>
                            <td ><a href="#">SkyMark
                                    Condo
                                    <br>
                                    <br></a></td>
                            <td >25 &amp; 35 Kingsbridge Garden Circle</td>
                            <td >$300,000+</td>
                            <td >$0.42-$0.45 PSF</td>
                            <td >Y</td>
                            <td >388 &amp; 382</td>
                            <td >34</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="744"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>1992</td>
                            <td ><a href="#">Center
                                    I &amp; II Condo
                                    <br></a></td>
                            <td >330, 350 Rathburn Road</td>
                            <td >$280,000+</td>
                            <td >$0.62+ PSF</td>
                            <td >Y</td>
                            <td >406</td>
                            <td >24 &amp; 20</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="2562"><a class="comparelink" href="#"
                                                                                        onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>1991</td>
                            <td ><a href="#">The
                                    Centre Four Condo
                                    <br>
                                    <br></a></td>
                            <td >400 Webb Drive</td>
                            <td >$280,000+</td>
                            <td >$0.48+ PSF</td>
                            <td >Y</td>
                            <td >225</td>
                            <td >23</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="752"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>1990</td>
                            <td ><a href="#">The
                                    Fairmont Condo
                                    <br>
                                    <br></a></td>
                            <td >25 Fairview Road West</td>
                            <td >$250,000+</td>
                            <td >$0.53+ PSF</td>
                            <td >Y</td>
                            <td >170</td>
                            <td >15</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="761"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>1990<br></td>
                            <td ><a href="#">Mansion
                                    Condo
                                    <br>
                                    <br></a></td>
                            <td >55 Kingsbridge Garden</td>
                            <td >$300,000+</td>
                            <td >$0.64+ PSF</td>
                            <td >Y</td>
                            <td >n/a</td>
                            <td >23</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="1846"><a class="comparelink" href="#"
                                                                                        onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>1990<br></td>
                            <td ><a href="#">
                                    Park Mansion Condo
                                    <br>
                                    <br></a></td>
                            <td >45 Kingsbridge Garden</td>
                            <td >$300,000+</td>
                            <td >$0.58+ PSF</td>
                            <td >Y</td>
                            <td >357</td>
                            <td >36</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="1836"><a class="comparelink" href="#"
                                                                                        onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>1990</td>
                            <td ><a href="#">The
                                    Odyssey Condo
                                    <br>
                                    <br></a></td>
                            <td >250 Webb Drive</td>
                            <td >$280,000+</td>
                            <td >$0.48-$0.52+ PSF</td>
                            <td >Y</td>
                            <td >265</td>
                            <td >15</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="773"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>1990<br></td>
                            <td ><a href="#">Phoenix
                                    Condo
                                    <br>
                                    <br></a></td>
                            <td >550 Webb Drive</td>
                            <td >$280,000+</td>
                            <td >$0.54+ PSF</td>
                            <td >Y</td>
                            <td >344</td>
                            <td >27</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="1841"><a class="comparelink" href="#"
                                                                                        onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>1990</td>
                            <td ><a href="#">The
                                    Constellation Place Condo
                                    <br>
                                    <br></a></td>
                            <td >700 Constellation Drive</td>
                            <td >$270,000+</td>
                            <td >$0.55+ PSF</td>
                            <td >Y</td>
                            <td >185</td>
                            <td >19</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="755"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>1990</td>
                            <td ><a href="#">City
                                    View Condo
                                    <br>
                                    <br></a></td>
                            <td >4450, 4460, 4470 Tucana Court</td>
                            <td >$260,000+</td>
                            <td >$0.58+ PSF</td>
                            <td >Y/N*</td>
                            <td >250</td>
                            <td >21</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="689"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>1989<br></td>
                            <td ><a href="#">
                                    Californian Condo
                                    <br>
                                    <br></a></td>
                            <td >50 Kingsbridge Garden</td>
                            <td >$280,000+</td>
                            <td >$0.60+ PSF</td>
                            <td >Y</td>
                            <td >n/a</td>
                            <td >17</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="1831"><a class="comparelink" href="#"
                                                                                        onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>1989</td>
                            <td ><a href="#">Club
                                    One Condo
                                    <br>
                                    <br></a></td>
                            <td >300 Webb Drive</td>
                            <td >$280,000+</td>
                            <td >$0.51-$0.54+ PSF</td>
                            <td >N</td>
                            <td >196</td>
                            <td >15</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="694"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>1989</td>
                            <td ><a href="#">The
                                    Monarchy One and Two Condo
                                    <br>
                                    <br></a></td>
                            <td >325 &amp; 335 Webb Drive</td>
                            <td >$280,000+</td>
                            <td >$0.54+ PSF</td>
                            <td >N</td>
                            <td >516</td>
                            <td >22</td>
                            <td ><a
                                        href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="766"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>1985</td>
                            <td ><a
                                        href="#">Shergate
                                    Condo
                                    <br>
                                    <br></a></td>
                            <td >4235 Sherwoodtown Blvd</td>
                            <td >$270,000+</td>
                            <td >$0.46-0.48+ PSF</td>
                            <td >N</td>
                            <td >170</td>
                            <td >18</td>
                            <td ><a
                                        href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="741"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>1983</td>
                            <td ><a
                                        href="#">Sharegate
                                    Tower Condo
                                    <br>
                                    <br></a></td>
                            <td >200 Robert Speck Parkway</td>
                            <td >$250,000+</td>
                            <td >$0.52+ PSF</td>
                            <td >Y</td>
                            <td >161</td>
                            <td >21</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="737"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>n/a</td>
                            <td ><a href="#">The
                                    Obelisk One Condo
                                    <br>
                                    <br></a></td>
                            <td >3590 Kaneff Crescent</td>
                            <td >$250,000+</td>
                            <td >$575-$590<br>
                                2bedroom<br></td>
                            <td >Y</td>
                            <td >250</td>
                            <td >20</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="769"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>n/a</td>
                            <td ><a href="#">Place
                                    IV Condo
                                    <br>
                                    <br></a></td>
                            <td >3650 Kaneff Crescent</td>
                            <td >$250,000+</td>
                            <td >$0.52+ PSF</td>
                            <td >Y</td>
                            <td >260</td>
                            <td >33</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="733"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>n/a</td>
                            <td ><a
                                        href="#">Chelsea
                                    Towers One Condo
                                    <br>
                                    <br></a></td>
                            <td>4185, 4205, Shipp Drive</td>
                            <td >$250,000+</td>
                            <td >$0.58+ PSF</td>
                            <td >Y</td>
                            <td >n/a</td>
                            <td >21</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="672"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>n/a</td>
                            <td ><a href="#">The
                                    Platinum Condo
                                    <br>
                                    <br></a></td>
                            <td >350 Webb Drive</td>
                            <td >$250,000+</td>
                            <td >$0.53+ PSF</td>
                            <td >N</td>
                            <td >n/a</td>
                            <td >22</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="777"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>n/a</td>
                            <td ><a href="#">The
                                    Espirt Condo
                                    <br>
                                    <br></a></td>
                            <td >50 Eglinton Avenue West</td>
                            <td >$280,000+</td>
                            <td >$0.55+ PSF</td>
                            <td >N</td>
                            <td >220</td>
                            <td >23</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="758"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        <tr >
                            <td>n/a</td>
                            <td ><a
                                        href="#">Anaheim
                                    Towers One &amp; Two Condo
                                    <br>
                                    <br></a></td>
                            <td >25, 35 Trailwood Drive</td>
                            <td >$250,000+</td>
                            <td >$0.61+ PSF</td>
                            <td >Y</td>
                            <td >n/a</td>
                            <td >24</td>
                            <td ><a href="#">FOR
                                    SALE</a></td>
                            <td ><input type="checkbox" name="665"><a class="comparelink" href="#"
                                                                                       onclick="return false">Compare</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-section pd-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-list">
                        <div class="single-brand">
                            <a href="#"><img src="img/brand/1.png" alt=""></a>
                        </div>
                        <div class="single-brand">
                            <a href="#"><img src="img/brand/2.png" alt=""></a>
                        </div>
                        <div class="single-brand">
                            <a href="#"><img src="img/brand/3.png" alt=""></a>
                        </div>
                        <div class="single-brand">
                            <a href="#"><img src="img/brand/4.png" alt=""></a>
                        </div>
                        <div class="single-brand">
                            <a href="#"><img src="img/brand/5.png" alt=""></a>
                        </div>
                        <div class="single-brand">
                            <a href="#"><img src="img/brand/1.png" alt=""></a>
                        </div>
                        <div class="single-brand">
                            <a href="#"><img src="img/brand/2.png" alt=""></a>
                        </div>
                        <div class="single-brand">
                            <a href="#"><img src="img/brand/3.png" alt=""></a>
                        </div>
                        <div class="single-brand">
                            <a href="#"><img src="img/brand/4.png" alt=""></a>
                        </div>
                        <div class="single-brand">
                            <a href="#"><img src="img/brand/5.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop