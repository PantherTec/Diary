@extends('layouts.app')

@section('content')
<div class="work-section" id="work">
                    <div class="container">
                    
                        <h3 class="tittle">Recent Works</h3>
                        <ul class="simplefilter">
                            <li class="active" data-filter="all">All</li>
                            <li data-filter="1">Branding</li>
                            <li data-filter="2">Web</li>
                            <li data-filter="3">Logo Design</li>
                            <li data-filter="4">Photography</li>
                            
                        </ul>
                        <div class="filtr-container">
                            <div class=" col-md-4 filtr-item" data-category="1, 5" data-sort="Busy streets">
                                <a href="images/pc.jpg" class="b-link-stripe b-animate-go  swipebox">
                                    <div class="ed-gal-effect slow-zoom horizontal">
                                        <div class="img-box"><img src="{{ asset('images/diary-968592_960_720.jpg') }}"  class="img-responsive" alt=" " /></div>
                                            <div class="ed-text-box">
                                                <div class="ed-gal-text">
                                                    <h4>Profession</h4>
                                                    <p>Sit accusamus, vel blanditiis iure minima ipsa molestias minus laborum velit, nulla.</p>
                                                </div>
                                            </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 filtr-item" data-category="2, 5" data-sort="Luminous night">
                                <a href="images/pc1.jpg" class="b-link-stripe b-animate-go  swipebox">
                                    <div class="ed-gal-effect slow-zoom horizontal">
                                        <div class="img-box"><img src="images/pc1.jpg" class="img-responsive" alt=" " /></div>
                                            <div class="ed-text-box">
                                                <div class="ed-gal-text">
                                                    <h4>Profession</h4>
                                                    <p>Sit accusamus, vel blanditiis iure minima ipsa molestias minus laborum velit, nulla.</p>
                                                </div>
                                            </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 filtr-item" data-category="1, 4" data-sort="City wonders">
                                <a href="images/pc2.jpg" class="b-link-stripe b-animate-go  swipebox">
                                    <div class="ed-gal-effect slow-zoom horizontal">
                                        <div class="img-box"><img src="images/pc2.jpg" class="img-responsive" alt=" " /></div>
                                            <div class="ed-text-box">
                                                <div class="ed-gal-text">
                                                    <h4>Profession</h4>
                                                    <p>Sit accusamus, vel blanditiis iure minima ipsa molestias minus laborum velit, nulla.</p>
                                                </div>
                                            </div>
                                    </div>
                                </a>
                            </div>
                            <div class=" col-md-4 filtr-item" data-category="3" data-sort="In production">
                                <a href="images/pc3.jpg" class="b-link-stripe b-animate-go  swipebox">
                                    <div class="ed-gal-effect slow-zoom horizontal">
                                        <div class="img-box"><img src="images/pc3.jpg" class="img-responsive" alt=" " /></div>
                                            <div class="ed-text-box">
                                                <div class="ed-gal-text">
                                                    <h4>Profession</h4>
                                                    <p>Sit accusamus, vel blanditiis iure minima ipsa molestias minus laborum velit, nulla.</p>
                                                </div>
                                            </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 filtr-item" data-category="3, 4" data-sort="Industrial site">
                                <a href="images/pc4.jpg" class="b-link-stripe b-animate-go  swipebox">
                                    <div class="ed-gal-effect slow-zoom horizontal">
                                        <div class="img-box"><img src="images/pc4.jpg" class="img-responsive" alt=" " /></div>
                                            <div class="ed-text-box">
                                                <div class="ed-gal-text">
                                                    <h4>Profession</h4>
                                                    <p>Sit accusamus, vel blanditiis iure minima ipsa molestias minus laborum velit, nulla.</p>
                                                </div>
                                            </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 filtr-item" data-category="2, 4" data-sort="Peaceful lake">
                                <a href="images/pc5.jpg" class="b-link-stripe b-animate-go  swipebox">
                                    <div class="ed-gal-effect slow-zoom horizontal">
                                        <div class="img-box"><img src="images/pc5.jpg" class="img-responsive" alt=" " /></div>
                                            <div class="ed-text-box">
                                                <div class="ed-gal-text">
                                                    <h4>Profession</h4>
                                                    <p>Sit accusamus, vel blanditiis iure minima ipsa molestias minus laborum velit, nulla.</p>
                                                </div>
                                            </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4  filtr-item" data-category="1, 5" data-sort="City lights">
                                <a href="images/pc6.jpg" class="b-link-stripe b-animate-go  swipebox">
                                    <div class="ed-gal-effect slow-zoom horizontal">
                                        <div class="img-box"><img src="images/pc6.jpg" class="img-responsive" alt=" " /></div>
                                            <div class="ed-text-box">
                                                <div class="ed-gal-text">
                                                    <h4>Profession</h4>
                                                    <p>Sit accusamus, vel blanditiis iure minima ipsa molestias minus laborum velit, nulla.</p>
                                                </div>
                                            </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 filtr-item" data-category="2, 4" data-sort="Dreamhouse">
                                <a href="images/pc7.jpg" class="b-link-stripe b-animate-go  swipebox">
                                    <div class="ed-gal-effect slow-zoom horizontal">
                                        <div class="img-box"><img src="images/pc7.jpg" class="img-responsive" alt=" " /></div>
                                            <div class="ed-text-box">
                                                <div class="ed-gal-text">
                                                    <h4>Profession</h4>
                                                    <p>Sit accusamus, vel blanditiis iure minima ipsa molestias minus laborum velit, nulla.</p>
                                                </div>
                                            </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 filtr-item" data-category="3" data-sort="Dreamhouse">
                                <a href="images/pc8.jpg" class="b-link-stripe b-animate-go  swipebox">
                                    <div class="ed-gal-effect slow-zoom horizontal">
                                        <div class="img-box"><img src="images/pc8.jpg" class="img-responsive" alt=" " /></div>
                                            <div class="ed-text-box">
                                                <div class="ed-gal-text">
                                                    <h4>Profession</h4>
                                                    <p>Sit accusamus, vel blanditiis iure minima ipsa molestias minus laborum velit, nulla.</p>
                                                </div>
                                            </div>
                                    </div>
                                </a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>

@endsection
