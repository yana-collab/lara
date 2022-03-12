<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbController extends Controller
{
    public function index()
    {
       /* DB::statement("
        CREATE TABLE test (
            id int PRIMARY KEY AUTO_INCREMENT,
            content varchar (50)
        )
        ");

        $sql = "INSERT INTO test (content) VALUES (:connect )";
        $result = DB::insert($sql, [':connect' => 'test']);


        $sql = "SELECT * FROM test WHERE id = :id";
        $result = DB::select($sql, [':id' => 2]);

        $sql = "SELECT * FROM test WHERE id = :id";
        $result = DB::selectOne($sql, [':id' => 2]);

        DB::transaction( function () {
            DB::insert("ffhfhhf");
            DB::insert("ffhfhhf");
            DB::insert("ffhfhhf");
            DB::insert("ffhfhhf");
        }
    );
       */
       DB::table('test')
           ->where('id', '=', '1')
           ->get();

        echo 'complete';
    }
}
