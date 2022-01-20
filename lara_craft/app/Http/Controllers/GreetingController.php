<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class GreetingController extends BaseController
{
    public function make()
    {
        return '<title>
Greeting Page
</title>
<style>
div {
background-color: black;
color:red;
height: 600px;
padding: 100px;
display: flex;
flex-direction: column;
align-items: center;
}
footer {
padding: 100px;
}

a {
text-decoration:line-through;
color:blue;
font-size: 30px;
}
</style><div>
       <header><h1>LaraNews</h1>
       </header>
       <main>
       <a href="/category ">News</a>
</main>
       <footer>
       <span>All right reserved 2022</span>
       </footer>
       </div>';
    }
}
