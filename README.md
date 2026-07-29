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
