<?php

namespace tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Livewire\Livewire;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrationTest extends TestCase
{
    /**
     * A basic feature test example.
     */

     use RefreshDatabase;

  public function test_registration_page_contains_livewire_components(){
    $this->get('/register')->assertSeeLivewire('auth.register');
  }

      public function test_can_register(){
        Livewire::test('auth.register')
        ->set('email','ajith@gmail.com')
        ->set('password','secret')
        ->set('passwordConfirmation','secret')
        ->call('register')
        ->assertRedirect('/');

        $this->assertTrue(User::whereEmail('ajith@gmail.com')->exists());
        $this->assertEquals('ajith@gmail.com',auth()->user()->email);
     }

     public function test_email_is_required(){
        Livewire::test('auth.register')
        ->set('email','')
        ->set('password','secret')
        ->set('passwordConfirmation','secret')
        ->call('register')
        ->assertHasErrors(['email'=>'required']);
     }

     public function test_email_is_valid_email(){
        Livewire::test('auth.register')
        ->set('email','asdsweewe')
        ->set('password','secret')
        ->set('passwordConfirmation','secret')
        ->call('register')
        ->assertHasErrors(['email'=>'email']);
     }

     public function test_email_hasnt_been_taken_alrady(){

        User::create([
            'email'=>'ajith@gmail.com',
            'name'=>'name',
            'password'=>Hash::make('password')
        ]);


        Livewire::test('auth.register')
        ->set('email','ajith@gmail.com')
        ->set('password','secret')
        ->set('passwordConfirmation','secret')
        ->call('register')
        ->assertHasErrors(['email'=>'unique']);
     }

     public function test_email_hasnt_allrady_been_taken_validation_message_as_user_type(){

      User::create([
          'email'=>'ajith1@gmail.com',
          'name'=>'name',
          'password'=>Hash::make('password')
      ]);


      Livewire::test('auth.register')
      ->set('email','ajith@gmail.com')
      ->assertHasNoErrors()
      ->set('email','ajith1@gmail.com')
      ->assertHasErrors();
   }

     public function test_password_is_required(){
        Livewire::test('auth.register')
        ->set('email','asdsweewe')
        ->set('password','')
        ->set('passwordConfirmation','secret')
        ->call('register')
        ->assertHasErrors(['password'=>'required']);
     }

     public function test_password_is_same(){
        Livewire::test('auth.register')
        ->set('email','asdsweewe')
        ->set('password','sdsas')
        ->set('passwordConfirmation','secret')
        ->call('register')
        ->assertHasErrors(['password'=>'same']);
     }

     public function test_password_min_six_charecters(){
        Livewire::test('auth.register')
        ->set('email','asdsweewe')
        ->set('password','123e')
        ->set('passwordConfirmation','secret')
        ->call('register')
        ->assertHasErrors(['password'=>'min']);
     }



}
