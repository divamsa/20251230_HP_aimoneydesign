# X Server用 .htaccess 設定

## プロジェクトルート用 .htaccess

X Serverのプロジェクトルート（`~/ai.moneydesign.co.jp/`）に配置する`.htaccess`ファイルです。
このファイルにより、プロジェクトルートに直接アクセスできないようにします。

```apache
# プロジェクトルートへの直接アクセスを拒否
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_URI} !^/src/public/
    RewriteRule ^(.*)$ /src/public/$1 [L]
</IfModule>

# ディレクトリ一覧表示を無効化
Options -Indexes

# .envファイルへのアクセスを拒否
<Files ".env">
    Order allow,deny
    Deny from all
</Files>
```

## public_html用 .htaccess

X Serverの`public_html`ディレクトリに配置する`.htaccess`ファイルです。
Laravelの`public`ディレクトリの`.htaccess`と同じ内容です。

```apache
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Handle X-XSRF-Token Header
    RewriteCond %{HTTP:x-xsrf-token} .
    RewriteRule .* - [E=HTTP_X_XSRF_TOKEN:%{HTTP:X-XSRF-Token}]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Send Requests To Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
```

## 設定方法

### 方法1: シンボリックリンクを使用（推奨）

```bash
# public_htmlディレクトリに移動
cd ~/ai.moneydesign.co.jp/public_html

# 既存のファイルを削除（ある場合）
rm -rf *

# Laravelのpublicディレクトリへのシンボリックリンクを作成
ln -s ../src/public/* .
ln -s ../src/public/.htaccess .
```

この方法では、Laravelの`public/.htaccess`がそのまま使用されます。

### 方法2: ドキュメントルートを変更

サーバーパネルで、ドキュメントルートを`/home/[ユーザー名]/ai.moneydesign.co.jp/src/public`に変更します。

この方法では、Laravelの`public/.htaccess`がそのまま使用されます。

### 方法3: public_htmlにコピー

```bash
# public_htmlディレクトリに移動
cd ~/ai.moneydesign.co.jp/public_html

# Laravelのpublicディレクトリの内容をコピー
cp -r ../src/public/* .
cp ../src/public/.htaccess .
```

この方法では、上記の`.htaccess`ファイルを使用します。

