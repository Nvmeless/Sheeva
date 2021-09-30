apache2 vhost : 
```
<VirtualHost *:80>
        ServerAdmin jinn@orpheus.website
        ServerName lab.orpheus.local

        DocumentRoot /home/jinn/Documents/NSFW/lab/api/public

        <Directory /home/jinn/Documents/NSFW/lab/api/public>
                SetEnv H_ENV "dev"
                Options -Indexes
                AllowOverride All
                Order allow,deny
                Allow from all
                Require all granted
        </Directory>

        ErrorLog /var/log/apache2/apache_error_moodle.log
        CustomLog /var/log/apache2/apache_access_moodle.log combined
</VirtualHost>
```
sudo etc/hosts
```127.0.0.1       lab.orpheus.local```

