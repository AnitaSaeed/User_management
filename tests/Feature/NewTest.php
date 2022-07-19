<?php

it('has new page', function () {
//    $response = $this->get('/');
//
//    $response->assertStatus(200);
    $this->withoutExceptionHandling();

    $response = $this->post('/user',[
        'name' => 'username',
        'last_name'=>'test',
        'national_number'=>'1234567890',
        'phone'=>'09197076969',
        'email'=>'a@a.a',
        'password'=>'123456'
    ]);

        $response->assertStatus(200);
    $response->assertOk();
    $this->assertCount(1, \App\Models\User::all());
});
