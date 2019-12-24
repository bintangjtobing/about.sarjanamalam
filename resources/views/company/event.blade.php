@extends('company.about')
@section('title','Event sarjanamalam.')
@section('aktiftentang','active')
@section('metadesc','Event sarjanamalam. adalah suatu halaman yang berisi event event menarik dan bermanfaat yang akan
membekali calon sarjana. Seminar')
@section('metakey','event sarjanamalam, event, komunitas, forum, seminar sarjanamalam, seminar')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 m-b-60 text-center">
                <h4 class="about-title">Event's sarjanamalam.</h4>
                <h2 class="h2-title">Meriahkan eventmu diforum <b alt="sarjanamalam.">#sarjanamalam.</b><br>jangkau
                    banyak peserta dan kembangin kemampuan peserta dengan ikutin salah satu event berikut</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="{!!asset('storage/blog/12.jpg')!!}" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Sabtu, 21 Oktober 2020</h6>
                        <h5 class="card-title">Workshop design - UX UI for website</h5>
                        <p class="card-text">Rp. 120.000</p>
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary">Daftar!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="heading m-b-40">
            <h2><strong>Event Schedule</strong></h2>
            <span class="lead">Jadwal jadwal event yang tersedia selama 3 bulan kedepan.</span>
        </div>
    </div>
</section>
<section id="section2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="heading m-b-40">
                    <h2>MWC EVENT</h2>
                    <span class="lead">Create amam ipsum dolor sit amet, Beautiful nature, and rare feathers!.</span>
                </div>
                <p> The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida
                    tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat
                    quis. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum
                    erat, facilisis ut venenatis eu, sodales vel dolor.
                </p>
                <p> Ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie
                    ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci.
                    Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. Morbi sagittis, sem quis
                    lacinia faucibus.
                </p>
                <div class="seperator">EVENT INFO NUMBERS</div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="counter small"> <span data-speed="3000" data-refresh-interval="50"
                                    data-to="12416" data-from="600" data-seperator="true"></span> </div>
                            <p>LINES OF CODE</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="counter small"> <span data-speed="4500" data-refresh-interval="23" data-to="365"
                                    data-from="100" data-seperator="true"></span> </div>
                            <p>CUPS OF COFFEE</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="counter small"> <span data-speed="3000" data-refresh-interval="12" data-to="114"
                                    data-from="50" data-seperator="true"></span> </div>
                            <p>FINISHED PROJECTS</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="counter small"> <span data-speed="4550" data-refresh-interval="50"
                                    data-to="14825" data-from="48" data-seperator="true"></span> </div>
                            <p>SATISFIED CLIENTS</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 text-light p-50 rounded" style="background-color:#111;">
                <div class="heading p-20 m-b-0">
                    <h2 class="text-colored">EVENT REGISTER</h2>
                    <span class="text-light">Create amam ipsum dolor sit amet, Beautiful nature, and rare feathers!.
                    </span>
                </div>
                <form class="widget-contact-form text-center" action="include/event-register-form.php" role="form"
                    method="post">
                    <div class="form-group m-b-5">
                        <input type="text" aria-required="true" name="widget-contact-form-name"
                            class="form-control form-control-sm required name" placeholder="Your Name*">
                    </div>
                    <div class="form-group m-b-5">
                        <input type="text" aria-required="true" name="widget-contact-form-phone"
                            class="form-control form-control-sm required phone" placeholder="Your Phone Number*">
                    </div>
                    <div class="form-group m-b-5">
                        <input type="email" aria-required="true" name="widget-contact-form-email"
                            class="form-control form-control-sm required email" placeholder="Your Email">
                    </div>
                    <div class="form-group m-b-5">
                        <select aria-required="true" name="widget-contact-form-ticket-type"
                            class="form-control form-control-sm required ticket-type">
                            <option selected>Ticket Type</option>
                            <option>Vip</option>
                            <option>Elite</option>
                            <option>Standard</option>
                        </select>
                    </div>
                    <div class="form-group m-b-5">
                        <select aria-required="true" name="widget-contact-form-day-pass"
                            class="form-control form-control-sm required day-pass">
                            <option selected>Day Pass</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                        </select>
                    </div>
                    <button class="btn btn-block" type="submit" id="form-submit"><i
                            class="fa fa-paper-plane"></i>&nbsp;APPLY NOW</button>
                </form>
                <p class="p-20 m-b-0"><b>Note:</b> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                    consectetur, adipisci velit.</p>
            </div>
        </div>
    </div>
</section>

@endsection
