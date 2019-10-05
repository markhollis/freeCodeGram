@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.flnk1-1.fna.fbcdn.net/vp/18c6eac4634e8a15a5d4e728dcaefa8d/5E2B1838/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.flnk1-1.fna.fbcdn.net" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-4"><strong>153</strong> posts</div>
                <div class="pr-4"><strong>23k</strong> followers</div>
                <div class="pr-4"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">freeCodeCamp.org</div>
            <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
            <div class="font-weight-bold"><a href="#">freecodecamp.org</a></div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://instagram.flnk1-1.fna.fbcdn.net/vp/0d0bae0c894be16e8cc11df5c1ba6945/5E31B41E/t51.2885-15/sh0.08/e35/c0.75.878.878a/s640x640/69267040_170722357429871_7237885951601474226_n.jpg?_nc_ht=instagram.flnk1-1.fna.fbcdn.net&_nc_cat=111" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.flnk1-1.fna.fbcdn.net/vp/0d0bae0c894be16e8cc11df5c1ba6945/5E31B41E/t51.2885-15/sh0.08/e35/c0.75.878.878a/s640x640/69267040_170722357429871_7237885951601474226_n.jpg?_nc_ht=instagram.flnk1-1.fna.fbcdn.net&_nc_cat=111" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.flnk1-1.fna.fbcdn.net/vp/0d0bae0c894be16e8cc11df5c1ba6945/5E31B41E/t51.2885-15/sh0.08/e35/c0.75.878.878a/s640x640/69267040_170722357429871_7237885951601474226_n.jpg?_nc_ht=instagram.flnk1-1.fna.fbcdn.net&_nc_cat=111" class="w-100">
        </div>
    </div>
</div>
@endsection
