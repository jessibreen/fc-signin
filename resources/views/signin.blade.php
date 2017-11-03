@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Sign In</h1>
            <form method="POST" action="/events/{{$eventId}}/signin">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="firstname">Name</label>
                    <input type="text" class="form-control" id="firstname" name="name" placeholder="Name" required>
                </div>
                {{--<div class="form-group">--}}
                    {{--<label for="lastname">Last Name</label>--}}
                    {{--<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>--}}
                {{--</div>--}}
                <label for="role">Select a role:</label>
                <div class="radio">
                    <label><input type="radio" id="role" name="role" value="UK Student" required>UK Student</label>
                </div>
                <div class="radio">
                    <label><input type="radio" id="role" name="role" value="UK Staff or Faculty">UK Staff or Faculty</label>
                </div>
                <div class="radio">
                    <label><input type="radio" id="role" name="role" value="Cooperative Extention Agent">Cooperative Extention Agent</label>
                </div>
                <div class="radio">
                    <label><input type="radio" id="role" name="role" value="Community Member">Community Member</label>
                </div>

                <div class="form-group">
                    <label for="role">If you selected Cooperative Extention Agent, please select a county:</label>
                    <select class="form-control" id="county" name="county">
                        <option></option>
                        <option>Adair</option>
                        <option>Allen</option>
                        <option>Anderson</option>
                        <option>Ballard</option>
                        <option>Barren</option>
                        <option>Bath</option>
                        <option>Bell</option>
                        <option>Boone</option>
                        <option>Bourbon</option>
                        <option>Boyd</option>
                        <option>Boyle</option>
                        <option>Bracken</option>
                        <option>Breathitt</option>
                        <option>Breckenridge</option>
                        <option>Bullitt</option>
                        <option>Butler</option>
                        <option>Caldwell</option>
                        <option>Calloway</option>
                        <option>Campbell</option>
                        <option>Carlisle</option>
                        <option>Carroll</option>
                        <option>Carter</option>
                        <option>Casey</option>
                        <option>Christian</option>
                        <option>Clark</option>
                        <option>Clay</option>
                        <option>Clinton</option>
                        <option>Crittenden</option>
                        <option>Cumberland</option>
                        <option>Daviess</option>
                        <option>Edmonson</option>
                        <option>Elliott</option>
                        <option>Estill</option>
                        <option>Fayette</option>
                        <option>Fleming</option>
                        <option>Floyd</option>
                        <option>Franklin</option>
                        <option>Fulton</option>
                        <option>Gallatin</option>
                        <option>Garrard</option>
                        <option>Grant</option>
                        <option>Graves</option>
                        <option>Grayson</option>
                        <option>Green</option>
                        <option>Greenup</option>
                        <option>Hancock</option>
                        <option>Hardin</option>
                        <option>Harlan</option>
                        <option>Harrison</option>
                        <option>Hart</option>
                        <option>Henderson</option>
                        <option>Henry</option>
                        <option>Hickman</option>
                        <option>Hopkins</option>
                        <option>Jackson</option>
                        <option>Jefferson</option>
                        <option>Jessamine</option>
                        <option>Johnson</option>
                        <option>Kenton</option>
                        <option>Knott</option>
                        <option>Knox</option>
                        <option>Larue</option>
                        <option>Laurel</option>
                        <option>Lawrence</option>
                        <option>Lee</option>
                        <option>Leslie</option>
                        <option>Letcher</option>
                        <option>Lewis</option>
                        <option>Lincoln</option>
                        <option>Livingston</option>
                        <option>Logan</option>
                        <option>Lyon</option>
                        <option>Madison</option>
                        <option>Magoffin</option>
                        <option>Marion</option>
                        <option>Marshall</option>
                        <option>Martin</option>
                        <option>Mason</option>
                        <option>McCracken</option>
                        <option>McCreary</option>
                        <option>McLean</option>
                        <option>Meade</option>
                        <option>Menifee</option>
                        <option>Mercer</option>
                        <option>Metcalfe</option>
                        <option>Monroe</option>
                        <option>Montgomery</option>
                        <option>Morgan</option>
                        <option>Muhlenberg</option>
                        <option>Nelson</option>
                        <option>Nicholas</option>
                        <option>Ohio</option>
                        <option>Oldham</option>
                        <option>Owen</option>
                        <option>Owsley</option>
                        <option>Pendleton</option>
                        <option>Perry</option>
                        <option>Pike</option>
                        <option>Powell</option>
                        <option>Pulaski</option>
                        <option>Robertson</option>
                        <option>Rockcastle</option>
                        <option>Rowan</option>
                        <option>Russell</option>
                        <option>Scott</option>
                        <option>Shelby</option>
                        <option>Simpson</option>
                        <option>Spencer</option>
                        <option>Taylor</option>
                        <option>Todd</option>
                        <option>Trigg</option>
                        <option>Trimble</option>
                        <option>Union</option>
                        <option>Warren</option>
                        <option>Washington</option>
                        <option>Wayne</option>
                        <option>Webster</option>
                        <option>Whitley</option>
                        <option>Wolfe</option>
                        <option>Woodford</option>
                    </select>
                </div>
                <label for="role">Would you like to receive our email newsletter?</label>
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Address">
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@endsection