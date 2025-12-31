#!/bin/bash

# X Server用デプロイスクリプト
# 使用方法: ./deploy.sh

set -e

echo "=========================================="
echo "Laravel 12 デプロイスクリプト"
echo "=========================================="
echo ""

# カラー出力
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# エラーハンドリング
error_exit() {
    echo -e "${RED}エラー: $1${NC}" >&2
    exit 1
}

# 成功メッセージ
success_msg() {
    echo -e "${GREEN}✓ $1${NC}"
}

# 警告メッセージ
warning_msg() {
    echo -e "${YELLOW}⚠ $1${NC}"
}

# プロジェクトディレクトリの確認
if [ ! -d "src" ]; then
    error_exit "srcディレクトリが見つかりません。プロジェクトルートで実行してください。"
fi

cd src || error_exit "srcディレクトリに移動できませんでした。"

# 1. Gitの最新コードを取得
echo "1. Gitの最新コードを取得中..."
if [ -d ".git" ]; then
    git pull origin main || warning_msg "Git pullに失敗しました。手動で確認してください。"
    success_msg "Gitの最新コードを取得しました"
else
    warning_msg ".gitディレクトリが見つかりません。Gitリポジトリではない可能性があります。"
fi

# 2. Composerで依存関係をインストール
echo ""
echo "2. Composerで依存関係をインストール中..."
if command -v composer &> /dev/null; then
    composer install --no-dev --optimize-autoloader || error_exit "Composer installに失敗しました。"
    success_msg "Composerで依存関係をインストールしました"
else
    error_exit "Composerが見つかりません。Composerをインストールしてください。"
fi

# 3. .envファイルの確認
echo ""
echo "3. .envファイルを確認中..."
if [ ! -f ".env" ]; then
    if [ -f ".env.example" ]; then
        warning_msg ".envファイルが見つかりません。.env.exampleからコピーしてください。"
        echo "   cp .env.example .env"
        echo "   その後、.envファイルを編集して設定を完了してください。"
    else
        error_exit ".envファイルと.env.exampleファイルの両方が見つかりません。"
    fi
else
    success_msg ".envファイルが見つかりました"
fi

# 4. アプリケーションキーの確認
echo ""
echo "4. アプリケーションキーを確認中..."
if ! grep -q "APP_KEY=base64:" .env 2>/dev/null; then
    warning_msg "APP_KEYが設定されていません。生成してください。"
    echo "   php artisan key:generate"
else
    success_msg "APP_KEYが設定されています"
fi

# 5. ストレージリンクの作成
echo ""
echo "5. ストレージリンクを作成中..."
if [ ! -L "public/storage" ]; then
    php artisan storage:link || warning_msg "ストレージリンクの作成に失敗しました。"
    success_msg "ストレージリンクを作成しました"
else
    success_msg "ストレージリンクは既に存在します"
fi

# 6. ディレクトリの権限設定
echo ""
echo "6. ディレクトリの権限を設定中..."
chmod -R 775 storage bootstrap/cache || warning_msg "権限設定に失敗しました。"
success_msg "ディレクトリの権限を設定しました"

# 7. データベースマイグレーション
echo ""
echo "7. データベースマイグレーションを実行中..."
read -p "データベースマイグレーションを実行しますか？ (y/N): " -n 1 -r
echo ""
if [[ $REPLY =~ ^[Yy]$ ]]; then
    php artisan migrate --force || warning_msg "マイグレーションに失敗しました。"
    success_msg "データベースマイグレーションを実行しました"
else
    warning_msg "データベースマイグレーションをスキップしました"
fi

# 8. キャッシュのクリア
echo ""
echo "8. キャッシュをクリア中..."
php artisan config:clear || warning_msg "設定キャッシュのクリアに失敗しました。"
php artisan cache:clear || warning_msg "アプリケーションキャッシュのクリアに失敗しました。"
php artisan route:clear || warning_msg "ルートキャッシュのクリアに失敗しました。"
php artisan view:clear || warning_msg "ビューキャッシュのクリアに失敗しました。"
success_msg "キャッシュをクリアしました"

# 9. 本番環境用の最適化
echo ""
echo "9. 本番環境用の最適化を実行中..."
read -p "本番環境用の最適化を実行しますか？ (y/N): " -n 1 -r
echo ""
if [[ $REPLY =~ ^[Yy]$ ]]; then
    php artisan config:cache || warning_msg "設定キャッシュの作成に失敗しました。"
    php artisan route:cache || warning_msg "ルートキャッシュの作成に失敗しました。"
    php artisan view:cache || warning_msg "ビューキャッシュの作成に失敗しました。"
    success_msg "本番環境用の最適化を実行しました"
else
    warning_msg "本番環境用の最適化をスキップしました"
fi

# 10. 完了メッセージ
echo ""
echo "=========================================="
echo -e "${GREEN}デプロイが完了しました！${NC}"
echo "=========================================="
echo ""
echo "次のステップ:"
echo "1. ブラウザで https://ai.moneydesign.co.jp にアクセス"
echo "2. 各ページが正常に表示されることを確認"
echo "3. フォーム送信が正常に動作することを確認"
echo "4. 管理画面にアクセスできることを確認"
echo ""

