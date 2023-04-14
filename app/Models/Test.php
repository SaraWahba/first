<?php

namespace App\Models;

class Test{

  public static  function all(){
       
            $users=[
              [
                'id'=>1,
                'name'=>'Sara',
                'mobile'=>'637248900',
                'city'=>'Egypt',
                'email'=>'sara@gmail.com',
              ],
              [
                'id'=>2,
                'name'=>'Ahmed',
                'mobile'=>'637248900',
                'city'=>'Cairo',
                'email'=>'ahmed@gmail.com',
              ]
          ];
          return $users;
    }


    public static function find($id){
        $students = self::all();

        foreach($students as $student){
        if($id == $student['id']){
             return  $student;
        }
      }
    }
}
?>