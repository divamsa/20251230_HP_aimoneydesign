# フェーズ5: X Server環境の設定・デプロイ手順書

## 📋 概要

このドキュメントは、Laravel 12アプリケーションをX Serverにデプロイするための手順書です。

**対象環境**:
- **サーバー**: X Server
- **サブドメイン**: ai.moneydesign.co.jp
- **フレームワーク**: Laravel 12
- **PHPバージョン**: 8.2以上（推奨: 8.3）

---

## 🔧 事前準備

### 1. 必要な情報の確認

以下の情報を準備してください：

- [ ] X Serverのサーバーパネルへのログイン情報
- [ ] ドメイン管理権限（moneydesign.co.jp）
- [ ] SSH接続情報（ホスト名、ユーザー名、ポート番号）
- [ ] データベース作成権限

### 2. ローカル環境での確認

デプロイ前に、以下を確認してください：

- [x] フェーズ4の確認が完了している
- [x] Gitリポジトリに最新のコードがプッシュされている
- [x] `.env.example`ファイルが存在する
- [x] `storage`と`bootstrap/cache`ディレクトリが書き込み可能である

---

## 📝 デプロイ手順

### ステップ1: X Serverのサーバーパネルにログイン

1. X Serverのサーバーパネルにアクセス
   - URL: https://www.xserver.ne.jp/
   - サーバーパネルにログイン

2. サーバーパネルの確認
   - サーバー情報を確認
   - 利用可能な機能を確認

---

### ステップ2: PHPバージョンの設定

1. **サーバーパネルでPHPバージョンを確認・設定**
   - 「PHP設定」または「PHPバージョン設定」に移動
   - PHP 8.2以上（推奨: 8.3）を選択
   - 設定を保存

2. **PHP拡張機能の確認**
   - 以下の拡張機能が有効になっているか確認：
     - `pdo_mysql`
     - `mbstring`
     - `openssl`
     - `fileinfo`
     - `gd`（画像処理用）
     - `zip`（Composer用）

---

### ステップ3: データベースの作成

1. **データベースの作成**
   - サーバーパネルの「データベース設定」に移動
   - 「MySQLデータベース作成」を選択
   - データベース名を入力（例: `aimoneydesign_db`）
   - 文字コード: `utf8mb4`
   - 作成を実行

2. **データベースユーザーの作成**
   - 「MySQLユーザー作成」を選択
   - ユーザー名とパスワードを設定
   - 作成したデータベースにユーザーを割り当て
   - 権限: すべての権限を付与

3. **接続情報のメモ**
   - データベース名: `_________________`
   - ユーザー名: `_________________`
   - パスワード: `_________________`
   - ホスト名: `_________________`（通常は`localhost`）

---

### ステップ4: SSH接続の有効化

1. **SSH接続の設定**
   - サーバーパネルの「SSH設定」に移動
   - SSH接続を有効化
   - ポート番号を確認（通常は22）

2. **SSH接続情報の確認**
   - ホスト名: `_________________`
   - ポート番号: `_________________`
   - ユーザー名: `_________________`

3. **SSH接続のテスト**
   ```bash
   ssh -p [ポート番号] [ユーザー名]@[ホスト名]
   ```

---

### ステップ5: Composerのインストール

1. **SSH接続後、Composerをインストール**
   ```bash
   cd ~
   curl -sS https://getcomposer.org/installer | php
   mv composer.phar /usr/local/bin/composer
   chmod +x /usr/local/bin/composer
   ```

2. **Composerのバージョン確認**
   ```bash
   composer --version
   ```

3. **Composerが既にインストールされている場合**
   - 既存のComposerを使用
   - パスを確認: `which composer`

---

### ステップ6: サブドメイン（ai.moneydesign.co.jp）の設定

1. **ドメイン設定**
   - サーバーパネルの「ドメイン設定」に移動
   - 「サブドメイン設定」を選択
   - サブドメイン名: `ai`
   - 親ドメイン: `moneydesign.co.jp`
   - ドキュメントルート: `/home/[ユーザー名]/[サブドメイン名].moneydesign.co.jp/public_html`
   - 設定を保存

2. **ドキュメントルートの確認**
   - ドキュメントルート: `_________________`
   - 実際のアプリケーションは`public`ディレクトリを指す必要があります

3. **注意事項**
   - X Serverでは、通常`public_html`がドキュメントルートになります
   - Laravelの`public`ディレクトリを`public_html`にシンボリックリンクまたはコピーする必要があります

---

### ステップ7: SSL証明書（Let's Encrypt）の設定

1. **SSL証明書の設定**
   - サーバーパネルの「SSL設定」に移動
   - 「Let's Encrypt SSL証明書の設定」を選択
   - 対象ドメイン: `ai.moneydesign.co.jp`
   - 設定を実行

2. **SSL証明書の有効化確認**
   - 数分待ってから、`https://ai.moneydesign.co.jp`にアクセス
   - ブラウザのアドレスバーに鍵マークが表示されることを確認

---

### ステップ8: アプリケーションのデプロイ

#### 8.1. プロジェクトディレクトリの作成

```bash
# SSH接続後
cd ~
mkdir -p ai.moneydesign.co.jp
cd ai.moneydesign.co.jp
```

#### 8.2. Gitリポジトリのクローン

```bash
# GitHubリポジトリをクローン
git clone https://github.com/divamsa/20251230_HP_aimoneydesign.git .

# または、既存のリポジトリからプル
git pull origin main
```

#### 8.3. プロジェクトのセットアップ

```bash
# srcディレクトリに移動
cd src

# Composerで依存関係をインストール
composer install --no-dev --optimize-autoloader

# .envファイルの作成
cp .env.example .env

# .envファイルを編集（後述）
nano .env
```

#### 8.4. .envファイルの設定

`.env`ファイルを以下のように設定してください：

```env
APP_NAME="生成AI導入支援サービス"
APP_ENV=production
APP_KEY=
APP_DEBUG=false
APP_TIMEZONE=Asia/Tokyo
APP_URL=https://ai.moneydesign.co.jp

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=error

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=[データベース名]
DB_USERNAME=[データベースユーザー名]
DB_PASSWORD=[データベースパスワード]

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=null

CACHE_STORE=database
CACHE_PREFIX=

MEMCACHED_HOST=127.0.0.1

REDIS_CLIENT=phpredis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=[SMTPサーバー]
MAIL_PORT=587
MAIL_USERNAME=[SMTPユーザー名]
MAIL_PASSWORD=[SMTPパスワード]
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@moneydesign.co.jp
MAIL_FROM_NAME="${APP_NAME}"

# reCAPTCHA v3
RECAPTCHA_SITE_KEY=[reCAPTCHAサイトキー]
RECAPTCHA_SECRET_KEY=[reCAPTCHAシークレットキー]

# Google Analytics 4
GA4_MEASUREMENT_ID=[GA4測定ID]

# 管理者メールアドレス（カンマ区切り）
ADMIN_EMAILS=[管理者メールアドレス]

# お問い合わせメール送信先（カンマ区切り）
CONTACT_EMAILS=[お問い合わせメール送信先]
```

#### 8.5. アプリケーションキーの生成

```bash
php artisan key:generate
```

#### 8.6. ストレージリンクの作成

```bash
# storage/app/publicへのシンボリックリンクを作成
php artisan storage:link
```

#### 8.7. ディレクトリの権限設定

```bash
# storageとbootstrap/cacheディレクトリに書き込み権限を付与
chmod -R 775 storage bootstrap/cache
chown -R [ユーザー名]:[グループ名] storage bootstrap/cache
```

#### 8.8. データベースマイグレーション

```bash
# データベースマイグレーションを実行
php artisan migrate --force
```

#### 8.9. キャッシュのクリアと最適化

```bash
# 設定キャッシュのクリア
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# 本番環境用の最適化
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

#### 8.10. ドキュメントルートの設定

X Serverでは、通常`public_html`がドキュメントルートになります。

**方法1: シンボリックリンクを使用（推奨）**

```bash
# public_htmlディレクトリに移動
cd ~
cd ai.moneydesign.co.jp/public_html

# 既存のファイルを削除（ある場合）
rm -rf *

# Laravelのpublicディレクトリへのシンボリックリンクを作成
ln -s ../src/public/* .
ln -s ../src/public/.htaccess .
```

**方法2: .htaccessでリダイレクト**

`public_html`ディレクトリに`.htaccess`ファイルを作成：

```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_URI} !^/src/public/
    RewriteRule ^(.*)$ /src/public/$1 [L]
</IfModule>
```

**方法3: ドキュメントルートを変更**

サーバーパネルで、ドキュメントルートを`/home/[ユーザー名]/ai.moneydesign.co.jp/src/public`に変更

---

### ステップ9: 本番環境での動作確認

1. **ブラウザでアクセス**
   - `https://ai.moneydesign.co.jp`にアクセス
   - トップページが表示されることを確認

2. **各ページの確認**
   - [ ] トップページ (`/`)
   - [ ] サービスページ (`/services`)
   - [ ] 導入事例ページ (`/cases`)
   - [ ] 会社情報ページ (`/about`)
   - [ ] お問い合わせページ (`/contact`)
   - [ ] ブログページ (`/blog`)

3. **管理画面の確認**
   - [ ] ログインページ (`/login`)
   - [ ] 管理画面 (`/admin/contacts`)
   - [ ] ブログ管理 (`/admin/posts`)
   - [ ] カテゴリ管理 (`/admin/categories`)

4. **フォーム送信の確認**
   - [ ] 一般問い合わせフォーム
   - [ ] 資料請求フォーム
   - [ ] 無料相談フォーム

5. **メール送信の確認**
   - [ ] 管理者への通知メール
   - [ ] お客様への自動返信メール

---

## 🔒 セキュリティ設定

### 1. .envファイルの保護

```bash
# .envファイルの権限を制限
chmod 600 .env
```

### 2. ディレクトリの保護

```bash
# プロジェクトルートの.htaccessを作成
# プロジェクトルートに直接アクセスできないようにする
```

### 3. ログファイルの確認

```bash
# エラーログを確認
tail -f storage/logs/laravel.log
```

---

## 🐛 トラブルシューティング

### 問題1: 500エラーが表示される

**原因**: 権限の問題、.envファイルの設定ミス、PHPエラーなど

**解決方法**:
1. ログファイルを確認: `tail -f storage/logs/laravel.log`
2. ディレクトリの権限を確認: `ls -la storage bootstrap/cache`
3. .envファイルの設定を確認
4. PHPエラーを確認: `php artisan config:clear`

### 問題2: データベース接続エラー

**原因**: データベース設定のミス

**解決方法**:
1. .envファイルのデータベース設定を確認
2. データベースユーザーの権限を確認
3. データベースが作成されているか確認

### 問題3: 画像が表示されない

**原因**: storage/app/publicへのシンボリックリンクが作成されていない

**解決方法**:
```bash
php artisan storage:link
```

### 問題4: CSS/JSが読み込まれない

**原因**: ドキュメントルートの設定ミス

**解決方法**:
1. ドキュメントルートが`public`ディレクトリを指しているか確認
2. シンボリックリンクが正しく作成されているか確認

---

## 📋 デプロイ後のチェックリスト

- [ ] すべてのページが正常に表示される
- [ ] SSL証明書が有効になっている（https://）
- [ ] フォーム送信が正常に動作する
- [ ] メール送信が正常に動作する
- [ ] 管理画面にアクセスできる
- [ ] 画像が正常に表示される
- [ ] レスポンシブデザインが正常に動作する
- [ ] エラーログにエラーがない

---

## 🔄 今後の更新手順

### コードの更新

```bash
# SSH接続後
cd ~/ai.moneydesign.co.jp/src

# 最新のコードを取得
git pull origin main

# 依存関係の更新
composer install --no-dev --optimize-autoloader

# データベースマイグレーション（必要に応じて）
php artisan migrate --force

# キャッシュのクリアと最適化
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---

## 📞 サポート

問題が発生した場合：
1. エラーログを確認: `storage/logs/laravel.log`
2. X Serverのサポートに問い合わせ
3. Laravelの公式ドキュメントを参照

---

**作成日**: 2025年1月1日  
**最終更新**: 2025年1月1日

