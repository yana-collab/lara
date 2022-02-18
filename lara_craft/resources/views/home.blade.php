<title>Greeting Page</title>
{{--<div>--}}
{{--    <a href="{{route('lang', ['lang'=>'ru'])}} ">Ru</a>--}}
{{--</div>--}}
{{--<div>--}}
{{--    <a href="{{route('lang', ['lang'=>'en']}}" >En</a>--}}
{{--</div>--}}
       <header><h1>LaraNews</h1>
       </header>
       <main>
           <div>
       <a href="{{route('news::category')}} ">News</a>
           </div>
           <div>
           <a href="{{route('admin::news::create')}}" >Add News</a>
           </div>
</main>
       <footer>
       <span>All right reserved 2022</span>
       </footer>
       </div>

