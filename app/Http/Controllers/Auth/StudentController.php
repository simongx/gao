<?php
namespace App\Http\Controllers;
use App\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller{
    public function test1()
    {
      // $students= DB::select('select * from student');
      //  var_dump($students);
     /*  $bool= DB::insert('insert into student(name,age)values(?,?) ',

           ['sd',18] );
        var_dump($bool);*/
      /* $num = DB::update('update student set age = ? where name = ?',
            [20,'sean']);
        var_dump($num);*/
           }
    public function query1()
    {
//        $bool= DB::table('student')->insert(
//            ['name'=>'gx','age'=>19]
//        );
//        var_dump($bool);
//       $id = DB::table('student')->insertGetId(
//            ['name'=>'sean','age'=>18]
//        );
//        var_dump($id);
      $bool =  DB::table('student')->insert(
            [
                ['name'=>'naem1','age'=>14],
                ['name'=>'naem2','age'=>16],
            ]
        );
        var_dump($bool);
    }
    public function query2()
    {
        $num = DB::table('student')
            ->where('id',1003)
            ->update(['age'=>144]);
        var_dump($num);
    }
    public function query3()
    {
       $num = DB::table('student')
            ->where('id',1002)
            ->delete();
        var_dump($num);
    }
    public function query4()
    {
//      $bool =  DB::table('student')
//            ->insert([
//                ['id'=>1007,'name'=>'name3','age'=>90],
//                ['id'=>1008,'name'=>'name4','age'=>91],
//                ['id'=>1009,'name'=>'name5','age'=>92],
//            ]);
//        var_dump($bool);
//        $student = DB::table('student')->get();
//       $student = DB::table('student')->first();
//        dd($student);
//        $names = DB::table('student')
//            ->lists('name','age');
//        dd($names);
//        $names = DB::table('student')
//            ->select('name','age')
//            ->get();
//        dd($names);
    }
    public function query5()
    {
//        $num = DB::table('student')->count();
          $num = DB::table('student')->max('age');
        var_dump($num);
    }
    public function orm1()
    {
       $student = Student::all();
        dd($student);
    }
    public function section1()
    {
        return view('student.section1');


    }
}