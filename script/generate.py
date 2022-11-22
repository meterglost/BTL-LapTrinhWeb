import secrets

try:
    with open('../.env', 'xt') as f:
        env = {
            "COMPOSE_PROJECT_NAME": "BTL-LAPTRINHWEB",

            "TZ": "Asia/Ho_Chi_Minh",

            "MYSQL_DATABASE": "mysql",
            "MYSQL_RANDOM_ROOT_PASSWORD": "true",
            "MYSQL_USER": "admin",
            "MYSQL_PASSWORD": secrets.token_urlsafe(16),
        }
        for key in env.keys():
            f.write(key + '=' + env[key] + '\n')
except:
    print('.env file existed!')
