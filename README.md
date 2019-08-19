# Grafana Generic OAuth
This is a simple example of Grafana Generic OAuth implementation and auto login to Grafana dashboard from your application using PHP.

## Getting Started

### Step 1:
Clone this repository `git clone https://github.com/nbayramberdiyev/grafana-generic-oauth.git`.

I assumed that `src` is your project's root directory and auth files are located at `http://foo.bar/oauth/` as you'll see in the next step.

### Step 2:
Edit Grafana configuration file that is located at `/etc/grafana/grafana.ini` on Ubuntu / Debian, `/usr/local/etc/grafana/grafana.ini` on MAC, `<GRAFANA_PROJECT_FOLDER>/conf/custom.ini` on Windows.

Uncomment these lines and enter your `client_id`, `client_secret`, `auth_url`, `token_url`, `api_url`:
```
#################################### Generic OAuth ##########################
[auth.generic_oauth]
;enabled = true
;name = OAuth
;allow_sign_up = false
;client_id = some_id
;client_secret = some_secret
;scopes = user:email,read:org
;auth_url =
;token_url =
;api_url =
```
Like so:
```
#################################### Generic OAuth ##########################
[auth.generic_oauth]
enabled = true
name = OAuth
allow_sign_up = false
client_id = YOUR_APP_CLIENT_ID
client_secret = YOUR_APP_CLIENT_SECRET
scopes = user:email,read:org
auth_url = http://foo.bar/oauth/auth.php
token_url = http://foo.bar/oauth/token.php
api_url = http://foo.bar/oauth/user.php
```

### Step 3 (Optional):
The "Sign in with OAuth" button will appear in Grafana login page.

If you want users login automatically, you'll need to place `custom.js` in `/usr/share/grafana/public/build/index.html` (Ubuntu / Debian) at the bottom of `<body>` tag.

You can now put a link to Grafana in your application which provides the ability to pass a user from your dashboard across to Grafana. 

### Step 4:
Restart Grafana server.
- `sudo service grafana-server restart` (Ubuntu / Debian)
- `brew services restart grafana` (MAC)

If I can be of assistance, please do not hesitate to contact me.