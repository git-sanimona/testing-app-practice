# testing-app-practice

## 概要

COACHTECH 教材 Tutorial 10-5「テスト ハンズオン演習」で作成した成果物です。
ユーザー作成機能のテスト(正常系と異常系)を作成

## 使用技術

- PHP 8.x
- Laravel 10.x
- PHPUnit（テスト）
- Eloquent / Factory
- GitHub

## 学んだこと

- RefreshDatabaseトレイトでテストごとにデータベースをリセット
- アサーションメソッドの使い方
- expectException()で例外の発生を確認

## 動作確認

テストを実行(コマンド：sail artisan test --filter UserTest)でパスするか確認
<img width="634" height="103" alt="Image" src="https://github.com/user-attachments/assets/64803825-c939-4da6-b373-27b42e47786e" />
