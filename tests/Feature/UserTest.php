<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    //テスト１(正常系)
    public function test_can_create(): void
    {
        //ユーザーの作成
        $user = User::factory()->create();

        //データベースにユーザーのデータが保存されているか確認
        $this->assertDatabaseHas('users', [
            'name' => $user->name,
            'email' => $user->email,
            //パスワードは除外(テストでパスワードの値は確認しない)
        ]);
    }

    //テスト２(異常系)
    public function test_redundant_email(): void
    {
        //ユーザーの作成
        $user = User::factory()->create();

        //データベースでの例外が発生するのを期待
        $this->expectException(\Illuminate\Database\QueryException::class);

        //同じメールアドレスのユーザーを作成
        User::create([
            'name' => 'emailテストユーザー',
            'email' => $user->email,
        ]);
    }
}
44
