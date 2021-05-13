@extends('app')

@section('content')
    <!-- Main -->
    <main id="main">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imagenes/h8.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imagenes/h2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imagenes/h3.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <div class="overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 offset-md-3 text-center">
                            <h1>Harry Styles</h1>
                            <p class="d-none d-md-block">
                                Harry Edward Styles is an English singer, songwriter and actor, known as a member of the boy band One Direction.
                            </p>
                            <a href="#" class="btn btn-outline-info">Wanna be a fan?</a>
                            <a href="https://harrystyles.fandom.com/wiki/Harry_Styles" target="_blank" class="btn btn-harry">More about him</a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </main>
    <!-- End main -->
    <!-- about -->
    <section class="mt-4" id="about">
        <div class="container">
            <div class="row">
                <div class="col text-center text-uppercase">
                    <small>Know</small> <h2>Harry Styles</h2>
                </div>
            </div>
            <div class="row">
                <div class = "col-4">
                    <div class="card">
                        <img src="imagenes/h10.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title text-center">The X Factor</h5>
                        <p class="card-text">
                                In 2010, Styles auditioned as a solo artist for the British television series The X Factor. After being eliminated as a solo performer, Styles was brought back into the competition, along with four other contestants, to form the group that would later become known as One Direction.
                            </p>
                        <a href="https://www.youtube.com/watch?v=u_z_JSHsfNY" class="btn btn-harry" target="_blank">See performance</a>
                        </div>
                    </div>
                </div>
                <div class = "col-4">
                    <div class="card">
                        <img src="imagenes/1d.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">One Direction</h5>
                            <p class="card-text">
                                Following The X Factor, One Direction were signed to Simon Cowell's Syco Entertainment in 2010. They released their first studio album, Up All Night, in 2011,  followed by their second, Take Me Home, in 2012. One Direction: This Is Us, a documentary about the band, was released in August 2013.
                            </p>
                            <a href="#" class="btn btn-harry" data-bs-toggle="modal" data-bs-target="#aboutModal">Albums</a>
                        </div>
                    </div>
                </div>
                <div class = "col-4">
                    <div class="card">
                        <img src="imagenes/h7.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Solo carreer</h5>
                            <p class="card-text">
                                On June 23, 2016, Billboard reported that Styles signed a recording contract with Columbia Records as a solo artist, the same label behind One Direction. His debut solo single Sign of the Times was released on April 7, 2017.
                            </p>
                            <a href="#" class="btn btn-harry" data-bs-toggle="modal" data-bs-target="#onediModal">Albums</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <br><br><br><br>
    <!-- End about -->
    <!-- acting -->
    <section id="acting">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 pl-0 pr-0">
                    <img src="imagenes/hs.jpg" alt="">
                </div>
                <div class="col-lg-6" pt-4 pb-4><br><br>
                    <h2>Acting career</h2> <br>
                    <p>
                        Styles made his acting debut in Christopher Nolan's action-thriller Dunkirk which is based on the British military evacuation in World War II. He starred alongside Tom Hardy, Mark Rylance, Cillian Murphy and Kenneth Branagh. During October 2017, Harry had been in early talks to star in the film The Goldfinch, as stated by Variety writer Justin Kroll. In the month of July 2019, Styles was amongst the frontrunners to portray Elvis Presley in Baz Luhrmann's biopic before the role eventually went to actor Austin Butler.
                    </p>
                    <a href="https://www.netflix.com/mx/title/80170278" class="btn btn-outline-dark" target="_blank">See movie</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End acting -->
    <!-- Merch -->
    <section id="merch">
        <div class="container">
            <div class="row">
                <div class="col text-center text-uppercase">
                    <small>Harry Styles</small> <h2>MERCH</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area">
                                                <img src="imagenes/ms.jpg" alt="">
                                                <div class="img-text">
                                                    <h2>treat people with kidness</h2>
                                                    <p>black hoodie, metallic silver embroidery</p>
                                                    <a href="https://shopus.hstyles.co.uk/collections/all/products/treat-people-with-kindness-hoodie-black-glitter" target="_blank" type="button" class="btn btn-outline-info">BUY THIS MERCH</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area">
                                                <img src="imagenes/ms1.jpg" alt="">
                                                <div class="img-text">
                                                    <h2>fine line</h2>
                                                    <p>fine line heart hoodie, various sizes and colors</p>
                                                    <a href="https://articulo.mercadolibre.com.mx/MLM-866731056-sudadera-harry-styles-fine-line-corazon-flechado-_JM?matt_tool=66734393&matt_word=&matt_source=google&matt_campaign_id=11767284850&matt_ad_group_id=117160826074&matt_match_type=&matt_network=g&matt_device=c&matt_creative=483823352618&matt_keyword=&matt_ad_position=&matt_ad_type=pla&matt_merchant_id=248649072&matt_product_id=MLM866731056-73896889667&matt_product_partition_id=365000922669&matt_target_id=pla-365000922669&gclid=CjwKCAjw7J6EBhBDEiwA5UUM2okPFNE_J03MPi5gOsIm580bbw0qqC6FOu5Df-J4_rwg_UlG__YJYxoCysgQAvD_BwE" target="_blank" type="button" class="btn btn-outline-info">BUY THIS MERCH</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area">
                                                <img src="imagenes/ms2.jpg" alt="">
                                                <div class="img-text">
                                                    <h2>fine line t-shirt</h2>
                                                    <p>harry styles fine line t-shirt, different colors and sizes</p>
                                                    <a href="https://styles-merch.com/product/harry-styles-fine-line-t-shirt/" target="_blank" type="button" class="btn btn-outline-info">BUY THIS MERCH</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area">
                                                <img src="imagenes/ms3.jpg" alt="">
                                                <div class="img-text">
                                                    <h2>Harry Styles lamp</h2>
                                                    <p>3D night light harry styles lamp</p>
                                                    <a href="https://www.amazon.com.mx/nocturna-L%C3%A1mpara-Decoraci%C3%B3n-Dormitorio-Escritorio/dp/B08X462T7R/ref=asc_df_B08X462T7R/?tag=gledskshopmx-20&linkCode=df0&hvadid=486411673193&hvpos=&hvnetw=g&hvrand=16244890681212775171&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1031248&hvtargid=pla-1212648519485&psc=1" target="_blank" type="button" class="btn btn-outline-info">BUY THIS MERCH</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area">
                                                <img src="imagenes/ms4.jpg" alt="">
                                                <div class="img-text">
                                                    <h2>crewneck sweatshirt</h2>
                                                    <p>harry styles pink, unisex sweatshirt</p>
                                                    <a href="https://styles-merch.com/product/harry-styles-sweatshirt-5/" target="_blank" type="button" class="btn btn-outline-info">BUY THIS MERCH</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area">
                                                <img src="imagenes/ms5.jpg" alt="">
                                                <div class="img-text">
                                                    <h2>airpods case</h2>
                                                    <p>harry styles airpods case 2nd g.</p>
                                                    <a href="https://styles-merch.com/product/harry-styles-sweatshirt-5/" target="_blank" type="button" class="btn btn-outline-info">BUY THIS MERCH</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End merch -->
@endsection
