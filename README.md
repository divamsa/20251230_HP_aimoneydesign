# 株式会社マネーデザイン 生成AI導入支援サービス 公式Webサイト

## 📋 プロジェクト概要

生成AI導入支援サービス（中小企業、地方自治体、博物館、美術館など）の専用Webサイトです。

**URL**: https://ai.moneydesign.co.jp（予定）

**技術スタック**:
- **フレームワーク**: Laravel 12
- **PHP**: 8.2以上（推奨: 8.3）
- **データベース**: MySQL 8.0 / MariaDB
- **Webサーバー**: Nginx（開発環境）/ Apache（本番環境）
- **フロントエンド**: Bladeテンプレート、Vanilla CSS
- **認証**: Laravel Breeze（Blade）

---

## 🚀 ローカル環境でのセットアップ

### 前提条件

- Docker & Docker Compose
- Git

### セットアップ手順

1. **リポジトリのクローン**
   ```bash
   git clone https://github.com/divamsa/20251230_HP_aimoneydesign.git
   cd 20251230_HP_aimoneydesign
   ```

2. **環境変数の設定**
   ```bash
   cp .env.example .env
   # .envファイルを編集して設定を完了
   ```

3. **Dockerコンテナの起動**
   ```bash
   docker compose up -d
   ```

4. **Laravelのセットアップ**
   ```bash
   cd src
   composer install
   php artisan key:generate
   php artisan migrate
   php artisan storage:link
   ```

5. **アクセス**
   - Web: http://localhost:8080
   - データベース: localhost:3307

---

## 📁 プロジェクト構成

```
20251230_aiHP/
├── docker-compose.yml          # Docker Compose設定
├── .env                        # 環境変数（ローカル環境）
├── infra/                      # インフラ設定
│   ├── php/                   # PHP設定
│   ├── nginx/                 # Nginx設定
│   └── mysql/                 # MySQL設定
├── src/                        # Laravelプロジェクト
│   ├── app/                   # アプリケーションコード
│   ├── config/                # 設定ファイル
│   ├── database/              # マイグレーション、シーダー
│   ├── public/                # 公開ディレクトリ
│   ├── resources/             # ビュー、CSS、JS
│   ├── routes/               # ルーティング
│   └── storage/               # ストレージ
├── deploy.sh                   # デプロイスクリプト
├── PHASE5_DEPLOYMENT_GUIDE.md # デプロイ手順書
└── README.md                   # このファイル
```

---

## 🎯 主な機能

### 公開ページ
- **トップページ**: サービス紹介、実績数値、導入事例サマリー
- **サービス紹介**: 3つのサービスの詳細説明
- **導入事例**: 実績数値、導入事例一覧
- **会社情報**: 会社概要、代表メッセージ、経営理念
- **お問い合わせ**: 3つのフォーム（一般問い合わせ、資料請求、無料相談）
- **ブログ**: ブログ記事一覧・詳細、カテゴリフィルター、検索機能

### 管理画面
- **お問い合わせ管理**: 一覧、詳細、ステータス更新、CSVエクスポート
- **ブログ管理**: CRUD機能、画像アップロード、公開日時設定
- **カテゴリ管理**: CRUD機能

### SEO対策
- メタタグ、OGPタグ、Twitter Card
- 構造化データ（JSON-LD）
- サイトマップ（sitemap.xml）
- robots.txt

---

## 📚 ドキュメント

- [要件定義書](20251230_HP_aimoneydesign.md) - プロジェクトの詳細な要件定義
- [フェーズ4確認チェックリスト](PHASE4_CHECKLIST.md) - ローカル環境での確認項目
- [レスポンシブデザイン確認レポート](PHASE4_RESPONSIVE_CHECK_REPORT.md) - レスポンシブデザインの確認結果
- [デプロイ手順書](PHASE5_DEPLOYMENT_GUIDE.md) - X Serverへのデプロイ手順
- [X Server用.htaccess設定](XSERVER_HTACCESS.md) - X Server用の.htaccess設定

---

## 🔧 開発コマンド

### Dockerコンテナの操作

```bash
# コンテナの起動
docker compose up -d

# コンテナの停止
docker compose down

# コンテナの状態確認
docker compose ps

# ログの確認
docker compose logs -f
```

### Laravelコマンド

```bash
cd src

# マイグレーション
php artisan migrate

# シーダー実行
php artisan db:seed

# キャッシュのクリア
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# ストレージリンク
php artisan storage:link
```

---

## 🚀 デプロイ

### X Serverへのデプロイ

詳細な手順は [デプロイ手順書](PHASE5_DEPLOYMENT_GUIDE.md) を参照してください。

**簡単な手順**:

1. X Serverのサーバーパネルにログイン
2. PHPバージョンを8.2以上に設定
3. データベースを作成
4. SSH接続を有効化
5. Composerをインストール
6. サブドメイン（ai.moneydesign.co.jp）を設定
7. SSL証明書（Let's Encrypt）を設定
8. アプリケーションをデプロイ

**デプロイスクリプトの使用**:

```bash
# SSH接続後
cd ~/ai.moneydesign.co.jp/src
./deploy.sh
```

---

## 🔒 セキュリティ

- CSRF保護: すべてのフォームに`@csrf`が含まれています
- XSS対策: Bladeの自動エスケープが機能しています
- SQLインジェクション対策: Eloquent ORMを使用
- 認証・認可: 管理画面が`auth`と`admin`ミドルウェアで保護されています
- reCAPTCHA v3: お問い合わせフォームに実装されています

---

## 📝 開発フェーズ

### ✅ フェーズ1: ブログ機能の拡張
- カテゴリ機能の実装
- 検索機能の実装
- 画像アップロード機能の実装

### ✅ フェーズ2: お問い合わせ管理機能の拡張
- CSVエクスポート機能の実装
- 自動返信メール機能の実装
- メール送信先の設定機能の実装

### ✅ フェーズ3: その他の機能改善・追加
- ブログ記事のサムネイル画像機能の改善
- ブログ記事の公開日時設定の改善
- 管理画面のUI改善
- エラーメッセージ・成功メッセージの表示改善

### ✅ フェーズ4: ローカル環境での最終確認・テスト
- 全機能の動作確認
- レスポンシブデザインの確認
- セキュリティチェック
- パフォーマンス確認

### ⏳ フェーズ5: X Server環境の設定・デプロイ
- デプロイ手順書の作成 ✅
- X Server環境の設定 ⏳
- 本番環境へのデプロイ ⏳

---

## 📞 サポート

問題が発生した場合：
1. エラーログを確認: `src/storage/logs/laravel.log`
2. ドキュメントを確認
3. GitHubのIssuesで報告

---

## 📄 ライセンス

このプロジェクトは株式会社マネーデザインのプロジェクトです。

---

**作成日**: 2025年12月29日  
**最終更新**: 2025年1月1日

