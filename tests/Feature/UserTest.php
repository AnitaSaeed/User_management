<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
//    public function a_user_can_be_added()
//    {
//        $this->withoutExceptionHandling();
//        $response = $this->post('/user',[
//            'name' => 'username',
//            'last_name'=>'test',
//            'national_number'=>'1234567890',
//            'phone'=>'09197076969',
//            'email'=>'a@a.a',
//            'password'=>'123456'
//        ]);
//
////        $response->assertStatus(200);
//        $response->assertOk();
//        $this->assertCount(1, User::all());
//    }

    public function a_user_can_be_updated(){
        $this->withoutExceptionHandling();

        $this->post('/user',[
            'name' => 'username',
            'last_name'=>'test',
            'national_number'=>'1234567890',
            'phone'=>'09197076969',
            'email'=>'a@a.a',
            'password'=>'123456'
        ]);
        $this->assertCount(1, User::all());
        $user= User::first();

         $this->patch('/user/'.$user->id,[
             'last_name'=>'test',
             'name' => 'anita',
             'national_number'=>'1234567890',
             'phone'=>'09197076969',
             'email'=>'a@a.a',
             'password'=>'123456'
        ]);

        $this->assertEquals('anita', User::first()->name);
    }
}
