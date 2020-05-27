@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Help page</div>
                <div class="card-body">
                    <div class="row">
                        <!-- card start -->
                        <div class="card text-white bg-primary mb-3" style="max-width: 540px;">
                            <div class="card-header">Step 1</div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="{{asset('img/help/1.png')}}"><img src="{{asset('img/help/1.png')}}" class="card-img" width="200%"></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Login</h5>
                                        <p class="card-text">Login to your account by email and password given by admin.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="card text-white bg-primary mb-3" style="max-width: 540px;">
                            <div class="card-header">Step 2</div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="{{asset('img/help/2.png')}}"><img src="{{asset('img/help/2.png')}}" class="card-img" width="200%"></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Manage floors</h5>
                                        <p class="card-text">Click on manage floors to add your desired floors &rooms.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="card text-white bg-primary mb-3" style="max-width: 540px;">
                            <div class="card-header">Step 3</div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="{{asset('img/help/3.png')}}"><img src="{{asset('img/help/3.png')}}" class="card-img" width="200%"></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Manage floors</h5>
                                        <p class="card-text">Add the floors & rooms you want to rent.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="card text-white bg-primary mb-3" style="max-width: 540px;">
                            <div class="card-header">Step 4</div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="{{asset('img/help/4.png')}}"><img src="{{asset('img/help/4.png')}}" class="card-img" width="200%"></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Manage Services</h5>
                                        <p class="card-text">Add the services you want to provide.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="card text-white bg-primary mb-3" style="max-width: 540px;">
                            <div class="card-header">Step 5</div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="{{asset('img/help/5.png')}}"><img src="{{asset('img/help/5.png')}}" class="card-img" width="200%"></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Manage Services</h5>
                                        <p class="card-text">Add the services you want to provide.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="card text-white bg-primary mb-3" style="max-width: 540px;">
                            <div class="card-header">Step 6</div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="{{asset('img/help/6.png')}}"><img src="{{asset('img/help/6.png')}}" class="card-img" width="200%"></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Manage Services</h5>
                                        <p class="card-text">You can always add, edit and delete services.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="card text-white bg-primary mb-3" style="max-width: 540px;">
                            <div class="card-header">Step 7</div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="{{asset('img/help/7.png')}}"><img src="{{asset('img/help/7.png')}}" class="card-img" width="200%"></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Manage Rooms</h5>
                                        <p class="card-text">Select the floor to select a room.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="card text-white bg-primary mb-3" style="max-width: 540px;">
                            <div class="card-header">Step 8</div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="{{asset('img/help/8.png')}}"><img src="{{asset('img/help/8.png')}}" class="card-img" width="200%"></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Manage Rooms</h5>
                                        <p class="card-text">Select the room to rent.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="card text-white bg-primary mb-3" style="max-width: 540px;">
                            <div class="card-header">Step 9</div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="{{asset('img/help/9.png')}}"><img src="{{asset('img/help/9.png')}}" class="card-img" width="200%"></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Manage Rooms</h5>
                                        <p class="card-text">Add the details of person whom you want to rent.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="card text-white bg-primary mb-3" style="max-width: 540px;">
                            <div class="card-header">Step 10</div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="{{asset('img/help/10.png')}}"><img src="{{asset('img/help/10.png')}}" class="card-img" width="200%"></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Person</h5>
                                        <p class="card-text">You can view the profile of person & view payment details.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="card text-white bg-primary mb-3" style="max-width: 540px;">
                            <div class="card-header">Step 11</div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="{{asset('img/help/11.png')}}"><img src="{{asset('img/help/11.png')}}" class="card-img" width="200%"></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Manage rent</h5>
                                        <p class="card-text">You can view the due or paid rents.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="card text-white bg-primary mb-3" style="max-width: 540px;">
                            <div class="card-header">Step 12</div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="{{asset('img/help/12.png')}}"><img src="{{asset('img/help/12.png')}}" class="card-img" width="200%"></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Manage rent</h5>
                                        <p class="card-text">You can view the due rents & receive the payments of each individuals.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="card text-white bg-primary mb-3" style="max-width: 540px;">
                            <div class="card-header">Step 13</div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="{{asset('img/help/13.png')}}"><img src="{{asset('img/help/13.png')}}" class="card-img" width="200%"></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Manage rent</h5>
                                        <p class="card-text">If the person don't want to give full payment then you can edit the amount.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="card text-white bg-primary mb-3" style="max-width: 540px;">
                            <div class="card-header">Step 13.1</div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="{{asset('img/help/13(1).png')}}"><img src="{{asset('img/help/13(1).png')}}" class="card-img" width="200%"></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Manage rent</h5>
                                        <p class="card-text">If the person don't want to give full payment then you can edit the amount.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="card text-white bg-primary mb-3" style="max-width: 540px;">
                            <div class="card-header">Step 14</div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="{{asset('img/help/14.png')}}"><img src="{{asset('img/help/14.png')}}" class="card-img" width="200%"></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Manage rent</h5>
                                        <p class="card-text">If the person don't give full payment receive payment button stays visible.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="card text-white bg-primary mb-3" style="max-width: 540px;">
                            <div class="card-header">Step 15</div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="{{asset('img/help/15.png')}}"><img src="{{asset('img/help/15.png')}}" class="card-img" width="200%"></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Manage rent</h5>
                                        <p class="card-text">Once the payment is complete the button 'Receive payment' won't be visible.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="card text-white bg-primary mb-3" style="max-width: 540px;">
                            <div class="card-header">Step 16</div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="{{asset('img/help/16.png')}}"><img src="{{asset('img/help/16.png')}}" class="card-img" width="200%"></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Manage rent</h5>
                                        <p class="card-text">You can always view all the payments in one place in 'View paid rents'.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="card text-white bg-primary mb-3" style="max-width: 540px;">
                            <div class="card-header">Step 17</div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="{{asset('img/help/17.png')}}"><img src="{{asset('img/help/17.png')}}" class="card-img" width="200%"></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Manage person</h5>
                                        <p class="card-text">You can always view, edit and delete person by viewing persons profile.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="card text-white bg-primary mb-3" style="max-width: 540px;">
                            <div class="card-header">Step 17</div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="{{asset('img/help/17(1).png')}}"><img src="{{asset('img/help/17(1).png')}}" class="card-img" width="200%"></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Manage person</h5>
                                        <p class="card-text">You can always view, edit and delete person by viewing persons profile.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="card text-white bg-primary mb-3" style="max-width: 540px;">
                            <div class="card-header">Step 17</div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="{{asset('img/help/17(2).png')}}"><img src="{{asset('img/help/17(2).png')}}" class="card-img" width="200%"></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Manage person</h5>
                                        <p class="card-text">You can always view, edit and delete person by viewing persons profile.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection